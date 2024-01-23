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
        @if (Session::has('order_delete_message'))
            <div class="row">
                <div class="col-md-6">
                    <p class="alert {{ Session::get('alert-class', 'alert-success') }}">
                        {{ Session::get('order_delete_message') }}</p>
                    {{ Session::forget('order_delete_message') }}
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Pending Orders</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID #</th>
                                    <th>Customer</th>
                                    <th>Payment Type</th>
                                    <th>Transaction ID</th>
                                    <th>Total</th>
                                    <th>Order Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $cnt = 1; ?>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $cnt++ }}</td>
                                        <td>{{ $order->cname }} - {{ $order->mobile }}</td>
                                        <td>Bkash</td>
                                        <td>Ac-02415654845</td>
                                        <td>{{ $order->order_value }} TK.</td>
                                        <td>
                                            @if ($order->order_status == 0)
                                                <span class="label label-warning">Pending</span>
                                            @elseif ($order->order_status == 1)
                                                <span class="label label-info">Payment Accept</span>
                                            @elseif ($order->order_status == 2)
                                                <span class="label label-warning">Progress</span>
                                            @elseif ($order->order_status == 3)
                                                <span class="label label-success">Delivered</span>
                                            @else
                                                <span class="label label-danger">Cancel</span>
                                            @endif
                                        </td>

                                        <td>{{ date_format(date_create($order->created_at), 'm/d/Y h:i A') }}</td>
                                        {{-- <td>{{ date_format(date_create($order->start_date), 'm/d/Y') }}</td>
                                        @if ($order->return_date)
                                            <td>{{ date_format(date_create($order->return_date), 'm/d/Y') }}</td>
                                        @else
                                            <td></td>
                                        @endif

                                        <td> --}}
                                            {{-- @if ($order->is_return != 1)
                                                <a onclick="return confirm('Are you sure?')"
                                                    href="{{ route('orders.return', $order->id) }}">
                                                    <small class="label bg-green" style="margin-right: 15px">Return</small>
                                                </a>
                                            @else
                                                Returned
                                            @endif
                                        </td> --}}
                                        <td>
                                            <span class="">
                                                <a href="{{ route('orders.show', $order->id) }}">
                                                    <small class="label bg-green" style="margin-right: 15px">View</small>
                                                </a>
                                                {{-- <a href="{{route('products.edit', $order->id)}}">
                                                    <small class="label bg-yellow" style="margin-right: 15px">Edit</small>
                                                </a> --}}
                                                <a onclick="return confirm('Are you sure?')"
                                                    href="{{ route('orders.delete', $order->id) }}">
                                                    <small class="label bg-red" style="margin-right: 15px">Cancel</small>
                                                </a>

                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID #</th>
                                    <th>Customer</th>
                                    <th>Total Devices</th>
                                    <th>Order Value</th>
                                    <th>Discount</th>
                                    <th>Paid Amount.</th>
                                    <th>Created At</th>
                                    <th>Return Date</th>
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
