<?php
$g['root'] = $root;
$nroot = substr_replace($root,"",-1); //remove the trailing slash from the root path

print<<<HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Backups</title>

<link rel="stylesheet" type="text/css" href="$nroot/includes/extjs/resources/css/ext-all.css" />
<link rel="stylesheet" type="text/css" href="$nroot/includes/extjs/resources/css/xtheme-slate.css" />

<script type="text/javascript" src="$nroot/includes/extjs/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="$nroot/includes/extjs/ext-all.js"></script>
<script type="text/javascript" src="$nroot/includes/extjs/Ext.ux.UUID.js"></script>

<script type="text/javascript">
  Ext.onReady(function() {
		Ext.QuickTips.init();
HEAD;
 
print<<<HEAD

  Ext.namespace('Ext.ux.plugins');

 Ext.ux.plugins.PageComboResizer = Ext.extend(Object, {

   pageSizes: [5, 10, 15, 20, 25, 30, 50, 75, 100, 200, 300, 500],
						  prefixText: 'Showing ',
						  postfixText: 'records per page.',

						  constructor: function(config){
						  Ext.apply(this, config);
						  Ext.ux.plugins.PageComboResizer.superclass.constructor.call(this, config);
						},

						  init : function(pagingToolbar) {
						  var ps = this.pageSizes;
						  var combo = new Ext.form.ComboBox({
						    typeAhead: true,
							triggerAction: 'all',
							lazyRender:true,
							mode: 'local',
							width:20,
							store: ps,
							listeners: {
						      select: function(c, r, i){
							  pagingToolbar.pageSize = ps[i];
							  var rowIndex = 0;
							  var gp = pagingToolbar.findParentBy (
											       function (ct, cmp) {return (ct instanceof Ext.grid.GridPanel) ? true : false;}
											       );
							  var sm = gp.getSelectionModel();
							  if (undefined != sm && sm.hasSelection()) {
							    if (sm instanceof Ext.grid.RowSelectionModel) {
							      rowIndex = gp.store.indexOf( sm.getSelected() ) ;
							    } else if (sm instanceof Ext.grid.CellSelectionModel) {
							      rowIndex = sm.getSelectedCell()[0] ;
							    }
							  }
							  rowIndex += pagingToolbar.cursor;
							  pagingToolbar.doLoad(Math.floor(rowIndex/pagingToolbar.pageSize)*pagingToolbar.pageSize);
							}
						      }
						    });

						  Ext.iterate(this.pageSizes, function(ps) {
								if (ps==pagingToolbar.pageSize) {
								  combo.setValue (ps);
								  return;
								}
							      });

						  var inputIndex = pagingToolbar.items.indexOf(pagingToolbar.refresh);
						  pagingToolbar.insert(++inputIndex,'-');
						  pagingToolbar.insert(++inputIndex, this.prefixText);
						  pagingToolbar.insert(++inputIndex, combo);
						  pagingToolbar.insert(++inputIndex, this.postfixText);
						  pagingToolbar.on({
						    beforedestroy: function(){
							combo.destroy();
						      }
						    });

						}
   });
 var store = new Ext.data.JsonStore({
   url: '$nroot/json.php',       
       root: 'devices',
       idProperty: 'id',
       totalProperty: 'total',
       fields: [
		'id',
		'LINK',
		'creation_time'
		],
       remoteSort: true
       });
 
 store.setDefaultSort('MYSQL_VERSION','asc');

 Ext.onReady(function() {
	       var grid = new Ext.grid.GridPanel({
		 title: 'DB Benchmarks',
		     store: store,
		     columns: [
			       { id: 'id', header: "id", width: 20, dataIndex: 'id', sortable: true, hidden: true},
			       { id: 'LINK', header: "Details", width: 45, dataIndex: 'LINK', sortable: false, hidden: false},
			       { id: 'creation_time', header: "Date", width: 120, dataIndex: 'creation_time', sortable: true, hidden:false}
			       ],
		     autoExpandColumn: 'LINK',
		     renderTo: Ext.getBody(),
		     width: 800,
		     height: 475,
		     loadMask: true,
		     columnLines: true,
		     bbar: new Ext.PagingToolbar({
			   store: store,
			   displayInfo: true,
			   displayMsg: 'Displaying devices {0} - {1} of {2}',
			   emptyMsg: "No devices found in database",
			   plugins: [
				     new Ext.ux.plugins.PageComboResizer({pageSizes: [10, 20, 50, 100, 250, 500, 1000]})
				     ]
			   })
		     }		 
		 );
	       store.load({params: { start: 0, limit: 20}});
	     }); 
	      }); 
</script>
</head>
<body>
</body>
</html>
HEAD;
?>