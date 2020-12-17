<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('JqGrid_model');
    }

    public function index() {

    }

}