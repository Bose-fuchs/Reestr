<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('jqgrid_model');
        $this->load->helper("form");
    }

    function index(){
        $data['jsonArray'] = $this->jqgrid_model->getJSON();
        $this->load->view('templates/header');
        $this->load->view('tables/index', $data);
        $this->load->view('templates/footer');
    }
}