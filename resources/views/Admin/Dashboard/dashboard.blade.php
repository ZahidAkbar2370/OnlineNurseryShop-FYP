@extends('Admin.admin_layout')
@section('content')

<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                   
                    <div class="dash-widget-info text-center">
                        <h3>Rs: {{ $totalSale ?? 0 }}</h3>
                        <span class="widget-title1">Total Sale</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                   
                    <div class="dash-widget-info text-center">
                        <h3>Rs: {{ $todaySale ?? 0 }}</h3>
                        <span class="widget-title1">Today Sale</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                   
                    <div class="dash-widget-info text-center">
                        <h3>Rs: {{ $thisMonthSale ?? 0 }}</h3>
                        <span class="widget-title1">This Month Sale</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                   
                    <div class="dash-widget-info text-center">
                        <h3>Rs: {{ $thisYearSale ?? 0 }}</h3>
                        <span class="widget-title1">This Year Sale</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                   
                    <div class="dash-widget-info text-center">
                        <h3>Rs: {{ $totalRecovery ?? 0 }}</h3>
                        <span class="widget-title1">Total Recovery</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                   
                    <div class="dash-widget-info text-center">
                        <h3>Rs: {{ $todayRecovery ?? 0 }}</h3>
                        <span class="widget-title1">Today Recovery</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                   
                    <div class="dash-widget-info text-center">
                        <h3>Rs: {{ $thisMonthRecovery ?? 0 }}</h3>
                        <span class="widget-title1">This Month Recovery</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                <div class="dash-widget">
                   
                    <div class="dash-widget-info text-center">
                        <h3>Rs: {{ $thisYearRecovery ?? 0 }}</h3>
                        <span class="widget-title1">This Year Recovery</span>
                    </div>
                </div>
            </div>
        </div>
</div>


@endsection