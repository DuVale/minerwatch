<?php

class Main extends Controller {

  function Main()
  {
    parent::Controller();
  }

  function index() {	  
    log_message('debug', "main_controller_index function called");
    $g['root'] = $this->config->item('base_url');
    $_SESSION['example'] = $g['root'];	  // we set this for the header files that don't use CI sessions
    $this->load->view('main/devicesJ',$g);
  }
  
  function show() {
    $this->load->model('Model_main', 'main');
    $md5 = ($this->uri->segment(3))?$this->uri->segment(3):0;
    $g['data'] = $this->main->get_details($md5);
    $g['root'] = $this->config->item('base_url');
    if($g['data'] == 0) {
      show_error("The ID you requested has failed. You are probably requesting it incorrectly.");
    }
    else {
      $this->load->view('main/details',$g);
    }
  }

}

?>