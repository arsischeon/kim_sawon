<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {

  public function lists(){
    $this->load->view('header');
    $this->load->view('result');
    $this->load->view('footer');
  }

}
