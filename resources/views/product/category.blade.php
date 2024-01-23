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
                        <!-- {{ Session::get('product_add_message') }} -->
                        {{ Session('message') }}
                    </p>
                    <!-- {{ Session::forget('product_add_message') }} -->
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add New Category</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="col-md-6">
                            <form class="form-horizontal" id="formId" action="{{ route('category.store') }}"
                                method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id">
                                <div class="box-body">
                                    <div class="form-group">
                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" style="" role="alert">
                                                <strong style="color: red">* {{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                        <label for="title" class="col-sm-2 control-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                    </div>

                                    {{-- img result --}}

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
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Category</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="col-md-8">
                        <table class="table table-hover" id="dynamic_field" onchange="">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i = 0)
                                @foreach($categories as $row)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>
                                        <a href="{{ route('edit.category',$row->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('delete.category',$row->id) }}" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>

                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tbody>

                            </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>

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
