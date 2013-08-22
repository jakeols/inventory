<?php include('include/header.php'); ?>

<div class="container">

<table class="table">
    <thead>
        <tr>
        <td><h3>Item Name</h3></td>
        <td><h3>SKU</h3></td>
        <td><h3>Stock</h3></td>
        <td><h3>Price</h3></td>
    </thead>
    <tbody>
        <?php foreach ($results as $entry): ?>
        <tr>
            <td><?php echo $entry->ItemName; ?></td>
            <td><?php echo $entry->SKU;?></td>
            <td><?php echo $entry->Stock;?></td>
            <td><?php echo $entry->Price;?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>


</div>