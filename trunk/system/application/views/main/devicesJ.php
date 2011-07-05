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
		'MYSQL_VERSION',
		'MYSQL_INNODB_BUFFER_POOL_SIZE',
		'MYSQL_SYNC_BINLOG',
		'MYSQL_TX_ISOLATION',
		'CPU_MODEL',
		'CPU_SPEED',
		'CPU_QUANT',
		'MEMORY_TOTAL_BYTES',
		'MEMORY_FREE_BYTES',
		'MEMORY_CACHED_BYTES',
		'MEMORY_ACTIVE_BYTES',
		'SWAP_TOTAL_BYTES',
		'SWAP_FREE_BYTES',
		'SYSTEM_OS',
		'SYSTEM_KERNEL',
		'SYSTEM_ARCH',
		'INSERT_OLTP_YES',
		'INSERT_OLTP_NO',
		'SELECT_INDEX_YES_SEQ',
		'SELECT_INDEX_YES_RAND',
		'SELECT_INDEX_NO_SEQ',
		'SELECT_INDEX_NO_RAND',
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
			       { id: 'MYSQL_VERSION', header: "MYSQL_VERSION", width: 120, dataIndex: 'MYSQL_VERSION', sortable: true, hidden:false},
			       { id: 'MYSQL_INNODB_BUFFER_POOL_SIZE', header: "MYSQL_INNODB_BUFFER_POOL_SIZE", width: 160, dataIndex: 'MYSQL_INNODB_BUFFER_POOL_SIZE', sortable: true, renderer: 'fileSize', hidden:true},
			       { id: 'MYSQL_SYNC_BINLOG', header: "MYSQL_SYNC_BINLOG", width: 160, dataIndex: 'MYSQL_SYNC_BINLOG', sortable: true, hidden:true},
			       { id: 'MYSQL_TX_ISOLATION', header: "MYSQL_TX_ISOLATION", width: 160, dataIndex: 'MYSQL_TX_ISOLATION', sortable: true, hidden:true},
			       { id: 'CPU_MODEL', header: "CPU_MODEL", width: 160, dataIndex: 'CPU_MODEL', sortable: true, hidden:false},
   			       { id: 'CPU_SPEED', header: "CPU_SPEED", width: 160, dataIndex: 'CPU_SPEED', sortable: true, hidden:false},
			       { id: 'CPU_QUANT', header: "CORES", width: 50, dataIndex: 'CPU_QUANT', sortable: true, hidden:false},
			       { id: 'MEMORY_TOTAL_BYTES', header: "MEMORY_TOTAL_BYTES", width: 145, dataIndex: 'MEMORY_TOTAL_BYTES', sortable: true, renderer: 'fileSize', hidden:false},
			       { id: 'MEMORY_FREE_BYTES', header: "MEMORY_FREE_BYTES", width: 160, dataIndex: 'MEMORY_FREE_BYTES', sortable: true, renderer: 'fileSize', hidden:true},
			       { id: 'MEMORY_CACHED_BYTES', header: "MEMORY_CACHED_BYTES", width: 160, dataIndex: 'MEMORY_CACHED_BYTES', sortable: true, renderer: 'fileSize', hidden:true},
			       { id: 'MEMORY_ACTIVE_BYTES', header: "MEMORY_ACTIVE_BYTES", width: 160, dataIndex: 'MEMORY_ACTIVE_BYTES', sortable: true, renderer: 'fileSize', hidden:true},
			       { id: 'SWAP_TOTAL_BYTES', header: "SWAP_TOTAL_BYTES", width: 160, dataIndex: 'SWAP_TOTAL_BYTES', sortable: true, renderer: 'fileSize', hidden:true},
			       { id: 'SWAP_FREE_BYTES', header: "SWAP_FREE_BYTES", width: 160, dataIndex: 'SWAP_FREE_BYTES', sortable: true, renderer: 'fileSize', hidden:true},
			       { id: 'SYSTEM_OS', header: "SYSTEM_OS", width: 80, dataIndex: 'SYSTEM_OS', sortable: true, hidden:false},
			       { id: 'SYSTEM_KERNEL', header: "SYSTEM_KERNEL", width: 160, dataIndex: 'SYSTEM_KERNEL', sortable: true, hidden:true},
			       { id: 'SYSTEM_ARCH', header: "SYSTEM_ARCH", width: 160, dataIndex: 'SYSTEM_ARCH', sortable: true, hidden:true},
			       { id: 'INSERT_OLTP_YES', header: "INSERT_OLTP_YES", width: 115, dataIndex: 'INSERT_OLTP_YES', sortable: true, hidden:false},
			       { id: 'INSERT_OLTP_NO', header: "INSERT_OLTP_NO", width: 110, dataIndex: 'INSERT_OLTP_NO', sortable: true, hidden:false},
			       { id: 'SELECT_INDEX_YES_SEQ', header: "SELECT_INDEX_YES_SEQ", width: 150, dataIndex: 'SELECT_INDEX_YES_SEQ', sortable: true, hidden:false},
			       { id: 'SELECT_INDEX_YES_RAND', header: "SELECT_INDEX_YES_RAND", width: 160, dataIndex: 'SELECT_INDEX_YES_RAND', sortable: true, hidden:false},
			       { id: 'SELECT_INDEX_NO_SEQ', header: "SELECT_INDEX_NO_SEQ", width: 145, dataIndex: 'SELECT_INDEX_NO_SEQ', sortable: true, hidden:false},
			       { id: 'SELECT_INDEX_NO_RAND', header: "SELECT_INDEX_NO_RAND", width: 160, dataIndex: 'SELECT_INDEX_NO_RAND', sortable: true, hidden:false},
			       { id: 'creation_time', header: "Date", width: 120, dataIndex: 'creation_time', sortable: true, hidden:false}
			       ],
		     autoExpandColumn: 'MYSQL_VERSION',
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