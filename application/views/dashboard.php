<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/custom.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript" src="http://code.highcharts.com/modules/exporting.js"></script>
</head>
<div class="container">
<body>
	<h1 class="page_title">Dashboard</h1>
    <div id="container" style="width:100%; height:400px;"></div>

    <table class="table">
    	<thead>
	    	<tr>
	    	<td><h4>Total Number of Items in Inventory</h4></td>
	    	<td><h4>Total Number of Transactions</h4></td>
	        </tr>
        </thead>
        <tbody>
	        <tr>
	        <td><a href="<?php echo base_url()?>index.php/User/view_inventory"><?php echo $this->db->count_all('inventory');?></a></td>
	        <td><a href="<?php echo base_url()?>index.php/User/view_transactions"><?php echo $this->db->count_all('transactions');?></a></td>
	        </tr>
	        </tr>
        </tbody>
    </table>
    <h3>Recent Transactions</h3>
    <table class="table">
    <thead>
        <tr>
        <td><h5>Item Name</h5></td>
        <td><h5>Quantity Sold</h5></td>
        <td><h5>Date</h5></td>
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
</tr>
</thead>
</table>
</div>
<!-- chart -->
<script type="text/javascript">
    $(function () { 
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Transaction History'
        },
        
        yAxis: {
            title: {
                text: 'Number of Sales'
            }
        },
        series: <?php echo $series_data; ?>
    });
});
</script>
</body>
</html>
