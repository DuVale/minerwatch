<?php

  // Setup Sparklines
#require_once('includes/sparkline/Sparkline_Bar.php');
$home = "/var/www/html/staging.minerwatch.strangl3r.com";
$addr = "http://staging.minerwatch.strangl3r.com";
require_once("$home/includes/sparkline/lib/Sparkline_Line.php");

// Setup DB
$mysql_host="localhost";
$mysql_port=3306;
$mysql_user="minerwatch";
$mysql_password="d83221iwdnfnd1";
$mysql_db="mine";

mysql_connect($mysql_host,$mysql_user,$mysql_password);
@mysql_select_db($mysql_db) or die( "Unable to select database");

// print HTML start
print "<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'> 
<meta name='ROBOT' content='NOODP'>
<meta http-equiv='refresh' content='300'>
<title>MinerWatch</title>
</head>
<body>
<style type='text/css'>
table.sample {
border-width: 1px;
border-spacing: 2px;
border-style: hidden;
border-color: gray;
border-collapse: collapse;
background-color: white;
}
table.sample th {
border-width: 2px;
padding: 1px;
border-style: dotted;
border-color: white;
background-color: rgb(250, 240, 230);
-moz-border-radius: ;
}
table.sample td {
border-width: 2px;
padding: 1px;
border-style: dotted;
border-color: white;
background-color: rgb(250, 240, 230);
-moz-border-radius: ;
}
</style>

<table class='sample'>
<tr><td colspan='6'>Slush/BPM Worker Mining Stats</td></tr>\n
<tr>\n
<th align='left'>worker</th>\n
<th align='left'>alive</th>\n
<th align='left'>shares</th>\n
<th align='left'>hashrate: 5m</th>\n
<th align='left'>hashrate: 7d</th>\n
<th align='left'>hashrate: 24h</th>\n
</tr>\n";

$i=0;
$query="SELECT * FROM slush_pool_results;";
mysql_query($query);
$r=mysql_query($query);
$num=mysql_numrows($r);

while ($i < $num) {
  $api_key = mysql_result($r,$i,"api_key");
  $unconfirmed_reward = mysql_result($r,$i,"unconfirmed_reward");
  $confirmed_reward = mysql_result($r,$i,"confirmed_reward");
  $worker_name = mysql_result($r,$i,"worker_name");
  $alive = mysql_result($r,$i,"alive");
  $shares = mysql_result($r,$i,"shares");
  $hashrate = mysql_result($r,$i,"hashrate");

  //daily interval sparkline generation
  $query0="SELECT hashrate,confirmed_reward FROM slush_pool_results_archive WHERE api_key='$api_key' AND worker_name='$worker_name' AND creation_time BETWEEN DATE_SUB(NOW(), INTERVAL 1 DAY) AND NOW();";
  mysql_query($query0);
  $res0=mysql_query($query0);
  $n0=mysql_numrows($res0);    
  $j0=0;
  $sparkline0 = new Sparkline_Line();
  $sparkline_reward0 = new Sparkline_Line();
  while ($j0 < $n0) {
    $h0 = mysql_result($res0,$j0,"hashrate"); 
    $r0 = mysql_result($res0,$j0,"confirmed_reward");
    $sparkline0->SetData($j0, $h0);
    $sparkline_reward0->SetData($j0, $r0);
    $j0++;
  }

  //weekly interval sparkline generation
  $query1="SELECT hashrate,confirmed_reward FROM slush_pool_results_archive WHERE api_key='$api_key' AND worker_name='$worker_name' AND creation_time BETWEEN DATE_SUB(NOW(), INTERVAL 7 DAY) AND NOW();";
  mysql_query($query1);
  $res1=mysql_query($query1);
  $n1=mysql_numrows($res1);    
  $j1=0;
  $sparkline1 = new Sparkline_Line();
  $sparkline_reward1 = new Sparkline_Line();
  while ($j1 < $n1) {
    $h1 = mysql_result($res1,$j1,"hashrate"); 
    $r1 = mysql_result($res1,$j1,"confirmed_reward");
    $sparkline1->SetData($j1, $h1);
    $sparkline_reward1->SetData($j1, $r1);
    $j1++;
  }

  $sparkline0->Render(100, 20); 
  $sparkline1->Render(100, 20);
  $sparkline0->Output("$home/graphs/day/$worker_name.png");
  $sparkline1->Output("$home/graphs/week/$worker_name.png");
  
  print "<tr><td>$worker_name</td><td>$alive</td><td>$shares</td><td>$hashrate</td>\n";  
  print "<td><img src='$addr/graphs/week/$worker_name.png'></td>
<td><img src='$addr/graphs/day/$worker_name.png'></td>
</tr>\n";
  $i++;
 }

print "</table><br><br>\n";

//slush worker rewards
$sparkline_reward0->Render(120, 20);
$sparkline_reward1->Render(120, 20);
$sparkline_reward0->Output("$home/graphs/day/reward-$api_key.png");
$sparkline_reward1->Output("$home/graphs/week/reward-$api_key.png");

print "<table class='sample'><tr><td colspan='4'>Slush/BPM Worker Reward Stats</td></tr>\n
<tr>
<th>confirmed_reward</th>
<th>unconfirmed_reward</th>
<th>confirmed: daily</th>
<th>confirmed: weekly</th>
</tr>\n
<tr>
<td>$confirmed_reward</td>
<td>$unconfirmed_reward</td>
<td><img src='$addr/graphs/day/reward-$api_key.png'></td>
<td><img src='$addr/graphs/week/reward-$api_key.png'></td>
</tr>\n
</table>\n";

print "<br><br>";
print "<table class='sample'><tr><td colspan='2'>Slush/BPM Pool Stats</td></tr>\n
<tr><th>ghashes</th><th>round_duration</th></tr>\n";

$jsonurl = "http://mining.bitcoin.cz/stats/json/";
$json = file_get_contents($jsonurl,0,null,null);
$array = json_decode($json, true);
print "<tr><td>".$array['ghashes_ps']."</td><td>".$array['round_duration']."</td></tr></table>";


print "</body></html>";
mysql_close();
?>