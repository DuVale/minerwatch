<?php
// print HTML start
$home = "/var/www/html/minerwatch.strangl3r.com";
$addr = "http://minerwatch.strangl3r.com";
print "<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'> 
<meta name='ROBOT' content='NOODP'>
<meta http-equiv='refresh' content='30'>
<title>MinerWatch</title>

    <!-- ** CSS ** --> 
    <!-- base library --> 
    <link rel='stylesheet' type='text/css' href='$addr/includes/grouptabs/ext-all.css' /> 
 
    <!-- overrides to base library --> 
    <link rel='stylesheet' type='text/css' href='$addr/includes/grouptabs/Portal.css' /> 
    <link rel='stylesheet' type='text/css' href='$addr/includes/grouptabs/GroupTab.css' /> 
 
    <!-- page specific --> 
    <style type='text/css'> 
        /* styles for iconCls */
        .x-icon-tickets {
            background-image: url('$addr/includes/grouptabs/images/tickets.png');
        }
        .x-icon-subscriptions {
            background-image: url('$addr/includes/grouptabs/images/subscriptions.png');
        }
        .x-icon-users {
            background-image: url('$addr/includes/grouptabs/images/group.png');
        }
        .x-icon-templates {
            background-image: url('$addr/includes/grouptabs/images/templates.png');
        }
    </style> 
 
    <script type='text/javascript' src='$addr/includes/grouptabs/ext-base.js'></script> 
    <script type='text/javascript' src='$addr/includes/grouptabs/ext-all.js'></script> 
    <script type='text/javascript' src='$addr/includes/grouptabs/GroupTabPanel.js'></script> 
    <script type='text/javascript' src='$addr/includes/grouptabs/GroupTab.js'></script> 
    <script type='text/javascript' src='$addr/includes/grouptabs/Portal.js'></script> 
    <script type='text/javascript' src='$addr/includes/grouptabs/PortalColumn.js'></script> 
    <script type='text/javascript' src='$addr/includes/grouptabs/Portlet.js'></script> 
    <script type='text/javascript' src='$addr/includes/grouptabs/examples.js'></script> 
    <script type='text/javascript' src='$addr/includes/grouptabs/sample-grid.js'></script> 
    <script type='text/javascript' src='$addr/includes/grouptabs/grouptabs.js'></script> 
    <script type='text/javascript' src='$addr/includes/extjs/miframe.js'></script>
    <script type='text/javascript' src='$addr/includes/extjs/Ext.ux.UUID.js'></script>

</head>
<body></body></html>";
?>