<head>
<script src="<?php echo base_url(); ?>assets/js/jquery-2.0.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/flot/jquery.flot.time.js"></script>
</head>
<div class="container">
	<div id="flot">
	<script type="text/javascript">
    // Assign our dataset data to a variable
    var dataset1 = <?php echo json_encode($dataset1); ?>;
    var options = {
        xaxis: { 
        	mode: "time", timeformat: "%m/%d", minTickSize: [1, "day"] },
        series: {
            lines: { show: true },
            points: { show: true }    
        }
    };
 
    // Initialize Plot
    $(function() {
        $.plot($("#flot"), [ dataset1 ], options);
    });
	</script>
		
	</div>
</div>