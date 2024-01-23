@extends('layouts.app2')

@section('content')


<section class="content-header">
    <h1>
    Dashboard
    <small>Control panel</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    @if(Auth::user()->is_admin==5)
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4> {{ Auth::user()->name }}</h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                      <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button>
                    </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card mt-3">
                <ul class="list-group list-group-flush">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-danger">Track your Order</h4>
                        </div>
                        <div class="card-body">
                            <form action="" id="tracking_form">
                                @csrf
                                <div class="form-group">
                                    <input type="number" name="status_code" id="status_code" class="form-control" placeholder="Enter your order tracking otp" required id="">
                                </div>
                                <button class="btn btn-block btn-danger" id="track_btn">Track</button>
                            </form>
                        </div>
                    </div>
                </ul>
                <ul class="list-group list-group-flush">
                    <div class="card">
                        <div class="card-header" id="card_header">
                            <h4 class="text-center text-success">Your Order Status</h4>
                        </div>

                        <div class="card-body" >
                            <h3 id="tracking_section" class="text-center">

                            </h3>

                        </div>
                    </div>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ Auth::user()->name }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ Auth::user()->email }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">

                        @php
                            $user = DB::table('customers')->where('email',Auth::user()->email)->first();
                        @endphp
                        {{ $user->mobile }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user->address }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <button type="button" class="btn btn-info " data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('customers.update',$user->id)}}" method="POST" enctype="multipart/form-data">
       @csrf
       {{ method_field('PUT') }}
        <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputName1" name="name" value="{{$user->name}}" aria-describedby="nameHelp">
  </div>
        <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{$user->email}}" aria-describedby="emailHelp">
  </div>
        <div class="form-group">
    <label for="exampleInputEmail1">Mobile</label>
    <input type="text" class="form-control" name="mobile" value="{{$user->mobile}}" id="exampleInputphone1" aria-describedby="emailHelp">
  </div>
        <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" name="address" value="{{$user->address}}" id="exampleInputAddress" aria-describedby="addressHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Old Password</label>
    <input type="password" class="form-control" name="oldPassword" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" name="password_confirmation" id="exampleInputConfirmPassword1">
  </div>

  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
  </div>
        </form>
      </div>
    </div>
  </div>
