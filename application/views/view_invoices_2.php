<div class="container">
<h1 class="title_text">Invoices</h1><br>
<i><a href="<?php echo base_url()?>index.php/User/view_invoices_raw" class="view_as">View as Raw Data</a></i>


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
<ul class="pagination"><?php echo $links;?></ul>

