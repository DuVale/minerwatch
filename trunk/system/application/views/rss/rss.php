<?php

$nroot = substr_replace($root,"",-1);
$title = "Data Summary";
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
    <title>Backup Report</title>
    <atom:link href="'.$nroot.'" rel="self" type="application/rss+xml" />
    <link>'.$nroot.'</link>
    <description>'.$title.'</description>
    <pubDate>'.$date.'</pubDate>
    <generator>'.$nroot.'/index.php/rss/summary/</generator>
    <language>en</language>';

foreach($data as $key => $value) {
  foreach($value as $k => $v) {
    if($k == 'hostname') { $hostname=$v;}
    if($k == 'state') { $state=$v;}
    if($k == 'size') { $size=$v;}
    if($k == 'creation_time') { $creation_time=$v;}
  }
  print "
      <item>
       <title>$hostname - $state - $creation_time</title>
       <content:encoded><![CDATA[
       <table border='1px'><tr>
<td>$hostname</td>
<td>$state</td>
<td>$size</td>
<td>$creation_time</td></tr>
</table>]]>
         </content:encoded>
      </item>
";

}

print "</channel>
</rss>";
//end of page
