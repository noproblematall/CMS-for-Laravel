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
                <h5 class="card-title">Number Of Registed Users(<span style="color:blue;">{{$users['number']}}</span>)</h5>
                <canvas id="chart-area1"></canvas>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Radar Chart</h5>
                <canvas id="chart-area2"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Doughnut</h5>
                <canvas id="chart-area3"></canvas>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Polar Chart</h5>
                <canvas id="chart-area4"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script src="{{asset('js/chart.js')}}"></script>
<script>
    var randomScalingFactor = function () {
        return Math.round(Math.random() * 100);
    };
    window.chartColors = {
        red: '#dc3545',
        orange: '#fd7e14',
        yellow: '#ffc107',
        green: '#28a745',
        blue: '#007bff',
        purple: '#6f42c1',
        grey: '#6c757d'
    };

    var userPie = {
        type: 'pie',
        data: {
            datasets: [{
                data: [{{$users['super']}},{{$users['admin']}},{{$users['user']}}],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                ],
                label: 'Dataset 1'
            }],
            labels: [
                'Super',
                'Admin',
                'User',                
            ]
        },
        options: {
            responsive: true
        }
    };

    var configPie = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                ],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.blue,
                ],
                label: 'Dataset 1'
            }],
            labels: [
                'Red',
                'Orange',
                'Yellow',
                'Green',
                'Blue'
            ]
        },
        options: {
            responsive: true
        }
    };
    var ctx1 = document.getElementById('chart-area1').getContext('2d');
    window.myPie = new Chart(ctx1, userPie);
    var ctx2 = document.getElementById('chart-area2').getContext('2d');
    window.myPie = new Chart(ctx2, configPie);
    var ctx3 = document.getElementById('chart-area3').getContext('2d');
    window.myPie = new Chart(ctx3, configPie);
    var ctx4 = document.getElementById('chart-area4').getContext('2d');
    window.myPie = new Chart(ctx4, configPie);
</script>
    
@endsection
