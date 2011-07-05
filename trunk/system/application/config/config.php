<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config['base_url']= "http://staging.minerwatch.strangl3r.com/"; //USE TRAILING SLASH
$config['base_dir']     = "/var/www/html/staging.minerwatch.strangl3r.com"; //NO TRAILING SLASH
$config['index_page'] = "index.php"; // DO NOT CHANGE
$config['uri_protocol']= "AUTO";
$config['url_suffix'] = "";
$config['language']= "english";
$config['charset'] = "UTF-8";
$config['enable_hooks'] = FALSE;
$config['subclass_prefix'] = 'MY_';
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_=+-';
$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd'; 
$config['log_threshold'] = 4; // 0:OFF, 1:ERROR, 2:DEBUG, 3:INFO, 4:ALL
$config['log_path'] = '';
$config['log_date_format'] = 'Y-m-d H:i:s';
$config['cache_path'] = ''; // defaults to system/cache but you can change it if necessary
$config['encryption_key'] = "3sdfjl32412qwekwmsXp";
$config['sess_cookie_name']= 'minerwatch_session';
$config['sess_expiration']= 600; // 10 minute session 
$config['sess_encrypt_cookie']= TRUE; // Encryption is always good
$config['sess_use_database']= FALSE; // This always breaks so we never use TRUE
$config['sess_table_name']= ''; // We never use the database for session data
$config['sess_match_ip']= TRUE; // Yes we want this
$config['sess_match_useragent']= TRUE; // Yes we want this
$config['sess_time_to_update'] = 60; // Check session data every minute
$config['cookie_prefix']= "";
$config['cookie_domain']= "";
$config['cookie_path']= "/";
$config['global_xss_filtering'] = TRUE;
$config['compress_output'] = FALSE; // This can never be set to TRUE or the app will certainly break
$config['time_reference'] = 'local';
$config['rewrite_short_tags'] = FALSE;
$config['ci_version'] = '1.7.0'; // CodeIgniter Framework Version
$config['extjs_version'] = '3.0.0'; // ExtJS Framework Version
/* End of file config.php */
/* Location: ./system/application/config/config.php */
?>