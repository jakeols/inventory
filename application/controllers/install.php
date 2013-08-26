<?php
class Install extends CI_Controller
{
	function __construct()
    {
        parent::__construct();
    }
    function index()
    {
    	$this->load->view('install_view');
    }
    function populate_db()
    {
    	$this->load->model('install');
    	$this->install->populate_db();
    	$this->load->view('success_install');
    }
}

?>