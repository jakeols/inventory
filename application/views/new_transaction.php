<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/custom.css">
</head>
<br><br>
<div id="newitem" class="container">
<h1>
New Transaction
</h1>
<form action="<?php echo base_url();?>index.php/User/new_transaction" method="post">
<div class="input-group col-md-6 col-md-offset-3">
<input placeholder="Item Name" class="form-control" type = 'text' name='f1'><br>
<input placeholder="Quantity Sold" class="form-control" type = 'text' name='f2'><br>
<input class="btn btn-primary" type='submit'>
</div>
</form>
</div>