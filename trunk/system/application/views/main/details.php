<?php

$nroot = substr_replace($root,"",-1);
$title = "Benchmark Results";
$date = date(DATE_RFC822); //Wed, 11 Feb 2009 16:34:08 +0000

//start rss xml 
print '<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0"
xmlns:content="http://purl.org/rss/1.0/modules/content/"
xmlns:wfw="http://wellformedweb.org/CommentAPI/"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:atom="http://www.w3.org/2005/Atom"
    xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
    >

<channel>
    <title>Benchmark results</title>
    <atom:link href="'.$nroot.'" rel="self" type="application/rss+xml" />
    <link>'.$nroot.'</link>
    <description>'.$title.'</description>
    <pubDate>'.$date.'</pubDate>
    <generator>'.$nroot.'/index.php/rss/summary/</generator>
    <language>en</language>';

foreach($data as $key => $value) {  
  foreach($value as $k => $v) {
    if($k == 'id') { $data_id=$v;}
    $$k = $v;
  }
}
  print "
      <item>
       <title>$title - $creation_time</title>
       <content:encoded><![CDATA[
       <table border='1px'>
<tr><td>MYSQL_VERSION</td><td>$MYSQL_VERSION</td></tr>
<tr><td>MYSQL_INNODB_BUFFER_POOL_SIZE</td><td>$MYSQL_INNODB_BUFFER_POOL_SIZE</td></tr>
<tr><td>MYSQL_SYNC_BINLOG</td><td>$MYSQL_SYNC_BINLOG</td></tr>
<tr><td>MYSQL_TX_ISOLATION</td><td>$MYSQL_TX_ISOLATION</td></tr>
<tr><td>CPU_MODEL</td><td>$CPU_MODEL</td></tr>
<tr><td>CPU_QUANT</td><td>$CPU_QUANT</td></tr>
<tr><td>MEMORY_TOTAL_BYTES</td><td>$MEMORY_TOTAL_BYTES</td></tr>
<tr><td>MEMORY_FREE_BYTES</td><td>$MEMORY_FREE_BYTES</td></tr>
<tr><td>MEMORY_CACHED_BYTES</td><td>$MEMORY_CACHED_BYTES</td></tr>
<tr><td>MEMORY_ACTIVE_BYTES</td><td>$MEMORY_ACTIVE_BYTES</td></tr>
<tr><td>SWAP_TOTAL_BYTES</td><td>$SWAP_TOTAL_BYTES</td></tr>
<tr><td>SWAP_FREE_BYTES</td><td>$SWAP_FREE_BYTES</td></tr>
<tr><td>SYSTEM_OS</td><td>$SYSTEM_OS</td></tr>
<tr><td>SYSTEM_KERNEL</td><td>$SYSTEM_KERNEL</td></tr>
<tr><td>SYSTEM_ARCH</td><td>$SYSTEM_ARCH</td></tr>
<tr><td>INSERT_OLTP_YES</td><td>$INSERT_OLTP_YES</td></tr>
<tr><td>INSERT_OLTP_NO</td><td>$INSERT_OLTP_NO</td></tr>
<tr><td>SELECT_INDEX_YES_SEQ</td><td>$SELECT_INDEX_YES_SEQ</td></tr>
<tr><td>SELECT_INDEX_YES_RAND</td><td>$SELECT_INDEX_YES_RAND</td></tr>
<tr><td>SELECT_INDEX_NO_SEQ</td><td>$SELECT_INDEX_NO_SEQ</td></tr>
<tr><td>SELECT_INDEX_NO_RAND</td><td>$SELECT_INDEX_NO_RAND</td></tr>
</table>]]>
         </content:encoded>
      </item>
";

print "</channel>
</rss>";
//end of page
