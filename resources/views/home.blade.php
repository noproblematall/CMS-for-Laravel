@extends('layouts.app')

@section('subtitle')
    <div class="page-title-icon">
        <i class="pe-7s-home icon-gradient bg-amy-crisp">
        </i>
    </div>
    <div>HOME</div>
@endsection
@section('content')
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Pie Chart</h5>
                <canvas id="chart-area"></canvas>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Radar Chart</h5>
                <canvas id="radar-chart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Doughnut</h5>
                <canvas id="doughnut-chart"></canvas>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Polar Chart</h5>
                <canvas id="polar-chart"></canvas>
            </div>
        </div>
    </div>
@endsection
