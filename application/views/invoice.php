<html>
<h1 class="title_text">Invoice</h1>
<form action="<?php echo base_url()?>index.php/User/submit_invoice" method="post">
<table class="table">
	<tr>
		<td><h5>Item Name:</h5></td>
		<td><p><input type="hidden" value="<?php echo $this->input->post('f1');?>" name="f1"><?php echo $this->input->post('f1');?></p></td>
	</tr>
	<tr>
		<td><h5>Quantity:</h5></td>
		<td><p><input type="hidden" value="<?php echo $this->input->post('f2');?>" name="f2"><?php echo $this->input->post('f2');?></p></td>
	</tr>
	<tr>
		<td><h5>Price:</h5></td>
		<td><div class="input-group"><span class="input-group-addon">$</span><input type="text" name="f3" class="form-control"></td></div>
	</tr>
	<tr>
		<td><h5>Tax:</h5></td>
		<td><div class="input-group"><input type="text" name="f4" class="form-control"><span class="input-group-addon">%</span></div>
	</td>
	<tr>
		<td><h5>Description:</h5></td>
		<td><textarea rows="5" class="form-control" name="f5"></textarea>
	<tr>
		<td><input type="submit" value="Create Invoice" class="btn btn-main"></td>
</table>
</form>
</html>