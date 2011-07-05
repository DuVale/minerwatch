<?php

class Rss extends Controller {

  function Rss()
  {
    parent::Controller();
  }

  function index() {
    show_error("The RSS you requested has failed. You are probably requesting it incorrectly.");
  }

  function summary() {
    $this->load->model('Model_main', 'main');
    $g['data'] = $this->main->get_summary_data();
    $g['root'] = $this->config->item('base_url');
    if($g['data'] == 0) {
      show_error("The RSS you requested has failed. You are probably requesting it incorrectly.");
    }
    else {
      $this->load->view('rss/rss',$g);
    }
  }
}