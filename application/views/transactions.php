<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
</head>
<div class="container">

<table class="table table-hover">
    <thead>
        <tr>
        <td><h3>Item Name</h3></td>
        <td><h3>Quantity Sold</h3></td>
    </thead>
    <tbody>
        <?php foreach ($results as $entry): ?>
        <tr>
            <td><?php echo $entry->ItemName; ?></td>
            <td><?php echo $entry->QuantitySold;?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>

</div>