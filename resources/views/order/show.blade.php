@extends('layouts.app2')

@section('content')
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
    </section>

    <!-- Main content -->
    </section>
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    {{-- <i class="fa fa-globe"></i> {{ $settings->company_name }} --}}
                    <img src="{{ asset($settings->image_path) }}" height="100" width="250" alt="Logo">
                    <small class="pull-right">Date: {{ date('d/m/Y') }}</small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                From
                <address>
                    <strong>{{ $settings->company_name }}</strong><br>
                    {{ $settings->company_address }}<br>
                    {{ $settings->company_city }}<br>
                    Phone: {{ $settings->phone }}<br>
                    Email: {{ $settings->email }}
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                To
                <address>
                    <strong>{{ $order->cname }}</strong><br>
                    Office Address: {{ $order->address }}<br>
                    Deliver Address: {{ $order->delivery_address }}<br>
                    Phone: {{ $order->mobile }}<br>

                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <b>Invoice {{ $invoice->invoice_id }}</b><br>
                <br>
                <b>Order ID:</b> {{ $order->id }}<br>
                <b>Order Date:</b> {{ date_format(date_create($order->return_date), 'd/m/Y') }}<br>
                {{-- <b>Account:</b> 968-34567 --}}
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <?php
            $createdAt = strtotime($order->start_date);
            // $returnDate = strtotime($order->return_date);
            // $datediff = $returnDate - $createdAt;

            // $d = max(round($datediff / (60 * 60 * 24)), 1) + 1;
        ?>
        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>SKU</th>
                            <th>Product</th>
                            <th>Qty</th>
                            <th>Unit Price</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $product->art_no }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->unit_price }}</td>
                                <td>৳ {{ $product->price }}</td>
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
            </div>
            <!-- /.col -->
            <div class="col-xs-6">
                <p class="lead"> Order Status  :
                    @if ($order->order_status == 0)
                        <span style="padding-left: 110px"><span class="label label-warning" style="font-size: 20px">Pending</span></span>
                    @elseif ($order->order_status == 1)
                        <span style="padding-left: 110px"><span class="label label-info" style="font-size: 20px">Payment Accepted</span></span>
                    @elseif ($order->order_status == 2)
                        <span style="padding-left: 110px"><span class="label label-warning" style="font-size: 20px">Progress</span></span>
                    @elseif ($order->order_status == 3)
                        <span style="padding-left: 110px"><span class="label label-success" style="font-size: 20px">Delivered </span></span>
                    @else
                        <span style="padding-left: 110px"><span class="label label-danger" style="font-size: 20px">Order Cancelled</span></span>
                    @endif
                </p>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th style="width:50%">Order Date:</th>
                            <td>{{ date_format(date_create($order->created_at), 'd/m/Y') }}</td>
                        </tr>
                        {{-- <tr>
                            <th style="width:50%">Rent From:</th>
                            <td>{{ date_format(date_create($order->start_date), 'd/m/Y') }}</td>
                        </tr>
                        <tr>
                            <th style="width:50%">Rent To:</th>
                            <td>{{ date_format(date_create($order->return_date), 'd/m/Y') }}</td>
                        </tr>

                        <tr>
                            <th style="width:50%">Total Days:</th>
                            <td>{{ $d }}</td>
                        </tr> --}}
                        <tr>
                            <th style="width:50%">Total:</th>
                            <td>৳ {{ $order->order_value }}</td>
                        </tr>
                        <tr>
                            <th style="width:50%">Discount:</th>
                            <td>৳ {{ $order->discount_amount }}</td>
                        </tr>
                        <tr>
                            <th>Net Total:</th>
                            <td>৳ {{ $order->order_value - $order->discount_amount }}</td>
                        </tr>
                        {{-- <tr>
                            <th>Amount Paid:</th>
                            <td>৳ {{ $order->amount_paid }}</td>
                        </tr>
                        <tr>
                            <th>Due:</th>
                            <td>৳ {{ $order->order_value - $order->discount_amount - $order->amount_paid }}</td>
                        </tr> --}}
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                @if ($order->order_status == 0 || $order->order_status == 1 || $order->order_status == 2 || $order->order_status == 3)
                    <a href="{{ route('invoice.print', $order->id) }}" target="_blank" class="btn btn-primary"
                        style="margin-right: 5px;"><i class="fa fa-eye"></i> View Invoice</a>
                    <a href="{{ route('invoice.print', $order->id) }}" target="_blank" class="btn btn-warning"
                        style="margin-right: 5px;">
                        <i class="fa fa-print"></i>
                        Print Invoice
                    </a>
                @endif

                    {{-- @if (($order->order_value - $order->discount_amount - $order->amount_paid) != 0)
                    <button class="btn btn-success" style="margin-right: 5px;" data-toggle="modal" data-target="#staticBackdrop"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>Pay Due</button></span>
                    @endif --}}

                @if ($order->order_status == 0)
                    @if(Auth::user()->is_admin==5)
                    @else
                    <a href="{{ route('process.accept.payment',$order->id) }}" class="btn btn-info pull-right" style="margin-right: 5px;"><i class="fa fa-money"></i> Payment Accept</a>
                    @endif
                    <a href="{{ route('cancel.order',$order->id) }}" class="btn btn-danger pull-right" style="margin-right: 5px;">Cancel Order</a>
                @elseif ($order->order_status == 1)
                    <a href="{{ route('process.delivery',$order->id) }}" class="btn btn-info pull-right">Process Delivery</a>
                @elseif ($order->order_status == 2)
                    <a href="{{ route('delivery.done',$order->id) }}" class="btn btn-success pull-right">Delivery Done</a>
                @elseif ($order->order_status == 4)
                    <span class="text-danger text-center"><h3>This Order is not valid </h3></span>
                @else
                    <span class="text-success text-center"><h3>This Order is successfully Delivered</h3></span>
                @endif
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        $(document).ready(function(){
            $("#transaction_code").hide();
            $('#payment_bkash').on('click', function () {
            if ($(this).prop('checked') == true) {
                $("#transaction_code").show();
            }
            });

            $('#payment_cash').on('click', function () {
            if ($(this).prop('checked') == true) {
                $("#transaction_code").hide();
            }
            });

            $('#payment_bank').on('click', function () {
            if ($(this).prop('checked') == true) {
                $("#transaction_code").show();
            }
        });

        });

    </script>

@endpush
