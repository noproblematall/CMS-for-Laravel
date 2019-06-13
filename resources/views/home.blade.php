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
                <h5 class="card-title">Number Of Registed Users</h5>
                <div id="chart-area"></div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Column Chart</h5>
                <div id="chart-spline"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Doughnut</h5>
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

@section('script')

<script src="{{asset('js/appexchart.js')}}"></script>
<script src="{{asset('js/apex-series.js')}}"></script>
<script>
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
                data: series.monthDataSeries1.prices
            }],
            title: {
                text: 'Fundamental Analysis of Stocks',
                align: 'left'
            },
            subtitle: {
                text: 'Price Movements',
                align: 'left'
            },
            labels: series.monthDataSeries1.dates,
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
                name: 'Net Profit',
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
            }, {
                name: 'Revenue',
                data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
            }, {
                name: 'Free Cash Flow',
                data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
            }],
            xaxis: {
                categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
            },
            yaxis: {
                title: {
                    text: '$ (thousands)'
                }
            },
            fill: {
                opacity: 1

            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return "$ " + val + " thousands"
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
                name: 'series1',
                data: [31, 40, 28, 51, 42, 109, 100]
            }, {
                name: 'series2',
                data: [11, 32, 45, 32, 34, 52, 41]
            }],

            xaxis: {
                type: 'datetime',
                categories: ["2018-09-19T00:00:00", "2018-09-19T01:30:00", "2018-09-19T02:30:00", "2018-09-19T03:30:00", "2018-09-19T04:30:00", "2018-09-19T05:30:00", "2018-09-19T06:30:00"],                
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
                name: 'Marine Sprite',
                data: [44, 55, 41, 37, 22, 43, 21]
            },{
                name: 'Striking Calf',
                data: [53, 32, 33, 52, 13, 43, 32]
            },{
                name: 'Tank Picture',
                data: [12, 17, 11, 9, 15, 11, 20]
            },{
                name: 'Bucket Slope',
                data: [9, 7, 5, 8, 6, 9, 4]
            },{
                name: 'Reborn Kid',
                data: [25, 12, 19, 32, 25, 24, 10]
            }],
            title: {
                text: 'Fiction Books Sales'
            },
            xaxis: {
                categories: [2008, 2009, 2010, 2011, 2012, 2013, 2014],
                labels: {
                    formatter: function(val) {
                        return val + "K"
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
                    return val + "K"
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
