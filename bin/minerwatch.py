#!/usr/bin/python
import MySQLdb
import simplejson
import datetime
import logging
import urllib2
import urlparse
import getopt
import sys
import unicodedata
from ConfigParser import ConfigParser
from optparse import OptionParser

def db_connect(host,user,passwd,db):
    try:
        db = MySQLdb.connect(
            host = host,
            user = user,
            passwd = passwd,
            port = 3306,
            db = db)
    except MySQLdb.Error, e:
        print "Error %d: %s" % (e.args[0], e.args[1])
        return False    
    return db

def db_execute(db,query):
    cursor = db.cursor()
    try:
        res = cursor.execute(query)
    except MySQLdb.Error, e:
        print "Error %d: %s" % (e.args[0], e.args[1])
        return False
    cursor.close()
    db.commit()
    if res == False:
        res = True
    return res
    
def db_row(db,query):
    c = db.cursor(MySQLdb.cursors.DictCursor)        
    try:
        c.execute(query)
    except MySQLdb.Error, e:
        print "Error %d: %s" % (e.args[0], e.args[1])
        return False
    row = c.fetchone()
    c.close()
    return row
    
def db_rows(db,query):
    c = db.cursor(MySQLdb.cursors.DictCursor)
    try:
        c.execute(query)
    except MySQLdb.Error, e:
        print "Error %d: %s" % (e.args[0], e.args[1])
        return False
    rows = c.fetchall()
    c.close()
    return rows

def header():
    print "MinerWatch - ver 0.0.1"
    print "http://themattreid.com"
    print "License: BSD"

def parse_options():
    usage = "usage: "
    parser = OptionParser(usage=usage)
    parser.add_option("--logfile", dest="debug_log", default="minerwatch.log", help="Logfile to write debug info to.")
    parser.add_option("--conf-file", dest="conf_file", default="minerwatch.conf", help="Configuration file to use. Default: minerwatch.conf")
    #parser.add_option("", dest="", default="", help="")
    
    return parser.parse_args()

def getconf():    
    try:
        config = ConfigParser()
        config.read([options.conf_file])
        c = 'minerwatch configuration'
        mysql_host = str(config.get(c,"mysql-host"))
        mysql_port = int(config.get(c,"mysql-port"))
        mysql_user = str(config.get(c,"mysql-user"))
        mysql_password = str(config.get(c,"mysql-password"))
        mysql_db = str(config.get(c,"mysql-db"))
        return mysql_host,mysql_port,mysql_user,mysql_password,mysql_db
    except:
        print "Failed to open conf file: %s"%(conf_file)
        sys.exit(1)

def getJSON(link):
    req = urllib2.Request(link)
    opener = urllib2.build_opener()
    f = opener.open(req)
    content = simplejson.load(f)
    return content

def sqlrecord(user,dict):
    if pool == "btcguild":
        print user
        print dict
        print "--"

    if pool == "slush":
        sql0 = "DELETE FROM slush_pool_results WHERE api_key='%s' AND worker_name='%s'"%(api,dict["worker_name"])
        sql1 = "INSERT INTO slush_pool_results (id,user_id,api_key,username,unconfirmed_reward,send_threshold,confirmed_reward,worker_name,last_share,score,alive,shares,hashrate,creation_time) VALUES (NULL,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s',NOW())"%(
            user_id,
            api,
            user["username"],
            user["unconfirmed_reward"],
            user["send_threshold"],
            user["confirmed_reward"],
            dict["worker_name"],
            dict["last_share"],
            dict["score"],
            dict["alive"],
            dict["shares"],
            dict["hashrate"]
            )

        sql2 = "INSERT INTO slush_pool_results_archive (id,user_id,api_key,username,unconfirmed_reward,send_threshold,confirmed_reward,worker_name,last_share,score,alive,shares,hashrate,creation_time) VALUES (NULL,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s',NOW())"%(
            user_id,
            api,
            user["username"],
            user["unconfirmed_reward"],
            user["send_threshold"],
            user["confirmed_reward"],
            dict["worker_name"],
            dict["last_share"],
            dict["score"],
            dict["alive"],
            dict["shares"],
            dict["hashrate"]
            )
                
        res0 = db_execute(db,sql0)
        res1 = db_execute(db,sql1)
        res2 = db_execute(db,sql2)
        if res0 == False or res1 == False or res2 == False:
            print "Failed to execute SQL"
            sys.exit(1)
        else:
            return True

def poll(api,user_id,pool):        
    dict = {}
    user = {}
    if pool == "btcguild":
        print "JSON PARSING IS RETARDED... NOT WORKING."
        return

        url = "https://www.btcguild.com/api.php?api_key=%s"%(api)
        print url
        content=getJSON(url)
        for k,v in content.items():
            if k == "user":
                for a,b in v.items():
                    for i in ["confirmed_rewards","unconfirmed_rewards","estimated_rewards","payouts"]:
                        if a == i:
                            user[i] = b

            if k == "workers":
                for a,b in v.items():
                    for c,d in b.items():
                        for i in ["worker_name","hash_rate","round_shares","round_stales","reset_shares","reset_stales","total_shares","total_stales","last_share","blocks_found"]:
                            if c == i:
                                dict[i] = d
                    sqlrecord(user,dict)
                    dict={}

                
    if pool == "slush":
        url = "https://mining.bitcoin.cz/accounts/profile/json/%s"%(api)
        print url
        content=getJSON(url)
        for k,v in content.items():
            for i in ["username","unconfirmed_reward","send_threshold","confirmed_reward"]:
                if k == i:
                    user[i]=v.encode('ascii','ignore')

            if k == "workers":
                for a,b in v.items():
                    dict["worker_name"] = a.encode('ascii','ignore') #worker name
                    dict["last_share"]=b["last_share"]
                    dict["score"]=b["score"].encode('ascii','ignore')
                    dict["hashrate"]=b["hashrate"]
                    dict["shares"]=b["shares"]
                    dict["alive"]=b["alive"]
                    sqlrecord(user,dict)
                    dict = {}

def main():
    sql = "SELECT id,user_id,api_key,pool_type,enabled,creation_time FROM api_keys where enabled='0' order by id"
    rows = db_rows(db,sql)
    if rows == False:
        print "Failed to get API keys from api_keys table."
        sys.exit(1)
    else:
        for row in rows:
            global user_id
            global api
            global pool
            user_id=row["user_id"]
            api=row["api_key"]            
            pool=row["pool_type"]
            res = poll(api,user_id,pool)
            if res == False:
                print "Poll process failed for api: %s"%(api)
            else:
                print "Poll process successful for api: %s"%(api)
    
if __name__ == "__main__":
    header()
    reuse_conn = True    
    (options, args) = parse_options()

    user_id = ""
    pool = ""
    api = ""

    #create log instance
    log = logging.getLogger()
    log.setLevel(logging.DEBUG)
    formatter = logging.Formatter("%(asctime)s - %(levelname)s - %(message)s")

    # debug console output
    c = logging.StreamHandler(sys.stdout)
    c.setLevel(logging.DEBUG)
    c.setFormatter(formatter)

    # debug logfile
    f = logging.FileHandler(options.debug_log)
    f.setLevel(logging.DEBUG)
    f.setFormatter(formatter)

    log.addHandler(c)
    log.addHandler(f)
    #end log creation
    
    mysql_host,mysql_port,mysql_user,mysql_password,mysql_db = getconf()
    db = db_connect(mysql_host,mysql_user,mysql_password,mysql_db)
    if db == False:
        sys.exit(1)

    main()
