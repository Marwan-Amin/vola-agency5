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

            </div>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <div class="row">

              <div class="x_content">
                <table id="productsTable" class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th >Product name</th>
                      <th class="text-center" width=600>Product description</th>
                      <th class="text-center">price</th>
                      <th class="text-center">edit</th>
                      <th class="text-center">delete</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach($products as $product)
                    <tr>
                      <td>{{$product->name}}</td>
                      <td>{{$product->description}}</td>
                      <td class="text-center">{{$product->price}} EGP </td>
                      <td class="text-center">
                        <a class="btn btn-success" href="{{route('products.edit',['id'=> $product->id ])}}" >Edit </a>
                      </td>
                      <td class="text-center">
                        <form action="/product/{{$product->id}}" method="POST" style="display:inline-block">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-fw" type=submit onclick="return confirm('Are You Sure You Want To Delete This Record ?')">
                            Delete
                          </button>
                        </form>
                      </td>
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
  @endsection('content')