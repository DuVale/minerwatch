<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2010-07-28 00:01:44 --> Config Class Initialized
DEBUG - 2010-07-28 00:01:44 --> Hooks Class Initialized
DEBUG - 2010-07-28 00:01:44 --> URI Class Initialized
DEBUG - 2010-07-28 00:01:44 --> Router Class Initialized
DEBUG - 2010-07-28 00:01:44 --> Output Class Initialized
DEBUG - 2010-07-28 00:01:44 --> Input Class Initialized
DEBUG - 2010-07-28 00:01:44 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 00:01:44 --> Language Class Initialized
DEBUG - 2010-07-28 00:01:44 --> Loader Class Initialized
DEBUG - 2010-07-28 00:01:44 --> Helper loaded: url_helper
DEBUG - 2010-07-28 00:01:44 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 00:01:44 --> Database Driver Class Initialized
DEBUG - 2010-07-28 00:01:44 --> Controller Class Initialized
DEBUG - 2010-07-28 00:01:44 --> Model Class Initialized
DEBUG - 2010-07-28 00:01:44 --> Starting get_summary_data
DEBUG - 2010-07-28 00:01:44 --> Database Driver Class Initialized
DEBUG - 2010-07-28 00:01:44 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 00:01:44 --> DB query starting...
DEBUG - 2010-07-28 00:01:44 --> DB query ended, calculating time...
DEBUG - 2010-07-28 00:01:44 --> DB query timing: 0.0025749206542969 seconds.
DEBUG - 2010-07-28 00:01:44 --> Returning data: 15 ROWS
DEBUG - 2010-07-28 00:01:44 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 00:01:44 --> Final output sent to browser
DEBUG - 2010-07-28 00:01:44 --> Total execution time: 0.0530
DEBUG - 2010-07-28 00:02:11 --> Config Class Initialized
DEBUG - 2010-07-28 00:02:11 --> Hooks Class Initialized
DEBUG - 2010-07-28 00:02:11 --> URI Class Initialized
DEBUG - 2010-07-28 00:02:11 --> Router Class Initialized
DEBUG - 2010-07-28 00:02:11 --> Output Class Initialized
DEBUG - 2010-07-28 00:02:11 --> Input Class Initialized
DEBUG - 2010-07-28 00:02:11 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 00:02:11 --> Language Class Initialized
DEBUG - 2010-07-28 00:02:11 --> Loader Class Initialized
DEBUG - 2010-07-28 00:02:11 --> Helper loaded: url_helper
DEBUG - 2010-07-28 00:02:11 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 00:02:11 --> Database Driver Class Initialized
DEBUG - 2010-07-28 00:02:11 --> Controller Class Initialized
DEBUG - 2010-07-28 00:02:11 --> log_index function called
DEBUG - 2010-07-28 00:02:11 --> Model Class Initialized
DEBUG - 2010-07-28 00:02:11 --> Helper loaded: form_helper
DEBUG - 2010-07-28 00:02:11 --> Validation Class Initialized
DEBUG - 2010-07-28 00:02:11 --> log_index hostname: sjcplaydb01p.ood.ops
DEBUG - 2010-07-28 00:02:11 --> log_index state: F-SPACE
DEBUG - 2010-07-28 00:02:11 --> log_index size: 1
DEBUG - 2010-07-28 00:02:11 --> log_index continuing...
DEBUG - 2010-07-28 00:02:11 --> Database Driver Class Initialized
DEBUG - 2010-07-28 00:02:11 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjcplaydb01p.ood.ops', 'F-SPACE', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='F-SPACE', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 00:02:11 --> Final output sent to browser
DEBUG - 2010-07-28 00:02:11 --> Total execution time: 0.0605
DEBUG - 2010-07-28 00:02:13 --> Config Class Initialized
DEBUG - 2010-07-28 00:02:13 --> Hooks Class Initialized
DEBUG - 2010-07-28 00:02:13 --> URI Class Initialized
DEBUG - 2010-07-28 00:02:13 --> Router Class Initialized
DEBUG - 2010-07-28 00:02:13 --> Output Class Initialized
DEBUG - 2010-07-28 00:02:13 --> Input Class Initialized
DEBUG - 2010-07-28 00:02:13 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 00:02:13 --> Language Class Initialized
DEBUG - 2010-07-28 00:02:13 --> Loader Class Initialized
DEBUG - 2010-07-28 00:02:13 --> Helper loaded: url_helper
DEBUG - 2010-07-28 00:02:13 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 00:02:13 --> Database Driver Class Initialized
DEBUG - 2010-07-28 00:02:13 --> Controller Class Initialized
DEBUG - 2010-07-28 00:02:13 --> log_index function called
DEBUG - 2010-07-28 00:02:13 --> Model Class Initialized
DEBUG - 2010-07-28 00:02:13 --> Helper loaded: form_helper
DEBUG - 2010-07-28 00:02:13 --> Validation Class Initialized
DEBUG - 2010-07-28 00:02:13 --> log_index hostname: sjcdiamdb02p.ood.ops
DEBUG - 2010-07-28 00:02:13 --> log_index state: DB-OFF
DEBUG - 2010-07-28 00:02:13 --> log_index size: 1
DEBUG - 2010-07-28 00:02:13 --> log_index continuing...
DEBUG - 2010-07-28 00:02:13 --> Database Driver Class Initialized
DEBUG - 2010-07-28 00:02:13 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjcdiamdb02p.ood.ops', 'DB-OFF', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='DB-OFF', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 00:02:13 --> Final output sent to browser
DEBUG - 2010-07-28 00:02:13 --> Total execution time: 0.0594
DEBUG - 2010-07-28 00:02:27 --> Config Class Initialized
DEBUG - 2010-07-28 00:02:27 --> Hooks Class Initialized
DEBUG - 2010-07-28 00:02:27 --> URI Class Initialized
DEBUG - 2010-07-28 00:02:27 --> Router Class Initialized
DEBUG - 2010-07-28 00:02:27 --> Output Class Initialized
DEBUG - 2010-07-28 00:02:27 --> Input Class Initialized
DEBUG - 2010-07-28 00:02:27 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 00:02:27 --> Language Class Initialized
DEBUG - 2010-07-28 00:02:27 --> Loader Class Initialized
DEBUG - 2010-07-28 00:02:27 --> Helper loaded: url_helper
DEBUG - 2010-07-28 00:02:27 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 00:02:27 --> Database Driver Class Initialized
DEBUG - 2010-07-28 00:02:27 --> Controller Class Initialized
DEBUG - 2010-07-28 00:02:27 --> log_index function called
DEBUG - 2010-07-28 00:02:27 --> Model Class Initialized
DEBUG - 2010-07-28 00:02:27 --> Helper loaded: form_helper
DEBUG - 2010-07-28 00:02:27 --> Validation Class Initialized
DEBUG - 2010-07-28 00:02:27 --> log_index hostname: iadappmaildb03p.ood.ops
DEBUG - 2010-07-28 00:02:27 --> log_index state: F-SPACE
DEBUG - 2010-07-28 00:02:27 --> log_index size: 1
DEBUG - 2010-07-28 00:02:27 --> log_index continuing...
DEBUG - 2010-07-28 00:02:27 --> Database Driver Class Initialized
DEBUG - 2010-07-28 00:02:27 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadappmaildb03p.ood.ops', 'F-SPACE', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='F-SPACE', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 00:02:27 --> Final output sent to browser
DEBUG - 2010-07-28 00:02:27 --> Total execution time: 0.0596
DEBUG - 2010-07-28 00:02:31 --> Config Class Initialized
DEBUG - 2010-07-28 00:02:31 --> Hooks Class Initialized
DEBUG - 2010-07-28 00:02:31 --> URI Class Initialized
DEBUG - 2010-07-28 00:02:31 --> Router Class Initialized
DEBUG - 2010-07-28 00:02:31 --> Output Class Initialized
DEBUG - 2010-07-28 00:02:31 --> Input Class Initialized
DEBUG - 2010-07-28 00:02:31 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 00:02:31 --> Language Class Initialized
DEBUG - 2010-07-28 00:02:32 --> Loader Class Initialized
DEBUG - 2010-07-28 00:02:32 --> Helper loaded: url_helper
DEBUG - 2010-07-28 00:02:32 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 00:02:32 --> Database Driver Class Initialized
DEBUG - 2010-07-28 00:02:32 --> Controller Class Initialized
DEBUG - 2010-07-28 00:02:32 --> log_index function called
DEBUG - 2010-07-28 00:02:32 --> Model Class Initialized
DEBUG - 2010-07-28 00:02:32 --> Helper loaded: form_helper
DEBUG - 2010-07-28 00:02:32 --> Validation Class Initialized
DEBUG - 2010-07-28 00:02:32 --> log_index hostname: sjcplaydb04p.ood.ops
DEBUG - 2010-07-28 00:02:32 --> log_index state: F-SPACE
DEBUG - 2010-07-28 00:02:32 --> log_index size: 1
DEBUG - 2010-07-28 00:02:32 --> log_index continuing...
DEBUG - 2010-07-28 00:02:32 --> Database Driver Class Initialized
DEBUG - 2010-07-28 00:02:32 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjcplaydb04p.ood.ops', 'F-SPACE', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='F-SPACE', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 00:02:32 --> Final output sent to browser
DEBUG - 2010-07-28 00:02:32 --> Total execution time: 0.0591
DEBUG - 2010-07-28 00:02:46 --> Config Class Initialized
DEBUG - 2010-07-28 00:02:46 --> Hooks Class Initialized
DEBUG - 2010-07-28 00:02:46 --> URI Class Initialized
DEBUG - 2010-07-28 00:02:46 --> Router Class Initialized
DEBUG - 2010-07-28 00:02:46 --> Output Class Initialized
DEBUG - 2010-07-28 00:02:46 --> Input Class Initialized
DEBUG - 2010-07-28 00:02:46 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 00:02:46 --> Language Class Initialized
DEBUG - 2010-07-28 00:02:46 --> Loader Class Initialized
DEBUG - 2010-07-28 00:02:46 --> Helper loaded: url_helper
DEBUG - 2010-07-28 00:02:46 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 00:02:46 --> Database Driver Class Initialized
DEBUG - 2010-07-28 00:02:46 --> Controller Class Initialized
DEBUG - 2010-07-28 00:02:46 --> log_index function called
DEBUG - 2010-07-28 00:02:46 --> Model Class Initialized
DEBUG - 2010-07-28 00:02:46 --> Helper loaded: form_helper
DEBUG - 2010-07-28 00:02:46 --> Validation Class Initialized
DEBUG - 2010-07-28 00:02:46 --> log_index hostname: sjcplaydb06p.ood.ops
DEBUG - 2010-07-28 00:02:46 --> log_index state: F-SPACE
DEBUG - 2010-07-28 00:02:46 --> log_index size: 1
DEBUG - 2010-07-28 00:02:46 --> log_index continuing...
DEBUG - 2010-07-28 00:02:46 --> Database Driver Class Initialized
DEBUG - 2010-07-28 00:02:46 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjcplaydb06p.ood.ops', 'F-SPACE', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='F-SPACE', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 00:02:46 --> Final output sent to browser
DEBUG - 2010-07-28 00:02:46 --> Total execution time: 0.0594
DEBUG - 2010-07-28 00:31:31 --> Config Class Initialized
DEBUG - 2010-07-28 00:31:31 --> Hooks Class Initialized
DEBUG - 2010-07-28 00:31:31 --> URI Class Initialized
DEBUG - 2010-07-28 00:31:31 --> Router Class Initialized
DEBUG - 2010-07-28 00:31:31 --> Output Class Initialized
DEBUG - 2010-07-28 00:31:31 --> Input Class Initialized
DEBUG - 2010-07-28 00:31:31 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 00:31:31 --> Language Class Initialized
DEBUG - 2010-07-28 00:31:31 --> Loader Class Initialized
DEBUG - 2010-07-28 00:31:31 --> Helper loaded: url_helper
DEBUG - 2010-07-28 00:31:31 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 00:31:31 --> Database Driver Class Initialized
DEBUG - 2010-07-28 00:31:31 --> Controller Class Initialized
DEBUG - 2010-07-28 00:31:31 --> Model Class Initialized
DEBUG - 2010-07-28 00:31:31 --> Starting get_summary_data
DEBUG - 2010-07-28 00:31:31 --> Database Driver Class Initialized
DEBUG - 2010-07-28 00:31:31 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 00:31:31 --> DB query starting...
DEBUG - 2010-07-28 00:31:31 --> DB query ended, calculating time...
DEBUG - 2010-07-28 00:31:31 --> DB query timing: 0.0035610198974609 seconds.
DEBUG - 2010-07-28 00:31:31 --> Returning data: 16 ROWS
DEBUG - 2010-07-28 00:31:31 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 00:31:31 --> Final output sent to browser
DEBUG - 2010-07-28 00:31:31 --> Total execution time: 0.0539
DEBUG - 2010-07-28 00:34:26 --> Config Class Initialized
DEBUG - 2010-07-28 00:34:26 --> Hooks Class Initialized
DEBUG - 2010-07-28 00:34:26 --> URI Class Initialized
DEBUG - 2010-07-28 00:34:26 --> Router Class Initialized
DEBUG - 2010-07-28 00:34:26 --> Output Class Initialized
DEBUG - 2010-07-28 00:34:26 --> Input Class Initialized
DEBUG - 2010-07-28 00:34:26 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 00:34:26 --> Language Class Initialized
DEBUG - 2010-07-28 00:34:26 --> Loader Class Initialized
DEBUG - 2010-07-28 00:34:26 --> Helper loaded: url_helper
DEBUG - 2010-07-28 00:34:26 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 00:34:26 --> Database Driver Class Initialized
DEBUG - 2010-07-28 00:34:26 --> Controller Class Initialized
DEBUG - 2010-07-28 00:34:26 --> log_index function called
DEBUG - 2010-07-28 00:34:26 --> Model Class Initialized
DEBUG - 2010-07-28 00:34:26 --> Helper loaded: form_helper
DEBUG - 2010-07-28 00:34:26 --> Validation Class Initialized
DEBUG - 2010-07-28 00:34:26 --> log_index hostname: sjcplaydb09p.ood.ops
DEBUG - 2010-07-28 00:34:26 --> log_index state: SUCCESS
DEBUG - 2010-07-28 00:34:26 --> log_index size: 1856368109
DEBUG - 2010-07-28 00:34:26 --> log_index continuing...
DEBUG - 2010-07-28 00:34:26 --> Database Driver Class Initialized
DEBUG - 2010-07-28 00:34:26 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjcplaydb09p.ood.ops', 'SUCCESS', '1856368109', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='1856368109', creation_time=NOW();
DEBUG - 2010-07-28 00:34:26 --> Final output sent to browser
DEBUG - 2010-07-28 00:34:26 --> Total execution time: 0.0596
DEBUG - 2010-07-28 00:36:11 --> Config Class Initialized
DEBUG - 2010-07-28 00:36:11 --> Hooks Class Initialized
DEBUG - 2010-07-28 00:36:11 --> URI Class Initialized
DEBUG - 2010-07-28 00:36:11 --> Router Class Initialized
DEBUG - 2010-07-28 00:36:11 --> Output Class Initialized
DEBUG - 2010-07-28 00:36:11 --> Input Class Initialized
DEBUG - 2010-07-28 00:36:11 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 00:36:11 --> Language Class Initialized
DEBUG - 2010-07-28 00:36:11 --> Loader Class Initialized
DEBUG - 2010-07-28 00:36:11 --> Helper loaded: url_helper
DEBUG - 2010-07-28 00:36:11 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 00:36:11 --> Database Driver Class Initialized
DEBUG - 2010-07-28 00:36:11 --> Controller Class Initialized
DEBUG - 2010-07-28 00:36:11 --> log_index function called
DEBUG - 2010-07-28 00:36:11 --> Model Class Initialized
DEBUG - 2010-07-28 00:36:11 --> Helper loaded: form_helper
DEBUG - 2010-07-28 00:36:11 --> Validation Class Initialized
DEBUG - 2010-07-28 00:36:11 --> log_index hostname: sjcplaydb05p.ood.ops
DEBUG - 2010-07-28 00:36:11 --> log_index state: SUCCESS
DEBUG - 2010-07-28 00:36:11 --> log_index size: 2933623494
DEBUG - 2010-07-28 00:36:11 --> log_index continuing...
DEBUG - 2010-07-28 00:36:11 --> Database Driver Class Initialized
DEBUG - 2010-07-28 00:36:11 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjcplaydb05p.ood.ops', 'SUCCESS', '2933623494', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='2933623494', creation_time=NOW();
DEBUG - 2010-07-28 00:36:11 --> Final output sent to browser
DEBUG - 2010-07-28 00:36:11 --> Total execution time: 0.0591
DEBUG - 2010-07-28 01:01:31 --> Config Class Initialized
DEBUG - 2010-07-28 01:01:31 --> Hooks Class Initialized
DEBUG - 2010-07-28 01:01:31 --> URI Class Initialized
DEBUG - 2010-07-28 01:01:31 --> Router Class Initialized
DEBUG - 2010-07-28 01:01:31 --> Output Class Initialized
DEBUG - 2010-07-28 01:01:31 --> Input Class Initialized
DEBUG - 2010-07-28 01:01:31 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 01:01:31 --> Language Class Initialized
DEBUG - 2010-07-28 01:01:31 --> Loader Class Initialized
DEBUG - 2010-07-28 01:01:31 --> Helper loaded: url_helper
DEBUG - 2010-07-28 01:01:31 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 01:01:31 --> Database Driver Class Initialized
DEBUG - 2010-07-28 01:01:31 --> Controller Class Initialized
DEBUG - 2010-07-28 01:01:31 --> Model Class Initialized
DEBUG - 2010-07-28 01:01:31 --> Starting get_summary_data
DEBUG - 2010-07-28 01:01:31 --> Database Driver Class Initialized
DEBUG - 2010-07-28 01:01:31 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 01:01:31 --> DB query starting...
DEBUG - 2010-07-28 01:01:31 --> DB query ended, calculating time...
DEBUG - 2010-07-28 01:01:31 --> DB query timing: 0.0034751892089844 seconds.
DEBUG - 2010-07-28 01:01:31 --> Returning data: 16 ROWS
DEBUG - 2010-07-28 01:01:31 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 01:01:31 --> Final output sent to browser
DEBUG - 2010-07-28 01:01:31 --> Total execution time: 0.0539
DEBUG - 2010-07-28 01:31:32 --> Config Class Initialized
DEBUG - 2010-07-28 01:31:32 --> Hooks Class Initialized
DEBUG - 2010-07-28 01:31:32 --> URI Class Initialized
DEBUG - 2010-07-28 01:31:32 --> Router Class Initialized
DEBUG - 2010-07-28 01:31:32 --> Output Class Initialized
DEBUG - 2010-07-28 01:31:32 --> Input Class Initialized
DEBUG - 2010-07-28 01:31:32 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 01:31:32 --> Language Class Initialized
DEBUG - 2010-07-28 01:31:32 --> Loader Class Initialized
DEBUG - 2010-07-28 01:31:32 --> Helper loaded: url_helper
DEBUG - 2010-07-28 01:31:32 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 01:31:32 --> Database Driver Class Initialized
DEBUG - 2010-07-28 01:31:32 --> Controller Class Initialized
DEBUG - 2010-07-28 01:31:32 --> Model Class Initialized
DEBUG - 2010-07-28 01:31:32 --> Starting get_summary_data
DEBUG - 2010-07-28 01:31:32 --> Database Driver Class Initialized
DEBUG - 2010-07-28 01:31:32 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 01:31:32 --> DB query starting...
DEBUG - 2010-07-28 01:31:32 --> DB query ended, calculating time...
DEBUG - 2010-07-28 01:31:32 --> DB query timing: 0.0026030540466309 seconds.
DEBUG - 2010-07-28 01:31:32 --> Returning data: 16 ROWS
DEBUG - 2010-07-28 01:31:32 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 01:31:32 --> Final output sent to browser
DEBUG - 2010-07-28 01:31:32 --> Total execution time: 0.0531
DEBUG - 2010-07-28 01:40:19 --> Config Class Initialized
DEBUG - 2010-07-28 01:40:19 --> Hooks Class Initialized
DEBUG - 2010-07-28 01:40:19 --> URI Class Initialized
DEBUG - 2010-07-28 01:40:19 --> Router Class Initialized
DEBUG - 2010-07-28 01:40:19 --> Output Class Initialized
DEBUG - 2010-07-28 01:40:19 --> Input Class Initialized
DEBUG - 2010-07-28 01:40:19 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 01:40:19 --> Language Class Initialized
DEBUG - 2010-07-28 01:40:19 --> Loader Class Initialized
DEBUG - 2010-07-28 01:40:19 --> Helper loaded: url_helper
DEBUG - 2010-07-28 01:40:19 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 01:40:19 --> Database Driver Class Initialized
DEBUG - 2010-07-28 01:40:19 --> Controller Class Initialized
DEBUG - 2010-07-28 01:40:19 --> log_index function called
DEBUG - 2010-07-28 01:40:19 --> Model Class Initialized
DEBUG - 2010-07-28 01:40:19 --> Helper loaded: form_helper
DEBUG - 2010-07-28 01:40:19 --> Validation Class Initialized
DEBUG - 2010-07-28 01:40:19 --> log_index hostname: sjcplaydb07p.ood.ops
DEBUG - 2010-07-28 01:40:19 --> log_index state: SUCCESS
DEBUG - 2010-07-28 01:40:19 --> log_index size: 8023941644
DEBUG - 2010-07-28 01:40:19 --> log_index continuing...
DEBUG - 2010-07-28 01:40:19 --> Database Driver Class Initialized
DEBUG - 2010-07-28 01:40:19 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjcplaydb07p.ood.ops', 'SUCCESS', '8023941644', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='8023941644', creation_time=NOW();
DEBUG - 2010-07-28 01:40:19 --> Final output sent to browser
DEBUG - 2010-07-28 01:40:19 --> Total execution time: 0.0599
DEBUG - 2010-07-28 02:01:30 --> Config Class Initialized
DEBUG - 2010-07-28 02:01:30 --> Hooks Class Initialized
DEBUG - 2010-07-28 02:01:30 --> URI Class Initialized
DEBUG - 2010-07-28 02:01:30 --> Router Class Initialized
DEBUG - 2010-07-28 02:01:30 --> Output Class Initialized
DEBUG - 2010-07-28 02:01:30 --> Input Class Initialized
DEBUG - 2010-07-28 02:01:30 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 02:01:30 --> Language Class Initialized
DEBUG - 2010-07-28 02:01:30 --> Loader Class Initialized
DEBUG - 2010-07-28 02:01:30 --> Helper loaded: url_helper
DEBUG - 2010-07-28 02:01:30 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 02:01:30 --> Database Driver Class Initialized
DEBUG - 2010-07-28 02:01:30 --> Controller Class Initialized
DEBUG - 2010-07-28 02:01:30 --> Model Class Initialized
DEBUG - 2010-07-28 02:01:30 --> Starting get_summary_data
DEBUG - 2010-07-28 02:01:30 --> Database Driver Class Initialized
DEBUG - 2010-07-28 02:01:30 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 02:01:30 --> DB query starting...
DEBUG - 2010-07-28 02:01:30 --> DB query ended, calculating time...
DEBUG - 2010-07-28 02:01:30 --> DB query timing: 0.0034358501434326 seconds.
DEBUG - 2010-07-28 02:01:30 --> Returning data: 16 ROWS
DEBUG - 2010-07-28 02:01:30 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 02:01:30 --> Final output sent to browser
DEBUG - 2010-07-28 02:01:30 --> Total execution time: 0.0535
DEBUG - 2010-07-28 02:31:31 --> Config Class Initialized
DEBUG - 2010-07-28 02:31:31 --> Hooks Class Initialized
DEBUG - 2010-07-28 02:31:31 --> URI Class Initialized
DEBUG - 2010-07-28 02:31:31 --> Router Class Initialized
DEBUG - 2010-07-28 02:31:31 --> Output Class Initialized
DEBUG - 2010-07-28 02:31:31 --> Input Class Initialized
DEBUG - 2010-07-28 02:31:31 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 02:31:31 --> Language Class Initialized
DEBUG - 2010-07-28 02:31:31 --> Loader Class Initialized
DEBUG - 2010-07-28 02:31:31 --> Helper loaded: url_helper
DEBUG - 2010-07-28 02:31:31 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 02:31:31 --> Database Driver Class Initialized
DEBUG - 2010-07-28 02:31:31 --> Controller Class Initialized
DEBUG - 2010-07-28 02:31:31 --> Model Class Initialized
DEBUG - 2010-07-28 02:31:31 --> Starting get_summary_data
DEBUG - 2010-07-28 02:31:31 --> Database Driver Class Initialized
DEBUG - 2010-07-28 02:31:31 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 02:31:31 --> DB query starting...
DEBUG - 2010-07-28 02:31:31 --> DB query ended, calculating time...
DEBUG - 2010-07-28 02:31:31 --> DB query timing: 0.0025858879089355 seconds.
DEBUG - 2010-07-28 02:31:31 --> Returning data: 16 ROWS
DEBUG - 2010-07-28 02:31:31 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 02:31:31 --> Final output sent to browser
DEBUG - 2010-07-28 02:31:31 --> Total execution time: 0.0529
DEBUG - 2010-07-28 03:01:22 --> Config Class Initialized
DEBUG - 2010-07-28 03:01:22 --> Hooks Class Initialized
DEBUG - 2010-07-28 03:01:22 --> URI Class Initialized
DEBUG - 2010-07-28 03:01:22 --> Router Class Initialized
DEBUG - 2010-07-28 03:01:22 --> Output Class Initialized
DEBUG - 2010-07-28 03:01:22 --> Input Class Initialized
DEBUG - 2010-07-28 03:01:22 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 03:01:22 --> Language Class Initialized
DEBUG - 2010-07-28 03:01:22 --> Loader Class Initialized
DEBUG - 2010-07-28 03:01:22 --> Helper loaded: url_helper
DEBUG - 2010-07-28 03:01:22 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 03:01:22 --> Database Driver Class Initialized
DEBUG - 2010-07-28 03:01:22 --> Controller Class Initialized
DEBUG - 2010-07-28 03:01:22 --> Model Class Initialized
DEBUG - 2010-07-28 03:01:22 --> Starting get_summary_data
DEBUG - 2010-07-28 03:01:22 --> Database Driver Class Initialized
DEBUG - 2010-07-28 03:01:22 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 03:01:22 --> DB query starting...
DEBUG - 2010-07-28 03:01:22 --> DB query ended, calculating time...
DEBUG - 2010-07-28 03:01:22 --> DB query timing: 0.0025839805603027 seconds.
DEBUG - 2010-07-28 03:01:22 --> Returning data: 16 ROWS
DEBUG - 2010-07-28 03:01:22 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 03:01:22 --> Final output sent to browser
DEBUG - 2010-07-28 03:01:22 --> Total execution time: 0.0529
DEBUG - 2010-07-28 03:31:39 --> Config Class Initialized
DEBUG - 2010-07-28 03:31:39 --> Hooks Class Initialized
DEBUG - 2010-07-28 03:31:39 --> URI Class Initialized
DEBUG - 2010-07-28 03:31:39 --> Router Class Initialized
DEBUG - 2010-07-28 03:31:39 --> Output Class Initialized
DEBUG - 2010-07-28 03:31:39 --> Input Class Initialized
DEBUG - 2010-07-28 03:31:39 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 03:31:39 --> Language Class Initialized
DEBUG - 2010-07-28 03:31:39 --> Loader Class Initialized
DEBUG - 2010-07-28 03:31:39 --> Helper loaded: url_helper
DEBUG - 2010-07-28 03:31:39 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 03:31:39 --> Database Driver Class Initialized
DEBUG - 2010-07-28 03:31:39 --> Controller Class Initialized
DEBUG - 2010-07-28 03:31:39 --> Model Class Initialized
DEBUG - 2010-07-28 03:31:39 --> Starting get_summary_data
DEBUG - 2010-07-28 03:31:39 --> Database Driver Class Initialized
DEBUG - 2010-07-28 03:31:39 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 03:31:39 --> DB query starting...
DEBUG - 2010-07-28 03:31:39 --> DB query ended, calculating time...
DEBUG - 2010-07-28 03:31:39 --> DB query timing: 0.016911029815674 seconds.
DEBUG - 2010-07-28 03:31:39 --> Returning data: 16 ROWS
DEBUG - 2010-07-28 03:31:39 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 03:31:39 --> Final output sent to browser
DEBUG - 2010-07-28 03:31:39 --> Total execution time: 0.1958
DEBUG - 2010-07-28 03:58:27 --> Config Class Initialized
DEBUG - 2010-07-28 03:58:27 --> Hooks Class Initialized
DEBUG - 2010-07-28 03:58:27 --> URI Class Initialized
DEBUG - 2010-07-28 03:58:27 --> Router Class Initialized
DEBUG - 2010-07-28 03:58:27 --> Output Class Initialized
DEBUG - 2010-07-28 03:58:27 --> Input Class Initialized
DEBUG - 2010-07-28 03:58:27 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 03:58:27 --> Language Class Initialized
DEBUG - 2010-07-28 03:58:27 --> Loader Class Initialized
DEBUG - 2010-07-28 03:58:27 --> Helper loaded: url_helper
DEBUG - 2010-07-28 03:58:27 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 03:58:27 --> Database Driver Class Initialized
DEBUG - 2010-07-28 03:58:27 --> Controller Class Initialized
DEBUG - 2010-07-28 03:58:27 --> log_index function called
DEBUG - 2010-07-28 03:58:27 --> Model Class Initialized
DEBUG - 2010-07-28 03:58:27 --> Helper loaded: form_helper
DEBUG - 2010-07-28 03:58:27 --> Validation Class Initialized
DEBUG - 2010-07-28 03:58:27 --> log_index hostname: iadappiandb01p.ood.ops
DEBUG - 2010-07-28 03:58:27 --> log_index state: SUCCESS
DEBUG - 2010-07-28 03:58:27 --> log_index size: 5241447
DEBUG - 2010-07-28 03:58:27 --> log_index continuing...
DEBUG - 2010-07-28 03:58:27 --> Database Driver Class Initialized
DEBUG - 2010-07-28 03:58:27 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadappiandb01p.ood.ops', 'SUCCESS', '5241447', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='5241447', creation_time=NOW();
DEBUG - 2010-07-28 03:58:27 --> Final output sent to browser
DEBUG - 2010-07-28 03:58:27 --> Total execution time: 0.1028
DEBUG - 2010-07-28 04:01:36 --> Config Class Initialized
DEBUG - 2010-07-28 04:01:36 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:01:36 --> URI Class Initialized
DEBUG - 2010-07-28 04:01:36 --> Router Class Initialized
DEBUG - 2010-07-28 04:01:36 --> Output Class Initialized
DEBUG - 2010-07-28 04:01:36 --> Input Class Initialized
DEBUG - 2010-07-28 04:01:36 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:01:36 --> Language Class Initialized
DEBUG - 2010-07-28 04:01:36 --> Loader Class Initialized
DEBUG - 2010-07-28 04:01:36 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:01:36 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:01:36 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:01:36 --> Controller Class Initialized
DEBUG - 2010-07-28 04:01:36 --> Model Class Initialized
DEBUG - 2010-07-28 04:01:36 --> Starting get_summary_data
DEBUG - 2010-07-28 04:01:36 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:01:36 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 04:01:36 --> DB query starting...
DEBUG - 2010-07-28 04:01:36 --> DB query ended, calculating time...
DEBUG - 2010-07-28 04:01:36 --> DB query timing: 0.0034542083740234 seconds.
DEBUG - 2010-07-28 04:01:36 --> Returning data: 16 ROWS
DEBUG - 2010-07-28 04:01:36 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 04:01:36 --> Final output sent to browser
DEBUG - 2010-07-28 04:01:36 --> Total execution time: 0.0538
DEBUG - 2010-07-28 04:02:08 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:08 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:08 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:08 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:08 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:08 --> log_index function called
DEBUG - 2010-07-28 04:02:08 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:08 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:08 --> log_index hostname: iadadobcndb05s
DEBUG - 2010-07-28 04:02:08 --> log_index state: DB-OFF
DEBUG - 2010-07-28 04:02:08 --> log_index size: 1
DEBUG - 2010-07-28 04:02:08 --> log_index continuing...
DEBUG - 2010-07-28 04:02:08 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadadobcndb05s', 'DB-OFF', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='DB-OFF', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 04:02:08 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:08 --> Total execution time: 0.0601
DEBUG - 2010-07-28 04:02:08 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:08 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:08 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:08 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:08 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:08 --> log_index function called
DEBUG - 2010-07-28 04:02:08 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:08 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:08 --> log_index hostname: iadadobsgdb02p
DEBUG - 2010-07-28 04:02:08 --> log_index state: DB-OFF
DEBUG - 2010-07-28 04:02:08 --> log_index size: 1
DEBUG - 2010-07-28 04:02:08 --> log_index continuing...
DEBUG - 2010-07-28 04:02:08 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:08 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadadobsgdb02p', 'DB-OFF', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='DB-OFF', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 04:02:08 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:08 --> Total execution time: 0.0601
DEBUG - 2010-07-28 04:02:09 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:09 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:09 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:09 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:09 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:09 --> log_index function called
DEBUG - 2010-07-28 04:02:09 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:09 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:09 --> log_index hostname: iadadobpegdb02s
DEBUG - 2010-07-28 04:02:09 --> log_index state: DB-OFF
DEBUG - 2010-07-28 04:02:09 --> log_index size: 1
DEBUG - 2010-07-28 04:02:09 --> log_index continuing...
DEBUG - 2010-07-28 04:02:09 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadadobpegdb02s', 'DB-OFF', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='DB-OFF', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 04:02:09 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:09 --> Total execution time: 0.0615
DEBUG - 2010-07-28 04:02:09 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:09 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:09 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:09 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:09 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:09 --> log_index function called
DEBUG - 2010-07-28 04:02:09 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:09 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:09 --> log_index hostname: iadadobpegdb01p
DEBUG - 2010-07-28 04:02:09 --> log_index state: DB-OFF
DEBUG - 2010-07-28 04:02:09 --> log_index size: 1
DEBUG - 2010-07-28 04:02:09 --> log_index continuing...
DEBUG - 2010-07-28 04:02:09 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadadobpegdb01p', 'DB-OFF', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='DB-OFF', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 04:02:09 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:09 --> Total execution time: 0.0625
DEBUG - 2010-07-28 04:02:09 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:09 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:09 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:09 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:09 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:09 --> log_index function called
DEBUG - 2010-07-28 04:02:09 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:09 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:09 --> log_index hostname: iadappiandb02p.ood.ops
DEBUG - 2010-07-28 04:02:09 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:02:09 --> log_index size: 496960
DEBUG - 2010-07-28 04:02:09 --> log_index continuing...
DEBUG - 2010-07-28 04:02:09 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadappiandb02p.ood.ops', 'SUCCESS', '496960', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='496960', creation_time=NOW();
DEBUG - 2010-07-28 04:02:09 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:09 --> Total execution time: 0.0592
DEBUG - 2010-07-28 04:02:09 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:09 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:09 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:09 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:10 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:10 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:10 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:10 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:10 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:10 --> log_index function called
DEBUG - 2010-07-28 04:02:10 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:10 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:10 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:10 --> log_index hostname: iadadobpegdb02p
DEBUG - 2010-07-28 04:02:10 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:02:10 --> log_index size: 235096
DEBUG - 2010-07-28 04:02:10 --> log_index continuing...
DEBUG - 2010-07-28 04:02:10 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:10 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadadobpegdb02p', 'SUCCESS', '235096', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='235096', creation_time=NOW();
DEBUG - 2010-07-28 04:02:10 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:10 --> Total execution time: 0.0600
DEBUG - 2010-07-28 04:02:10 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:10 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:10 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:10 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:10 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:10 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:10 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:10 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:10 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:10 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:10 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:10 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:10 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:10 --> log_index function called
DEBUG - 2010-07-28 04:02:10 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:10 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:10 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:10 --> log_index hostname: iadadobpegdb01s
DEBUG - 2010-07-28 04:02:10 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:02:10 --> log_index size: 138584
DEBUG - 2010-07-28 04:02:10 --> log_index continuing...
DEBUG - 2010-07-28 04:02:10 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:10 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadadobpegdb01s', 'SUCCESS', '138584', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='138584', creation_time=NOW();
DEBUG - 2010-07-28 04:02:10 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:10 --> Total execution time: 0.0597
DEBUG - 2010-07-28 04:02:11 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:11 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:11 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:11 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:11 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:11 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:11 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:11 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:11 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:11 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:11 --> log_index function called
DEBUG - 2010-07-28 04:02:11 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:11 --> log_index function called
DEBUG - 2010-07-28 04:02:11 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:11 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:11 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:11 --> log_index hostname: iadaverqdb01p.ood.ops
DEBUG - 2010-07-28 04:02:11 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:02:11 --> log_index size: 1839275
DEBUG - 2010-07-28 04:02:11 --> log_index continuing...
DEBUG - 2010-07-28 04:02:11 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:11 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:11 --> log_index hostname: iadappiandb05p.ood.ops
DEBUG - 2010-07-28 04:02:11 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:02:11 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:11 --> log_index size: 155508
DEBUG - 2010-07-28 04:02:11 --> log_index continuing...
DEBUG - 2010-07-28 04:02:11 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadaverqdb01p.ood.ops', 'SUCCESS', '1839275', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='1839275', creation_time=NOW();
DEBUG - 2010-07-28 04:02:11 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:11 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Total execution time: 0.0608
DEBUG - 2010-07-28 04:02:11 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadappiandb05p.ood.ops', 'SUCCESS', '155508', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='155508', creation_time=NOW();
DEBUG - 2010-07-28 04:02:11 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:11 --> Total execution time: 0.0613
DEBUG - 2010-07-28 04:02:11 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:11 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:11 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:11 --> log_index function called
DEBUG - 2010-07-28 04:02:11 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:11 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:11 --> log_index hostname: iadengdb02p.ood.ops
DEBUG - 2010-07-28 04:02:11 --> log_index state: DB-OFF
DEBUG - 2010-07-28 04:02:11 --> log_index size: 1
DEBUG - 2010-07-28 04:02:11 --> log_index continuing...
DEBUG - 2010-07-28 04:02:11 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadengdb02p.ood.ops', 'DB-OFF', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='DB-OFF', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 04:02:11 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:11 --> Total execution time: 0.0599
DEBUG - 2010-07-28 04:02:11 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:11 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:11 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:11 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:11 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:11 --> log_index function called
DEBUG - 2010-07-28 04:02:11 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:11 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:11 --> log_index hostname: iadtricdb02s.ood.ops
DEBUG - 2010-07-28 04:02:11 --> log_index state: DB-OFF
DEBUG - 2010-07-28 04:02:11 --> log_index size: 1
DEBUG - 2010-07-28 04:02:11 --> log_index continuing...
DEBUG - 2010-07-28 04:02:11 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:11 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadtricdb02s.ood.ops', 'DB-OFF', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='DB-OFF', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 04:02:11 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:11 --> Total execution time: 0.0599
DEBUG - 2010-07-28 04:02:13 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:13 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:13 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:13 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:13 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:13 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:13 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:13 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:13 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:13 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:13 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:13 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:13 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:13 --> log_index function called
DEBUG - 2010-07-28 04:02:13 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:13 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:13 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:13 --> log_index hostname: iadadobrcdb02p
DEBUG - 2010-07-28 04:02:13 --> log_index state: DB-OFF
DEBUG - 2010-07-28 04:02:13 --> log_index size: 1
DEBUG - 2010-07-28 04:02:13 --> log_index continuing...
DEBUG - 2010-07-28 04:02:13 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:13 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadadobrcdb02p', 'DB-OFF', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='DB-OFF', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 04:02:13 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:13 --> Total execution time: 0.0593
DEBUG - 2010-07-28 04:02:14 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:14 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:14 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:14 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:14 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:14 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:14 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:14 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:14 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:14 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:14 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:14 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:14 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:14 --> log_index function called
DEBUG - 2010-07-28 04:02:14 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:14 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:14 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:14 --> log_index hostname: sjcacceptdb01p.ood.ops
DEBUG - 2010-07-28 04:02:14 --> log_index state: DB-OFF
DEBUG - 2010-07-28 04:02:14 --> log_index size: 1
DEBUG - 2010-07-28 04:02:14 --> log_index continuing...
DEBUG - 2010-07-28 04:02:14 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:14 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjcacceptdb01p.ood.ops', 'DB-OFF', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='DB-OFF', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 04:02:14 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:14 --> Total execution time: 0.0600
DEBUG - 2010-07-28 04:02:15 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:15 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:15 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:15 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:15 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:15 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:15 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:15 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:15 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:15 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:15 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:15 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:15 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:15 --> log_index function called
DEBUG - 2010-07-28 04:02:15 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:15 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:15 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:15 --> log_index hostname: iadalitdb02p.ood.ops
DEBUG - 2010-07-28 04:02:15 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:02:15 --> log_index size: 223160
DEBUG - 2010-07-28 04:02:15 --> log_index continuing...
DEBUG - 2010-07-28 04:02:15 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:15 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadalitdb02p.ood.ops', 'SUCCESS', '223160', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='223160', creation_time=NOW();
DEBUG - 2010-07-28 04:02:15 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:15 --> Total execution time: 0.0595
DEBUG - 2010-07-28 04:02:15 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:15 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:15 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:15 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:15 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:15 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:15 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:15 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:15 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:15 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:15 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:15 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:15 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:15 --> log_index function called
DEBUG - 2010-07-28 04:02:15 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:16 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:16 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:16 --> log_index hostname: iadappiandb06p.ood.ops
DEBUG - 2010-07-28 04:02:16 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:02:16 --> log_index size: 569861
DEBUG - 2010-07-28 04:02:16 --> log_index continuing...
DEBUG - 2010-07-28 04:02:16 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:16 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadappiandb06p.ood.ops', 'SUCCESS', '569861', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='569861', creation_time=NOW();
DEBUG - 2010-07-28 04:02:16 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:16 --> Total execution time: 0.0589
DEBUG - 2010-07-28 04:02:16 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:16 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:16 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:16 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:16 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:16 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:16 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:16 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:16 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:16 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:16 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:16 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:16 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:16 --> log_index function called
DEBUG - 2010-07-28 04:02:16 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:16 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:16 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:16 --> log_index hostname: iadeduffdb01p
DEBUG - 2010-07-28 04:02:16 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:02:16 --> log_index size: 455
DEBUG - 2010-07-28 04:02:16 --> log_index continuing...
DEBUG - 2010-07-28 04:02:16 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:16 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadeduffdb01p', 'SUCCESS', '455', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='455', creation_time=NOW();
DEBUG - 2010-07-28 04:02:16 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:16 --> Total execution time: 0.0600
DEBUG - 2010-07-28 04:02:20 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:20 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:20 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:20 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:20 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:20 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:20 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:20 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:20 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:20 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:20 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:20 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:20 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:20 --> log_index function called
DEBUG - 2010-07-28 04:02:20 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:20 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:20 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:20 --> log_index hostname: iadduldb03p.ood.ops
DEBUG - 2010-07-28 04:02:20 --> log_index state: DB-OFF
DEBUG - 2010-07-28 04:02:20 --> log_index size: 1
DEBUG - 2010-07-28 04:02:20 --> log_index continuing...
DEBUG - 2010-07-28 04:02:20 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:20 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadduldb03p.ood.ops', 'DB-OFF', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='DB-OFF', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 04:02:20 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:20 --> Total execution time: 0.0596
DEBUG - 2010-07-28 04:02:22 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:22 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:22 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:22 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:22 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:22 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:22 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:22 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:22 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:22 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:22 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:22 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:22 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:22 --> log_index function called
DEBUG - 2010-07-28 04:02:22 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:22 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:22 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:22 --> log_index hostname: sjccorvwa01s
DEBUG - 2010-07-28 04:02:22 --> log_index state: DB-OFF
DEBUG - 2010-07-28 04:02:22 --> log_index size: 1
DEBUG - 2010-07-28 04:02:22 --> log_index continuing...
DEBUG - 2010-07-28 04:02:22 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:22 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjccorvwa01s', 'DB-OFF', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='DB-OFF', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 04:02:22 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:22 --> Total execution time: 0.0587
DEBUG - 2010-07-28 04:02:23 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:23 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:23 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:23 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:23 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:23 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:23 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:23 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:23 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:23 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:23 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:23 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:23 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:23 --> log_index function called
DEBUG - 2010-07-28 04:02:23 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:23 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:23 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:23 --> log_index hostname: iadalitdb01p.ood.ops
DEBUG - 2010-07-28 04:02:23 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:02:23 --> log_index size: 223203
DEBUG - 2010-07-28 04:02:23 --> log_index continuing...
DEBUG - 2010-07-28 04:02:23 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:23 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadalitdb01p.ood.ops', 'SUCCESS', '223203', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='223203', creation_time=NOW();
DEBUG - 2010-07-28 04:02:23 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:23 --> Total execution time: 0.0598
DEBUG - 2010-07-28 04:02:24 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:24 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:24 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:24 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:24 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:24 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:24 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:24 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:24 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:24 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:24 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:24 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:24 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:24 --> log_index function called
DEBUG - 2010-07-28 04:02:24 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:24 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:24 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:24 --> log_index hostname: iadappiandb04p
DEBUG - 2010-07-28 04:02:24 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:02:24 --> log_index size: 150926
DEBUG - 2010-07-28 04:02:24 --> log_index continuing...
DEBUG - 2010-07-28 04:02:24 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:24 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadappiandb04p', 'SUCCESS', '150926', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='150926', creation_time=NOW();
DEBUG - 2010-07-28 04:02:24 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:24 --> Total execution time: 0.0591
DEBUG - 2010-07-28 04:02:29 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:29 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:29 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:29 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:29 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:29 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:29 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:29 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:29 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:29 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:29 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:29 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:29 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:29 --> log_index function called
DEBUG - 2010-07-28 04:02:29 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:29 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:29 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:29 --> log_index hostname: iadappiandb03p.ood.ops
DEBUG - 2010-07-28 04:02:29 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:02:29 --> log_index size: 2693804
DEBUG - 2010-07-28 04:02:29 --> log_index continuing...
DEBUG - 2010-07-28 04:02:29 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:29 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadappiandb03p.ood.ops', 'SUCCESS', '2693804', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='2693804', creation_time=NOW();
DEBUG - 2010-07-28 04:02:29 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:29 --> Total execution time: 0.0596
DEBUG - 2010-07-28 04:02:39 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:39 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:39 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:39 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:39 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:39 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:39 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:39 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:39 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:39 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:39 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:39 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:39 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:39 --> log_index function called
DEBUG - 2010-07-28 04:02:39 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:39 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:39 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:39 --> log_index hostname: sjctricdb01s.ood.ops
DEBUG - 2010-07-28 04:02:39 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:02:39 --> log_index size: 40484213
DEBUG - 2010-07-28 04:02:39 --> log_index continuing...
DEBUG - 2010-07-28 04:02:39 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:39 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjctricdb01s.ood.ops', 'SUCCESS', '40484213', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='40484213', creation_time=NOW();
DEBUG - 2010-07-28 04:02:39 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:39 --> Total execution time: 0.0594
DEBUG - 2010-07-28 04:02:46 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:46 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:46 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:46 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:46 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:46 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:46 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:46 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:46 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:46 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:46 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:46 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:46 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:46 --> log_index function called
DEBUG - 2010-07-28 04:02:46 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:46 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:46 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:46 --> log_index hostname: iadadobcndb04s
DEBUG - 2010-07-28 04:02:46 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:02:46 --> log_index size: 120393080
DEBUG - 2010-07-28 04:02:46 --> log_index continuing...
DEBUG - 2010-07-28 04:02:46 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:46 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadadobcndb04s', 'SUCCESS', '120393080', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='120393080', creation_time=NOW();
DEBUG - 2010-07-28 04:02:46 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:46 --> Total execution time: 0.0634
DEBUG - 2010-07-28 04:02:49 --> Config Class Initialized
DEBUG - 2010-07-28 04:02:49 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:02:49 --> URI Class Initialized
DEBUG - 2010-07-28 04:02:49 --> Router Class Initialized
DEBUG - 2010-07-28 04:02:49 --> Output Class Initialized
DEBUG - 2010-07-28 04:02:49 --> Input Class Initialized
DEBUG - 2010-07-28 04:02:49 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:02:49 --> Language Class Initialized
DEBUG - 2010-07-28 04:02:49 --> Loader Class Initialized
DEBUG - 2010-07-28 04:02:49 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:02:49 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:02:49 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:49 --> Controller Class Initialized
DEBUG - 2010-07-28 04:02:49 --> log_index function called
DEBUG - 2010-07-28 04:02:49 --> Model Class Initialized
DEBUG - 2010-07-28 04:02:49 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:02:49 --> Validation Class Initialized
DEBUG - 2010-07-28 04:02:49 --> log_index hostname: iadadobsgdb01p
DEBUG - 2010-07-28 04:02:49 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:02:49 --> log_index size: 256090289
DEBUG - 2010-07-28 04:02:49 --> log_index continuing...
DEBUG - 2010-07-28 04:02:49 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:02:49 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadadobsgdb01p', 'SUCCESS', '256090289', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='256090289', creation_time=NOW();
DEBUG - 2010-07-28 04:02:49 --> Final output sent to browser
DEBUG - 2010-07-28 04:02:49 --> Total execution time: 0.0590
DEBUG - 2010-07-28 04:03:00 --> Config Class Initialized
DEBUG - 2010-07-28 04:03:00 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:03:00 --> URI Class Initialized
DEBUG - 2010-07-28 04:03:00 --> Router Class Initialized
DEBUG - 2010-07-28 04:03:00 --> Output Class Initialized
DEBUG - 2010-07-28 04:03:00 --> Input Class Initialized
DEBUG - 2010-07-28 04:03:00 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:03:00 --> Language Class Initialized
DEBUG - 2010-07-28 04:03:00 --> Loader Class Initialized
DEBUG - 2010-07-28 04:03:00 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:03:00 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:03:00 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:03:00 --> Controller Class Initialized
DEBUG - 2010-07-28 04:03:00 --> log_index function called
DEBUG - 2010-07-28 04:03:00 --> Model Class Initialized
DEBUG - 2010-07-28 04:03:00 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:03:00 --> Validation Class Initialized
DEBUG - 2010-07-28 04:03:00 --> log_index hostname: iadadobcndb06s
DEBUG - 2010-07-28 04:03:00 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:03:00 --> log_index size: 115287808
DEBUG - 2010-07-28 04:03:00 --> log_index continuing...
DEBUG - 2010-07-28 04:03:00 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:03:00 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadadobcndb06s', 'SUCCESS', '115287808', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='115287808', creation_time=NOW();
DEBUG - 2010-07-28 04:03:00 --> Final output sent to browser
DEBUG - 2010-07-28 04:03:00 --> Total execution time: 0.0592
DEBUG - 2010-07-28 04:03:46 --> Config Class Initialized
DEBUG - 2010-07-28 04:03:46 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:03:46 --> URI Class Initialized
DEBUG - 2010-07-28 04:03:46 --> Router Class Initialized
DEBUG - 2010-07-28 04:03:46 --> Output Class Initialized
DEBUG - 2010-07-28 04:03:46 --> Input Class Initialized
DEBUG - 2010-07-28 04:03:46 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:03:46 --> Language Class Initialized
DEBUG - 2010-07-28 04:03:46 --> Loader Class Initialized
DEBUG - 2010-07-28 04:03:46 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:03:46 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:03:46 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:03:46 --> Controller Class Initialized
DEBUG - 2010-07-28 04:03:46 --> log_index function called
DEBUG - 2010-07-28 04:03:46 --> Model Class Initialized
DEBUG - 2010-07-28 04:03:46 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:03:46 --> Validation Class Initialized
DEBUG - 2010-07-28 04:03:46 --> log_index hostname: iadacceptwa04p.ood.ops
DEBUG - 2010-07-28 04:03:46 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:03:46 --> log_index size: 18613167
DEBUG - 2010-07-28 04:03:46 --> log_index continuing...
DEBUG - 2010-07-28 04:03:46 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:03:46 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadacceptwa04p.ood.ops', 'SUCCESS', '18613167', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='18613167', creation_time=NOW();
DEBUG - 2010-07-28 04:03:46 --> Final output sent to browser
DEBUG - 2010-07-28 04:03:46 --> Total execution time: 0.0600
DEBUG - 2010-07-28 04:04:05 --> Config Class Initialized
DEBUG - 2010-07-28 04:04:05 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:04:05 --> URI Class Initialized
DEBUG - 2010-07-28 04:04:05 --> Router Class Initialized
DEBUG - 2010-07-28 04:04:05 --> Output Class Initialized
DEBUG - 2010-07-28 04:04:05 --> Input Class Initialized
DEBUG - 2010-07-28 04:04:05 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:04:05 --> Language Class Initialized
DEBUG - 2010-07-28 04:04:05 --> Loader Class Initialized
DEBUG - 2010-07-28 04:04:05 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:04:05 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:04:05 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:04:05 --> Controller Class Initialized
DEBUG - 2010-07-28 04:04:05 --> log_index function called
DEBUG - 2010-07-28 04:04:05 --> Model Class Initialized
DEBUG - 2010-07-28 04:04:05 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:04:05 --> Validation Class Initialized
DEBUG - 2010-07-28 04:04:05 --> log_index hostname: iadduldb02p.ood.ops
DEBUG - 2010-07-28 04:04:05 --> log_index state: F-SPACE
DEBUG - 2010-07-28 04:04:05 --> log_index size: 1
DEBUG - 2010-07-28 04:04:05 --> log_index continuing...
DEBUG - 2010-07-28 04:04:05 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:04:05 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadduldb02p.ood.ops', 'F-SPACE', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='F-SPACE', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 04:04:05 --> Final output sent to browser
DEBUG - 2010-07-28 04:04:05 --> Total execution time: 0.0606
DEBUG - 2010-07-28 04:04:32 --> Config Class Initialized
DEBUG - 2010-07-28 04:04:32 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:04:32 --> URI Class Initialized
DEBUG - 2010-07-28 04:04:32 --> Router Class Initialized
DEBUG - 2010-07-28 04:04:32 --> Output Class Initialized
DEBUG - 2010-07-28 04:04:32 --> Input Class Initialized
DEBUG - 2010-07-28 04:04:32 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:04:32 --> Language Class Initialized
DEBUG - 2010-07-28 04:04:32 --> Loader Class Initialized
DEBUG - 2010-07-28 04:04:32 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:04:32 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:04:32 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:04:32 --> Controller Class Initialized
DEBUG - 2010-07-28 04:04:32 --> log_index function called
DEBUG - 2010-07-28 04:04:32 --> Model Class Initialized
DEBUG - 2010-07-28 04:04:32 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:04:32 --> Validation Class Initialized
DEBUG - 2010-07-28 04:04:32 --> log_index hostname: iadaptewadb01p
DEBUG - 2010-07-28 04:04:32 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:04:32 --> log_index size: 141575167
DEBUG - 2010-07-28 04:04:32 --> log_index continuing...
DEBUG - 2010-07-28 04:04:32 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:04:32 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadaptewadb01p', 'SUCCESS', '141575167', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='141575167', creation_time=NOW();
DEBUG - 2010-07-28 04:04:32 --> Final output sent to browser
DEBUG - 2010-07-28 04:04:32 --> Total execution time: 0.0593
DEBUG - 2010-07-28 04:05:12 --> Config Class Initialized
DEBUG - 2010-07-28 04:05:12 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:05:12 --> URI Class Initialized
DEBUG - 2010-07-28 04:05:12 --> Router Class Initialized
DEBUG - 2010-07-28 04:05:12 --> Output Class Initialized
DEBUG - 2010-07-28 04:05:12 --> Input Class Initialized
DEBUG - 2010-07-28 04:05:12 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:05:12 --> Language Class Initialized
DEBUG - 2010-07-28 04:05:12 --> Loader Class Initialized
DEBUG - 2010-07-28 04:05:12 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:05:12 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:05:12 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:05:12 --> Controller Class Initialized
DEBUG - 2010-07-28 04:05:12 --> log_index function called
DEBUG - 2010-07-28 04:05:12 --> Model Class Initialized
DEBUG - 2010-07-28 04:05:12 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:05:12 --> Validation Class Initialized
DEBUG - 2010-07-28 04:05:12 --> log_index hostname: iadspredb01p.ood.ops
DEBUG - 2010-07-28 04:05:12 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:05:12 --> log_index size: 256477626
DEBUG - 2010-07-28 04:05:12 --> log_index continuing...
DEBUG - 2010-07-28 04:05:12 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:05:12 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadspredb01p.ood.ops', 'SUCCESS', '256477626', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='256477626', creation_time=NOW();
DEBUG - 2010-07-28 04:05:12 --> Final output sent to browser
DEBUG - 2010-07-28 04:05:12 --> Total execution time: 0.0598
DEBUG - 2010-07-28 04:06:33 --> Config Class Initialized
DEBUG - 2010-07-28 04:06:33 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:06:33 --> URI Class Initialized
DEBUG - 2010-07-28 04:06:33 --> Router Class Initialized
DEBUG - 2010-07-28 04:06:33 --> Output Class Initialized
DEBUG - 2010-07-28 04:06:33 --> Input Class Initialized
DEBUG - 2010-07-28 04:06:33 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:06:33 --> Language Class Initialized
DEBUG - 2010-07-28 04:06:33 --> Loader Class Initialized
DEBUG - 2010-07-28 04:06:33 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:06:33 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:06:33 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:06:33 --> Controller Class Initialized
DEBUG - 2010-07-28 04:06:33 --> log_index function called
DEBUG - 2010-07-28 04:06:33 --> Model Class Initialized
DEBUG - 2010-07-28 04:06:33 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:06:33 --> Validation Class Initialized
DEBUG - 2010-07-28 04:06:33 --> log_index hostname: iadopsmysqlclustdb01p.ood.ops
DEBUG - 2010-07-28 04:06:33 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:06:33 --> log_index size: 5091821
DEBUG - 2010-07-28 04:06:33 --> log_index continuing...
DEBUG - 2010-07-28 04:06:33 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:06:33 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadopsmysqlclustdb01p.ood.ops', 'SUCCESS', '5091821', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='5091821', creation_time=NOW();
DEBUG - 2010-07-28 04:06:33 --> Final output sent to browser
DEBUG - 2010-07-28 04:06:33 --> Total execution time: 0.0603
DEBUG - 2010-07-28 04:11:35 --> Config Class Initialized
DEBUG - 2010-07-28 04:11:35 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:11:35 --> URI Class Initialized
DEBUG - 2010-07-28 04:11:35 --> Router Class Initialized
DEBUG - 2010-07-28 04:11:35 --> Output Class Initialized
DEBUG - 2010-07-28 04:11:35 --> Input Class Initialized
DEBUG - 2010-07-28 04:11:35 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:11:35 --> Language Class Initialized
DEBUG - 2010-07-28 04:11:35 --> Loader Class Initialized
DEBUG - 2010-07-28 04:11:35 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:11:35 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:11:35 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:11:35 --> Controller Class Initialized
DEBUG - 2010-07-28 04:11:35 --> log_index function called
DEBUG - 2010-07-28 04:11:36 --> Model Class Initialized
DEBUG - 2010-07-28 04:11:36 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:11:36 --> Validation Class Initialized
DEBUG - 2010-07-28 04:11:36 --> log_index hostname: iadduldb04s.ood.ops
DEBUG - 2010-07-28 04:11:36 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:11:36 --> log_index size: 147867
DEBUG - 2010-07-28 04:11:36 --> log_index continuing...
DEBUG - 2010-07-28 04:11:36 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:11:36 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadduldb04s.ood.ops', 'SUCCESS', '147867', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='147867', creation_time=NOW();
DEBUG - 2010-07-28 04:11:36 --> Final output sent to browser
DEBUG - 2010-07-28 04:11:36 --> Total execution time: 0.0645
DEBUG - 2010-07-28 04:11:48 --> Config Class Initialized
DEBUG - 2010-07-28 04:11:48 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:11:48 --> URI Class Initialized
DEBUG - 2010-07-28 04:11:48 --> Router Class Initialized
DEBUG - 2010-07-28 04:11:48 --> Output Class Initialized
DEBUG - 2010-07-28 04:11:48 --> Input Class Initialized
DEBUG - 2010-07-28 04:11:48 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:11:48 --> Language Class Initialized
DEBUG - 2010-07-28 04:11:48 --> Loader Class Initialized
DEBUG - 2010-07-28 04:11:48 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:11:48 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:11:48 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:11:48 --> Controller Class Initialized
DEBUG - 2010-07-28 04:11:48 --> log_index function called
DEBUG - 2010-07-28 04:11:48 --> Model Class Initialized
DEBUG - 2010-07-28 04:11:48 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:11:48 --> Validation Class Initialized
DEBUG - 2010-07-28 04:11:48 --> log_index hostname: iadtricdb01s.ood.ops
DEBUG - 2010-07-28 04:11:48 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:11:48 --> log_index size: 379723194
DEBUG - 2010-07-28 04:11:48 --> log_index continuing...
DEBUG - 2010-07-28 04:11:48 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:11:48 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadtricdb01s.ood.ops', 'SUCCESS', '379723194', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='379723194', creation_time=NOW();
DEBUG - 2010-07-28 04:11:48 --> Final output sent to browser
DEBUG - 2010-07-28 04:11:48 --> Total execution time: 0.0598
DEBUG - 2010-07-28 04:12:24 --> Config Class Initialized
DEBUG - 2010-07-28 04:12:24 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:12:24 --> URI Class Initialized
DEBUG - 2010-07-28 04:12:24 --> Router Class Initialized
DEBUG - 2010-07-28 04:12:24 --> Output Class Initialized
DEBUG - 2010-07-28 04:12:24 --> Input Class Initialized
DEBUG - 2010-07-28 04:12:24 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:12:24 --> Language Class Initialized
DEBUG - 2010-07-28 04:12:24 --> Loader Class Initialized
DEBUG - 2010-07-28 04:12:24 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:12:24 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:12:24 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:12:24 --> Controller Class Initialized
DEBUG - 2010-07-28 04:12:24 --> log_index function called
DEBUG - 2010-07-28 04:12:24 --> Model Class Initialized
DEBUG - 2010-07-28 04:12:24 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:12:24 --> Validation Class Initialized
DEBUG - 2010-07-28 04:12:24 --> log_index hostname: iadduldb08s.ood.ops
DEBUG - 2010-07-28 04:12:24 --> log_index state: DB-OFF
DEBUG - 2010-07-28 04:12:24 --> log_index size: 1
DEBUG - 2010-07-28 04:12:24 --> log_index continuing...
DEBUG - 2010-07-28 04:12:24 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:12:24 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadduldb08s.ood.ops', 'DB-OFF', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='DB-OFF', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 04:12:24 --> Final output sent to browser
DEBUG - 2010-07-28 04:12:24 --> Total execution time: 0.0601
DEBUG - 2010-07-28 04:12:48 --> Config Class Initialized
DEBUG - 2010-07-28 04:12:48 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:12:48 --> URI Class Initialized
DEBUG - 2010-07-28 04:12:48 --> Router Class Initialized
DEBUG - 2010-07-28 04:12:48 --> Output Class Initialized
DEBUG - 2010-07-28 04:12:48 --> Input Class Initialized
DEBUG - 2010-07-28 04:12:48 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:12:48 --> Language Class Initialized
DEBUG - 2010-07-28 04:12:48 --> Loader Class Initialized
DEBUG - 2010-07-28 04:12:48 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:12:48 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:12:48 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:12:48 --> Controller Class Initialized
DEBUG - 2010-07-28 04:12:48 --> log_index function called
DEBUG - 2010-07-28 04:12:48 --> Model Class Initialized
DEBUG - 2010-07-28 04:12:48 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:12:48 --> Validation Class Initialized
DEBUG - 2010-07-28 04:12:48 --> log_index hostname: iadduldb03s.ood.ops
DEBUG - 2010-07-28 04:12:48 --> log_index state: F-CONN
DEBUG - 2010-07-28 04:12:48 --> log_index size: 1
DEBUG - 2010-07-28 04:12:48 --> log_index continuing...
DEBUG - 2010-07-28 04:12:48 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:12:48 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadduldb03s.ood.ops', 'F-CONN', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='F-CONN', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 04:12:48 --> Final output sent to browser
DEBUG - 2010-07-28 04:12:48 --> Total execution time: 0.0596
DEBUG - 2010-07-28 04:13:35 --> Config Class Initialized
DEBUG - 2010-07-28 04:13:35 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:13:35 --> URI Class Initialized
DEBUG - 2010-07-28 04:13:35 --> Router Class Initialized
DEBUG - 2010-07-28 04:13:35 --> Output Class Initialized
DEBUG - 2010-07-28 04:13:35 --> Input Class Initialized
DEBUG - 2010-07-28 04:13:35 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:13:35 --> Language Class Initialized
DEBUG - 2010-07-28 04:13:35 --> Loader Class Initialized
DEBUG - 2010-07-28 04:13:35 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:13:35 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:13:35 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:13:35 --> Controller Class Initialized
DEBUG - 2010-07-28 04:13:35 --> log_index function called
DEBUG - 2010-07-28 04:13:35 --> Model Class Initialized
DEBUG - 2010-07-28 04:13:35 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:13:35 --> Validation Class Initialized
DEBUG - 2010-07-28 04:13:35 --> log_index hostname: iadduldb07s.ood.ops
DEBUG - 2010-07-28 04:13:35 --> log_index state: DB-OFF
DEBUG - 2010-07-28 04:13:35 --> log_index size: 1
DEBUG - 2010-07-28 04:13:35 --> log_index continuing...
DEBUG - 2010-07-28 04:13:35 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:13:35 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadduldb07s.ood.ops', 'DB-OFF', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='DB-OFF', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 04:13:35 --> Final output sent to browser
DEBUG - 2010-07-28 04:13:35 --> Total execution time: 0.0603
DEBUG - 2010-07-28 04:15:30 --> Config Class Initialized
DEBUG - 2010-07-28 04:15:30 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:15:30 --> URI Class Initialized
DEBUG - 2010-07-28 04:15:30 --> Router Class Initialized
DEBUG - 2010-07-28 04:15:30 --> Output Class Initialized
DEBUG - 2010-07-28 04:15:30 --> Input Class Initialized
DEBUG - 2010-07-28 04:15:30 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:15:30 --> Language Class Initialized
DEBUG - 2010-07-28 04:15:30 --> Loader Class Initialized
DEBUG - 2010-07-28 04:15:30 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:15:30 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:15:30 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:15:30 --> Controller Class Initialized
DEBUG - 2010-07-28 04:15:30 --> log_index function called
DEBUG - 2010-07-28 04:15:30 --> Model Class Initialized
DEBUG - 2010-07-28 04:15:30 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:15:30 --> Validation Class Initialized
DEBUG - 2010-07-28 04:15:30 --> log_index hostname: iad6fdb01p.ood.ops
DEBUG - 2010-07-28 04:15:30 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:15:30 --> log_index size: 1074517045
DEBUG - 2010-07-28 04:15:30 --> log_index continuing...
DEBUG - 2010-07-28 04:15:30 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:15:30 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iad6fdb01p.ood.ops', 'SUCCESS', '1074517045', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='1074517045', creation_time=NOW();
DEBUG - 2010-07-28 04:15:30 --> Final output sent to browser
DEBUG - 2010-07-28 04:15:30 --> Total execution time: 0.0621
DEBUG - 2010-07-28 04:31:04 --> Config Class Initialized
DEBUG - 2010-07-28 04:31:04 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:31:04 --> URI Class Initialized
DEBUG - 2010-07-28 04:31:04 --> Router Class Initialized
DEBUG - 2010-07-28 04:31:04 --> Output Class Initialized
DEBUG - 2010-07-28 04:31:04 --> Input Class Initialized
DEBUG - 2010-07-28 04:31:04 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:31:04 --> Language Class Initialized
DEBUG - 2010-07-28 04:31:04 --> Loader Class Initialized
DEBUG - 2010-07-28 04:31:04 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:31:04 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:31:04 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:31:04 --> Controller Class Initialized
DEBUG - 2010-07-28 04:31:04 --> log_index function called
DEBUG - 2010-07-28 04:31:04 --> Model Class Initialized
DEBUG - 2010-07-28 04:31:04 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:31:04 --> Validation Class Initialized
DEBUG - 2010-07-28 04:31:04 --> log_index hostname: iadopsmysqlclustdb02p.ood.ops
DEBUG - 2010-07-28 04:31:04 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:31:04 --> log_index size: 541405740
DEBUG - 2010-07-28 04:31:04 --> log_index continuing...
DEBUG - 2010-07-28 04:31:04 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:31:04 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadopsmysqlclustdb02p.ood.ops', 'SUCCESS', '541405740', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='541405740', creation_time=NOW();
DEBUG - 2010-07-28 04:31:04 --> Final output sent to browser
DEBUG - 2010-07-28 04:31:04 --> Total execution time: 0.0593
DEBUG - 2010-07-28 04:31:33 --> Config Class Initialized
DEBUG - 2010-07-28 04:31:33 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:31:33 --> URI Class Initialized
DEBUG - 2010-07-28 04:31:33 --> Router Class Initialized
DEBUG - 2010-07-28 04:31:33 --> Output Class Initialized
DEBUG - 2010-07-28 04:31:33 --> Input Class Initialized
DEBUG - 2010-07-28 04:31:33 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:31:33 --> Language Class Initialized
DEBUG - 2010-07-28 04:31:33 --> Loader Class Initialized
DEBUG - 2010-07-28 04:31:33 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:31:33 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:31:33 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:31:33 --> Controller Class Initialized
DEBUG - 2010-07-28 04:31:33 --> Model Class Initialized
DEBUG - 2010-07-28 04:31:33 --> Starting get_summary_data
DEBUG - 2010-07-28 04:31:33 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:31:33 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 04:31:33 --> DB query starting...
DEBUG - 2010-07-28 04:31:33 --> DB query ended, calculating time...
DEBUG - 2010-07-28 04:31:33 --> DB query timing: 0.0032129287719727 seconds.
DEBUG - 2010-07-28 04:31:33 --> Returning data: 16 ROWS
DEBUG - 2010-07-28 04:31:33 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 04:31:33 --> Final output sent to browser
DEBUG - 2010-07-28 04:31:33 --> Total execution time: 0.0535
DEBUG - 2010-07-28 04:38:01 --> Config Class Initialized
DEBUG - 2010-07-28 04:38:01 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:38:02 --> URI Class Initialized
DEBUG - 2010-07-28 04:38:02 --> Router Class Initialized
DEBUG - 2010-07-28 04:38:02 --> Output Class Initialized
DEBUG - 2010-07-28 04:38:02 --> Input Class Initialized
DEBUG - 2010-07-28 04:38:02 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:38:02 --> Language Class Initialized
DEBUG - 2010-07-28 04:38:02 --> Loader Class Initialized
DEBUG - 2010-07-28 04:38:02 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:38:02 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:38:02 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:38:02 --> Controller Class Initialized
DEBUG - 2010-07-28 04:38:02 --> log_index function called
DEBUG - 2010-07-28 04:38:02 --> Model Class Initialized
DEBUG - 2010-07-28 04:38:02 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:38:02 --> Validation Class Initialized
DEBUG - 2010-07-28 04:38:02 --> log_index hostname: iaddocuvwa01p
DEBUG - 2010-07-28 04:38:02 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:38:02 --> log_index size: 523443022
DEBUG - 2010-07-28 04:38:02 --> log_index continuing...
DEBUG - 2010-07-28 04:38:02 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:38:02 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iaddocuvwa01p', 'SUCCESS', '523443022', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='523443022', creation_time=NOW();
DEBUG - 2010-07-28 04:38:02 --> Final output sent to browser
DEBUG - 2010-07-28 04:38:02 --> Total execution time: 0.0600
DEBUG - 2010-07-28 04:57:40 --> Config Class Initialized
DEBUG - 2010-07-28 04:57:40 --> Hooks Class Initialized
DEBUG - 2010-07-28 04:57:40 --> URI Class Initialized
DEBUG - 2010-07-28 04:57:40 --> Router Class Initialized
DEBUG - 2010-07-28 04:57:40 --> Output Class Initialized
DEBUG - 2010-07-28 04:57:40 --> Input Class Initialized
DEBUG - 2010-07-28 04:57:40 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 04:57:40 --> Language Class Initialized
DEBUG - 2010-07-28 04:57:40 --> Loader Class Initialized
DEBUG - 2010-07-28 04:57:40 --> Helper loaded: url_helper
DEBUG - 2010-07-28 04:57:40 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 04:57:40 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:57:40 --> Controller Class Initialized
DEBUG - 2010-07-28 04:57:40 --> log_index function called
DEBUG - 2010-07-28 04:57:40 --> Model Class Initialized
DEBUG - 2010-07-28 04:57:40 --> Helper loaded: form_helper
DEBUG - 2010-07-28 04:57:40 --> Validation Class Initialized
DEBUG - 2010-07-28 04:57:40 --> log_index hostname: iadengdb01p.ood.ops
DEBUG - 2010-07-28 04:57:40 --> log_index state: SUCCESS
DEBUG - 2010-07-28 04:57:40 --> log_index size: 5546413761
DEBUG - 2010-07-28 04:57:40 --> log_index continuing...
DEBUG - 2010-07-28 04:57:40 --> Database Driver Class Initialized
DEBUG - 2010-07-28 04:57:40 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadengdb01p.ood.ops', 'SUCCESS', '5546413761', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='5546413761', creation_time=NOW();
DEBUG - 2010-07-28 04:57:40 --> Final output sent to browser
DEBUG - 2010-07-28 04:57:40 --> Total execution time: 0.0598
DEBUG - 2010-07-28 05:01:40 --> Config Class Initialized
DEBUG - 2010-07-28 05:01:40 --> Hooks Class Initialized
DEBUG - 2010-07-28 05:01:40 --> URI Class Initialized
DEBUG - 2010-07-28 05:01:40 --> Router Class Initialized
DEBUG - 2010-07-28 05:01:40 --> Output Class Initialized
DEBUG - 2010-07-28 05:01:41 --> Input Class Initialized
DEBUG - 2010-07-28 05:01:41 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 05:01:41 --> Language Class Initialized
DEBUG - 2010-07-28 05:01:41 --> Loader Class Initialized
DEBUG - 2010-07-28 05:01:41 --> Helper loaded: url_helper
DEBUG - 2010-07-28 05:01:41 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 05:01:41 --> Database Driver Class Initialized
DEBUG - 2010-07-28 05:01:41 --> Controller Class Initialized
DEBUG - 2010-07-28 05:01:41 --> Model Class Initialized
DEBUG - 2010-07-28 05:01:41 --> Starting get_summary_data
DEBUG - 2010-07-28 05:01:41 --> Database Driver Class Initialized
DEBUG - 2010-07-28 05:01:41 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 05:01:41 --> DB query starting...
DEBUG - 2010-07-28 05:01:41 --> DB query ended, calculating time...
DEBUG - 2010-07-28 05:01:41 --> DB query timing: 0.0035839080810547 seconds.
DEBUG - 2010-07-28 05:01:41 --> Returning data: 16 ROWS
DEBUG - 2010-07-28 05:01:41 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 05:01:41 --> Final output sent to browser
DEBUG - 2010-07-28 05:01:41 --> Total execution time: 0.0538
DEBUG - 2010-07-28 05:02:10 --> Config Class Initialized
DEBUG - 2010-07-28 05:02:10 --> Hooks Class Initialized
DEBUG - 2010-07-28 05:02:10 --> URI Class Initialized
DEBUG - 2010-07-28 05:02:10 --> Router Class Initialized
DEBUG - 2010-07-28 05:02:10 --> Output Class Initialized
DEBUG - 2010-07-28 05:02:10 --> Input Class Initialized
DEBUG - 2010-07-28 05:02:10 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 05:02:10 --> Language Class Initialized
DEBUG - 2010-07-28 05:02:10 --> Loader Class Initialized
DEBUG - 2010-07-28 05:02:10 --> Helper loaded: url_helper
DEBUG - 2010-07-28 05:02:10 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 05:02:10 --> Database Driver Class Initialized
DEBUG - 2010-07-28 05:02:10 --> Controller Class Initialized
DEBUG - 2010-07-28 05:02:10 --> log_index function called
DEBUG - 2010-07-28 05:02:10 --> Model Class Initialized
DEBUG - 2010-07-28 05:02:10 --> Helper loaded: form_helper
DEBUG - 2010-07-28 05:02:10 --> Validation Class Initialized
DEBUG - 2010-07-28 05:02:10 --> log_index hostname: sjcetolcbdb01p.ood.ops
DEBUG - 2010-07-28 05:02:10 --> log_index state: F-CMD
DEBUG - 2010-07-28 05:02:10 --> log_index size: 1
DEBUG - 2010-07-28 05:02:10 --> log_index continuing...
DEBUG - 2010-07-28 05:02:10 --> Database Driver Class Initialized
DEBUG - 2010-07-28 05:02:10 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjcetolcbdb01p.ood.ops', 'F-CMD', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='F-CMD', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 05:02:10 --> Final output sent to browser
DEBUG - 2010-07-28 05:02:10 --> Total execution time: 0.0596
DEBUG - 2010-07-28 05:02:12 --> Config Class Initialized
DEBUG - 2010-07-28 05:02:12 --> Hooks Class Initialized
DEBUG - 2010-07-28 05:02:12 --> URI Class Initialized
DEBUG - 2010-07-28 05:02:12 --> Router Class Initialized
DEBUG - 2010-07-28 05:02:12 --> Output Class Initialized
DEBUG - 2010-07-28 05:02:12 --> Input Class Initialized
DEBUG - 2010-07-28 05:02:12 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 05:02:12 --> Language Class Initialized
DEBUG - 2010-07-28 05:02:12 --> Loader Class Initialized
DEBUG - 2010-07-28 05:02:12 --> Helper loaded: url_helper
DEBUG - 2010-07-28 05:02:12 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 05:02:12 --> Database Driver Class Initialized
DEBUG - 2010-07-28 05:02:12 --> Controller Class Initialized
DEBUG - 2010-07-28 05:02:12 --> log_index function called
DEBUG - 2010-07-28 05:02:12 --> Model Class Initialized
DEBUG - 2010-07-28 05:02:12 --> Helper loaded: form_helper
DEBUG - 2010-07-28 05:02:12 --> Validation Class Initialized
DEBUG - 2010-07-28 05:02:12 --> log_index hostname: sjcetoldb02p.ood.ops
DEBUG - 2010-07-28 05:02:12 --> log_index state: F-CMD
DEBUG - 2010-07-28 05:02:12 --> log_index size: 1
DEBUG - 2010-07-28 05:02:12 --> log_index continuing...
DEBUG - 2010-07-28 05:02:12 --> Database Driver Class Initialized
DEBUG - 2010-07-28 05:02:12 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjcetoldb02p.ood.ops', 'F-CMD', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='F-CMD', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 05:02:12 --> Final output sent to browser
DEBUG - 2010-07-28 05:02:12 --> Total execution time: 0.0592
DEBUG - 2010-07-28 05:02:16 --> Config Class Initialized
DEBUG - 2010-07-28 05:02:16 --> Hooks Class Initialized
DEBUG - 2010-07-28 05:02:16 --> URI Class Initialized
DEBUG - 2010-07-28 05:02:16 --> Router Class Initialized
DEBUG - 2010-07-28 05:02:16 --> Output Class Initialized
DEBUG - 2010-07-28 05:02:16 --> Input Class Initialized
DEBUG - 2010-07-28 05:02:16 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 05:02:16 --> Language Class Initialized
DEBUG - 2010-07-28 05:02:16 --> Loader Class Initialized
DEBUG - 2010-07-28 05:02:16 --> Helper loaded: url_helper
DEBUG - 2010-07-28 05:02:16 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 05:02:16 --> Database Driver Class Initialized
DEBUG - 2010-07-28 05:02:16 --> Controller Class Initialized
DEBUG - 2010-07-28 05:02:16 --> log_index function called
DEBUG - 2010-07-28 05:02:16 --> Model Class Initialized
DEBUG - 2010-07-28 05:02:16 --> Helper loaded: form_helper
DEBUG - 2010-07-28 05:02:16 --> Validation Class Initialized
DEBUG - 2010-07-28 05:02:16 --> log_index hostname: sjcetasdb02p.ood.ops
DEBUG - 2010-07-28 05:02:16 --> log_index state: SUCCESS
DEBUG - 2010-07-28 05:02:16 --> log_index size: 32558246
DEBUG - 2010-07-28 05:02:16 --> log_index continuing...
DEBUG - 2010-07-28 05:02:16 --> Database Driver Class Initialized
DEBUG - 2010-07-28 05:02:16 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjcetasdb02p.ood.ops', 'SUCCESS', '32558246', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='32558246', creation_time=NOW();
DEBUG - 2010-07-28 05:02:16 --> Final output sent to browser
DEBUG - 2010-07-28 05:02:16 --> Total execution time: 0.0590
DEBUG - 2010-07-28 05:08:01 --> Config Class Initialized
DEBUG - 2010-07-28 05:08:01 --> Hooks Class Initialized
DEBUG - 2010-07-28 05:08:01 --> URI Class Initialized
DEBUG - 2010-07-28 05:08:01 --> Router Class Initialized
DEBUG - 2010-07-28 05:08:01 --> Output Class Initialized
DEBUG - 2010-07-28 05:08:01 --> Input Class Initialized
DEBUG - 2010-07-28 05:08:01 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 05:08:01 --> Language Class Initialized
DEBUG - 2010-07-28 05:08:01 --> Loader Class Initialized
DEBUG - 2010-07-28 05:08:01 --> Helper loaded: url_helper
DEBUG - 2010-07-28 05:08:01 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 05:08:01 --> Database Driver Class Initialized
DEBUG - 2010-07-28 05:08:01 --> Controller Class Initialized
DEBUG - 2010-07-28 05:08:01 --> log_index function called
DEBUG - 2010-07-28 05:08:01 --> Model Class Initialized
DEBUG - 2010-07-28 05:08:01 --> Helper loaded: form_helper
DEBUG - 2010-07-28 05:08:01 --> Validation Class Initialized
DEBUG - 2010-07-28 05:08:01 --> log_index hostname: iadlitsoftwa02p.ood.ops
DEBUG - 2010-07-28 05:08:01 --> log_index state: SUCCESS
DEBUG - 2010-07-28 05:08:01 --> log_index size: 6838305627
DEBUG - 2010-07-28 05:08:01 --> log_index continuing...
DEBUG - 2010-07-28 05:08:01 --> Database Driver Class Initialized
DEBUG - 2010-07-28 05:08:01 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadlitsoftwa02p.ood.ops', 'SUCCESS', '6838305627', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='6838305627', creation_time=NOW();
DEBUG - 2010-07-28 05:08:01 --> Final output sent to browser
DEBUG - 2010-07-28 05:08:01 --> Total execution time: 0.0599
DEBUG - 2010-07-28 06:59:00 --> Config Class Initialized
DEBUG - 2010-07-28 06:59:00 --> Hooks Class Initialized
DEBUG - 2010-07-28 06:59:00 --> URI Class Initialized
DEBUG - 2010-07-28 06:59:00 --> Router Class Initialized
DEBUG - 2010-07-28 06:59:00 --> Output Class Initialized
DEBUG - 2010-07-28 06:59:00 --> Input Class Initialized
DEBUG - 2010-07-28 06:59:00 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 06:59:00 --> Language Class Initialized
DEBUG - 2010-07-28 06:59:00 --> Loader Class Initialized
DEBUG - 2010-07-28 06:59:00 --> Helper loaded: url_helper
DEBUG - 2010-07-28 06:59:00 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 06:59:00 --> Database Driver Class Initialized
DEBUG - 2010-07-28 06:59:00 --> Controller Class Initialized
DEBUG - 2010-07-28 06:59:00 --> log_index function called
DEBUG - 2010-07-28 06:59:00 --> Model Class Initialized
DEBUG - 2010-07-28 06:59:00 --> Helper loaded: form_helper
DEBUG - 2010-07-28 06:59:00 --> Validation Class Initialized
DEBUG - 2010-07-28 06:59:00 --> log_index hostname: testing.kontrollsoft.com
DEBUG - 2010-07-28 06:59:00 --> log_index state: F-CONN
DEBUG - 2010-07-28 06:59:00 --> log_index size: 1
DEBUG - 2010-07-28 06:59:00 --> log_index continuing...
DEBUG - 2010-07-28 06:59:00 --> Database Driver Class Initialized
DEBUG - 2010-07-28 06:59:00 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'testing.kontrollsoft.com', 'F-CONN', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='F-CONN', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 06:59:00 --> Final output sent to browser
DEBUG - 2010-07-28 06:59:00 --> Total execution time: 0.0605
DEBUG - 2010-07-28 07:02:18 --> Config Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Hooks Class Initialized
DEBUG - 2010-07-28 07:02:18 --> URI Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Router Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Output Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Input Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 07:02:18 --> Language Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Loader Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Helper loaded: url_helper
DEBUG - 2010-07-28 07:02:18 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 07:02:18 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Controller Class Initialized
DEBUG - 2010-07-28 07:02:18 --> log_index function called
DEBUG - 2010-07-28 07:02:18 --> Model Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Helper loaded: form_helper
DEBUG - 2010-07-28 07:02:18 --> Validation Class Initialized
DEBUG - 2010-07-28 07:02:18 --> log_index hostname: iadrleaddb02p
DEBUG - 2010-07-28 07:02:18 --> log_index state: F-CONN
DEBUG - 2010-07-28 07:02:18 --> log_index size: 1
DEBUG - 2010-07-28 07:02:18 --> log_index continuing...
DEBUG - 2010-07-28 07:02:18 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadrleaddb02p', 'F-CONN', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='F-CONN', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 07:02:18 --> Final output sent to browser
DEBUG - 2010-07-28 07:02:18 --> Total execution time: 0.0606
DEBUG - 2010-07-28 07:02:18 --> Config Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Hooks Class Initialized
DEBUG - 2010-07-28 07:02:18 --> URI Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Router Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Output Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Input Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 07:02:18 --> Language Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Loader Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Helper loaded: url_helper
DEBUG - 2010-07-28 07:02:18 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 07:02:18 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Controller Class Initialized
DEBUG - 2010-07-28 07:02:18 --> log_index function called
DEBUG - 2010-07-28 07:02:18 --> Model Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Helper loaded: form_helper
DEBUG - 2010-07-28 07:02:18 --> Config Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Hooks Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Validation Class Initialized
DEBUG - 2010-07-28 07:02:18 --> log_index hostname: sjccorvdb02p.ood.ops
DEBUG - 2010-07-28 07:02:18 --> log_index state: DB-OFF
DEBUG - 2010-07-28 07:02:18 --> log_index size: 1
DEBUG - 2010-07-28 07:02:18 --> log_index continuing...
DEBUG - 2010-07-28 07:02:18 --> URI Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjccorvdb02p.ood.ops', 'DB-OFF', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='DB-OFF', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 07:02:18 --> Router Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Final output sent to browser
DEBUG - 2010-07-28 07:02:18 --> Total execution time: 0.0607
DEBUG - 2010-07-28 07:02:18 --> Output Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Input Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 07:02:18 --> Language Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Loader Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Helper loaded: url_helper
DEBUG - 2010-07-28 07:02:18 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 07:02:18 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Controller Class Initialized
DEBUG - 2010-07-28 07:02:18 --> log_index function called
DEBUG - 2010-07-28 07:02:18 --> Model Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Helper loaded: form_helper
DEBUG - 2010-07-28 07:02:18 --> Validation Class Initialized
DEBUG - 2010-07-28 07:02:18 --> log_index hostname: sjcharawa01p.ood.ops
DEBUG - 2010-07-28 07:02:18 --> log_index state: F-CONN
DEBUG - 2010-07-28 07:02:18 --> log_index size: 1
DEBUG - 2010-07-28 07:02:18 --> log_index continuing...
DEBUG - 2010-07-28 07:02:18 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:02:18 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjcharawa01p.ood.ops', 'F-CONN', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='F-CONN', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 07:02:18 --> Final output sent to browser
DEBUG - 2010-07-28 07:02:18 --> Total execution time: 0.2984
DEBUG - 2010-07-28 07:02:19 --> Config Class Initialized
DEBUG - 2010-07-28 07:02:19 --> Hooks Class Initialized
DEBUG - 2010-07-28 07:02:19 --> URI Class Initialized
DEBUG - 2010-07-28 07:02:19 --> Router Class Initialized
DEBUG - 2010-07-28 07:02:19 --> Output Class Initialized
DEBUG - 2010-07-28 07:02:19 --> Input Class Initialized
DEBUG - 2010-07-28 07:02:19 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 07:02:19 --> Language Class Initialized
DEBUG - 2010-07-28 07:02:19 --> Loader Class Initialized
DEBUG - 2010-07-28 07:02:19 --> Helper loaded: url_helper
DEBUG - 2010-07-28 07:02:19 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 07:02:19 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:02:19 --> Controller Class Initialized
DEBUG - 2010-07-28 07:02:19 --> log_index function called
DEBUG - 2010-07-28 07:02:19 --> Model Class Initialized
DEBUG - 2010-07-28 07:02:19 --> Helper loaded: form_helper
DEBUG - 2010-07-28 07:02:19 --> Validation Class Initialized
DEBUG - 2010-07-28 07:02:19 --> log_index hostname: sjcrefrdb02p.ood.ops
DEBUG - 2010-07-28 07:02:19 --> log_index state: SUCCESS
DEBUG - 2010-07-28 07:02:19 --> log_index size: 130611
DEBUG - 2010-07-28 07:02:19 --> log_index continuing...
DEBUG - 2010-07-28 07:02:19 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:02:19 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjcrefrdb02p.ood.ops', 'SUCCESS', '130611', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='130611', creation_time=NOW();
DEBUG - 2010-07-28 07:02:19 --> Final output sent to browser
DEBUG - 2010-07-28 07:02:19 --> Total execution time: 0.0599
DEBUG - 2010-07-28 07:02:24 --> Config Class Initialized
DEBUG - 2010-07-28 07:02:24 --> Hooks Class Initialized
DEBUG - 2010-07-28 07:02:24 --> URI Class Initialized
DEBUG - 2010-07-28 07:02:24 --> Router Class Initialized
DEBUG - 2010-07-28 07:02:24 --> Output Class Initialized
DEBUG - 2010-07-28 07:02:24 --> Input Class Initialized
DEBUG - 2010-07-28 07:02:24 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 07:02:24 --> Language Class Initialized
DEBUG - 2010-07-28 07:02:24 --> Loader Class Initialized
DEBUG - 2010-07-28 07:02:24 --> Helper loaded: url_helper
DEBUG - 2010-07-28 07:02:24 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 07:02:24 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:02:24 --> Controller Class Initialized
DEBUG - 2010-07-28 07:02:24 --> log_index function called
DEBUG - 2010-07-28 07:02:24 --> Model Class Initialized
DEBUG - 2010-07-28 07:02:24 --> Helper loaded: form_helper
DEBUG - 2010-07-28 07:02:24 --> Validation Class Initialized
DEBUG - 2010-07-28 07:02:24 --> log_index hostname: sjcrewwa03p
DEBUG - 2010-07-28 07:02:24 --> log_index state: F-CMD
DEBUG - 2010-07-28 07:02:24 --> log_index size: 1
DEBUG - 2010-07-28 07:02:24 --> log_index continuing...
DEBUG - 2010-07-28 07:02:24 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:02:24 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjcrewwa03p', 'F-CMD', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='F-CMD', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 07:02:24 --> Final output sent to browser
DEBUG - 2010-07-28 07:02:24 --> Total execution time: 0.0593
DEBUG - 2010-07-28 07:02:55 --> Config Class Initialized
DEBUG - 2010-07-28 07:02:55 --> Hooks Class Initialized
DEBUG - 2010-07-28 07:02:55 --> URI Class Initialized
DEBUG - 2010-07-28 07:02:55 --> Router Class Initialized
DEBUG - 2010-07-28 07:02:55 --> Output Class Initialized
DEBUG - 2010-07-28 07:02:55 --> Input Class Initialized
DEBUG - 2010-07-28 07:02:55 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 07:02:55 --> Language Class Initialized
DEBUG - 2010-07-28 07:02:55 --> Loader Class Initialized
DEBUG - 2010-07-28 07:02:55 --> Helper loaded: url_helper
DEBUG - 2010-07-28 07:02:55 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 07:02:55 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:02:55 --> Controller Class Initialized
DEBUG - 2010-07-28 07:02:55 --> log_index function called
DEBUG - 2010-07-28 07:02:55 --> Model Class Initialized
DEBUG - 2010-07-28 07:02:55 --> Helper loaded: form_helper
DEBUG - 2010-07-28 07:02:55 --> Validation Class Initialized
DEBUG - 2010-07-28 07:02:55 --> log_index hostname: sjcetasdb03p.ood.ops
DEBUG - 2010-07-28 07:02:55 --> log_index state: SUCCESS
DEBUG - 2010-07-28 07:02:55 --> log_index size: 297800065
DEBUG - 2010-07-28 07:02:55 --> log_index continuing...
DEBUG - 2010-07-28 07:02:55 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:02:55 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjcetasdb03p.ood.ops', 'SUCCESS', '297800065', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='297800065', creation_time=NOW();
DEBUG - 2010-07-28 07:02:55 --> Final output sent to browser
DEBUG - 2010-07-28 07:02:55 --> Total execution time: 0.0372
DEBUG - 2010-07-28 07:03:41 --> Config Class Initialized
DEBUG - 2010-07-28 07:03:41 --> Hooks Class Initialized
DEBUG - 2010-07-28 07:03:41 --> URI Class Initialized
DEBUG - 2010-07-28 07:03:42 --> Router Class Initialized
DEBUG - 2010-07-28 07:03:42 --> Output Class Initialized
DEBUG - 2010-07-28 07:03:42 --> Input Class Initialized
DEBUG - 2010-07-28 07:03:42 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 07:03:42 --> Language Class Initialized
DEBUG - 2010-07-28 07:03:42 --> Loader Class Initialized
DEBUG - 2010-07-28 07:03:42 --> Helper loaded: url_helper
DEBUG - 2010-07-28 07:03:42 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 07:03:42 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:03:42 --> Controller Class Initialized
DEBUG - 2010-07-28 07:03:42 --> log_index function called
DEBUG - 2010-07-28 07:03:42 --> Model Class Initialized
DEBUG - 2010-07-28 07:03:42 --> Helper loaded: form_helper
DEBUG - 2010-07-28 07:03:42 --> Validation Class Initialized
DEBUG - 2010-07-28 07:03:42 --> log_index hostname: iad05mysqlmgmt01p.ood.ops
DEBUG - 2010-07-28 07:03:42 --> log_index state: SUCCESS
DEBUG - 2010-07-28 07:03:42 --> log_index size: 174557613
DEBUG - 2010-07-28 07:03:42 --> log_index continuing...
DEBUG - 2010-07-28 07:03:42 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:03:42 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iad05mysqlmgmt01p.ood.ops', 'SUCCESS', '174557613', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='174557613', creation_time=NOW();
DEBUG - 2010-07-28 07:03:42 --> Final output sent to browser
DEBUG - 2010-07-28 07:03:42 --> Total execution time: 0.2432
DEBUG - 2010-07-28 07:04:24 --> Config Class Initialized
DEBUG - 2010-07-28 07:04:24 --> Hooks Class Initialized
DEBUG - 2010-07-28 07:04:24 --> URI Class Initialized
DEBUG - 2010-07-28 07:04:24 --> Router Class Initialized
DEBUG - 2010-07-28 07:04:24 --> Output Class Initialized
DEBUG - 2010-07-28 07:04:24 --> Input Class Initialized
DEBUG - 2010-07-28 07:04:24 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 07:04:24 --> Language Class Initialized
DEBUG - 2010-07-28 07:04:24 --> Loader Class Initialized
DEBUG - 2010-07-28 07:04:24 --> Helper loaded: url_helper
DEBUG - 2010-07-28 07:04:24 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 07:04:24 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:04:24 --> Controller Class Initialized
DEBUG - 2010-07-28 07:04:24 --> log_index function called
DEBUG - 2010-07-28 07:04:24 --> Model Class Initialized
DEBUG - 2010-07-28 07:04:24 --> Helper loaded: form_helper
DEBUG - 2010-07-28 07:04:24 --> Validation Class Initialized
DEBUG - 2010-07-28 07:04:24 --> log_index hostname: pdx0kbasewebapp01p
DEBUG - 2010-07-28 07:04:24 --> log_index state: SUCCESS
DEBUG - 2010-07-28 07:04:24 --> log_index size: 75773955
DEBUG - 2010-07-28 07:04:24 --> log_index continuing...
DEBUG - 2010-07-28 07:04:24 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:04:24 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'pdx0kbasewebapp01p', 'SUCCESS', '75773955', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='75773955', creation_time=NOW();
DEBUG - 2010-07-28 07:04:24 --> Final output sent to browser
DEBUG - 2010-07-28 07:04:24 --> Total execution time: 0.3665
DEBUG - 2010-07-28 07:05:00 --> Config Class Initialized
DEBUG - 2010-07-28 07:05:00 --> Hooks Class Initialized
DEBUG - 2010-07-28 07:05:00 --> URI Class Initialized
DEBUG - 2010-07-28 07:05:00 --> Router Class Initialized
DEBUG - 2010-07-28 07:05:00 --> Output Class Initialized
DEBUG - 2010-07-28 07:05:00 --> Input Class Initialized
DEBUG - 2010-07-28 07:05:00 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 07:05:00 --> Language Class Initialized
DEBUG - 2010-07-28 07:05:00 --> Loader Class Initialized
DEBUG - 2010-07-28 07:05:00 --> Helper loaded: url_helper
DEBUG - 2010-07-28 07:05:00 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 07:05:00 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:05:00 --> Controller Class Initialized
DEBUG - 2010-07-28 07:05:00 --> log_index function called
DEBUG - 2010-07-28 07:05:00 --> Model Class Initialized
DEBUG - 2010-07-28 07:05:00 --> Helper loaded: form_helper
DEBUG - 2010-07-28 07:05:00 --> Validation Class Initialized
DEBUG - 2010-07-28 07:05:00 --> log_index hostname: sjccorvwa03p.ood.ops
DEBUG - 2010-07-28 07:05:00 --> log_index state: F-CMD
DEBUG - 2010-07-28 07:05:00 --> log_index size: 1
DEBUG - 2010-07-28 07:05:00 --> log_index continuing...
DEBUG - 2010-07-28 07:05:00 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:05:00 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjccorvwa03p.ood.ops', 'F-CMD', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='F-CMD', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 07:05:00 --> Final output sent to browser
DEBUG - 2010-07-28 07:05:00 --> Total execution time: 0.1407
DEBUG - 2010-07-28 07:08:01 --> Config Class Initialized
DEBUG - 2010-07-28 07:08:01 --> Hooks Class Initialized
DEBUG - 2010-07-28 07:08:01 --> URI Class Initialized
DEBUG - 2010-07-28 07:08:01 --> Router Class Initialized
DEBUG - 2010-07-28 07:08:01 --> Output Class Initialized
DEBUG - 2010-07-28 07:08:01 --> Input Class Initialized
DEBUG - 2010-07-28 07:08:01 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 07:08:01 --> Language Class Initialized
DEBUG - 2010-07-28 07:08:01 --> Loader Class Initialized
DEBUG - 2010-07-28 07:08:01 --> Helper loaded: url_helper
DEBUG - 2010-07-28 07:08:01 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 07:08:01 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:08:01 --> Controller Class Initialized
DEBUG - 2010-07-28 07:08:01 --> log_index function called
DEBUG - 2010-07-28 07:08:01 --> Model Class Initialized
DEBUG - 2010-07-28 07:08:01 --> Helper loaded: form_helper
DEBUG - 2010-07-28 07:08:01 --> Validation Class Initialized
DEBUG - 2010-07-28 07:08:01 --> log_index hostname: iadadobrcdb01p
DEBUG - 2010-07-28 07:08:01 --> log_index state: F-CMD
DEBUG - 2010-07-28 07:08:01 --> log_index size: 1
DEBUG - 2010-07-28 07:08:01 --> log_index continuing...
DEBUG - 2010-07-28 07:08:01 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:08:01 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadadobrcdb01p', 'F-CMD', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='F-CMD', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 07:08:01 --> Final output sent to browser
DEBUG - 2010-07-28 07:08:01 --> Total execution time: 0.0812
DEBUG - 2010-07-28 07:09:18 --> Config Class Initialized
DEBUG - 2010-07-28 07:09:18 --> Hooks Class Initialized
DEBUG - 2010-07-28 07:09:18 --> URI Class Initialized
DEBUG - 2010-07-28 07:09:18 --> Router Class Initialized
DEBUG - 2010-07-28 07:09:18 --> Output Class Initialized
DEBUG - 2010-07-28 07:09:18 --> Input Class Initialized
DEBUG - 2010-07-28 07:09:18 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 07:09:18 --> Language Class Initialized
DEBUG - 2010-07-28 07:09:18 --> Loader Class Initialized
DEBUG - 2010-07-28 07:09:18 --> Helper loaded: url_helper
DEBUG - 2010-07-28 07:09:18 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 07:09:18 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:09:18 --> Controller Class Initialized
DEBUG - 2010-07-28 07:09:18 --> log_index function called
DEBUG - 2010-07-28 07:09:18 --> Model Class Initialized
DEBUG - 2010-07-28 07:09:18 --> Helper loaded: form_helper
DEBUG - 2010-07-28 07:09:18 --> Validation Class Initialized
DEBUG - 2010-07-28 07:09:18 --> log_index hostname: sjcmtcomdb02p.ood.ops
DEBUG - 2010-07-28 07:09:18 --> log_index state: SUCCESS
DEBUG - 2010-07-28 07:09:18 --> log_index size: 516587532
DEBUG - 2010-07-28 07:09:18 --> log_index continuing...
DEBUG - 2010-07-28 07:09:18 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:09:18 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjcmtcomdb02p.ood.ops', 'SUCCESS', '516587532', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='516587532', creation_time=NOW();
DEBUG - 2010-07-28 07:09:18 --> Final output sent to browser
DEBUG - 2010-07-28 07:09:18 --> Total execution time: 0.0568
DEBUG - 2010-07-28 07:38:13 --> Config Class Initialized
DEBUG - 2010-07-28 07:38:13 --> Hooks Class Initialized
DEBUG - 2010-07-28 07:38:13 --> URI Class Initialized
DEBUG - 2010-07-28 07:38:13 --> Router Class Initialized
DEBUG - 2010-07-28 07:38:13 --> Output Class Initialized
DEBUG - 2010-07-28 07:38:13 --> Input Class Initialized
DEBUG - 2010-07-28 07:38:13 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 07:38:13 --> Language Class Initialized
DEBUG - 2010-07-28 07:38:13 --> Loader Class Initialized
DEBUG - 2010-07-28 07:38:13 --> Helper loaded: url_helper
DEBUG - 2010-07-28 07:38:13 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 07:38:13 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:38:13 --> Controller Class Initialized
DEBUG - 2010-07-28 07:38:13 --> log_index function called
DEBUG - 2010-07-28 07:38:13 --> Model Class Initialized
DEBUG - 2010-07-28 07:38:13 --> Helper loaded: form_helper
DEBUG - 2010-07-28 07:38:13 --> Validation Class Initialized
DEBUG - 2010-07-28 07:38:13 --> log_index hostname: sjcopsmysqlclustdb02p.ood.ops
DEBUG - 2010-07-28 07:38:13 --> log_index state: SUCCESS
DEBUG - 2010-07-28 07:38:13 --> log_index size: 1203569630
DEBUG - 2010-07-28 07:38:13 --> log_index continuing...
DEBUG - 2010-07-28 07:38:13 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:38:13 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjcopsmysqlclustdb02p.ood.ops', 'SUCCESS', '1203569630', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='1203569630', creation_time=NOW();
DEBUG - 2010-07-28 07:38:13 --> Final output sent to browser
DEBUG - 2010-07-28 07:38:13 --> Total execution time: 0.0617
DEBUG - 2010-07-28 07:50:32 --> Config Class Initialized
DEBUG - 2010-07-28 07:50:32 --> Hooks Class Initialized
DEBUG - 2010-07-28 07:50:32 --> URI Class Initialized
DEBUG - 2010-07-28 07:50:32 --> Router Class Initialized
DEBUG - 2010-07-28 07:50:32 --> Output Class Initialized
DEBUG - 2010-07-28 07:50:32 --> Input Class Initialized
DEBUG - 2010-07-28 07:50:32 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 07:50:32 --> Language Class Initialized
DEBUG - 2010-07-28 07:50:32 --> Loader Class Initialized
DEBUG - 2010-07-28 07:50:32 --> Helper loaded: url_helper
DEBUG - 2010-07-28 07:50:32 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 07:50:32 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:50:32 --> Controller Class Initialized
DEBUG - 2010-07-28 07:50:32 --> log_index function called
DEBUG - 2010-07-28 07:50:32 --> Model Class Initialized
DEBUG - 2010-07-28 07:50:32 --> Helper loaded: form_helper
DEBUG - 2010-07-28 07:50:32 --> Validation Class Initialized
DEBUG - 2010-07-28 07:50:32 --> log_index hostname: iadduldb04p.ood.ops
DEBUG - 2010-07-28 07:50:32 --> log_index state: SUCCESS
DEBUG - 2010-07-28 07:50:32 --> log_index size: 4462901434
DEBUG - 2010-07-28 07:50:32 --> log_index continuing...
DEBUG - 2010-07-28 07:50:32 --> Database Driver Class Initialized
DEBUG - 2010-07-28 07:50:32 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadduldb04p.ood.ops', 'SUCCESS', '4462901434', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='4462901434', creation_time=NOW();
DEBUG - 2010-07-28 07:50:32 --> Final output sent to browser
DEBUG - 2010-07-28 07:50:32 --> Total execution time: 0.0602
DEBUG - 2010-07-28 09:33:10 --> Config Class Initialized
DEBUG - 2010-07-28 09:33:10 --> Hooks Class Initialized
DEBUG - 2010-07-28 09:33:10 --> URI Class Initialized
DEBUG - 2010-07-28 09:33:10 --> Router Class Initialized
DEBUG - 2010-07-28 09:33:10 --> Output Class Initialized
DEBUG - 2010-07-28 09:33:10 --> Input Class Initialized
DEBUG - 2010-07-28 09:33:10 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 09:33:10 --> Language Class Initialized
DEBUG - 2010-07-28 09:33:10 --> Loader Class Initialized
DEBUG - 2010-07-28 09:33:10 --> Helper loaded: url_helper
DEBUG - 2010-07-28 09:33:10 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 09:33:10 --> Database Driver Class Initialized
DEBUG - 2010-07-28 09:33:10 --> Controller Class Initialized
DEBUG - 2010-07-28 09:33:10 --> Model Class Initialized
DEBUG - 2010-07-28 09:33:10 --> Starting get_summary_data
DEBUG - 2010-07-28 09:33:10 --> Database Driver Class Initialized
DEBUG - 2010-07-28 09:33:10 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 09:33:10 --> DB query starting...
DEBUG - 2010-07-28 09:33:10 --> DB query ended, calculating time...
DEBUG - 2010-07-28 09:33:10 --> DB query timing: 0.015978813171387 seconds.
DEBUG - 2010-07-28 09:33:10 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 09:33:10 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 09:33:10 --> Final output sent to browser
DEBUG - 2010-07-28 09:33:10 --> Total execution time: 0.1017
DEBUG - 2010-07-28 10:03:12 --> Config Class Initialized
DEBUG - 2010-07-28 10:03:12 --> Hooks Class Initialized
DEBUG - 2010-07-28 10:03:12 --> URI Class Initialized
DEBUG - 2010-07-28 10:03:12 --> Router Class Initialized
DEBUG - 2010-07-28 10:03:12 --> Output Class Initialized
DEBUG - 2010-07-28 10:03:12 --> Input Class Initialized
DEBUG - 2010-07-28 10:03:12 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 10:03:12 --> Language Class Initialized
DEBUG - 2010-07-28 10:03:12 --> Loader Class Initialized
DEBUG - 2010-07-28 10:03:12 --> Helper loaded: url_helper
DEBUG - 2010-07-28 10:03:12 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 10:03:12 --> Database Driver Class Initialized
DEBUG - 2010-07-28 10:03:12 --> Controller Class Initialized
DEBUG - 2010-07-28 10:03:12 --> Model Class Initialized
DEBUG - 2010-07-28 10:03:12 --> Starting get_summary_data
DEBUG - 2010-07-28 10:03:12 --> Database Driver Class Initialized
DEBUG - 2010-07-28 10:03:12 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 10:03:12 --> DB query starting...
DEBUG - 2010-07-28 10:03:12 --> DB query ended, calculating time...
DEBUG - 2010-07-28 10:03:12 --> DB query timing: 0.0026710033416748 seconds.
DEBUG - 2010-07-28 10:03:12 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 10:03:12 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 10:03:12 --> Final output sent to browser
DEBUG - 2010-07-28 10:03:12 --> Total execution time: 0.0537
DEBUG - 2010-07-28 10:33:14 --> Config Class Initialized
DEBUG - 2010-07-28 10:33:14 --> Hooks Class Initialized
DEBUG - 2010-07-28 10:33:14 --> URI Class Initialized
DEBUG - 2010-07-28 10:33:14 --> Router Class Initialized
DEBUG - 2010-07-28 10:33:14 --> Output Class Initialized
DEBUG - 2010-07-28 10:33:14 --> Input Class Initialized
DEBUG - 2010-07-28 10:33:14 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 10:33:14 --> Language Class Initialized
DEBUG - 2010-07-28 10:33:14 --> Loader Class Initialized
DEBUG - 2010-07-28 10:33:14 --> Helper loaded: url_helper
DEBUG - 2010-07-28 10:33:14 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 10:33:14 --> Database Driver Class Initialized
DEBUG - 2010-07-28 10:33:14 --> Controller Class Initialized
DEBUG - 2010-07-28 10:33:14 --> Model Class Initialized
DEBUG - 2010-07-28 10:33:14 --> Starting get_summary_data
DEBUG - 2010-07-28 10:33:14 --> Database Driver Class Initialized
DEBUG - 2010-07-28 10:33:14 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 10:33:14 --> DB query starting...
DEBUG - 2010-07-28 10:33:14 --> DB query ended, calculating time...
DEBUG - 2010-07-28 10:33:14 --> DB query timing: 0.0027439594268799 seconds.
DEBUG - 2010-07-28 10:33:14 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 10:33:14 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 10:33:14 --> Final output sent to browser
DEBUG - 2010-07-28 10:33:14 --> Total execution time: 0.0539
DEBUG - 2010-07-28 11:03:16 --> Config Class Initialized
DEBUG - 2010-07-28 11:03:16 --> Hooks Class Initialized
DEBUG - 2010-07-28 11:03:16 --> URI Class Initialized
DEBUG - 2010-07-28 11:03:16 --> Router Class Initialized
DEBUG - 2010-07-28 11:03:16 --> Output Class Initialized
DEBUG - 2010-07-28 11:03:16 --> Input Class Initialized
DEBUG - 2010-07-28 11:03:16 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 11:03:16 --> Language Class Initialized
DEBUG - 2010-07-28 11:03:16 --> Loader Class Initialized
DEBUG - 2010-07-28 11:03:16 --> Helper loaded: url_helper
DEBUG - 2010-07-28 11:03:16 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 11:03:16 --> Database Driver Class Initialized
DEBUG - 2010-07-28 11:03:16 --> Controller Class Initialized
DEBUG - 2010-07-28 11:03:16 --> Model Class Initialized
DEBUG - 2010-07-28 11:03:16 --> Starting get_summary_data
DEBUG - 2010-07-28 11:03:16 --> Database Driver Class Initialized
DEBUG - 2010-07-28 11:03:16 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 11:03:16 --> DB query starting...
DEBUG - 2010-07-28 11:03:16 --> DB query ended, calculating time...
DEBUG - 2010-07-28 11:03:16 --> DB query timing: 0.0026299953460693 seconds.
DEBUG - 2010-07-28 11:03:16 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 11:03:16 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 11:03:16 --> Final output sent to browser
DEBUG - 2010-07-28 11:03:16 --> Total execution time: 0.0533
DEBUG - 2010-07-28 11:33:17 --> Config Class Initialized
DEBUG - 2010-07-28 11:33:17 --> Hooks Class Initialized
DEBUG - 2010-07-28 11:33:17 --> URI Class Initialized
DEBUG - 2010-07-28 11:33:17 --> Router Class Initialized
DEBUG - 2010-07-28 11:33:17 --> Output Class Initialized
DEBUG - 2010-07-28 11:33:17 --> Input Class Initialized
DEBUG - 2010-07-28 11:33:17 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 11:33:17 --> Language Class Initialized
DEBUG - 2010-07-28 11:33:17 --> Loader Class Initialized
DEBUG - 2010-07-28 11:33:17 --> Helper loaded: url_helper
DEBUG - 2010-07-28 11:33:17 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 11:33:17 --> Database Driver Class Initialized
DEBUG - 2010-07-28 11:33:17 --> Controller Class Initialized
DEBUG - 2010-07-28 11:33:17 --> Model Class Initialized
DEBUG - 2010-07-28 11:33:17 --> Starting get_summary_data
DEBUG - 2010-07-28 11:33:17 --> Database Driver Class Initialized
DEBUG - 2010-07-28 11:33:17 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 11:33:17 --> DB query starting...
DEBUG - 2010-07-28 11:33:17 --> DB query ended, calculating time...
DEBUG - 2010-07-28 11:33:17 --> DB query timing: 0.0026547908782959 seconds.
DEBUG - 2010-07-28 11:33:17 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 11:33:17 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 11:33:17 --> Final output sent to browser
DEBUG - 2010-07-28 11:33:17 --> Total execution time: 0.0534
DEBUG - 2010-07-28 11:35:06 --> Config Class Initialized
DEBUG - 2010-07-28 11:35:06 --> Hooks Class Initialized
DEBUG - 2010-07-28 11:35:06 --> URI Class Initialized
DEBUG - 2010-07-28 11:35:06 --> Router Class Initialized
DEBUG - 2010-07-28 11:35:06 --> Output Class Initialized
DEBUG - 2010-07-28 11:35:06 --> Input Class Initialized
DEBUG - 2010-07-28 11:35:06 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 11:35:06 --> Language Class Initialized
DEBUG - 2010-07-28 11:35:06 --> Loader Class Initialized
DEBUG - 2010-07-28 11:35:06 --> Helper loaded: url_helper
DEBUG - 2010-07-28 11:35:06 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 11:35:06 --> Database Driver Class Initialized
DEBUG - 2010-07-28 11:35:06 --> Controller Class Initialized
DEBUG - 2010-07-28 11:35:06 --> Model Class Initialized
DEBUG - 2010-07-28 11:35:06 --> Starting get_summary_data
DEBUG - 2010-07-28 11:35:06 --> Database Driver Class Initialized
DEBUG - 2010-07-28 11:35:06 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 11:35:06 --> DB query starting...
DEBUG - 2010-07-28 11:35:06 --> DB query ended, calculating time...
DEBUG - 2010-07-28 11:35:06 --> DB query timing: 0.0025689601898193 seconds.
DEBUG - 2010-07-28 11:35:06 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 11:35:06 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 11:35:06 --> Final output sent to browser
DEBUG - 2010-07-28 11:35:06 --> Total execution time: 0.0549
DEBUG - 2010-07-28 12:03:19 --> Config Class Initialized
DEBUG - 2010-07-28 12:03:19 --> Hooks Class Initialized
DEBUG - 2010-07-28 12:03:19 --> URI Class Initialized
DEBUG - 2010-07-28 12:03:19 --> Router Class Initialized
DEBUG - 2010-07-28 12:03:19 --> Output Class Initialized
DEBUG - 2010-07-28 12:03:19 --> Input Class Initialized
DEBUG - 2010-07-28 12:03:19 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 12:03:19 --> Language Class Initialized
DEBUG - 2010-07-28 12:03:19 --> Loader Class Initialized
DEBUG - 2010-07-28 12:03:19 --> Helper loaded: url_helper
DEBUG - 2010-07-28 12:03:19 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 12:03:19 --> Database Driver Class Initialized
DEBUG - 2010-07-28 12:03:19 --> Controller Class Initialized
DEBUG - 2010-07-28 12:03:19 --> Model Class Initialized
DEBUG - 2010-07-28 12:03:19 --> Starting get_summary_data
DEBUG - 2010-07-28 12:03:19 --> Database Driver Class Initialized
DEBUG - 2010-07-28 12:03:19 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 12:03:19 --> DB query starting...
DEBUG - 2010-07-28 12:03:19 --> DB query ended, calculating time...
DEBUG - 2010-07-28 12:03:19 --> DB query timing: 0.0026571750640869 seconds.
DEBUG - 2010-07-28 12:03:19 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 12:03:19 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 12:03:19 --> Final output sent to browser
DEBUG - 2010-07-28 12:03:19 --> Total execution time: 0.0532
DEBUG - 2010-07-28 12:04:11 --> Config Class Initialized
DEBUG - 2010-07-28 12:04:11 --> Hooks Class Initialized
DEBUG - 2010-07-28 12:04:11 --> URI Class Initialized
DEBUG - 2010-07-28 12:04:11 --> Router Class Initialized
DEBUG - 2010-07-28 12:04:11 --> Output Class Initialized
DEBUG - 2010-07-28 12:04:11 --> Input Class Initialized
DEBUG - 2010-07-28 12:04:11 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 12:04:11 --> Language Class Initialized
DEBUG - 2010-07-28 12:04:11 --> Loader Class Initialized
DEBUG - 2010-07-28 12:04:11 --> Helper loaded: url_helper
DEBUG - 2010-07-28 12:04:11 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 12:04:11 --> Database Driver Class Initialized
DEBUG - 2010-07-28 12:04:11 --> Controller Class Initialized
DEBUG - 2010-07-28 12:04:11 --> Model Class Initialized
DEBUG - 2010-07-28 12:04:11 --> Starting get_summary_data
DEBUG - 2010-07-28 12:04:11 --> Database Driver Class Initialized
DEBUG - 2010-07-28 12:04:11 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 12:04:11 --> DB query starting...
DEBUG - 2010-07-28 12:04:11 --> DB query ended, calculating time...
DEBUG - 2010-07-28 12:04:11 --> DB query timing: 0.0025970935821533 seconds.
DEBUG - 2010-07-28 12:04:11 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 12:04:11 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 12:04:11 --> Final output sent to browser
DEBUG - 2010-07-28 12:04:11 --> Total execution time: 0.0532
DEBUG - 2010-07-28 12:33:22 --> Config Class Initialized
DEBUG - 2010-07-28 12:33:22 --> Hooks Class Initialized
DEBUG - 2010-07-28 12:33:22 --> URI Class Initialized
DEBUG - 2010-07-28 12:33:22 --> Router Class Initialized
DEBUG - 2010-07-28 12:33:22 --> Output Class Initialized
DEBUG - 2010-07-28 12:33:22 --> Input Class Initialized
DEBUG - 2010-07-28 12:33:22 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 12:33:22 --> Language Class Initialized
DEBUG - 2010-07-28 12:33:22 --> Loader Class Initialized
DEBUG - 2010-07-28 12:33:22 --> Helper loaded: url_helper
DEBUG - 2010-07-28 12:33:22 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 12:33:22 --> Database Driver Class Initialized
DEBUG - 2010-07-28 12:33:22 --> Controller Class Initialized
DEBUG - 2010-07-28 12:33:22 --> Model Class Initialized
DEBUG - 2010-07-28 12:33:22 --> Starting get_summary_data
DEBUG - 2010-07-28 12:33:22 --> Database Driver Class Initialized
DEBUG - 2010-07-28 12:33:22 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 12:33:22 --> DB query starting...
DEBUG - 2010-07-28 12:33:22 --> DB query ended, calculating time...
DEBUG - 2010-07-28 12:33:22 --> DB query timing: 0.0026509761810303 seconds.
DEBUG - 2010-07-28 12:33:22 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 12:33:22 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 12:33:22 --> Final output sent to browser
DEBUG - 2010-07-28 12:33:22 --> Total execution time: 0.0536
DEBUG - 2010-07-28 12:34:10 --> Config Class Initialized
DEBUG - 2010-07-28 12:34:10 --> Hooks Class Initialized
DEBUG - 2010-07-28 12:34:10 --> URI Class Initialized
DEBUG - 2010-07-28 12:34:10 --> Router Class Initialized
DEBUG - 2010-07-28 12:34:10 --> Output Class Initialized
DEBUG - 2010-07-28 12:34:10 --> Input Class Initialized
DEBUG - 2010-07-28 12:34:10 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 12:34:10 --> Language Class Initialized
DEBUG - 2010-07-28 12:34:10 --> Loader Class Initialized
DEBUG - 2010-07-28 12:34:10 --> Helper loaded: url_helper
DEBUG - 2010-07-28 12:34:10 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 12:34:10 --> Database Driver Class Initialized
DEBUG - 2010-07-28 12:34:10 --> Controller Class Initialized
DEBUG - 2010-07-28 12:34:10 --> Model Class Initialized
DEBUG - 2010-07-28 12:34:10 --> Starting get_summary_data
DEBUG - 2010-07-28 12:34:10 --> Database Driver Class Initialized
DEBUG - 2010-07-28 12:34:10 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 12:34:10 --> DB query starting...
DEBUG - 2010-07-28 12:34:10 --> DB query ended, calculating time...
DEBUG - 2010-07-28 12:34:10 --> DB query timing: 0.002633810043335 seconds.
DEBUG - 2010-07-28 12:34:10 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 12:34:10 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 12:34:10 --> Final output sent to browser
DEBUG - 2010-07-28 12:34:10 --> Total execution time: 0.0535
DEBUG - 2010-07-28 13:03:23 --> Config Class Initialized
DEBUG - 2010-07-28 13:03:23 --> Hooks Class Initialized
DEBUG - 2010-07-28 13:03:23 --> URI Class Initialized
DEBUG - 2010-07-28 13:03:23 --> Router Class Initialized
DEBUG - 2010-07-28 13:03:23 --> Output Class Initialized
DEBUG - 2010-07-28 13:03:23 --> Input Class Initialized
DEBUG - 2010-07-28 13:03:23 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 13:03:23 --> Language Class Initialized
DEBUG - 2010-07-28 13:03:23 --> Loader Class Initialized
DEBUG - 2010-07-28 13:03:23 --> Helper loaded: url_helper
DEBUG - 2010-07-28 13:03:23 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 13:03:23 --> Database Driver Class Initialized
DEBUG - 2010-07-28 13:03:23 --> Controller Class Initialized
DEBUG - 2010-07-28 13:03:23 --> Model Class Initialized
DEBUG - 2010-07-28 13:03:23 --> Starting get_summary_data
DEBUG - 2010-07-28 13:03:23 --> Database Driver Class Initialized
DEBUG - 2010-07-28 13:03:23 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 13:03:23 --> DB query starting...
DEBUG - 2010-07-28 13:03:23 --> DB query ended, calculating time...
DEBUG - 2010-07-28 13:03:23 --> DB query timing: 0.0026750564575195 seconds.
DEBUG - 2010-07-28 13:03:23 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 13:03:23 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 13:03:23 --> Final output sent to browser
DEBUG - 2010-07-28 13:03:23 --> Total execution time: 0.0534
DEBUG - 2010-07-28 13:04:16 --> Config Class Initialized
DEBUG - 2010-07-28 13:04:16 --> Hooks Class Initialized
DEBUG - 2010-07-28 13:04:16 --> URI Class Initialized
DEBUG - 2010-07-28 13:04:16 --> Router Class Initialized
DEBUG - 2010-07-28 13:04:16 --> Output Class Initialized
DEBUG - 2010-07-28 13:04:16 --> Input Class Initialized
DEBUG - 2010-07-28 13:04:16 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 13:04:16 --> Language Class Initialized
DEBUG - 2010-07-28 13:04:16 --> Loader Class Initialized
DEBUG - 2010-07-28 13:04:16 --> Helper loaded: url_helper
DEBUG - 2010-07-28 13:04:16 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 13:04:16 --> Database Driver Class Initialized
DEBUG - 2010-07-28 13:04:16 --> Controller Class Initialized
DEBUG - 2010-07-28 13:04:16 --> Model Class Initialized
DEBUG - 2010-07-28 13:04:16 --> Starting get_summary_data
DEBUG - 2010-07-28 13:04:16 --> Database Driver Class Initialized
DEBUG - 2010-07-28 13:04:16 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 13:04:16 --> DB query starting...
DEBUG - 2010-07-28 13:04:16 --> DB query ended, calculating time...
DEBUG - 2010-07-28 13:04:16 --> DB query timing: 0.0025489330291748 seconds.
DEBUG - 2010-07-28 13:04:16 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 13:04:16 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 13:04:16 --> Final output sent to browser
DEBUG - 2010-07-28 13:04:16 --> Total execution time: 0.0521
DEBUG - 2010-07-28 13:33:25 --> Config Class Initialized
DEBUG - 2010-07-28 13:33:25 --> Hooks Class Initialized
DEBUG - 2010-07-28 13:33:25 --> URI Class Initialized
DEBUG - 2010-07-28 13:33:25 --> Router Class Initialized
DEBUG - 2010-07-28 13:33:25 --> Output Class Initialized
DEBUG - 2010-07-28 13:33:25 --> Input Class Initialized
DEBUG - 2010-07-28 13:33:25 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 13:33:25 --> Language Class Initialized
DEBUG - 2010-07-28 13:33:25 --> Loader Class Initialized
DEBUG - 2010-07-28 13:33:25 --> Helper loaded: url_helper
DEBUG - 2010-07-28 13:33:25 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 13:33:25 --> Database Driver Class Initialized
DEBUG - 2010-07-28 13:33:25 --> Controller Class Initialized
DEBUG - 2010-07-28 13:33:25 --> Model Class Initialized
DEBUG - 2010-07-28 13:33:25 --> Starting get_summary_data
DEBUG - 2010-07-28 13:33:25 --> Database Driver Class Initialized
DEBUG - 2010-07-28 13:33:25 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 13:33:25 --> DB query starting...
DEBUG - 2010-07-28 13:33:25 --> DB query ended, calculating time...
DEBUG - 2010-07-28 13:33:25 --> DB query timing: 0.0025899410247803 seconds.
DEBUG - 2010-07-28 13:33:25 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 13:33:25 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 13:33:25 --> Final output sent to browser
DEBUG - 2010-07-28 13:33:25 --> Total execution time: 0.0529
DEBUG - 2010-07-28 13:34:13 --> Config Class Initialized
DEBUG - 2010-07-28 13:34:13 --> Hooks Class Initialized
DEBUG - 2010-07-28 13:34:13 --> URI Class Initialized
DEBUG - 2010-07-28 13:34:13 --> Router Class Initialized
DEBUG - 2010-07-28 13:34:13 --> Output Class Initialized
DEBUG - 2010-07-28 13:34:13 --> Input Class Initialized
DEBUG - 2010-07-28 13:34:13 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 13:34:13 --> Language Class Initialized
DEBUG - 2010-07-28 13:34:13 --> Loader Class Initialized
DEBUG - 2010-07-28 13:34:13 --> Helper loaded: url_helper
DEBUG - 2010-07-28 13:34:13 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 13:34:13 --> Database Driver Class Initialized
DEBUG - 2010-07-28 13:34:13 --> Controller Class Initialized
DEBUG - 2010-07-28 13:34:13 --> Model Class Initialized
DEBUG - 2010-07-28 13:34:13 --> Starting get_summary_data
DEBUG - 2010-07-28 13:34:13 --> Database Driver Class Initialized
DEBUG - 2010-07-28 13:34:13 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 13:34:13 --> DB query starting...
DEBUG - 2010-07-28 13:34:13 --> DB query ended, calculating time...
DEBUG - 2010-07-28 13:34:13 --> DB query timing: 0.002608060836792 seconds.
DEBUG - 2010-07-28 13:34:13 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 13:34:13 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 13:34:13 --> Final output sent to browser
DEBUG - 2010-07-28 13:34:13 --> Total execution time: 0.0531
DEBUG - 2010-07-28 14:03:26 --> Config Class Initialized
DEBUG - 2010-07-28 14:03:26 --> Hooks Class Initialized
DEBUG - 2010-07-28 14:03:26 --> URI Class Initialized
DEBUG - 2010-07-28 14:03:26 --> Router Class Initialized
DEBUG - 2010-07-28 14:03:26 --> Output Class Initialized
DEBUG - 2010-07-28 14:03:26 --> Input Class Initialized
DEBUG - 2010-07-28 14:03:26 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 14:03:26 --> Language Class Initialized
DEBUG - 2010-07-28 14:03:27 --> Loader Class Initialized
DEBUG - 2010-07-28 14:03:27 --> Helper loaded: url_helper
DEBUG - 2010-07-28 14:03:27 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 14:03:27 --> Database Driver Class Initialized
DEBUG - 2010-07-28 14:03:27 --> Controller Class Initialized
DEBUG - 2010-07-28 14:03:27 --> Model Class Initialized
DEBUG - 2010-07-28 14:03:27 --> Starting get_summary_data
DEBUG - 2010-07-28 14:03:27 --> Database Driver Class Initialized
DEBUG - 2010-07-28 14:03:27 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 14:03:27 --> DB query starting...
DEBUG - 2010-07-28 14:03:27 --> DB query ended, calculating time...
DEBUG - 2010-07-28 14:03:27 --> DB query timing: 0.0026772022247314 seconds.
DEBUG - 2010-07-28 14:03:27 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 14:03:27 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 14:03:27 --> Final output sent to browser
DEBUG - 2010-07-28 14:03:27 --> Total execution time: 0.0531
DEBUG - 2010-07-28 14:04:14 --> Config Class Initialized
DEBUG - 2010-07-28 14:04:14 --> Hooks Class Initialized
DEBUG - 2010-07-28 14:04:14 --> URI Class Initialized
DEBUG - 2010-07-28 14:04:14 --> Router Class Initialized
DEBUG - 2010-07-28 14:04:14 --> Output Class Initialized
DEBUG - 2010-07-28 14:04:14 --> Input Class Initialized
DEBUG - 2010-07-28 14:04:14 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 14:04:14 --> Language Class Initialized
DEBUG - 2010-07-28 14:04:14 --> Loader Class Initialized
DEBUG - 2010-07-28 14:04:14 --> Helper loaded: url_helper
DEBUG - 2010-07-28 14:04:14 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 14:04:14 --> Database Driver Class Initialized
DEBUG - 2010-07-28 14:04:14 --> Controller Class Initialized
DEBUG - 2010-07-28 14:04:14 --> Model Class Initialized
DEBUG - 2010-07-28 14:04:14 --> Starting get_summary_data
DEBUG - 2010-07-28 14:04:14 --> Database Driver Class Initialized
DEBUG - 2010-07-28 14:04:14 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 14:04:14 --> DB query starting...
DEBUG - 2010-07-28 14:04:14 --> DB query ended, calculating time...
DEBUG - 2010-07-28 14:04:14 --> DB query timing: 0.002626895904541 seconds.
DEBUG - 2010-07-28 14:04:14 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 14:04:14 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 14:04:14 --> Final output sent to browser
DEBUG - 2010-07-28 14:04:14 --> Total execution time: 0.0520
DEBUG - 2010-07-28 14:33:28 --> Config Class Initialized
DEBUG - 2010-07-28 14:33:28 --> Hooks Class Initialized
DEBUG - 2010-07-28 14:33:28 --> URI Class Initialized
DEBUG - 2010-07-28 14:33:28 --> Router Class Initialized
DEBUG - 2010-07-28 14:33:28 --> Output Class Initialized
DEBUG - 2010-07-28 14:33:28 --> Input Class Initialized
DEBUG - 2010-07-28 14:33:28 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 14:33:28 --> Language Class Initialized
DEBUG - 2010-07-28 14:33:28 --> Loader Class Initialized
DEBUG - 2010-07-28 14:33:28 --> Helper loaded: url_helper
DEBUG - 2010-07-28 14:33:28 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 14:33:28 --> Database Driver Class Initialized
DEBUG - 2010-07-28 14:33:28 --> Controller Class Initialized
DEBUG - 2010-07-28 14:33:28 --> Model Class Initialized
DEBUG - 2010-07-28 14:33:28 --> Starting get_summary_data
DEBUG - 2010-07-28 14:33:28 --> Database Driver Class Initialized
DEBUG - 2010-07-28 14:33:28 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 14:33:28 --> DB query starting...
DEBUG - 2010-07-28 14:33:28 --> DB query ended, calculating time...
DEBUG - 2010-07-28 14:33:28 --> DB query timing: 0.0026848316192627 seconds.
DEBUG - 2010-07-28 14:33:28 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 14:33:28 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 14:33:28 --> Final output sent to browser
DEBUG - 2010-07-28 14:33:28 --> Total execution time: 0.0536
DEBUG - 2010-07-28 14:34:10 --> Config Class Initialized
DEBUG - 2010-07-28 14:34:10 --> Hooks Class Initialized
DEBUG - 2010-07-28 14:34:10 --> URI Class Initialized
DEBUG - 2010-07-28 14:34:10 --> Router Class Initialized
DEBUG - 2010-07-28 14:34:10 --> Output Class Initialized
DEBUG - 2010-07-28 14:34:10 --> Input Class Initialized
DEBUG - 2010-07-28 14:34:10 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 14:34:10 --> Language Class Initialized
DEBUG - 2010-07-28 14:34:10 --> Loader Class Initialized
DEBUG - 2010-07-28 14:34:10 --> Helper loaded: url_helper
DEBUG - 2010-07-28 14:34:10 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 14:34:10 --> Database Driver Class Initialized
DEBUG - 2010-07-28 14:34:10 --> Controller Class Initialized
DEBUG - 2010-07-28 14:34:10 --> Model Class Initialized
DEBUG - 2010-07-28 14:34:10 --> Starting get_summary_data
DEBUG - 2010-07-28 14:34:10 --> Database Driver Class Initialized
DEBUG - 2010-07-28 14:34:10 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 14:34:10 --> DB query starting...
DEBUG - 2010-07-28 14:34:10 --> DB query ended, calculating time...
DEBUG - 2010-07-28 14:34:10 --> DB query timing: 0.0026340484619141 seconds.
DEBUG - 2010-07-28 14:34:10 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 14:34:10 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 14:34:10 --> Final output sent to browser
DEBUG - 2010-07-28 14:34:10 --> Total execution time: 0.0530
DEBUG - 2010-07-28 15:03:30 --> Config Class Initialized
DEBUG - 2010-07-28 15:03:30 --> Hooks Class Initialized
DEBUG - 2010-07-28 15:03:30 --> URI Class Initialized
DEBUG - 2010-07-28 15:03:30 --> Router Class Initialized
DEBUG - 2010-07-28 15:03:30 --> Output Class Initialized
DEBUG - 2010-07-28 15:03:30 --> Input Class Initialized
DEBUG - 2010-07-28 15:03:30 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 15:03:30 --> Language Class Initialized
DEBUG - 2010-07-28 15:03:30 --> Loader Class Initialized
DEBUG - 2010-07-28 15:03:30 --> Helper loaded: url_helper
DEBUG - 2010-07-28 15:03:30 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 15:03:30 --> Database Driver Class Initialized
DEBUG - 2010-07-28 15:03:30 --> Controller Class Initialized
DEBUG - 2010-07-28 15:03:30 --> Model Class Initialized
DEBUG - 2010-07-28 15:03:30 --> Starting get_summary_data
DEBUG - 2010-07-28 15:03:30 --> Database Driver Class Initialized
DEBUG - 2010-07-28 15:03:30 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 15:03:30 --> DB query starting...
DEBUG - 2010-07-28 15:03:30 --> DB query ended, calculating time...
DEBUG - 2010-07-28 15:03:30 --> DB query timing: 0.0026609897613525 seconds.
DEBUG - 2010-07-28 15:03:30 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 15:03:30 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 15:03:30 --> Final output sent to browser
DEBUG - 2010-07-28 15:03:30 --> Total execution time: 0.0534
DEBUG - 2010-07-28 15:04:10 --> Config Class Initialized
DEBUG - 2010-07-28 15:04:10 --> Hooks Class Initialized
DEBUG - 2010-07-28 15:04:10 --> URI Class Initialized
DEBUG - 2010-07-28 15:04:10 --> Router Class Initialized
DEBUG - 2010-07-28 15:04:10 --> Output Class Initialized
DEBUG - 2010-07-28 15:04:10 --> Input Class Initialized
DEBUG - 2010-07-28 15:04:10 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 15:04:10 --> Language Class Initialized
DEBUG - 2010-07-28 15:04:10 --> Loader Class Initialized
DEBUG - 2010-07-28 15:04:10 --> Helper loaded: url_helper
DEBUG - 2010-07-28 15:04:10 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 15:04:10 --> Database Driver Class Initialized
DEBUG - 2010-07-28 15:04:10 --> Controller Class Initialized
DEBUG - 2010-07-28 15:04:10 --> Model Class Initialized
DEBUG - 2010-07-28 15:04:10 --> Starting get_summary_data
DEBUG - 2010-07-28 15:04:10 --> Database Driver Class Initialized
DEBUG - 2010-07-28 15:04:10 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 15:04:10 --> DB query starting...
DEBUG - 2010-07-28 15:04:10 --> DB query ended, calculating time...
DEBUG - 2010-07-28 15:04:10 --> DB query timing: 0.0026400089263916 seconds.
DEBUG - 2010-07-28 15:04:10 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 15:04:10 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 15:04:10 --> Final output sent to browser
DEBUG - 2010-07-28 15:04:10 --> Total execution time: 0.0534
DEBUG - 2010-07-28 15:33:31 --> Config Class Initialized
DEBUG - 2010-07-28 15:33:31 --> Hooks Class Initialized
DEBUG - 2010-07-28 15:33:32 --> URI Class Initialized
DEBUG - 2010-07-28 15:33:32 --> Router Class Initialized
DEBUG - 2010-07-28 15:33:32 --> Output Class Initialized
DEBUG - 2010-07-28 15:33:32 --> Input Class Initialized
DEBUG - 2010-07-28 15:33:32 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 15:33:32 --> Language Class Initialized
DEBUG - 2010-07-28 15:33:32 --> Loader Class Initialized
DEBUG - 2010-07-28 15:33:32 --> Helper loaded: url_helper
DEBUG - 2010-07-28 15:33:32 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 15:33:32 --> Database Driver Class Initialized
DEBUG - 2010-07-28 15:33:32 --> Controller Class Initialized
DEBUG - 2010-07-28 15:33:32 --> Model Class Initialized
DEBUG - 2010-07-28 15:33:32 --> Starting get_summary_data
DEBUG - 2010-07-28 15:33:32 --> Database Driver Class Initialized
DEBUG - 2010-07-28 15:33:32 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 15:33:32 --> DB query starting...
DEBUG - 2010-07-28 15:33:32 --> DB query ended, calculating time...
DEBUG - 2010-07-28 15:33:32 --> DB query timing: 0.0025827884674072 seconds.
DEBUG - 2010-07-28 15:33:32 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 15:33:32 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 15:33:32 --> Final output sent to browser
DEBUG - 2010-07-28 15:33:32 --> Total execution time: 0.0528
DEBUG - 2010-07-28 15:34:42 --> Config Class Initialized
DEBUG - 2010-07-28 15:34:42 --> Hooks Class Initialized
DEBUG - 2010-07-28 15:34:42 --> URI Class Initialized
DEBUG - 2010-07-28 15:34:42 --> Router Class Initialized
DEBUG - 2010-07-28 15:34:42 --> Output Class Initialized
DEBUG - 2010-07-28 15:34:42 --> Input Class Initialized
DEBUG - 2010-07-28 15:34:42 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 15:34:42 --> Language Class Initialized
DEBUG - 2010-07-28 15:34:42 --> Loader Class Initialized
DEBUG - 2010-07-28 15:34:42 --> Helper loaded: url_helper
DEBUG - 2010-07-28 15:34:42 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 15:34:42 --> Database Driver Class Initialized
DEBUG - 2010-07-28 15:34:42 --> Controller Class Initialized
DEBUG - 2010-07-28 15:34:42 --> Model Class Initialized
DEBUG - 2010-07-28 15:34:42 --> Starting get_summary_data
DEBUG - 2010-07-28 15:34:42 --> Database Driver Class Initialized
DEBUG - 2010-07-28 15:34:42 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 15:34:42 --> DB query starting...
DEBUG - 2010-07-28 15:34:42 --> DB query ended, calculating time...
DEBUG - 2010-07-28 15:34:42 --> DB query timing: 0.0027039051055908 seconds.
DEBUG - 2010-07-28 15:34:42 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 15:34:42 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 15:34:42 --> Final output sent to browser
DEBUG - 2010-07-28 15:34:42 --> Total execution time: 0.0563
DEBUG - 2010-07-28 16:00:32 --> Config Class Initialized
DEBUG - 2010-07-28 16:00:32 --> Hooks Class Initialized
DEBUG - 2010-07-28 16:00:32 --> URI Class Initialized
DEBUG - 2010-07-28 16:00:32 --> Router Class Initialized
DEBUG - 2010-07-28 16:00:32 --> Output Class Initialized
DEBUG - 2010-07-28 16:00:32 --> Input Class Initialized
DEBUG - 2010-07-28 16:00:32 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 16:00:32 --> Language Class Initialized
DEBUG - 2010-07-28 16:00:32 --> Loader Class Initialized
DEBUG - 2010-07-28 16:00:32 --> Helper loaded: url_helper
DEBUG - 2010-07-28 16:00:32 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 16:00:32 --> Database Driver Class Initialized
DEBUG - 2010-07-28 16:00:32 --> Controller Class Initialized
DEBUG - 2010-07-28 16:00:32 --> log_index function called
DEBUG - 2010-07-28 16:00:32 --> Model Class Initialized
DEBUG - 2010-07-28 16:00:32 --> Helper loaded: form_helper
DEBUG - 2010-07-28 16:00:32 --> Validation Class Initialized
DEBUG - 2010-07-28 16:00:32 --> log_index hostname: sjcplaydb02p.ood.ops
DEBUG - 2010-07-28 16:00:32 --> log_index state: fail
DEBUG - 2010-07-28 16:00:32 --> log_index size: 1
DEBUG - 2010-07-28 16:00:32 --> log_index continuing...
DEBUG - 2010-07-28 16:00:32 --> Database Driver Class Initialized
DEBUG - 2010-07-28 16:00:32 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'sjcplaydb02p.ood.ops', 'fail', '1', NOW()) ON DUPLICATE KEY UPDATE `state`='fail', `size`='1', creation_time=NOW();
DEBUG - 2010-07-28 16:00:32 --> Final output sent to browser
DEBUG - 2010-07-28 16:00:32 --> Total execution time: 0.0606
DEBUG - 2010-07-28 16:03:33 --> Config Class Initialized
DEBUG - 2010-07-28 16:03:33 --> Hooks Class Initialized
DEBUG - 2010-07-28 16:03:33 --> URI Class Initialized
DEBUG - 2010-07-28 16:03:33 --> Router Class Initialized
DEBUG - 2010-07-28 16:03:33 --> Output Class Initialized
DEBUG - 2010-07-28 16:03:33 --> Input Class Initialized
DEBUG - 2010-07-28 16:03:33 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 16:03:33 --> Language Class Initialized
DEBUG - 2010-07-28 16:03:33 --> Loader Class Initialized
DEBUG - 2010-07-28 16:03:33 --> Helper loaded: url_helper
DEBUG - 2010-07-28 16:03:33 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 16:03:33 --> Database Driver Class Initialized
DEBUG - 2010-07-28 16:03:33 --> Controller Class Initialized
DEBUG - 2010-07-28 16:03:33 --> Model Class Initialized
DEBUG - 2010-07-28 16:03:33 --> Starting get_summary_data
DEBUG - 2010-07-28 16:03:33 --> Database Driver Class Initialized
DEBUG - 2010-07-28 16:03:33 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 16:03:33 --> DB query starting...
DEBUG - 2010-07-28 16:03:33 --> DB query ended, calculating time...
DEBUG - 2010-07-28 16:03:33 --> DB query timing: 0.0033209323883057 seconds.
DEBUG - 2010-07-28 16:03:33 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 16:03:33 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 16:03:33 --> Final output sent to browser
DEBUG - 2010-07-28 16:03:33 --> Total execution time: 0.0536
DEBUG - 2010-07-28 16:03:43 --> Config Class Initialized
DEBUG - 2010-07-28 16:03:43 --> Hooks Class Initialized
DEBUG - 2010-07-28 16:03:43 --> URI Class Initialized
DEBUG - 2010-07-28 16:03:43 --> Router Class Initialized
DEBUG - 2010-07-28 16:03:43 --> Output Class Initialized
DEBUG - 2010-07-28 16:03:43 --> Input Class Initialized
DEBUG - 2010-07-28 16:03:43 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 16:03:43 --> Language Class Initialized
DEBUG - 2010-07-28 16:03:43 --> Loader Class Initialized
DEBUG - 2010-07-28 16:03:43 --> Helper loaded: url_helper
DEBUG - 2010-07-28 16:03:43 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 16:03:43 --> Database Driver Class Initialized
DEBUG - 2010-07-28 16:03:43 --> Controller Class Initialized
DEBUG - 2010-07-28 16:03:43 --> Model Class Initialized
DEBUG - 2010-07-28 16:03:43 --> Starting get_summary_data
DEBUG - 2010-07-28 16:03:43 --> Database Driver Class Initialized
DEBUG - 2010-07-28 16:03:43 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 16:03:43 --> DB query starting...
DEBUG - 2010-07-28 16:03:43 --> DB query ended, calculating time...
DEBUG - 2010-07-28 16:03:43 --> DB query timing: 0.0026040077209473 seconds.
DEBUG - 2010-07-28 16:03:43 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 16:03:43 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 16:03:43 --> Final output sent to browser
DEBUG - 2010-07-28 16:03:43 --> Total execution time: 0.0533
DEBUG - 2010-07-28 16:33:35 --> Config Class Initialized
DEBUG - 2010-07-28 16:33:35 --> Hooks Class Initialized
DEBUG - 2010-07-28 16:33:35 --> URI Class Initialized
DEBUG - 2010-07-28 16:33:35 --> Router Class Initialized
DEBUG - 2010-07-28 16:33:35 --> Output Class Initialized
DEBUG - 2010-07-28 16:33:35 --> Input Class Initialized
DEBUG - 2010-07-28 16:33:35 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 16:33:35 --> Language Class Initialized
DEBUG - 2010-07-28 16:33:35 --> Loader Class Initialized
DEBUG - 2010-07-28 16:33:35 --> Helper loaded: url_helper
DEBUG - 2010-07-28 16:33:35 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 16:33:35 --> Database Driver Class Initialized
DEBUG - 2010-07-28 16:33:35 --> Controller Class Initialized
DEBUG - 2010-07-28 16:33:35 --> Model Class Initialized
DEBUG - 2010-07-28 16:33:35 --> Starting get_summary_data
DEBUG - 2010-07-28 16:33:35 --> Database Driver Class Initialized
DEBUG - 2010-07-28 16:33:35 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 16:33:35 --> DB query starting...
DEBUG - 2010-07-28 16:33:35 --> DB query ended, calculating time...
DEBUG - 2010-07-28 16:33:35 --> DB query timing: 0.0028221607208252 seconds.
DEBUG - 2010-07-28 16:33:35 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 16:33:35 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 16:33:35 --> Final output sent to browser
DEBUG - 2010-07-28 16:33:35 --> Total execution time: 0.0534
DEBUG - 2010-07-28 16:33:46 --> Config Class Initialized
DEBUG - 2010-07-28 16:33:46 --> Hooks Class Initialized
DEBUG - 2010-07-28 16:33:46 --> URI Class Initialized
DEBUG - 2010-07-28 16:33:46 --> Router Class Initialized
DEBUG - 2010-07-28 16:33:46 --> Output Class Initialized
DEBUG - 2010-07-28 16:33:46 --> Input Class Initialized
DEBUG - 2010-07-28 16:33:46 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 16:33:46 --> Language Class Initialized
DEBUG - 2010-07-28 16:33:46 --> Loader Class Initialized
DEBUG - 2010-07-28 16:33:46 --> Helper loaded: url_helper
DEBUG - 2010-07-28 16:33:46 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 16:33:46 --> Database Driver Class Initialized
DEBUG - 2010-07-28 16:33:46 --> Controller Class Initialized
DEBUG - 2010-07-28 16:33:46 --> Model Class Initialized
DEBUG - 2010-07-28 16:33:46 --> Starting get_summary_data
DEBUG - 2010-07-28 16:33:46 --> Database Driver Class Initialized
DEBUG - 2010-07-28 16:33:46 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 16:33:46 --> DB query starting...
DEBUG - 2010-07-28 16:33:46 --> DB query ended, calculating time...
DEBUG - 2010-07-28 16:33:46 --> DB query timing: 0.0025899410247803 seconds.
DEBUG - 2010-07-28 16:33:46 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 16:33:46 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 16:33:46 --> Final output sent to browser
DEBUG - 2010-07-28 16:33:46 --> Total execution time: 0.0532
DEBUG - 2010-07-28 17:03:36 --> Config Class Initialized
DEBUG - 2010-07-28 17:03:36 --> Hooks Class Initialized
DEBUG - 2010-07-28 17:03:36 --> URI Class Initialized
DEBUG - 2010-07-28 17:03:36 --> Router Class Initialized
DEBUG - 2010-07-28 17:03:36 --> Output Class Initialized
DEBUG - 2010-07-28 17:03:36 --> Input Class Initialized
DEBUG - 2010-07-28 17:03:36 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 17:03:36 --> Language Class Initialized
DEBUG - 2010-07-28 17:03:36 --> Loader Class Initialized
DEBUG - 2010-07-28 17:03:36 --> Helper loaded: url_helper
DEBUG - 2010-07-28 17:03:36 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 17:03:36 --> Database Driver Class Initialized
DEBUG - 2010-07-28 17:03:36 --> Controller Class Initialized
DEBUG - 2010-07-28 17:03:37 --> Model Class Initialized
DEBUG - 2010-07-28 17:03:37 --> Starting get_summary_data
DEBUG - 2010-07-28 17:03:37 --> Database Driver Class Initialized
DEBUG - 2010-07-28 17:03:37 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 17:03:37 --> DB query starting...
DEBUG - 2010-07-28 17:03:37 --> DB query ended, calculating time...
DEBUG - 2010-07-28 17:03:37 --> DB query timing: 0.002655029296875 seconds.
DEBUG - 2010-07-28 17:03:37 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 17:03:37 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 17:03:37 --> Final output sent to browser
DEBUG - 2010-07-28 17:03:37 --> Total execution time: 0.0531
DEBUG - 2010-07-28 17:03:48 --> Config Class Initialized
DEBUG - 2010-07-28 17:03:48 --> Hooks Class Initialized
DEBUG - 2010-07-28 17:03:48 --> URI Class Initialized
DEBUG - 2010-07-28 17:03:48 --> Router Class Initialized
DEBUG - 2010-07-28 17:03:48 --> Output Class Initialized
DEBUG - 2010-07-28 17:03:48 --> Input Class Initialized
DEBUG - 2010-07-28 17:03:48 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 17:03:48 --> Language Class Initialized
DEBUG - 2010-07-28 17:03:48 --> Loader Class Initialized
DEBUG - 2010-07-28 17:03:48 --> Helper loaded: url_helper
DEBUG - 2010-07-28 17:03:48 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 17:03:48 --> Database Driver Class Initialized
DEBUG - 2010-07-28 17:03:48 --> Controller Class Initialized
DEBUG - 2010-07-28 17:03:48 --> Model Class Initialized
DEBUG - 2010-07-28 17:03:48 --> Starting get_summary_data
DEBUG - 2010-07-28 17:03:48 --> Database Driver Class Initialized
DEBUG - 2010-07-28 17:03:48 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 17:03:48 --> DB query starting...
DEBUG - 2010-07-28 17:03:48 --> DB query ended, calculating time...
DEBUG - 2010-07-28 17:03:48 --> DB query timing: 0.0025899410247803 seconds.
DEBUG - 2010-07-28 17:03:48 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 17:03:48 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 17:03:48 --> Final output sent to browser
DEBUG - 2010-07-28 17:03:48 --> Total execution time: 0.0529
DEBUG - 2010-07-28 17:33:38 --> Config Class Initialized
DEBUG - 2010-07-28 17:33:38 --> Hooks Class Initialized
DEBUG - 2010-07-28 17:33:38 --> URI Class Initialized
DEBUG - 2010-07-28 17:33:38 --> Router Class Initialized
DEBUG - 2010-07-28 17:33:38 --> Output Class Initialized
DEBUG - 2010-07-28 17:33:38 --> Input Class Initialized
DEBUG - 2010-07-28 17:33:38 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 17:33:38 --> Language Class Initialized
DEBUG - 2010-07-28 17:33:38 --> Loader Class Initialized
DEBUG - 2010-07-28 17:33:38 --> Helper loaded: url_helper
DEBUG - 2010-07-28 17:33:38 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 17:33:38 --> Database Driver Class Initialized
DEBUG - 2010-07-28 17:33:38 --> Controller Class Initialized
DEBUG - 2010-07-28 17:33:38 --> Model Class Initialized
DEBUG - 2010-07-28 17:33:38 --> Starting get_summary_data
DEBUG - 2010-07-28 17:33:38 --> Database Driver Class Initialized
DEBUG - 2010-07-28 17:33:38 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 17:33:38 --> DB query starting...
DEBUG - 2010-07-28 17:33:38 --> DB query ended, calculating time...
DEBUG - 2010-07-28 17:33:38 --> DB query timing: 0.0025999546051025 seconds.
DEBUG - 2010-07-28 17:33:38 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 17:33:38 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 17:33:38 --> Final output sent to browser
DEBUG - 2010-07-28 17:33:38 --> Total execution time: 0.0533
DEBUG - 2010-07-28 17:34:12 --> Config Class Initialized
DEBUG - 2010-07-28 17:34:12 --> Hooks Class Initialized
DEBUG - 2010-07-28 17:34:12 --> URI Class Initialized
DEBUG - 2010-07-28 17:34:12 --> Router Class Initialized
DEBUG - 2010-07-28 17:34:12 --> Output Class Initialized
DEBUG - 2010-07-28 17:34:12 --> Input Class Initialized
DEBUG - 2010-07-28 17:34:12 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 17:34:12 --> Language Class Initialized
DEBUG - 2010-07-28 17:34:12 --> Loader Class Initialized
DEBUG - 2010-07-28 17:34:12 --> Helper loaded: url_helper
DEBUG - 2010-07-28 17:34:12 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 17:34:12 --> Database Driver Class Initialized
DEBUG - 2010-07-28 17:34:12 --> Controller Class Initialized
DEBUG - 2010-07-28 17:34:12 --> Model Class Initialized
DEBUG - 2010-07-28 17:34:12 --> Starting get_summary_data
DEBUG - 2010-07-28 17:34:12 --> Database Driver Class Initialized
DEBUG - 2010-07-28 17:34:12 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 17:34:12 --> DB query starting...
DEBUG - 2010-07-28 17:34:12 --> DB query ended, calculating time...
DEBUG - 2010-07-28 17:34:12 --> DB query timing: 0.0026030540466309 seconds.
DEBUG - 2010-07-28 17:34:12 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 17:34:12 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 17:34:12 --> Final output sent to browser
DEBUG - 2010-07-28 17:34:12 --> Total execution time: 0.0528
DEBUG - 2010-07-28 17:56:23 --> Config Class Initialized
DEBUG - 2010-07-28 17:56:23 --> Hooks Class Initialized
DEBUG - 2010-07-28 17:56:23 --> URI Class Initialized
DEBUG - 2010-07-28 17:56:23 --> Router Class Initialized
DEBUG - 2010-07-28 17:56:23 --> Output Class Initialized
DEBUG - 2010-07-28 17:56:23 --> Input Class Initialized
DEBUG - 2010-07-28 17:56:23 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 17:56:23 --> Language Class Initialized
DEBUG - 2010-07-28 17:56:23 --> Loader Class Initialized
DEBUG - 2010-07-28 17:56:23 --> Helper loaded: url_helper
DEBUG - 2010-07-28 17:56:23 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 17:56:23 --> Database Driver Class Initialized
DEBUG - 2010-07-28 17:56:23 --> Controller Class Initialized
DEBUG - 2010-07-28 17:56:23 --> log_index function called
DEBUG - 2010-07-28 17:56:23 --> Model Class Initialized
DEBUG - 2010-07-28 17:56:23 --> Helper loaded: form_helper
DEBUG - 2010-07-28 17:56:23 --> Validation Class Initialized
DEBUG - 2010-07-28 17:56:23 --> log_index hostname: iadadobcndb06p
DEBUG - 2010-07-28 17:56:23 --> log_index state: SUCCESS
DEBUG - 2010-07-28 17:56:23 --> log_index size: 20260667873
DEBUG - 2010-07-28 17:56:23 --> log_index continuing...
DEBUG - 2010-07-28 17:56:23 --> Database Driver Class Initialized
DEBUG - 2010-07-28 17:56:23 --> Transaction: INSERT INTO `state` (
`id` ,
`hostname` ,
`state` ,
`size`,
`creation_time`
)
VALUES (
NULL , 'iadadobcndb06p', 'SUCCESS', '20260667873', NOW()) ON DUPLICATE KEY UPDATE `state`='SUCCESS', `size`='20260667873', creation_time=NOW();
DEBUG - 2010-07-28 17:56:23 --> Final output sent to browser
DEBUG - 2010-07-28 17:56:23 --> Total execution time: 0.0597
DEBUG - 2010-07-28 18:03:40 --> Config Class Initialized
DEBUG - 2010-07-28 18:03:40 --> Hooks Class Initialized
DEBUG - 2010-07-28 18:03:40 --> URI Class Initialized
DEBUG - 2010-07-28 18:03:40 --> Router Class Initialized
DEBUG - 2010-07-28 18:03:40 --> Output Class Initialized
DEBUG - 2010-07-28 18:03:40 --> Input Class Initialized
DEBUG - 2010-07-28 18:03:40 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 18:03:40 --> Language Class Initialized
DEBUG - 2010-07-28 18:03:40 --> Loader Class Initialized
DEBUG - 2010-07-28 18:03:40 --> Helper loaded: url_helper
DEBUG - 2010-07-28 18:03:40 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 18:03:40 --> Database Driver Class Initialized
DEBUG - 2010-07-28 18:03:40 --> Controller Class Initialized
DEBUG - 2010-07-28 18:03:40 --> Model Class Initialized
DEBUG - 2010-07-28 18:03:40 --> Starting get_summary_data
DEBUG - 2010-07-28 18:03:40 --> Database Driver Class Initialized
DEBUG - 2010-07-28 18:03:40 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 18:03:40 --> DB query starting...
DEBUG - 2010-07-28 18:03:40 --> DB query ended, calculating time...
DEBUG - 2010-07-28 18:03:40 --> DB query timing: 0.0037908554077148 seconds.
DEBUG - 2010-07-28 18:03:40 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 18:03:40 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 18:03:40 --> Final output sent to browser
DEBUG - 2010-07-28 18:03:40 --> Total execution time: 0.0544
DEBUG - 2010-07-28 18:04:11 --> Config Class Initialized
DEBUG - 2010-07-28 18:04:11 --> Hooks Class Initialized
DEBUG - 2010-07-28 18:04:11 --> URI Class Initialized
DEBUG - 2010-07-28 18:04:11 --> Router Class Initialized
DEBUG - 2010-07-28 18:04:11 --> Output Class Initialized
DEBUG - 2010-07-28 18:04:11 --> Input Class Initialized
DEBUG - 2010-07-28 18:04:11 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 18:04:11 --> Language Class Initialized
DEBUG - 2010-07-28 18:04:11 --> Loader Class Initialized
DEBUG - 2010-07-28 18:04:11 --> Helper loaded: url_helper
DEBUG - 2010-07-28 18:04:11 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 18:04:11 --> Database Driver Class Initialized
DEBUG - 2010-07-28 18:04:11 --> Controller Class Initialized
DEBUG - 2010-07-28 18:04:11 --> Model Class Initialized
DEBUG - 2010-07-28 18:04:11 --> Starting get_summary_data
DEBUG - 2010-07-28 18:04:11 --> Database Driver Class Initialized
DEBUG - 2010-07-28 18:04:11 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 18:04:11 --> DB query starting...
DEBUG - 2010-07-28 18:04:11 --> DB query ended, calculating time...
DEBUG - 2010-07-28 18:04:11 --> DB query timing: 0.002626895904541 seconds.
DEBUG - 2010-07-28 18:04:11 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 18:04:11 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 18:04:11 --> Final output sent to browser
DEBUG - 2010-07-28 18:04:11 --> Total execution time: 0.0535
DEBUG - 2010-07-28 18:34:09 --> Config Class Initialized
DEBUG - 2010-07-28 18:34:09 --> Hooks Class Initialized
DEBUG - 2010-07-28 18:34:09 --> URI Class Initialized
DEBUG - 2010-07-28 18:34:09 --> Router Class Initialized
DEBUG - 2010-07-28 18:34:09 --> Output Class Initialized
DEBUG - 2010-07-28 18:34:09 --> Input Class Initialized
DEBUG - 2010-07-28 18:34:09 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 18:34:09 --> Language Class Initialized
DEBUG - 2010-07-28 18:34:09 --> Loader Class Initialized
DEBUG - 2010-07-28 18:34:09 --> Helper loaded: url_helper
DEBUG - 2010-07-28 18:34:09 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 18:34:09 --> Database Driver Class Initialized
DEBUG - 2010-07-28 18:34:09 --> Controller Class Initialized
DEBUG - 2010-07-28 18:34:09 --> Model Class Initialized
DEBUG - 2010-07-28 18:34:09 --> Starting get_summary_data
DEBUG - 2010-07-28 18:34:09 --> Database Driver Class Initialized
DEBUG - 2010-07-28 18:34:09 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 18:34:09 --> DB query starting...
DEBUG - 2010-07-28 18:34:09 --> DB query ended, calculating time...
DEBUG - 2010-07-28 18:34:09 --> DB query timing: 0.0025539398193359 seconds.
DEBUG - 2010-07-28 18:34:09 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 18:34:09 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 18:34:09 --> Final output sent to browser
DEBUG - 2010-07-28 18:34:09 --> Total execution time: 0.0517
DEBUG - 2010-07-28 22:32:13 --> Config Class Initialized
DEBUG - 2010-07-28 22:32:13 --> Hooks Class Initialized
DEBUG - 2010-07-28 22:32:13 --> URI Class Initialized
DEBUG - 2010-07-28 22:32:13 --> Router Class Initialized
DEBUG - 2010-07-28 22:32:13 --> Output Class Initialized
DEBUG - 2010-07-28 22:32:13 --> Input Class Initialized
DEBUG - 2010-07-28 22:32:13 --> Global POST and COOKIE data sanitized
DEBUG - 2010-07-28 22:32:13 --> Language Class Initialized
DEBUG - 2010-07-28 22:32:13 --> Loader Class Initialized
DEBUG - 2010-07-28 22:32:13 --> Helper loaded: url_helper
DEBUG - 2010-07-28 22:32:13 --> Helper loaded: querystats_helper
DEBUG - 2010-07-28 22:32:13 --> Database Driver Class Initialized
DEBUG - 2010-07-28 22:32:13 --> Controller Class Initialized
DEBUG - 2010-07-28 22:32:13 --> Model Class Initialized
DEBUG - 2010-07-28 22:32:13 --> Starting get_summary_data
DEBUG - 2010-07-28 22:32:13 --> Database Driver Class Initialized
DEBUG - 2010-07-28 22:32:13 --> select * from state where STATE != "SUCCESS" AND state != "DB-OFF" order by hostname,creation_time;
DEBUG - 2010-07-28 22:32:13 --> DB query starting...
DEBUG - 2010-07-28 22:32:13 --> DB query ended, calculating time...
DEBUG - 2010-07-28 22:32:13 --> DB query timing: 0.0025889873504639 seconds.
DEBUG - 2010-07-28 22:32:13 --> Returning data: 17 ROWS
DEBUG - 2010-07-28 22:32:13 --> File loaded: /var/www/html/backupreport.kontrollsoft.com/system/application/views/rss/rss.php
DEBUG - 2010-07-28 22:32:13 --> Final output sent to browser
DEBUG - 2010-07-28 22:32:13 --> Total execution time: 0.0530
