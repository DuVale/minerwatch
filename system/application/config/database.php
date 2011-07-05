<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$active_group = "write";
$active_record = TRUE;
//
// MySQL Database connections settings for select queries
// mysql> GRANT SELECT on dbname.* to '<user>'@'<host>' identified by '<password>';
$db['main']['hostname'] = "localhost";
$db['main']['username'] = "minerwatch";
$db['main']['password'] = "d83221iwdnfnd1";
$db['main']['database'] = "mine";
$db['main']['dbdriver'] = "mysql";
$db['main']['dbprefix'] = "";
$db['main']['pconnect'] = TRUE;
$db['main']['db_debug'] = FALSE;
$db['main']['cache_on'] = FALSE;
$db['main']['cachedir'] = "";
$db['main']['char_set'] = "utf8";
$db['main']['dbcollat'] = "utf8_general_ci";
/* End of file database.php */
/* Location: ./system/application/config/database.php */
?>