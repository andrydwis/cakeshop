@extends('layouts.app')
@section('content')
<div class="section-header">
    <h1>Dashboard</h1>
</div>
@include('layouts.alert')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="hero bg-primary text-white">
                <div class="hero-inner">
                    <h2>Selamat datang, {{auth()->user()->name}}</h2>
                    <p class="lead">Bagaimana kabar hari ini ?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5"></div>
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Pegawai</h4>
                    </div>
                    <div class="card-body">
                        {{$user}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-layer-group"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Kategori</h4>
                    </div>
                    <div class="card-body">
                        {{$category}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-birthday-cake"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Produk</h4>
                    </div>
                    <div class="card-body">
                        {{$product}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection