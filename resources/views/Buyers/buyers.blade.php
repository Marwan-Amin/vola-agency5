@extends('layouts.app')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3> All buyers </h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>

    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <div class="row">

              <div class="x_content">
                <table id="productsTable" class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th class="text-center">Id</th>
                      <th class="text-center">name</th>
                      <th class="text-center">email</th>
                      <th class="text-center">show all orders</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($allBuyers as $buyer)
                    <tr>
                      <td class="text-center">{{$buyer->id}}</td>
                      <td class="text-center">{{$buyer->name}}</td>
                      <td class="text-center">{{$buyer->email}}</td>
                      <td class="text-center"><a href="/orders/invoice/{{$buyer->id}}"><button class="btn btn-inverse">show invoice</button></a></td>
                    </tr> 
                    @endforeach                   
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection('content')