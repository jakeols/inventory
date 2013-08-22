<?php include('include/header.php'); ?>
<br><br>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
</head>
<?php include('include/header.php'); ?>
<br><br>
<div id="newitem" class="container">
<h1>
New Transaction
</h1>
<form action="<?php echo base_url();?>index.php/User/replace_into_db" method="post">
SKU = <input type = 'text' name='f1'><br>
Quantity Sold = <input type = 'text' name='f2'><br>
<input class="btn btn-primary" type='submit'>
</form>
</div>