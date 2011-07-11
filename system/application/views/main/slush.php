<?php
$nroot = substr_replace($root,"",-1);
print<<<HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MinerWatch</title>

<link rel="stylesheet" type="text/css" href="$nroot/includes/extjs/resources/css/ext-all.css" />
<link rel="stylesheet" type="text/css" href="$nroot/includes/extjs/resources/css/xtheme-slate.css" />
<script type="text/javascript" src="$nroot/includes/extjs/ext-all.js"></script>
<script type="text/javascript">
Ext.require([
	     'Ext.grid.*',
	     'Ext.data.*',
	     'Ext.util.*',
    'Ext.state.*'
	     ]);

Ext.onReady(function() {
	      Ext.QuickTips.init();
    
	      // setup the state provider, all state information will be saved to a cookie
	      Ext.state.Manager.setProvider(Ext.create('Ext.state.CookieProvider'));

var currentData = [
HEAD;

$r=0;
$u=count($current);
foreach($current as $key => $value) {
  foreach($value as $k => $v) {
    if($k == 'worker_name') { $worker_name=$v; }
    if($k == 'hashrate') { $hashrate=$v; }
    if($k == 'confirmed_reward') { $confirmed_reward=$v; }
    if($k == 'unconfirmed_reward') { $unconfirmed_reward=$v; }
    if($k == 'shares') { $shares=$v; }
    if($k == 'alive') { $alive=$v; }
  }
  
  print "['$worker_name','$alive','$shares','$hashrate']";
  $r++;
  if($r<$u) { print ",\n";} else { print "\n];\n";}
 }

print<<<HEAD
    /**
     * Custom function used for column renderer
     * @param {Object} val
     */
    function change(val) {
      if (val > 0) {
	return '<span style="color:green;">' + val + '</span>';
      } else if (val < 0) {
	return '<span style="color:red;">' + val + '</span>';
      }
      return val;
    }

    /**
     * Custom function used for column renderer
     * @param {Object} val
     */
    function pctChange(val) {
      if (val > 0) {
	return '<span style="color:green;">' + val + '%</span>';
      } else if (val < 0) {
	return '<span style="color:red;">' + val + '%</span>';
      }
      return val;
    }

    // create the data store
    var store = Ext.create('Ext.data.ArrayStore', {
      fields: [
	       {name: 'worker'},
	       {name: 'alive'},
	       {name: 'shares',     type: 'float'},
	       {name: 'hashrate',  type: 'float'}
	       ],
			       data: currentData
			       });

    // create the Grid
    var grid = Ext.create('Ext.grid.Panel', {
      store: store,
			      stateful: true,
			      stateId: 'stateGrid',
			      columns: [
					{
					text     : 'worker name',
					    flex     : 1,
					    sortable : false,
					    dataIndex: 'worker'
					    },
					{
                                        text     : 'alive state',
                                            flex     : 1,
                                            sortable : false,
                                            dataIndex: 'alive'
                                            },
                                        {
                                        text     : 'current shares',
                                            flex     : 1,
                                            sortable : false,
                                            dataIndex: 'shares'
                                            },
                                        {
                                        text     : 'Mhash/sec',
                                            flex     : 1,
                                            sortable : false,
                                            dataIndex: 'hashrate'
                                            }
					],
			      height: 350,
			      width: 700,
			      title: 'Slush\'s Pool - Current Workers',
			      renderTo: 'grid-example',
			      viewConfig: {
			    stripeRows: true
				}
      });
	    });
</script>
</head>
    <!-- page specific --> 
    <style type="text/css"> 
	    /* style rows on mouseover */
	    .x-grid-row-over .x-grid-cell-inner {
	      font-weight: bold;
	    }
	    /* shared styles for the ActionColumn icons */
	    .x-action-col-cell img {
            height: 16px;
            width: 16px;
            cursor: pointer;
	    }
	    /* custom icon for the "buy" ActionColumn icon */
	    .x-action-col-cell img.buy-col {
	      background-image: url(../shared/icons/fam/accept.gif);
	    }
	    /* custom icon for the "alert" ActionColumn icon */
	    .x-action-col-cell img.alert-col {
	      background-image: url(../shared/icons/fam/error.gif);
	    }
    </style> 
</head> 
<body> 
    <div id="grid-example"></div> 
</body> 
</html>

HEAD;



?>