<h1 class="title_text">View Inventory</h1><br>
<i><a href="<?php echo base_url()?>index.php/User/view_inventory_raw" class="view_as">View as Raw Data</a></i>

<table class="table table-hover">
    <thead>
        <tr>
            <td><h3>Item Name</h3></td>
            <td><h3>SKU</h3></td>
            <td><h3>Stock</h3></td>
            <td><h3>Price</h3></td>
        </tr>
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
</table>

<ul class="pagination"><?php echo $links;?></ul>

