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
	<tr>
		<td><h5>Total:</h5></td>
		<td>
			<p>
				<?php

					$quantity = $this->input->post('f2');
					$price = $this->input->post('f3');
					$tax_percent = $this->input->post('f4');
					$tax = ($tax_percent / '100') * $price;
					$total = $quantity * $price + $tax;
					?>
					$<?php echo $total;
					?>
			</p>
		</td>
	</tr>
</table>
</table>