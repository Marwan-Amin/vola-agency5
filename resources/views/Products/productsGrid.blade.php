@extends('layouts.app')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3> Select your products </h3>
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
          <div class="title_right">

        <a href="/products-list"> <button class="btn btn-toolbar"> <i class="fa fa-list"></i> list view </button> </a>
        <a href="/products-grid"> <button class="btn btn-toolbar"> <i class="fa fa-table"></i> Grid view </button> </a>

      </div>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <div class="row">

              <div class="col-md-55">
                <div class="thumbnail">
                  <div class="image view view-first">
                    <img style="width: 100%; display: block;" src="{{asset('UI/production/images/media.jpg')}}" alt="image" />
                    <div class="mask">
                      <p>Product 1</p>
                      <div class="tools tools-bottom">
                        <a href="/product-show"> <span> Show</span> <i class="fa fa-arrow-right"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="caption">
                    <h2>Product 1</h2>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

@endsection('content')