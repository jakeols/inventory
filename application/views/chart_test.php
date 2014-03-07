<!DOCTYPE html>
<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="http://code.highcharts.com/highcharts.js"></script>
	</head>
<body>
<div id="container" style="width:100%; height:400px;"></div>
<script type="text/javascript">
	var chart = new Highcharts.Chart({
chart: {
    type: 'line',
    renderTo: 'container'
} });
        $(function () { 
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Trending Sales'
        },
        xAxis: {
            categories: ['Apples', 'Bananas', 'Oranges']
        },
        yAxis: {
            title: {
                text: 'Total Sales'
            }
        },
        series: [{
            name: 'Shirts',
            data: [1, 0, 4]
        }, {
            name: 'Pants',
            data: [5, 7, 3]
        }]
    });
});
</script>
</body>
</html>
