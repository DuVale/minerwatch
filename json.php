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
  $creation_time = $row['creation_time'];
  $data.= "{\"id\":\"$id\",
\"LINK\":\"<a href='$nroot/index.php/main/show/$md5' target='_blank'>click</a>\",
\"creation_time\":\"$creation_time\"},";
 }
//remove comma from final object in array
$noFinalComma = substr_replace($data, "", -1);
 
//output complete json object
echo $startJsonObject . $noFinalComma . $endJsonObject;

//close server connection
mysql_close($server);
 
?>
