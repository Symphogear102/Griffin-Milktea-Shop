<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Highcharts Example - ItSolutionStuff.com</title>
</head>
   <style>
.chart {
    margin-top: 303px;
}
   </style>
<body>
<div id="container"></div>
</body>
  <div class="chart">
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var users =  <?php echo json_encode($users) ?>;
   
    Highcharts.chart('container', {
        title: {
            text: 'Sales of Month'
        },
        subtitle: {
            text: ''
        },
         xAxis: {
            categories: ['January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
             'October', 'November', 'December']
        },
        yAxis: {
            title: {
                text: 'Total Sales'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Ordered Payment',
            data: users
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'

                    }
                }
            }]
        }
});
</script>
</div>
</html>