</div>


              {{-- <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i>My Orders</h6>
                      @php
                          $customer_info = DB::table('customers')->where('email',Auth::user()->email)->first();
                          $orders = DB::table('orders')->where('customer_id',$customer_info->id)->get();
                      @endphp
                    <table class="table table-bordered table-striped table-responsive">
                        <thead class="table-striped">
                            <tr>No.</tr>
                            <tr>Order Status</tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($orders as $row)
                                <tr>{{ $i++ }}</tr>
                                <tr>{{ $row->status_code }}</tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}



            </div>
          </div>
    @else
    <div class="row">

        <div class="col-lg-3 col-xs-6">
        <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                <h4>{{$total_products}}</h4>

                <p>Total Products</p>
                </div>
                <div class="icon">
                <i class="fa fa-camera"></i>
                </div>
                <a href="{{route('products.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
        <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                <h4>{{$total_customers}}</h4>

                <p>Total Customers</p>
                </div>
                <div class="icon">
                <i class="fa fa-users"></i>
                </div>
                <a href="{{route('customers.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
        <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                <h4>{{$bill_pending_paid_amount}}Tk</h4>

                <p>Total Payment Paid</p>
                </div>
                <div class="icon">
                    <i class="fa fa-check" aria-hidden="true"></i>
                </div>
                <a href="{{route('customers.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                    <h4>{{$bill_pending_due_amount}}Tk</h4>

                    <p>Total Payment Due</p>
                    </div>
                    <div class="icon">
                    <i class="fa fa-circle-o-notch" aria-hidden="true"></i>
                    </div>
                    <a href="{{route('customers.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-teal">
                    <div class="inner">
                    <h4> {{$totalTransaction}} Tk  </h4>

                    <p>Total Transaction</p>
                    </div>
                    <div class="icon">
                    <i class="fa fa-money" aria-hidden="true"></i>
                    </div>
                    <a href="{{route('customers.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                    <div class="small-box bg-orange">
                        <div class="inner">
                        <h4>Total {{$total_orders}}</h4>

                        <p>Orders</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-database" aria-hidden="true"></i>
                        </div>
                        <a href="{{route('customers.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                    <div class="small-box bg-orange">
                        <div class="inner">
                        <h4>Total {{$total_orders}}</h4>

                        <p>Orders</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-database" aria-hidden="true"></i>
                        </div>
                        <a href="{{route('customers.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                    <div class="small-box bg-orange">
                        <div class="inner">
                        <h4>Total {{$total_orders}}</h4>

                        <p>Orders</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-database" aria-hidden="true"></i>
                        </div>
                        <a href="{{route('customers.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
<!-- @endif


@if(Auth::user()->is_admin==5)
@else -->
 <!-- <div class="col-md-6">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title text-danger">Products Alert</h3>
        </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                    <tr>
                        {{-- <th>Sr.</th> --}}
                        <th>Title</th>
                        <th>Category</th>
                        {{-- <th>Supplier</th> --}}
                        <th>Stock</th>
                        <th>SKU #</th>
                        {{-- <th>Unit Price</th> --}}
                        <th>Image</th>
                        @if ((Auth::user()->is_admin) == 1 || (Auth::user()->is_admin) == 2 )
                            <th>Action</th>
                        @endif
                    </tr>
                </thead>

                <tbody>
                    {{-- @php
                        $cnt = 1;
                    @endphp --}}
                    @foreach ($products as $product)
                        <tr>
                            {{-- <td>{{ $cnt++ }}</td> --}}
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->category ? $product->category->name : "No Category"}}</td>
                            {{-- <td>{{ $product->supplier }}</td> --}}
                            <td> <span class="label bg-red">
                                @if ($product->stock > 0)
                                    {{ $product->stock }}
                                @else
                                    <small class="label bg-red" >No Products Available</small>
                                @endif
                            </span>
                            </td>
                            <td>{{ $product->art_no }}</td>
                            {{-- <td>{{ $product->unit_price }}</td> --}}
                            <td>
                                <img src="{{ asset($product->image_path)}}" height="50" , width="50">
                            </td>
                            @if ((Auth::user()->is_admin) == 1 || (Auth::user()->is_admin) == 2 )
                            <td>
                                <span class="">
                                    <a href="{{ route('stocks.add', $product->id) }}">
                                        <small class="label bg-green" style="margin-right: 15px">Add
                                            Stock</small>
                                    </a>
                                    <a href="{{ route('products.edit', $product->id) }}">
                                        <small class="label bg-yellow" style="margin-right: 15px">Edit</small>
                                    </a>
                                    <a onclick="return confirm('Are you sure?')"
                                        href="{{ route('products.delete', $product->id) }}">
                                        <small class="label bg-red" style="margin-right: 15px">Delete</small>
                                    </a>
                                </span>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        {{-- <th>Sr.</th> --}}
                        <th>Title</th>
                        <th>Category</th>
                        {{-- <th>Supplier</th> --}}
                        <th>Stock</th>
                        <th>SKU #</th>
                        {{-- <th>Unit Price</th> --}}
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title text-success">Recent Sale</h3>
        </div>
        <div class="box-body">
            <table id="example2" class="table table-bordered table-striped table-responsive">
                <thead>
                    <tr>
                        <th>Sr.</th>
                        <th>Product</th>
                        <th>Customer</th>
                        {{-- <th>Supplier</th> --}}
                        {{-- <th>Stock</th>
                        <th>SKU #</th> --}}
                        {{-- <th>Unit Price</th> --}}
                        {{-- <th>Image</th>
                        @if ((Auth::user()->is_admin) == 1 || (Auth::user()->is_admin) == 2 )
                        <th>Action</th>
                        @endif --}}
                    </tr>
                </thead>
                <tbody>

                    @php
                        $cnt = 1
                    @endphp
                    @foreach ($order_product as $row)
                        <tr>
                            <td>{{ $cnt++ }}</td>
                            <td>{{ $row->product }}</td>
                            <td>
                                @php
                                    $customer = DB::table('orders')->join('customers','orders.customer_id','customers.id')
                                                    ->select('customers.name as customer')
                                                    ->where('customers.id',$row->order)
                                                    ->first();
                                @endphp
                                {{ $customer->customer }}
                            </td>
                            {{-- <td>{{ $product->category ? $product->category->name : "No Category"}}</td> --}}
                            {{-- <td>{{ $product->supplier }}</td> --}}
                            {{-- <td> <span class="label bg-red">
                                @if ($product->stock > 0)
                                    {{ $product->stock }}
                                @else
                                    <small class="label bg-red" >In Service</small>
                                @endif
                            </span>
                            </td> --}}
                            {{-- <td>{{ $product->art_no }}</td> --}}
                            {{-- <td>{{ $product->unit_price }}</td> --}}
                            {{-- <td>
                                <img src="{{ asset($product->image_path)}}" height="50" , width="50">
                            </td> --}}
                            {{-- @if ((Auth::user()->is_admin) == 1 || (Auth::user()->is_admin) == 2 )
                            <td>
                                <span class="">
                                    <a href="{{ route('stocks.add', $product->id) }}">
                                        <small class="label bg-green" style="margin-right: 15px">Add
                                            Stock</small>
                                    </a>
                                    <a href="{{ route('products.edit', $product->id) }}">
                                        <small class="label bg-yellow" style="margin-right: 15px">Edit</small>
                                    </a>
                                    <a onclick="return confirm('Are you sure?')"
                                        href="{{ route('products.delete', $product->id) }}">
                                        <small class="label bg-red" style="margin-right: 15px">Delete</small>
                                    </a>
                                </span>
                            </td>
                            @endif --}}
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Sr.</th>
                        <th>Product</th>
                        {{-- <th>Category</th> --}}
                        {{-- <th>Supplier</th> --}}
                        {{-- <th>Stock</th>
                        <th>SKU #</th> --}}
                        {{-- <th>Unit Price</th> --}}
                        {{-- <th>Image</th>
                        <th>Action</th> --}}
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div> -->
@endif
    </div>

    </section>

@endsection

@push('js')
    <script>
        $(document).ready(function(){
            $("#card_header").hide();
            $("#tracking_form").submit(function(e){
                e.preventDefault();
                var status_code = $("#status_code").val();
                $.ajax({
                    url : 'api/get/order/status/'+status_code,
                    dataType : 'json',
                    type: 'get',
                    success:function(data){

                        console.log(data.track.order_status);
                        var status = data.track.order_status;
                        $("#card_header").show();
                        var trackingSection = document.getElementById('tracking_section');
                        if (status == 0) {
                            trackingSection.innerText = "Your order is under-processing"
                            trackingSection.style.color = 'black'
                        }
                        if (status == 1) {
                            trackingSection.innerText = "Payment has been accepted"
                            trackingSection.style.color = 'black'
                        }
                        if (status == 2) {
                            trackingSection.innerText = "Send for delivery"
                            trackingSection.style.color = 'black'
                        }
                        if (status == 3) {
                            trackingSection.innerText = "Order Delivered"
                            trackingSection.style.color = 'black'
                        }
                        }
                    });
                });
            });
    </script>
    <script>
        $(function() {
            $('#example1').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': false,
                "order": [[ 0, "desc" ]]
            })
        });

    </script>
    <script>
        $(function() {
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': false,
                "order": [[ 0, "desc" ]]
            })
        });

    </script>
    <script>
        $(function() {
            $('#example3').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': false,
                "order": [[ 0, "desc" ]]
            })
        });

    </script>
@endpush
