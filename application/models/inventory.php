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
	function new_transaction()
	{

		$data = array('Itemname' => $this->input->post('f1'),
		                  'Stock' => $this->input->post('f2')
	              		);
		$itemname = $this->input->post('f1');
				$this->db->where('ItemName', $itemname); 
	       		$this->db->update('inventory', $data);
	}

}
?>