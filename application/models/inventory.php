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
		$ItemName = $this->input->post('f2');
		$query = $this->db->select('Stock')->from('inventory')->get();
		foreach ($query->result() as $row)
			{
			    echo $row->Stock;
			    
			}
			$oldstock = $row->Stock;
			$numtosub = $this->input->post('f2');
			echo $numtosub;
			$newstock = $oldstock - $numtosub;
			echo $newstock;




		$data = array('Itemname' => $this->input->post('f1'),
		                  'Stock' => $newstock,
	              		);
		$data2 = array('Itemname' => $this->input->post('f1'),
		                  'QuantitySold' => $this->input->post('f2'),
		                  'Date' => standard_date()
	              		);
				$this->db->insert('transactions', $data2);
				$itemname = $this->input->post('f1');
				$this->db->where('ItemName', $itemname); 
	       		$this->db->update('inventory', $data);
	       		
	}
 	function view_transactions()
 	{
 		$query = $this->db->select('ItemName, QuantitySold, Date')->from("transactions")->get();
 		return $query->result();

 	}
}
?>