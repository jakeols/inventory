<?php
class User extends MY_Controller 
{

	function __construct()
    {
        parent::__construct();
    }

	function index()
	{
		$this->load->view('dashboard');
   			
	}

	function new_item()
	{
		$this->load->view('new_item');	
	}


	function view_inventory()
	{
		$this->load->model('inventory');
		$data['results'] = $this->inventory->view_inventory();
		$this->load->view('view_inventory', $data);

	}
	
	function insert_to_db()
	{
	$this->load->model('inventory');
	$this->inventory->insert_into_db();
	$this->load->view('success');
	}

}
?>