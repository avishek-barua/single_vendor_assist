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
        @if (Session::has('message'))
            <div class="row">
                <div class="col-md-6">
                    <p class="alert {{ Session::get('alert-class', 'alert-success') }}">
                        {{ Session::get('message') }}</p>
                    {{ Session::forget('message') }}
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add Damage Product</h3>
                        <a href="{{ route('all.damage.product') }}" class="btn btn-primary" style="float: right">All Damage Product</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="col-md-8">
                            <form class="form-horizontal" id="formId" action="{{ route('damage.products.store') }}"
                                method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id">
                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="title" class="col-sm-2 control-label">Search SKU</label>
                                        <div class="col-sm-10">
                                        <input type="text" name="sku_input" id="sku_input" class="form-control" placeholder="Search Product By SKU">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" style="" role="alert">
                                                <strong style="color: red">* {{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                        <label for="title" class="col-sm-2 control-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="product_name" class="form-control" id="title" placeholder="Enter Product Title" required>
                                        </div>
                                    </div>




                                    {{-- Added New Category --}}
                                    <div class="form-group">
                                        @if ($errors->has('category'))
                                            <span class="invalid-feedback" style="" role="alert">
                                                <strong style="color: red">* {{ $errors->first('category') }}</strong>
                                            </span>
                                        @endif
                                        <label for="category" class="col-sm-2 control-label">Category</label>
                                        <div class="col-sm-4">
                                            {{-- <input type="text" name="category_id" class="form-control" placeholder="Category" required id="category_id"> --}}
                                            <select name="category_id" class="form-control" id="category_id">
                                                <option value="" selected disabled></option>
                                                @foreach ($categories as $row)
                                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @if ($errors->has('quantity'))
                                            <span class="invalid-feedback" style="" role="alert">
                                                <strong style="color: red">* {{ $errors->first('quantity') }}</strong>
                                            </span>
                                        @endif
                                        <label for="quantity" class="col-sm-2 control-label">Quantity</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="quantity" placeholder="Enter Quantity" name="quantity"
                                                required>
                                        </div>

                                    </div>



                                    <div class="form-group">
                                        @if ($errors->has('art_no'))
                                            <span class="invalid-feedback" style="" role="alert">
                                                <strong style="color: red">* {{ $errors->first('art_no') }}</strong>
                                            </span>
                                        @endif
                                        <label for="art_no" class="col-sm-2 control-label">SKU</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" placeholder="Enter Product SKU" id="art_no" name="sku" required>
                                        </div>
                                        @if ($errors->has('price'))
                                            <span class="invalid-feedback" style="" role="alert">
                                                <strong style="color: red">* {{ $errors->first('price') }}</strong>
                                            </span>
                                        @endif
                                        <label for="price" class="col-sm-2 control-label">Loss Amount</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="loss_amount" name="loss_amount" placeholder="Enter Loss Amount" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        @if ($errors->has('description'))
                                            <span class="invalid-feedback" style="" role="alert">
                                                <strong
                                                    style="color: red">* {{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
                                        <label for="description" class="col-sm-2 control-label">Damage Note</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="damage_note" name="damage_note"
                                                    rows="3"></textarea>
                                        </div>
                                    </div>


                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-success pull-right" id="submitId"
                                            style="padding-left: 40px; padding-right: 40px">Save
                                    </button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
            $(function () {
                $('#sku_input').autocomplete({
                source: function (request, response) {

                    $.getJSON('{{url('/damage/product/autocomplete')}}?term=' + request.term, function (data) {
                    var array = $.map(data, function (row) {
                        return {
                        value: row.art_no,
                        label: row.art_no,
                        title: row.title,
                        category_id: row.category_id,
                        art_no: row.art_no,
                        }
                    })

                    response($.ui.autocomplete.filter(array, request.term));
                    })
                },
                minLength: 3,
                delay: 300,
                select: function (event, ui) {
                    $('#title').val(ui.item.title)
                    $('#category_id').val(ui.item.category_id)
                    $('#art_no').val(ui.item.art_no)
                }
                })
            })
            </script>
    </section>

@endsection

@push('js')
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function () {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

    </script>
@endpush


