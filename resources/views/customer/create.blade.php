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
    @if (Session::has('customer_add_message'))
    <div class="row">
        <div class="col-md-6">
            <p class="alert {{ Session::get('alert-class', 'alert-success') }}">
                {{ Session::get('customer_add_message') }}
            </p>
            {{ Session::forget('customer_add_message') }}
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Add New Customer</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="col-md-8">
                        <form class="form-horizontal" id="formId" action="{{ route('customers.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input type="hidden" name="id">
                            <div class="box-body">
                                <div class="form-group">
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">* {{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                    <label for="name" class="col-sm-2 control-label">Business Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Business Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    @if ($errors->has('mobile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">* {{ $errors->first('mobile') }}</strong>
                                    </span>
                                    @endif
                                    <label for="mobile" class="col-sm-2 control-label">Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    @if ($errors->has('passport'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">* {{ $errors->first('passport') }}</strong>
                                    </span>
                                    @endif
                                    <label for="passport" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="passport" name="passport" placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">* {{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif
                                    <label for="image" class="col-sm-2 control-label">Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                </div>
                                <div class="form-group">
                                    @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">* {{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                    <label for="address" class="col-sm-2 control-label">Office Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Office Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    @if ($errors->has('delivery_address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">*
                                            {{ $errors->first('delivery_address') }}</strong>
                                    </span>
                                    @endif
                                    <label for="deliveryAddress" class="col-sm-2 control-label">Delivery Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="deliveryAddress" placeholder="Enter Delivery Address" name="deliveryAddress">
                                    </div>
                                </div>
                                <div class="form-group">
                                    @if ($errors->has('nid'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">* {{ $errors->first('nid') }}</strong>
                                    </span>
                                    @endif
                                    <label for="nid" class="col-sm-2 control-label">ID</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nid" name="nid" placeholder="Enter NID or Passport ID">
                                    </div>
                                </div>
                                <div class="form-group">
                                    @if ($errors->has('comment'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color: red">* {{ $errors->first('comment') }}</strong>
                                    </span>
                                    @endif
                                    <label for="comment" class="col-sm-2 control-label">Comment</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="comment" name="comment" placeholder="Write a short comment">
                                    </div>
                                </div>

                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-success pull-right" id="submitId" style="padding-left: 40px; padding-right: 40px">Save</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>

</section>
@endsection

@push('js')

@endpush