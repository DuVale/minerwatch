<?php
  // this function takes the command line args to gather user,host,db,pass from the database config file 
  // so that the bin/ files can connect to the databases(s) - this function gets rid of the old config.cfg file
function tell($d,$v) {
  define('BASEPATH', "system/");
  include("database.php");
  echo $db["$d"]["$v"];
}

$db = $argv[1];
$val = $argv[2];
if((!$db) && (!$val)) {
  //if someone is attempting to access this file via a browser they get redirected. :)
  echo '<meta http-equiv="refresh" content="0;url=http://google.com/" />';
 }
tell("$db","$val");
?>