<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {

  public function gosoo(){
    $this->load->model('search');
    $resultExact=$this->search->gosuExact();
    $resultSimmilar=$this->search->gosuSimillar();
    


  }
  public function joongsoo(){


  }
  public function hasoo(){


  }

}
