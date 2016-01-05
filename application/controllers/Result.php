<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {

  public function lists(){
    $this->load->view('header');
    $this->load->view('result');
    $this->load->view('footer');
  }
  public function temp(){
    $this->load->model('search');
    $data['resultSimmilar']=$this->search->gosuSimmilar();
    $data['resultExact']=$this->search->gosuExact();
    $this->load->view('header');
    $this->load->view('result_temp',$data);
    $this->load->view('footer');
  }
  public function silsigan_search(){
    $this->load->model('search');
    $data['result']=$this->search->silsigan();
    $this->load->view('silsigan',$data);
  }


}
