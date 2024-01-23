

<?php $__env->startSection('content'); ?>
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
                    
                    <img src="<?php echo e(asset($settings->image_path)); ?>" height="100" width="250" alt="Logo">
                    <small class="pull-right">Date: <?php echo e(date('d/m/Y')); ?></small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                From
                <address>
                    <strong><?php echo e($settings->company_name); ?></strong><br>
                    <?php echo e($settings->company_address); ?><br>
                    <?php echo e($settings->company_city); ?><br>
                    Phone: <?php echo e($settings->phone); ?><br>
                    Email: <?php echo e($settings->email); ?>

                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                To
                <address>
                    <strong><?php echo e($order->cname); ?></strong><br>
                    Office Address: <?php echo e($order->address); ?><br>
                    Deliver Address: <?php echo e($order->delivery_address); ?><br>
                    Phone: <?php echo e($order->mobile); ?><br>

                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <b>Invoice <?php echo e($invoice->invoice_id); ?></b><br>
                <br>
                <b>Order ID:</b> <?php echo e($order->id); ?><br>
                <b>Order Date:</b> <?php echo e(date_format(date_create($order->return_date), 'd/m/Y')); ?><br>
                
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
                        <?php ($i = 1); ?>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i++); ?></td>
                                <td><?php echo e($product->art_no); ?></td>
                                <td><?php echo e($product->title); ?></td>
                                <td><?php echo e($product->quantity); ?></td>
                                <td><?php echo e($product->unit_price); ?></td>
                                <td>৳ <?php echo e($product->price); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <?php if($order->order_status == 0): ?>
                        <span style="padding-left: 110px"><span class="label label-warning" style="font-size: 20px">Pending</span></span>
                    <?php elseif($order->order_status == 1): ?>
                        <span style="padding-left: 110px"><span class="label label-info" style="font-size: 20px">Payment Accepted</span></span>
                    <?php elseif($order->order_status == 2): ?>
                        <span style="padding-left: 110px"><span class="label label-warning" style="font-size: 20px">Progress</span></span>
                    <?php elseif($order->order_status == 3): ?>
                        <span style="padding-left: 110px"><span class="label label-success" style="font-size: 20px">Delivered </span></span>
                    <?php else: ?>
                        <span style="padding-left: 110px"><span class="label label-danger" style="font-size: 20px">Order Cancelled</span></span>
                    <?php endif; ?>
                </p>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th style="width:50%">Order Date:</th>
                            <td><?php echo e(date_format(date_create($order->created_at), 'd/m/Y')); ?></td>
                        </tr>
                        
                        <tr>
                            <th style="width:50%">Total:</th>
                            <td>৳ <?php echo e($order->order_value); ?></td>
                        </tr>
                        <tr>
                            <th style="width:50%">Discount:</th>
                            <td>৳ <?php echo e($order->discount_amount); ?></td>
                        </tr>
                        <tr>
                            <th>Net Total:</th>
                            <td>৳ <?php echo e($order->order_value - $order->discount_amount); ?></td>
                        </tr>
                        
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                <?php if($order->order_status == 0 || $order->order_status == 1 || $order->order_status == 2 || $order->order_status == 3): ?>
                    <a href="<?php echo e(route('invoice.print', $order->id)); ?>" target="_blank" class="btn btn-primary"
                        style="margin-right: 5px;"><i class="fa fa-eye"></i> View Invoice</a>
                    <a href="<?php echo e(route('invoice.print', $order->id)); ?>" target="_blank" class="btn btn-warning"
                        style="margin-right: 5px;">
                        <i class="fa fa-print"></i>
                        Print Invoice
                    </a>
                <?php endif; ?>

                    

                <?php if($order->order_status == 0): ?>
                    <?php if(Auth::user()->is_admin==5): ?>
                    <?php else: ?>
                    <a href="<?php echo e(route('process.accept.payment',$order->id)); ?>" class="btn btn-info pull-right" style="margin-right: 5px;"><i class="fa fa-money"></i> Payment Accept</a>
                    <?php endif; ?>
                    <a href="<?php echo e(route('cancel.order',$order->id)); ?>" class="btn btn-danger pull-right" style="margin-right: 5px;">Cancel Order</a>
                <?php elseif($order->order_status == 1): ?>
                    <a href="<?php echo e(route('process.delivery',$order->id)); ?>" class="btn btn-info pull-right">Process Delivery</a>
                <?php elseif($order->order_status == 2): ?>
                    <a href="<?php echo e(route('delivery.done',$order->id)); ?>" class="btn btn-success pull-right">Delivery Done</a>
                <?php elseif($order->order_status == 4): ?>
                    <span class="text-danger text-center"><h3>This Order is not valid </h3></span>
                <?php else: ?>
                    <span class="text-success text-center"><h3>This Order is successfully Delivered</h3></span>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
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

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\All_works\online class\final project\project\laravel\Shop_management\resources\views/order/show.blade.php ENDPATH**/ ?>