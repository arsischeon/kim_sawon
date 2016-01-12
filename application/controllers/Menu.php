<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

  public function description(){
    $this->load->view('header');
    $this->load->view('description');
    $this->load->view('footer');
  }
  public function howto(){
    $this->load->view('header');
    $this->load->view('howto');
    $this->load->view('footer');

  }
  public function cs(){
    $this->load->view('header');
    $this->load->view('cs');
    $this->load->view('footer');
  }
  public function faq(){
    $this->load->view('header');
    $this->load->view('faq');
    $this->load->view('footer');
  }
  public function ask(){
    $this->load->view('header');
    $this->load->view('ask');
    $this->load->view('footer');
  }
  public function mobile(){
    $this->load->view('header');
    $this->load->view('mobile');
    $this->load->view('footer');
  }

}
