<br><br>
<h1>
Transaction Created. 
<form action="<?php echo base_url()?>index.php/User/invoice" method="post">
<input type="hidden" value="<?php echo $this->input->post('f1')?>" name="f1">
<input type="hidden" value="<?php echo $this->input->post('f2')?>" name="f2">
<input type="submit" class="btn btn-main" value="Create Invoice?">
</form>
</h1>