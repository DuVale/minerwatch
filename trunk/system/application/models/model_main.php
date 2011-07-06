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
  
  function enterstate() {    
    $MYSQL_VERSION = $this->db->escape_str($MYSQL_VERSION);
    $dbr = $this->load->database('main', TRUE);
    $sql0="INSERT INTO `dbbenchmark`.`data` (
`id` ,
`creation_time`
)
VALUES (
NULL,
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

  function get_data() {
    log_message('debug', "Starting get_data");
    $dbr = $this->load->database('main', TRUE);
    $sql = "select * from api_keys";
    log_message('debug', "$sql");
    $data = array();
    $query = $dbr->query($sql);    
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
	$a = $row->api_key;;
	$sql1 = "select * from slush_pool_results where active='0' and api_key='$a' order by worker_name";
	log_message('debug', "$sql1");
	$query1 = $dbr->query($sql1);
	if($query1->num_rows() > 0) {
	  foreach ($query1->result() as $row1) {
	    $api_key = $row1->api_key;
	    $worker_name = $row1->worker_name;

	    $sql2 = "select * from slush_pool_results where active='0' and api_key='$a' order by worker_name";
	    log_message('debug', "$sql2");
	    $query2 = $dbr->query($sql2);
	    if($query2->num_rows() > 0) {
	      foreach ($query2->result() as $row2) {
		$unconfirmed_reward = $row2->unconfirmed_reward;
		$confirmed_reward = $row2->confirmed_reward;
		$worker_name = $row2->worker_name;
		$last_share = $row2->last_share;
		$score = $row2->score;
		$alive = $row2->alive;
		$shares = $row2->shares;
		$hashrate = $row2->hashrate;
		$creation_time = $row2->creation_time;
		$z = array("worker_name" => $worker_name,
			   "unconfirmed_reward" => $unconfirmed_reward,
			   "confirmed_reward" => $confirmed_reward,
			   "last_share" => $last_share,
			   "score" => $score,
			   "alive" => $alive,
			   "shares" => $shares,
			   "hashrate" => $hashrate,
			   "creation_time" => $creation_time);
		  array_push($data,$z);
	      }
	    }
	  }
	}
      }
    }
    return $data;
  }
}

?>