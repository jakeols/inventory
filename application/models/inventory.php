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
	function recent_transactions()
	{
		$this->db->limit('5');
		$query = $this->db->select('ItemName, QuantitySold, Date')->from("transactions")->get();
 		return $query->result();
	}
	public function view_inventory($limit, $start)
	{
		$this->db->limit($limit, $start);
		$query = $this->db->select("ItemName, SKU, Stock, Price")->from("inventory")->get();
		    return $query->result();
	}
	function view_inventory_raw()
	{
		$query = $this->db->select("ItemName, SKU, Stock, Price")->from("inventory")->get();
			return $query->result();
	}

	function new_transaction()
	{
		$ItemName = $this->input->post('f1');
		#grab old stock
		$this->db->where('ItemName', $ItemName);
		$query = $this->db->select('Stock')->from('inventory')->get();
		foreach ($query->result() as $row)
			{
			     $row->Stock;
			    
			}
			#little math work 
			$oldstock = $row->Stock;
			$numtosub = $this->input->post('f2');
			$numtosub;
			$newstock = $oldstock - $numtosub;
			$newstock;
		#data to update current inventory
		$data = array('Itemname' => $this->input->post('f1'),
		                  'Stock' => $newstock,
	              		);
		#data for transactions
		$data2 = array('Itemname' => $this->input->post('f1'),
		                  'QuantitySold' => $this->input->post('f2'),
		                  'Date' => standard_date()
	              		);
				$this->db->insert('transactions', $data2);
				$itemname = $this->input->post('f1');
				$this->db->where('ItemName', $itemname); 
	       		$this->db->update('inventory', $data);	
	}
	function submit_invoice()
	{
		$quantity = $this->input->post('f2');
		$price = $this->input->post('f3');
		$tax_percent = $this->input->post('f4');
		$tax = ($tax_percent / '100') * $price;
		$total = $quantity * $price + $tax;
		$total;

		 $data = array('ItemName' => $this->input->post('f1'),
					'Quantity' => $this->input->post('f2'),
					'Price' => $this->input->post('f3'),
					'Tax' => $this->input->post('f4'),
					'Description' => $this->input->post('f5'),
					'Total' => $total,
					'Date' => standard_date()
					);
					$this->db->insert('invoices', $data);

	}
 	function view_transactions()
 	{
 		$query = $this->db->select('ItemName, QuantitySold, Date')->from("transactions")->get();
 		return $query->result();

 	}
 	public function view_invoices($limit, $start)
 	{
 	$this->db->limit($limit, $start);
		$query = $this->db->select("ItemName, Quantity, Price, Tax, Description, Total, Date")->from("invoices")->get();
		    return $query->result();
	}
 	function view_invoices_raw()
 	{
 		$query = $this->db->select('ItemName, Quantity, Price, Tax, Description, Total, Date')->from('invoices')->get();
 			return $query->result();
 	}
 	function get_item()
 	{
 		$itemname = $this->input->post('f1');
 		$query = $this->db->select('Price')->from('inventory')->where('ItemName', $itemname)->get();
 			return $query->result();
 	}
}
?>