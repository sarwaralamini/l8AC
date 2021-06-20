@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="app-title">
    <div>
    <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="alert alert-success text-center">
                    Beautiful admin template by <a href="https://pratikborsadiya.in/vali-admin/">Vali Admin Free</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
