<?php
class User extends MY_Controller 
{

	function __construct()
    {
        parent::__construct();
    }

	function index()
	{
		
		$this->load->view('include/header');
		$this->load->view('dashboard');
		$this->load->view('include/footer');
   			
	}

	function new_item()
	{
		$this->load->view('include/header');
		$this->load->view('new_item');
		$this->load->view('include/footer');

	}


	function view_inventory()
	{
		$this->load->model('inventory');
		$data['results'] = $this->inventory->view_inventory();
		$this->load->view('include/header');
		$this->load->view('view_inventory', $data);
		$this->load->view('include/footer');


	}
	
	function insert_to_db()
	{
	$this->load->model('inventory');
	$this->inventory->insert_into_db();
	$this->load->view('success');
	$this->load->view('include/footer');

	}

	function view_new_transaction()
	{
		$this->load->view('include/header');
		$this->load->view('new_transaction');
		$this->load->view('include/footer');


	}
	function new_transaction()
	{
		$this->load->model('inventory');
		$this->inventory->new_transaction();
		$this->load->view('success');
		$this->load->view('include/footer');

	}
	function view_transactions()
	{
		$this->load->model('inventory');
		$data['results'] = $this->inventory->view_transactions();
		$this->load->view('include/header');
		$this->load->view('transactions', $data);
		$this->load->view('include/footer');

	}
}
?>