<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('plan_model');
    }

    public function index() {
        $data['type'] = $this->plan_model->getType();
        $data['Name'] = $this->plan_model->getName();

        $this->load->view('templates/header', $data);
        $this->load->view('tables/index', $data);
        $this->load->view('templates/footer');
    }

}