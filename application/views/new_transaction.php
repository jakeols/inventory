<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/custom.css">
</head>
<div id="newitem">
<h1 class="title_text">
New Transaction
</h1>
<form action="<?php echo base_url();?>index.php/User/new_transaction" method="post">
<div class="input-group col-md-6 col-md-offset-3">
<input placeholder="Item Name" class="form-control" type = 'text' name='f1'>
<input placeholder="Quantity Sold" class="form-control" type = 'text' name='f2'>
<input class="btn btn-primary" type='submit'>
</div>
</form>
</div>