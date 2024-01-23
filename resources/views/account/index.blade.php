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
        <div class="row ">
            {{-- <div class="box-header">
                <h3 class="box-title">Accounts</h3>
            </div> --}}
            {{-- <div class="col-sm-4 col-sm-offset-4"> --}}


                <div class="col-sm-3">
                    <!-- small box -->
                    <div class="small-box bg-teal">
                        <div class="inner">
                            @isset($searchTransaction)
                                <h4> <b>{{ $searchTransaction }} Tk</b></h4>
                            @else
                                <h4> <b>{{ $weekTransaction }} Tk</b></h4>
                            @endisset

                        @isset($searchTransaction)
                            <p>Total Transaction</p>
                        @else
                            <p>Current Week Transaction</p>
                        @endisset
                        </div>
                        <div class="icon">
                        <i class="fa fa-camera"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                @isset($searchTransaction)

                @else

                    <div class="col-sm-3">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                            <h4> <b>{{ $monthTransaction }} Tk</b></h4>

                            <p>Current Month Transaction</p>
                            </div>
                            <div class="icon">
                            <i class="fa fa-camera"></i>
                            </div>
                            <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                @endisset

                @isset($searchTransaction)

                @else
                <div class="col-sm-3">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                        <h4> <b>{{ $yearTransaction }} Tk</b></h4>

                        <p>Current Year Transaction</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-camera"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                @endisset



                @isset($searchTransaction)

                @else
                <div class="col-sm-3">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <h4> <b>{{ $totalTransaction }} Tk</b></h4>

                        <p>Total Transaction amount</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-camera"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                @endisset


        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body">
                        {{-- <p class="text-primary">Total Transaction amount: <b>{{ $totalTransaction }}</b></p> --}}

                        <form class="form-horizontal" action="{{ route('account.filter') }}" method="POST">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info pull-right pull-bottom">
                                        Fiter</button>

                                    <div class="col-sm-2 pull-right">
                                        <input type="date" class="form-control " name="toDate">
                                    </div>
                                    <div class="col-sm-2 pull-right">
                                        <input type="date" class="form-control" name="fromDate">
                                    </div>
                                </div>
                            </div>
                        </form>


                        <table id="example1" class="table table-bordered table-striped">

                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Payment Method</th>
                                    <th>Transaction Code</th>
                                    <th>Customer</th>
                                    <th>Payment Status</th>
                                    <th>Reference's</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($accounts as $account)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ date_format(date_create($account->created_at), 'm/d/Y h:i A') }}</td>
                                        <td>{{ $account->amount }}</td>
                                        <td>{{ $account->account_type }}
                                            @if ($account->account_type_2)
                                                , {{ $account->account_type_2 }}
                                            @endif
                                        </td>
                                        <td>

                                            @if ($account->transaction_code == NULL)
                                                Cash
                                            @else
                                                {{ $account->transaction_code }}
                                            @endif

                                            @if ($account->transaction_code_2)
                                                , {{ $account->transaction_code_2 }}
                                            @endif
                                        </td>
                                        <td>{{ $account->customer_name }}</td>
                                        <td>{{ $account->category }}</td>
                                        <td>{{ $account->reference }}
                                            @if ($account->reference_2)
                                                , {{ $account->reference_2 }}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th> Payment Method</th>
                                    <th> Transaction Code</th>
                                    <th>Customer</th>
                                    <th>Payment Status</th>
                                    <th>Reference's</th>
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
