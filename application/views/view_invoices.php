<h1 class="title_text">Invoices</h1>

<table class="table table-hover">
    <thead>
        <tr>
        <td><h3>Item Name</h3></td>
        <td><h3>Quantity</h3></td>
        <td><h3>Price</h3></td>
        <td><h3>Description</h3></td>
        <td><h3>Total</h3></td>
        <td><h3>Date</h3></td>
    </thead>
    <tbody>
        <?php foreach ($results as $entry): ?>
        <tr>
            <td><?php echo $entry->ItemName; ?></td>
            <td><?php echo $entry->Quantity;?></td>
            <td>$<?php echo $entry->Price;?></td>
            <td><?php echo $entry->Description;?></td>
            <td>$<?php echo $entry->Total?></td>
            <td><?php echo $entry->Date?></td>

        </tr>
        <?php endforeach; ?>
    </tbody>


</div>