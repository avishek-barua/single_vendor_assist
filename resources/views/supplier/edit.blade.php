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
        @if (Session::has('supplier_add_message'))
            <div class="row">
                <div class="col-md-6">
                    <p class="alert {{ Session::get('alert-class', 'alert-success') }}">
                        {{ Session::get('supplier_add_message') }}</p>
                    {{ Session::forget('supplier_add_message') }}
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Edit Supplier</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="col-md-8">
                            <form class="form-horizontal" id="formId"
                                action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
                                @csrf
                                {{ method_field('PUT') }}
                                <input type="hidden" name="id" value="{{ $supplier->id }}">
                                <div class="box-body">
                                    <div class="form-group">
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" style="" role="alert">
                                                <strong style="color: red">* {{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                        <label for="name" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="{{ $supplier->name }}" id="name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        @if ($errors->has('mobile'))
                                            <span class="invalid-feedback" style="" role="alert">
                                                <strong style="color: red">* {{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                        <label for="mobile" class="col-sm-2 control-label">Mobile</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="{{ $supplier->phone }}" id="phone" name="phone">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        @if ($errors->has('address'))
                                            <span class="invalid-feedback" style="" role="alert">
                                                <strong style="color: red">* {{ $errors->first('organization_name') }}</strong>
                                            </span>
                                        @endif
                                        <label for="address" class="col-sm-2 control-label">Company Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="{{ $supplier->organization_name }}" id="organization_name" name="organization_name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        @if ($errors->has('address'))
                                            <span class="invalid-feedback" style="" role="alert">
                                                <strong style="color: red">* {{ $errors->first('organization_address') }}</strong>
                                            </span>
                                        @endif
                                        <label for="address" class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="{{ $supplier->organization_address }}" id="organization_address" name="organization_address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        @if ($errors->has('nid'))
                                            <span class="invalid-feedback" style="" role="alert">
                                                <strong style="color: red">* {{ $errors->first('trade_license') }}</strong>
                                            </span>
                                        @endif
                                        <label for="nid" class="col-sm-2 control-label">Trade License</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="{{ $supplier->trade_license }}" id="trade_license" name="trade_license">
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-success pull-right" id="submitId"
                                        style="padding-left: 40px; padding-right: 40px">Update</button>
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
