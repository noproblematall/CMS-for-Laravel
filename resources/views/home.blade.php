@extends('layouts.app')

@section('subtitle')
    <div class="page-title-icon">
        <i class="pe-7s-home icon-gradient bg-amy-crisp">
        </i>
    </div>
    <div>HOME</div>
@endsection

@section('content')

<div class="row">
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Revenue</h5>
                <div id="chart-area"></div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Spline Chart</h5>
                <div id="chart-spline"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Column Chart</h5>
                <div id="chart-column"></div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Polar Chart</h5>
                <div id="chart-bar"></div>
            </div>
        </div>
    </div>
</div>
@endsection
@php
    //  dd($sold_mount);
@endphp
@section('script')

<script src="{{asset('js/appexchart.js')}}"></script>
<script src="{{asset('js/apex-series.js')}}"></script>
<script>
    var sold_mount = <?php echo json_encode($sold_mount); ?>;
    var key_array = <?php echo json_encode($key_array); ?>;
    var car_cat = <?php echo json_encode($car_cat);?>;
    var bus_cat = <?php echo json_encode($bus_cat);?>;
    var ship_cat = <?php echo json_encode($ship_cat);?>;
    var options = {
            chart: {
                height: 350,
                type: 'area',
                zoom: {
                    enabled: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'straight'
            },
            series: [{
                name: "STOCK ABC",
                data: sold_mount
            }],
            title: {
                text: '',
                align: 'left'
            },
            subtitle: {
                text: '',
                align: 'left'
            },
            labels: key_array,
            xaxis: {
                type: 'datetime',
            },
            yaxis: {
                opposite: true
            },
            legend: {
                horizontalAlign: 'left'
            }
        }
        var chart = new ApexCharts(
            document.querySelector("#chart-area"),
            options
        );

        chart.render();


        var options = {
            chart: {
                height: 350,
                type: 'bar',
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'	
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            series: [{
                name: 'Car',
                data: car_cat
            }, {
                name: 'Bus',
                data: bus_cat
            }, {
                name: 'Ship',
                data: ship_cat
            }],
            xaxis: {
                categories: key_array,
            },
            yaxis: {
                title: {
                    text: 'Number of product per category'
                }
            },
            fill: {
                opacity: 1

            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return val
                    }
                }
            }
        }

        var chart = new ApexCharts(
            document.querySelector("#chart-column"),
            options
        );

        chart.render();


        var options = {
            chart: {
                height: 350,
                type: 'area',
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            series: [{
                name: 'CAR',
                data: car_cat
            }, {
                name: 'BUS',
                data: bus_cat
            }],

            xaxis: {
                type: 'datetime',
                categories: key_array,                
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            }
        }

        var chart = new ApexCharts(
            document.querySelector("#chart-spline"),
            options
        );

        chart.render();



        var options = {
            chart: {
                height: 350,
                type: 'bar',
                stacked: true,
            },
            plotOptions: {
                bar: {
                    horizontal: true,
                },
                
            },
            stroke: {
                width: 1,
                colors: ['#fff']
            },
            series: [{
                name: 'CAR',
                data: car_cat
            },{
                name: 'BUS',
                data: bus_cat
            },{
                name: 'SHIP',
                data: ship_cat
            }],
            title: {
                text: ''
            },
            xaxis: {
                categories: key_array,
                labels: {
                    formatter: function(val) {
                        return val.toFixed(2) + "K"
                    }
                }
            },
            yaxis: {
                title: {
                    text: undefined
                },
                
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                    return val.toFixed(2) + "K"
                }
                }
            },
            fill: {
                opacity: 1
                
            },
            
            legend: {
                position: 'top',
                horizontalAlign: 'left',
                offsetX: 40
            }
        }

       var chart = new ApexCharts(
            document.querySelector("#chart-bar"),
            options
        );
        
        chart.render();
       
</script>
    
@endsection
