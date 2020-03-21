@extends('layouts.app')

@section('content')

<div class="right_col" role="main">

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Product Page</h3>
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
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Product's Main Category / Product's category</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="product-image">
                        <img src="{{asset('UI/production/images/prod-1.jpg')}}"/>
                      </div>
                    </div>

                    <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                      <h3 class="prod_title">Product title goes here</h3>

                      <p>product description goes here</p>
                      <br/>

                      <div class="">
                        <h2>Available Qunatity</h2>
                        <p>product quantity goes here</p>
                      </div>
                      <br/>

                      <div class="">
                        <h2>Availability in stock <small></small></h2>
                        <p>Avaialable or Sold out </p>
                        
                      </div>
                      <br />

                      <div class="">
                        <div class="product_price">
                          <h1 class="price">Price: 100.00 EGP</h1>
                        </div>
                      </div>

                      <div class="">
                        <button type="button" class="btn btn-default btn-lg"><i class="fa fa-shopping-cart"></i>  Add to Cart</button>
                        <button type="button" class="btn btn-default btn-lg"><i class="fa fa-heart"></i>  Add to Wishlist</button>
                      </div>

                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection('content')