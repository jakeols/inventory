<?php
class User extends MY_Controller 
{

	function __construct()
    {
        parent::__construct();
    }

	function index()
	{
		$this->load->model('data');
		$series_data[] = $this->data->get_data();
		$data['series_data'] = json_encode($series_data[0], JSON_NUMERIC_CHECK);
		$this->load->model('inventory');
		$data['results'] = $this->inventory->recent_transactions();
		$this->load->view('include/header');
		$this->load->view('dashboard', $data);
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
	$this->load->view('include/header');
	$this->load->view('success');
	$this->load->view('include/footer');

	}

	function view_new_transaction()
	{
		$this->load->view('include/header');
		$this->load->view('new_transaction');
		$this->load->view('include/footer');


	}
	function invoice()
	{
		$this->load->view('include/header');
		$this->load->view('invoice');
	}
	function submit_invoice()
	{
		$this->load->model('inventory');
		$this->inventory->submit_invoice();
		$this->load->view('include/header');
		$this->load->view('created_invoice');
	}
	function new_transaction()
	{
		$this->load->model('inventory');
		$this->inventory->new_transaction();
		$this->load->view('include/header');
		$this->load->view('success_transaction');
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
	function view_invoices()
	{
		$this->load->model('inventory');
		$data['results'] = $this->inventory->view_invoices();
		$this->load->view('include/header');
		$this->load->view('view_invoices', $data);

	}
}
?>