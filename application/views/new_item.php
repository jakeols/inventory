<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
</head>
<div id="newitem" class="container">
<h1>
Add new Item
</h1>
<form action="<?php echo base_url();?>index.php/User/insert_to_db" method="post">
<div class="input-group col-md-6 col-md-offset-3">
<input placeholder="Item Name" class="form-control" type = 'text' name='f1'>
<input placeholder="SKU" class="form-control" type = 'text' name='f2'>
<input placeholder="Stock" class="form-control" type = 'text' name='f3'>
<input placeholder="Price" class="form-control" type = 'text' name='f4'>
<input class="btn btn-primary" type='submit'>
</div>
</form>
</div>