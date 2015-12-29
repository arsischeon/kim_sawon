<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {

  public function gosoo(){
    $this->load->model('search');
    $data['resultExact']=$this->search->gosuExact();
    $data['resultSimmilar']=$this->search->gosuSimmilar();

    $this->load->view('header');
    $this->load->view('result',$data);
    $this->load->view('footer');

  }
  public function joongsoo(){


  }
  public function hasoo(){


  }

}
