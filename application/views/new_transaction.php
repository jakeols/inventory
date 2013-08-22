<head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
</head>
<br><br>
<div id="newitem" class="container">
<h1>
New Transaction
</h1>
<form action="<?php echo base_url();?>index.php/User/new_transaction" method="post">
Item Name = <input type = 'text' name='f1'><br>
New Stock Quantity = <input type = 'text' name='f2'><br>
<input class="btn btn-primary" type='submit'>
</form>
</div>