<?php
// print HTML start
$addr = substr_replace($root,"",-1);

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
    <script type='text/javascript' src='$addr/includes/extjs/miframe.js'></script>
    <script type='text/javascript' src='$addr/includes/extjs/Ext.ux.UUID.js'></script>

<script type='text/javascript'>
Ext.onReady(function() {
	Ext.QuickTips.init();
    
    // create some portlet tools using built in Ext tool ids
    var tools = [{
        id:'gear',
        handler: function(){
            Ext.Msg.alert('Message', 'The Settings tool was clicked.');
        }
    },{
        id:'close',
        handler: function(e, target, panel){
            panel.ownerCt.remove(panel, true);
        }
    }];

    var commandpage = 'index.php/main/monitor_slush';
    var refreshTab=function(tab){
	tab.getUpdater().refresh();
    };

    var viewport = new Ext.Viewport({
        layout:'fit',
        items:[{
            xtype: 'grouptabpanel',
    	    tabWidth: 130,
    	    activeGroup: 0,
    	    items: [
		{
		    expanded: true,
		    items: [{
			title: 'Mining Pools',
			iconCls: 'x-icon-configuration',
			tabTip: 'Configuration tabtip',
			style: 'padding: 10px;',
			layout: 'fit',
			deferredRender: true,
			listeners: {activate: refreshTab},
			items: {
			    xtype          : 'iframepanel',
			    defaultSrc  : commandpage
			}
		    }, 
			    {
				title: 'Slush/BPM Pool',
				iconCls: 'x-icon-templates',
				tabTip: 'Templates tabtip',
				style: 'padding: 10px;',
				layout: 'fit',
				deferredRender: true,
				listeners: {activate: refreshTab},
				items: {
				    xtype          : 'iframepanel',
				    defaultSrc  : commandpage
				}
			    },
			    {
				title: 'BTCguild Pool',
				iconCls: 'x-icon-templates',
				tabTip: 'Templates tabtip',
				style: 'padding: 10px;',
				html: Ext.example.shortBogusMarkup
			    },
			    {
				title: 'DeepBit Pool',
				iconCls: 'x-icon-templates',
				tabTip: 'Templates tabtip',
				style: 'padding: 10px;',
				html: Ext.example.shortBogusMarkup
			    },
			    
			   ]
		}]
	}]
    });
});
</script>
</head>
<body></body></html>";
?>
