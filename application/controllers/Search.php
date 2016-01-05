<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

  public function gosoo(){
    $this->load->view('header');
    $this->load->view('gosoo_search');
    $this->load->view('footer');
  }
  public function joongsoo(){
    $this->load->view('header');
    $this->load->view('joongsoo_search');
    $this->load->view('footer');

  }
  public function hasoo(){
    $this->load->view('header');
    $this->load->view('hasoo_search');
    $this->load->view('footer');

  }

}
