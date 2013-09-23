<?php
class Inventory extends CI_Model
{

	function insert_into_db()
	{
	$data = array('Itemname' => $this->input->post('f1'),
		                  'SKU' => $this->input->post('f2'),
		                  'Stock' => $this->input->post('f3'),
		                  'Price' => $this->input->post('f4')

		                 );
		    $this->db->insert('inventory', $data);
	}
	function view_inventory()
	{
		$query = $this->db->select("ItemName, SKU, Stock, Price")->from("inventory")->get();
		    return $query->result();
	}
	function view_transactions()
	{
		$query = $this->db->select('ItemName, QuantitySold')->from("transactions")->get();
		return $query->result();
	}
}
?>