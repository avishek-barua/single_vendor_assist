@extends('layouts.app2')

@section('content')
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        @if (Session::has('product_delete_message'))
            <div class="row">
                <div class="col-md-6">
                    <p class="alert {{ Session::get('alert-class', 'alert-success') }}">
                        {{ Session::get('product_delete_message') }}</p>
                    {{ Session::forget('product_delete_message') }}
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Products</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Title</th>
                                    {{-- <th>Description</th> --}}
                                    <th>Suppliers</th>
                                    <th>Category</th>
                                    <th>Origin</th>
                                    <th>Stock</th>
                                    <th>Case</th>
                                    <th>SKU #</th>
                                    <th>Unit Price</th>
                                    <th>Trading Price</th>
                                    <th>MRP</th>
                                    <th>Image</th>
                                    {{-- <th>In Service</th> --}}
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $cnt = 1; ?>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $cnt++ }}</td>
                                        <td>{{ $product->title }}</td>
                                        {{-- <td>{{\Illuminate\Support\Str::limit($product->description, 100)}}</td> --}}
                                        <td>{{ $product->supplier }}</td>
                                        <td>{{ $product->category ? $product->category->name : "No Category"}}
                                        </td>
                                        <td>{{ $product->origin }}</td>
                                        <td>
                                            {{ $product->stock }}
                                            {{-- @if ($product->stock > 0)
                                                {{ $product->stock }}
                                            @else
                                                <small class="label bg-red" style="">In Service</small>
                                            @endif --}}
                                        </td>
                                        <td>{{ $product->case }}</td>
                                        <td>{{ $product->art_no }}</td>
                                        <td>{{ $product->unit_price }}</td>
                                        <td>{{ $product->trading_price }}</td>
                                        <td>{{ $product->mrp }}</td>

                                        <td>
                                            <img src="{{ asset($product->image_path)}}" height="50" , width="50">
                                        </td>
                                        {{-- <td> --}}
                                            {{-- {{ $product->is_in_service }} --}}
                                            {{-- @if ($product->is_in_service != 0)
                                                <small class="label bg-red" style="">Yes</small>
                                            @else
                                                <small class="label bg-green" style="">No</small>
                                            @endif --}}
                                        {{-- </td> --}}
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
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Title</th>
                                    {{-- <th>Description</th> --}}
                                    <th>Suppliers</th>
                                    <th>Category</th>
                                    <th>Origin</th>
                                    <th>Stock</th>
                                    <th>Case</th>
                                    <th>SKU #</th>
                                    <th>Unit Price</th>
                                    <th>Trading Price</th>
                                    <th>MRP</th>
                                    <th>Image</th>
                                    {{-- <th>In Service</th> --}}
                                    <th class="text-center">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>

    </section>
@endsection

@push('js')
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
@endpush
