<?php

class Incoming extends Controller {

  function Incoming()
  {
    parent::Controller();
  }

  function index() {
    print "index";
  }

  function add() {	  
    log_message('debug', "incoming_add function called");
    $g['root'] = $this->config->item('base_url');
    $this->load->model('Model_main', 'main');

    $MYSQL_VERSION = ($this->uri->segment(3))?$this->uri->segment(3):0;
    $MYSQL_INNODB_BUFFER_POOL_SIZE = ($this->uri->segment(4))?$this->uri->segment(4):0;
    $MYSQL_SYNC_BINLOG = ($this->uri->segment(5))?$this->uri->segment(5):0;
    $MYSQL_TX_ISOLATION = ($this->uri->segment(6))?$this->uri->segment(6):0;
    $CPU_MODEL = ($this->uri->segment(7))?$this->uri->segment(7):0;
    $CPU_SPEED = ($this->uri->segment(8))?$this->uri->segment(8):0;
    $CPU_QUANT = ($this->uri->segment(9))?$this->uri->segment(9):0;
    $MEMORY_TOTAL_BYTES = ($this->uri->segment(10))?$this->uri->segment(10):0;
    $MEMORY_FREE_BYTES = ($this->uri->segment(11))?$this->uri->segment(11):0;
    $MEMORY_CACHED_BYTES = ($this->uri->segment(12))?$this->uri->segment(12):0;
    $MEMORY_ACTIVE_BYTES = ($this->uri->segment(13))?$this->uri->segment(13):0;
    $SWAP_TOTAL_BYTES = ($this->uri->segment(14))?$this->uri->segment(14):0;
    $SWAP_FREE_BYTES = ($this->uri->segment(15))?$this->uri->segment(15):0;
    $SYSTEM_OS = ($this->uri->segment(16))?$this->uri->segment(16):0;
    $SYSTEM_KERNEL = ($this->uri->segment(17))?$this->uri->segment(17):0;
    $SYSTEM_ARCH = ($this->uri->segment(18))?$this->uri->segment(18):0;
    $INSERT_OLTP_YES = ($this->uri->segment(19))?$this->uri->segment(19):0;
    $INSERT_OLTP_NO = ($this->uri->segment(20))?$this->uri->segment(20):0;
    $SELECT_INDEX_YES_SEQ = ($this->uri->segment(21))?$this->uri->segment(21):0;
    $SELECT_INDEX_YES_RAND = ($this->uri->segment(22))?$this->uri->segment(22):0;
    $SELECT_INDEX_NO_SEQ = ($this->uri->segment(23))?$this->uri->segment(23):0;
    $SELECT_INDEX_NO_RAND = ($this->uri->segment(24))?$this->uri->segment(24):0;

    if(!$MYSQL_VERSION) { echo "URI Formatting Failure for: MYSQL_VERSION"; }
    if(!$MYSQL_INNODB_BUFFER_POOL_SIZE) { echo "URI Formatting Failure for: MYSQL_INNODB_BUFFER_POOL_SIZE"; }
    if(!$MYSQL_SYNC_BINLOG) { echo "URI Formatting Failure for: MYSQL_SYNC_BINLOG"; }
    if(!$MYSQL_TX_ISOLATION) { echo "URI Formatting Failure for: MYSQL_TX_ISOLATION"; }
    if(!$CPU_MODEL) { echo "URI Formatting Failure for: CPU_MODEL"; }
    if(!$CPU_SPEED) { echo "URI Formatting Failure for: CPU_SPEED"; }
    if(!$CPU_QUANT) { echo "URI Formatting Failure for: CPU_QUANT"; }
    if(!$MEMORY_TOTAL_BYTES) { echo "URI Formatting Failure for: MEMORY_TOTAL_BYTES"; }
    if(!$MEMORY_FREE_BYTES) { echo "URI Formatting Failure for: MEMORY_FREE_BYTES"; }
    if(!$MEMORY_CACHED_BYTES) { echo "URI Formatting Failure for: MEMORY_CACHED_BYTES"; }
    if(!$MEMORY_ACTIVE_BYTES) { echo "URI Formatting Failure for: MEMORY_ACTIVE_BYTES"; }
    if(!$SWAP_TOTAL_BYTES) { echo "URI Formatting Failure for: SWAP_TOTAL_BYTES"; }
    if(!$SWAP_FREE_BYTES) { echo "URI Formatting Failure for: SWAP_FREE_BYTES"; }
    if(!$SYSTEM_OS) { echo "URI Formatting Failure for: SYSTEM_OS"; }
    if(!$SYSTEM_KERNEL) { echo "URI Formatting Failure for: SYSTEM_KERNEL"; }
    if(!$SYSTEM_ARCH) { echo "URI Formatting Failure for: SYSTEM_ARCH"; }
    if(!$INSERT_OLTP_YES) { echo "URI Formatting Failure for: INSERT_OLTP_YES"; }
    if(!$INSERT_OLTP_NO) { echo "URI Formatting Failure for: INSERT_OLTP_NO"; }
    if(!$SELECT_INDEX_YES_SEQ) { echo "URI Formatting Failure for: SELECT_INDEX_YES_SEQ"; }
    if(!$SELECT_INDEX_YES_RAND) { echo "URI Formatting Failure for: SELECT_INDEX_YES_RAND"; }
    if(!$SELECT_INDEX_NO_SEQ) { echo "URI Formatting Failure for: SELECT_INDEX_NO_SEQ"; }
    if(!$SELECT_INDEX_NO_RAND) { echo "URI Formatting Failure for: SELECT_INDEX_NO_RAND"; }

    log_message('debug', "MYSQL_VERSION:$MYSQL_VERSION");
    log_message('debug', "MYSQL_INNODB_BUFFER_POOL_SIZE:$MYSQL_INNODB_BUFFER_POOL_SIZE");
    log_message('debug', "MYSQL_SYNC_BINLOG:$MYSQL_SYNC_BINLOG");
    log_message('debug', "MYSQL_TX_ISOLATION:$MYSQL_TX_ISOLATION");
    log_message('debug', "CPU_MODEL:$CPU_MODEL");
    log_message('debug', "CPU_SPEED:$CPU_SPEED");
    log_message('debug', "CPU_QUANT:$CPU_QUANT");
    log_message('debug', "MEMORY_TOTAL_BYTES:$MEMORY_TOTAL_BYTES");
    log_message('debug', "MEMORY_FREE_BYTES:$MEMORY_FREE_BYTES");
    log_message('debug', "MEMORY_CACHED_BYTES:$MEMORY_CACHED_BYTES");
    log_message('debug', "MEMORY_ACTIVE_BYTES:$MEMORY_ACTIVE_BYTES");
    log_message('debug', "SWAP_TOTAL_BYTES:$SWAP_TOTAL_BYTES");
    log_message('debug', "SWAP_FREE_BYTES:$SWAP_FREE_BYTES");
    log_message('debug', "SYSTEM_OS:$SYSTEM_OS");
    log_message('debug', "SYSTEM_KERNEL:$SYSTEM_KERNEL");
    log_message('debug', "SYSTEM_ARCH:$SYSTEM_ARCH");
    log_message('debug', "INSERT_OLTP_YES:$INSERT_OLTP_YES");
    log_message('debug', "INSERT_OLTP_NO:$INSERT_OLTP_NO");
    log_message('debug', "SELECT_INDEX_YES_SEQ:$SELECT_INDEX_YES_SEQ");
    log_message('debug', "SELECT_INDEX_YES_RAND:$SELECT_INDEX_YES_RAND");
    log_message('debug', "SELECT_INDEX_NO_SEQ:$SELECT_INDEX_NO_SEQ");
    log_message('debug', "SELECT_INDEX_NO_RAND:$SELECT_INDEX_NO_RAND");
    
    $result = $this->main->enterstate($MYSQL_VERSION,$MYSQL_INNODB_BUFFER_POOL_SIZE,$MYSQL_SYNC_BINLOG,$MYSQL_TX_ISOLATION,$CPU_MODEL,$CPU_SPEED,$CPU_QUANT,$MEMORY_TOTAL_BYTES,$MEMORY_FREE_BYTES,$MEMORY_CACHED_BYTES,$MEMORY_ACTIVE_BYTES,$SWAP_TOTAL_BYTES,$SWAP_FREE_BYTES,$SYSTEM_OS,$SYSTEM_KERNEL,$SYSTEM_ARCH,$INSERT_OLTP_YES,$INSERT_OLTP_NO,$SELECT_INDEX_YES_SEQ,$SELECT_INDEX_YES_RAND,$SELECT_INDEX_NO_SEQ,$SELECT_INDEX_NO_RAND);
    if($result != '0'){
      show_error("Failed to insert data");
    }
    else {
      print "<h1>Data entered</h1>";
    }      
  }
}
?>