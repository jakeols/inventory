<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/custom.css">
	


<div class="container">

	<h1 class="page_title">Dashboard</h1>
    <table class="table">
    	<thead>
	    	<tr>
	    	<td><h4>Total Number of Items in Inventory</h4></td>
	    	<td><h4>Total Number of Transactions</h4></td>
	        </tr>
        </thead>
        <tbody>
	        <tr>
	        <td><a href="<?php echo base_url()?>index.php/User/view_inventory"><?php echo $this->db->count_all('inventory');?></a></td>
	        <td><a href="<?php echo base_url()?>index.php/User/view_transactions"><?php echo $this->db->count_all('transactions');?></a></td>
	        </tr>
	        </tr>
        </tbody>
    </table>
</div>