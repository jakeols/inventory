<?php
class User extends MY_Controller 
{

	function __construct()
    {
        parent::__construct();
    }

	function index()
	{
		$query = $this->db->select('ItemName, SKU, Stock, Price')->get('inventory');

		foreach($query->result_array() as $row)
		{
     // [x (date), y (count)]
     $dataset1[] = array(strtotime($row['Stock']) * 1000, $row['Price']);
		}
 
		$data['dataset1'] = $dataset1;
		$this->load->view('include/header');
		$this->load->view('dashboard', $data);
   			
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

	function view_new_transaction()
	{
		$this->load->view('include/header');
		$this->load->view('new_transaction');
	}
	function new_transaction()
	{
		$this->load->model('inventory');
		$this->inventory->new_transaction();
		$this->load->view('success');
	}
	function view_transactions()
	{
		$this->load->model('inventory');
		$data['results'] = $this->inventory->view_transactions();
		$this->load->view('include/header');
		$this->load->view('transactions', $data);
	}
}
?>