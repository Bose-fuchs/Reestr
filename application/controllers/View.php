<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('jqgrid_model');
    }

    function jqGrid(){
        $this->load->view('templates/header');
        $this->load->view('tables/index');
        $this->load->view('templates/footer');
    }

    function index(){
        $this->load->view('templates/header');
        $this->load->view('tables/index');
        $this->load->view('templates/footer');
    }

    public function loadData() {
        $data['Type'] = $this->jqgrid_model->getAllData();
    }

}