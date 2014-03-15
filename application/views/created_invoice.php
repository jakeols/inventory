<html>
<h1 class="title_text">Invoice</h1><br>
<table class="table">
	<table class="table">
	<tr>
		<td><h5>Item Name:</h5></td>
		<td><p><?php echo $this->input->post('f1');?></p></td>
	</tr>
	<tr>
		<td><h5>Quantity:</h5></td>
		<td><p><?php echo $this->input->post('f2');?></p></td>
	</tr>
	<tr>
		<td><h5>Price:</h5></td>
		<td><p>$<?php echo $this->input->post('f3');?></p></td>
	</tr>
	<tr>
		<td><h5>Tax:</h5></td>
		<td><p><?php echo $this->input->post('f4');?>%</p></td>
	</tr>
	<tr>
		<td><h5>Description:</h5></td>
		<td><p><?php echo $this->input->post('f5');?></p></td>
	</tr>
</table>
</table>