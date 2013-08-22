<head>
<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
</head>
<?php include('include/header.php'); ?>
<br><br>
<div id="newitem" class="container">
<h1>
Add new Item
</h1>
<form action="<?php echo base_url();?>index.php/User/insert_to_db" method="post">
Item Name = <input type = 'text' name='f1'><br>
SKU = <input type = 'text' name='f2'><br>
Stock = <input type = 'text' name='f3'><br>
Price = <input type = 'text' name='f4'><br>
<input class="btn btn-primary" type='submit'>
</form>
</div>