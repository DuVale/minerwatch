<?php
//set content-type header
header('Content-type: application/json');

//connection information
#$host = "localhost";
#$user = "backupreport";
#$password = "";
#$database = "backupreport";

define('BASEPATH', 'system/');
include("/home/themattreid/dbbenchmark.com/db/system/application/config/database.php");
include("/home/themattreid/dbbenchmark.com/db/system/application/config/config.php");
$root = $config['base_url'];
$host = $db['read']['hostname'];
$user = $db['read']['username'];
$password= $db['read']['password'];
$database = $db['read']['database'];
$nroot = substr_replace($root,"",-1);

//get sort paramters if present
$sort = ($_REQUEST["sort"] == null) ? "" : $_REQUEST["sort"]." ".$_REQUEST["dir"];
 
//get start and limit if present
$start = ($_REQUEST["start"] == null)? 0 : $_REQUEST["start"];
$count = ($_REQUEST["limit"] == null)? 20 : $_REQUEST["limit"];
 
//make connection
$server = mysql_connect($host, $user, $password) or die("Could not connect");
$connection = mysql_select_db($database, $server) or die("Could not select database");
 
//build query
$query = "select * from data";
 
//add sort direction if not empty
if ($sort != "") {
  $query.= " ORDER BY ".$sort;
 }
 
//add start and limit
$query.= " LIMIT ".$start.",".$count;

//query database
$result = mysql_query($query);

//get total
$total = mysql_query("SELECT COUNT(id) FROM data");
$total = mysql_result($total, 0);
 
//create json data structure
$startJsonObject = "{ \"total\": $total, \"devices\": [";
$endJsonObject = "]}";

$data=''; 
//build json object with stuff from db
for ($x = 0; $x < mysql_num_rows($result); $x++) {
  $row = mysql_fetch_assoc($result);
  $id = $row['id'];
  $MYSQL_VERSION = $row['MYSQL_VERSION'];
  $MYSQL_INNODB_BUFFER_POOL_SIZE = $row['MYSQL_INNODB_BUFFER_POOL_SIZE'];
  $MYSQL_SYNC_BINLOG = $row['MYSQL_SYNC_BINLOG'];
  $MYSQL_TX_ISOLATION = $row['MYSQL_TX_ISOLATION'];
  $CPU_MODEL = $row['CPU_MODEL'];
  $CPU_QUANT = $row['CPU_QUANT'];
  $CPU_SPEED = $row['CPU_SPEED'];
  $MEMORY_TOTAL_BYTES = $row['MEMORY_TOTAL_BYTES'];
  $MEMORY_FREE_BYTES = $row['MEMORY_FREE_BYTES'];
  $MEMORY_CACHED_BYTES = $row['MEMORY_CACHED_BYTES'];
  $MEMORY_ACTIVE_BYTES = $row['MEMORY_ACTIVE_BYTES'];
  $SWAP_TOTAL_BYTES = $row['SWAP_TOTAL_BYTES'];
  $SWAP_FREE_BYTES = $row['SWAP_FREE_BYTES'];
  $SYSTEM_OS = $row['SYSTEM_OS'];
  $SYSTEM_KERNEL = $row['SYSTEM_KERNEL'];
  $SYSTEM_ARCH = $row['SYSTEM_ARCH'];
  $INSERT_OLTP_YES = $row['INSERT_OLTP_YES'];
  $INSERT_OLTP_NO = $row['INSERT_OLTP_NO'];
  $SELECT_INDEX_YES_SEQ = $row['SELECT_INDEX_YES_SEQ'];
  $SELECT_INDEX_YES_RAND = $row['SELECT_INDEX_YES_RAND'];
  $SELECT_INDEX_NO_SEQ = $row['SELECT_INDEX_NO_SEQ'];
  $SELECT_INDEX_NO_RAND = $row['SELECT_INDEX_NO_RAND'];
  $md5 = $row['md5'];
  $creation_time = $row['creation_time'];
  $data.= "{\"id\":\"$id\",
\"LINK\":\"<a href='$nroot/index.php/main/show/$md5' target='_blank'>click</a>\",
\"MYSQL_VERSION\":\"$MYSQL_VERSION\",
\"MYSQL_INNODB_BUFFER_POOL_SIZE\":\"$MYSQL_INNODB_BUFFER_POOL_SIZE\",
\"MYSQL_SYNC_BINLOG\":\"$MYSQL_SYNC_BINLOG\",
\"MYSQL_TX_ISOLATION\":\"$MYSQL_TX_ISOLATION\",
\"CPU_MODEL\":\"$CPU_MODEL\",
\"CPU_SPEED\":\"$CPU_SPEED\",
\"CPU_QUANT\":\"$CPU_QUANT\",
\"MEMORY_TOTAL_BYTES\":\"$MEMORY_TOTAL_BYTES\",
\"MEMORY_FREE_BYTES\":\"$MEMORY_FREE_BYTES\",
\"MEMORY_CACHED_BYTES\":\"$MEMORY_CACHED_BYTES\",
\"MEMORY_ACTIVE_BYTES\":\"$MEMORY_ACTIVE_BYTES\",
\"SWAP_TOTAL_BYTES\":\"$SWAP_TOTAL_BYTES\",
\"SWAP_FREE_BYTES\":\"$SWAP_FREE_BYTES\",
\"SYSTEM_OS\":\"$SYSTEM_OS\",
\"SYSTEM_KERNEL\":\"$SYSTEM_KERNEL\",
\"SYSTEM_ARCH\":\"$SYSTEM_ARCH\",
\"INSERT_OLTP_YES\":\"$INSERT_OLTP_YES /sec\",
\"INSERT_OLTP_NO\":\"$INSERT_OLTP_NO /sec\",
\"SELECT_INDEX_YES_SEQ\":\"$SELECT_INDEX_YES_SEQ /sec\",
\"SELECT_INDEX_YES_RAND\":\"$SELECT_INDEX_YES_RAND /sec\",
\"SELECT_INDEX_NO_SEQ\":\"$SELECT_INDEX_NO_SEQ /sec\",
\"SELECT_INDEX_NO_RAND\":\"$SELECT_INDEX_NO_RAND /sec\",
\"creation_time\":\"$creation_time\"},";
 }
//remove comma from final object in array
$noFinalComma = substr_replace($data, "", -1);
 
//output complete json object
echo $startJsonObject . $noFinalComma . $endJsonObject;

//close server connection
mysql_close($server);
 
?>
