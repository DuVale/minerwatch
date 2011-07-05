<?php 

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_main extends Model
{

  function __construct()
  {
    $this->Model_main();
  }
  
  function Model_main()
  {
    parent::Model();
  }
  
  function enterstate($MYSQL_VERSION,$MYSQL_INNODB_BUFFER_POOL_SIZE,$MYSQL_SYNC_BINLOG,$MYSQL_TX_ISOLATION,$CPU_MODEL,$CPU_SPEED,$CPU_QUANT,$MEMORY_TOTAL_BYTES,$MEMORY_FREE_BYTES,$MEMORY_CACHED_BYTES,$MEMORY_ACTIVE_BYTES,$SWAP_TOTAL_BYTES,$SWAP_FREE_BYTES,$SYSTEM_OS,$SYSTEM_KERNEL,$SYSTEM_ARCH,$INSERT_OLTP_YES,$INSERT_OLTP_NO,$SELECT_INDEX_YES_SEQ,$SELECT_INDEX_YES_RAND,$SELECT_INDEX_NO_SEQ,$SELECT_INDEX_NO_RAND) {
    
    $MYSQL_VERSION = $this->db->escape_str($MYSQL_VERSION);
    $MYSQL_INNODB_BUFFER_POOL_SIZE = $this->db->escape_str($MYSQL_INNODB_BUFFER_POOL_SIZE);
    $MYSQL_SYNC_BINLOG = $this->db->escape_str($MYSQL_SYNC_BINLOG);
    $MYSQL_TX_ISOLATION = $this->db->escape_str($MYSQL_TX_ISOLATION);
    $CPU_MODEL = $this->db->escape_str($CPU_MODEL);
    $CPU_SPEED = $this->db->escape_str($CPU_SPEED);
    $CPU_QUANT = $this->db->escape_str($CPU_QUANT);
    $MEMORY_TOTAL_BYTES = $this->db->escape_str($MEMORY_TOTAL_BYTES);
    $MEMORY_FREE_BYTES = $this->db->escape_str($MEMORY_FREE_BYTES);
    $MEMORY_CACHED_BYTES = $this->db->escape_str($MEMORY_CACHED_BYTES);
    $MEMORY_ACTIVE_BYTES = $this->db->escape_str($MEMORY_ACTIVE_BYTES);
    $SWAP_TOTAL_BYTES = $this->db->escape_str($SWAP_TOTAL_BYTES);
    $SWAP_FREE_BYTES = $this->db->escape_str($SWAP_FREE_BYTES);
    $SYSTEM_OS = $this->db->escape_str($SYSTEM_OS);
    $SYSTEM_KERNEL = $this->db->escape_str($SYSTEM_KERNEL);
    $SYSTEM_ARCH = $this->db->escape_str($SYSTEM_ARCH);
    $INSERT_OLTP_YES = $this->db->escape_str($INSERT_OLTP_YES);
    $INSERT_OLTP_NO = $this->db->escape_str($INSERT_OLTP_NO);
    $SELECT_INDEX_YES_SEQ = $this->db->escape_str($SELECT_INDEX_YES_SEQ);
    $SELECT_INDEX_YES_RAND = $this->db->escape_str($SELECT_INDEX_YES_RAND);
    $SELECT_INDEX_NO_SEQ = $this->db->escape_str($SELECT_INDEX_NO_SEQ);
    $SELECT_INDEX_NO_RAND = $this->db->escape_str($SELECT_INDEX_NO_RAND);
    
    $r0 = mt_rand();
    $r1 = mt_rand();
    $r2 = mt_rand();
    $r3 = mt_rand();
    $salt = md5("$r0$r1$r2$r3");

    $dbr = $this->load->database('write', TRUE);
    $sql0="INSERT INTO `dbbenchmark`.`data` (
`id` ,
`MYSQL_VERSION` ,
`MYSQL_INNODB_BUFFER_POOL_SIZE` ,
`MYSQL_SYNC_BINLOG` ,
`MYSQL_TX_ISOLATION` ,
`CPU_MODEL` ,
`CPU_SPEED`,
`CPU_QUANT` ,
`MEMORY_TOTAL_BYTES` ,
`MEMORY_FREE_BYTES` ,
`MEMORY_CACHED_BYTES` ,
`MEMORY_ACTIVE_BYTES` ,
`SWAP_TOTAL_BYTES` ,
`SWAP_FREE_BYTES` ,
`SYSTEM_OS` ,
`SYSTEM_KERNEL` ,
`SYSTEM_ARCH` ,
`INSERT_OLTP_YES` ,
`INSERT_OLTP_NO` ,
`SELECT_INDEX_YES_SEQ` ,
`SELECT_INDEX_YES_RAND` ,
`SELECT_INDEX_NO_SEQ` ,
`SELECT_INDEX_NO_RAND`,
`md5`,
`creation_time`
)
VALUES (
NULL,
'$MYSQL_VERSION',
'$MYSQL_INNODB_BUFFER_POOL_SIZE',
'$MYSQL_SYNC_BINLOG',
'$MYSQL_TX_ISOLATION',
'$CPU_MODEL',
'$CPU_SPEED',
'$CPU_QUANT',
'$MEMORY_TOTAL_BYTES',
'$MEMORY_FREE_BYTES',
'$MEMORY_CACHED_BYTES',
'$MEMORY_ACTIVE_BYTES',
'$SWAP_TOTAL_BYTES',
'$SWAP_FREE_BYTES',
'$SYSTEM_OS',
'$SYSTEM_KERNEL',
'$SYSTEM_ARCH',
'$INSERT_OLTP_YES',
'$INSERT_OLTP_NO',
'$SELECT_INDEX_YES_SEQ',
'$SELECT_INDEX_YES_RAND',
'$SELECT_INDEX_NO_SEQ',
'$SELECT_INDEX_NO_RAND',
MD5('$salt'),
NOW())";
    $this->db->trans_start();
    log_message('debug', "Transaction: $sql0");
    $this->db->query($sql0);
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE) {
      log_message('debug', "Transaction failed: $sql0");
      $this->db->trans_off();
      return 1;
    } 
    else {
      $this->db->trans_off();
      return 0;
    }
  }

  function get_details($md5) {
    log_message('debug', "Starting get_details");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select * from data where md5='$md5' limit 1";
    log_message('debug', "$sql");
    qstart();
    $query = $dbr->query($sql);
    qend();
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
    else {
      return 0;
    }
  }
}
?>