<?php

class Main extends Controller {

  function Main()
  {
    parent::Controller();
  }

  function index() {	  
    log_message('debug', "main_controller_index function called");
    $this->load->model('Model_main', 'main');
    $g['root'] = $this->config->item('base_url');
    #$_SESSION['example'] = $g['root'];	  // we set this for the header files that don't use CI sessions
    $this->load->view('main/grouptabs',$g);
  }

  function monitor_slush() {      
    log_message('debug', "main_controller_monitor_slush function called");
    $this->load->model('Model_main', 'main');
    $g['data'] = $this->main->slush_get_current();
    $g['daily'] = $this->main->slush_get_daily();
    $g['root'] = $this->config->item('base_url');
    $g['home'] = $this->config->item('base_dir');
    #$_SESSION['example'] = $g['root'];    // we set this for the header files that don't use CI sessions
    #$this->load->view('main/devicesJ',$g);
    $this->load->view('main/slush',$g);
  }
  
}

?>