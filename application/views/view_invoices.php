<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/custom.css">
</head>
<div class="container">
<h1>Invoices</h1>

<?php foreach ($results as $entry): ?>
<table class="table invoices-data">
    <tr>
        <td><h5>Item Name:</h5></td>
        <td><p><?php echo $entry->ItemName; ?></p></td>
    </tr>
    <tr>
        <td><h5>Quantity:</h5></td>
        <td><p><?php echo $entry->Quantity;?></p></td>
    </tr>
    <tr>
        <td><h5>Price:</h5></td>
        <td><p>$<?php echo $entry->Price;?></p></td>
    </tr>
    <tr>
        <td><h5>Description:</h5></td>
        <td><p><?php echo $entry->Description;?></p></td>
    </tr>
    <tr>
        <td><h5>Total:</h5></td>
        <td><p>$<?php echo $entry->Total;?></p></td>
    </tr>
    <tr>
        <td><h5>Date:</h5></td>
        <td><p><?php echo $entry->Date; ?></p></td>
    </tr>
    </table>
<?php endforeach; ?>
</div>
