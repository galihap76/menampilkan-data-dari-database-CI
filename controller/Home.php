<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
    }

   public function index(){
    $data['user'] = $this->User_model->getAllUser();
    $this->load->view('index', $data);
   }
}
