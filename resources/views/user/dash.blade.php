
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style4.css">
@extends('layouts.app')
@section('title','Griffin - MilkTea Shop')
@section('content')
<div class="dash">
<div class="container-fluid" >
            <div class="row">
                <div class="col-xl-12 col-lg-9 col-md-8 ">
                    <div class="row pt-md-0 mt-md-0 mb-0">
                    <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body" >
                                    <div class="d-flex justify-content-between">
                                    <i class="fas fa-users fa-3x text-info"></i>
                                        <div class="text-right text-dark">
                                            <h5>Employee</h5>
                                            <h3>{{ Auth::user()->where('uStat', '1')->count() + Auth::user()->where('uStat', '2')->count() }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-dark">
                                    <i class="fas fa-spinner fa-pulse text-info mr-3"></i>
                                    <span>Updating</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-box fa-3x text-danger"></i>
                                        <div class="text-right text-dark">
                                            <h5>Product</h5>
                                            <h3>6</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-dark">
                                    <i class="fas fa-spinner fa-pulse text-danger mr-3"></i>
                                    <span>Updating</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-dollar-sign fa-3x text-success"></i>
                                        <div class="text-right text-dark">
                                            <h5>Total Sales</h5>
                                            <h3>{{ $deliveries->sum() }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-dark">
                                    <i class="fas fa-spinner fa-pulse text-success mr-3"></i>
                                    <span>Updating</span>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-user-plus fa-3x text-warning"></i>
                                        <div class="text-right text-dark">
                                            <h5>Costumer</h5>
                                            <h3>{{ Auth::user()->where('uStat', '3')->count()}}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-dark">
                                    <i class="fas fa-spinner fa-pulse text-warning mr-3"></i>
                                    <span>Updating</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-user fa-3x " style="color:purple"></i>
                                        <div class="text-right text-dark">
                                            <h5>Total User</h5>
                                            <h3>{{ Auth::user()->where('uStat', '1')->count() + Auth::user()->where('uStat', '2')->count() + Auth::user()->where('uStat', '3')->count()}}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-dark">
                                    <i class="fas fa-spinner fa-pulse  mr-3" style="color:purple"></i>
                                    <span>Updating</span>
                                </div>
                            </div>
                        </div>
                        
               
                    </div>
                </div>
            </div>
</div>

                    
<div id="container"></div>
  <div class="chart">
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var users =  <?php echo json_encode($deliveries) ?>;
   
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
            name: 'Ordered<br> Payment',
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
</div>
<br><br><br><br>

@endsection
</body>
</html>