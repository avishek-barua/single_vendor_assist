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
        @if (Session::has('supplier_delete_message'))
            <div class="row">
                <div class="col-md-6">
                    <p class="alert {{ Session::get('alert-class', 'alert-success') }}">
                        {{ Session::get('supplier_delete_message') }}</p>
                    {{ Session::forget('supplier_delete_message') }}
                </div>
            </div>
        @elseif (Session::has('supplier_add_message'))
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
                        <h3 class="box-title">Suppliers</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Company Name</th>
                                    <th>Address</th>
                                    <th>Trade License</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $cnt = 1; ?>
                                @foreach ($suppliers as $supplier)
                                    <tr>
                                        <td>{{ $cnt++ }}</td>
                                        <td>{{ $supplier->name }}</td>
                                        <td>{{ $supplier->phone }}</td>
                                        <td>{{ $supplier->organization_name }}</td>
                                        <td>{{ $supplier->organization_address }}</td>
                                        <td>{{ $supplier->trade_license }}</td>
                                        <td>
                                            <span class="">
                                                <a href="{{ route('suppliers.edit', $supplier->id) }}">
                                                    <small class="label bg-yellow" style="margin-right: 15px">Edit</small>
                                                </a>
                                                <a onclick="return confirm('Are you sure?')"
                                                    href="{{ route('suppliers.delete', $supplier->id) }}">
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
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Company Name</th>
                                    <th>Address</th>
                                    <th>Trade License</th>
                                    <th>Action</th>
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
