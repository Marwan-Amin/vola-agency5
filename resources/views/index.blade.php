@extends('layouts.app')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <center>
  <div class="row tile_count text-center">
    <h1>Welcome to our website</h1>
   
    <div class="col-md-4 col-sm-4 col-xs-12 tile_stats_count p-auto">
      <span class="count_top"><i class="fa fa-user"></i> Total Customers </span>
      <div class="count">{{$users}}</div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12 tile_stats_count">
      <span class="count_top"><i class="fa fa-clock-o"></i> Total products</span>
      <div class="count">{{$products}}</div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12 tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total orders</span>
      <div class="count green">{{$orders}}</div>
    </div>
  </div>
  </center>
  
  <!-- /top tiles -->

<!-- /page content -->

@endsection('content')