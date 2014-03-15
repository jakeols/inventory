<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/custom.css">
</head>
<h1 class="title_text">View Transactions</h1>
<table class="table table-hover">
    <thead>
        <tr>
        <td><h3>Item Name</h3></td>
        <td><h3>Quantity Sold</h3></td>
        <td><h3>Date</h3></td>
    </thead>
    <tbody>
        <?php foreach ($results as $entry): ?>
        <tr>
            <td><?php echo $entry->ItemName; ?></td>
            <td><?php echo $entry->QuantitySold;?></td>
            <td><?php echo $entry->Date; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>

</div>