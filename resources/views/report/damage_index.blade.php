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
                        <h3 class="box-title">All Damage Products</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Quantity</th>
                                    <th>SKU #</th>
                                    <th>Loss Amount</th>
                                    <th>Damage Note</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $cnt = 1; ?>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $cnt++ }}</td>
                                        <td>{{ $product->product_name }}</td>
                                        {{-- <td>{{\Illuminate\Support\Str::limit($product->description, 100)}}</td> --}}
                                        <td>{{ $product->category }}</td>
                                        {{-- <td>{{ $product->category ? $product->category->name : "No Category"}} --}}

                                        </td>
                                        <td>
                                            {{ $product->quantity }}
                                        </td>
                                        <td>{{ $product->sku }}</td>
                                        <td>{{ $product->loss_amount }}</td>
                                        <td>{{ $product->damage_note }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Quantity</th>
                                    <th>SKU #</th>
                                    <th>Loss Amount</th>
                                    <th>Damage Note</th>
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
