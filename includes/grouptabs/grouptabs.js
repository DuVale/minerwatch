/*!
 * Ext JS Library 3.1.1
 * Copyright(c) 2006-2010 Ext JS, LLC
 * licensing@extjs.com
 * http://www.extjs.com/license
 */
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

    var commandpage = "/minerwatch.php";

 
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
