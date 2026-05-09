@extends('admin.layouts.app')

@section('title', 'Sales Report')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Sales Report</h1>
    <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Download Report
    </button>
</div>

<!-- Stats Row -->
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Sales</div>
                <div class="h3 mb-0 font-weight-bold text-gray-800">$50,000</div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Orders</div>
                <div class="h3 mb-0 font-weight-bold text-gray-800">325</div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Avg Order Value</div>
                <div class="h3 mb-0 font-weight-bold text-gray-800">$153.85</div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Orders</div>
                <div class="h3 mb-0 font-weight-bold text-gray-800">42</div>
            </div>
        </div>
    </div>
</div>

<!-- Report Card -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Sales Summary</h6>
    </div>
    <div class="card-body">
        <p>Sales report data will be displayed here with charts and detailed information.</p>
    </div>
</div>
@endsection
