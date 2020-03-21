@extends('layouts.app')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Invoice #62137612837 <small></small></h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <section class="content invoice">
              <!-- title row -->
              <div class="row">
                <div class="col-xs-12 invoice-header">
                  <h1>
                    <i class="fa fa-globe"></i> Invoice
                    <small class="pull-right">Date: {{$date}}</small>
                  </h1>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Dynamo, Inc.</strong>
                    <br>111 Cleopatra, Sidi Gaber
                    <br>Alexndria, EG 21523
                    <br>Phone: +20 111 1111 111
                    <br>Email: adminUser@dynamo.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>Dynamo, Inc.</strong>
                    <br>111 Cleopatra, Sidi Gaber
                    <br>Alexndria, EG 21523
                    <br>Phone: +20 111 1111 111
                    <br>Email: adminUser@dynamo.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #007612</b>
                  <br>
                  <br>
                  <br>
                  <b>Payment Due:</b> 2/22/2014
                  <br>
                  <b>Account:</b> 968-34567
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-xs-12 table">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>order id</th>
                        <th>Product</th>
                        <th style="width: 59%">Description</th>
                        <th>price</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($orders as $order)
                      <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->product->name}}</td>
                        <td>{{$order->product->description}}</td>
                        <td>{{$order->product->price}}</td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-xs-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="{{asset('UI/production/images/visa.png')}}" alt="Visa">
                  <img src="{{asset('UI/production/images/mastercard.png')}}" alt="Mastercard">
                  <img src="{{asset('UI/production/images/american-express.png')}}" alt="American Express">
                  <img src="{{asset('UI/production/images/paypal.png')}}" alt="Paypal">
                  <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    Payable upon receipt of invoice. Inquiries regarding damaged or incorrect shipments should be directed to Dynamo
                    Customer Service at 111-1111 or fax 111-1111. Please have the customer and invoice numbers available. </p>
                </div>
                <!-- /.col -->
                <div class="col-xs-6">
                  <p class="lead">Amount Due 2/22/2014</p>
                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <th style="width:50%">Subtotal:</th>
                          <td>$250.30</td>
                        </tr>
                        <tr>
                          <th>Tax (9.3%)</th>
                          <td>$10.34</td>
                        </tr>
                        <tr>
                          <th>Shipping:</th>
                          <td>$5.80</td>
                        </tr>
                        <tr>
                          <th>Total:</th>
                          <td>$265.24</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-xs-12">
                  <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                  <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                  <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection('content')