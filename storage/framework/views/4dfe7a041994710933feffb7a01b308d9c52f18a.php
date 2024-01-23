<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <?php if(Session::has('order_delete_message')): ?>
            <div class="row">
                <div class="col-md-6">
                    <p class="alert <?php echo e(Session::get('alert-class', 'alert-success')); ?>">
                        <?php echo e(Session::get('order_delete_message')); ?></p>
                    <?php echo e(Session::forget('order_delete_message')); ?>

                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Orders</h3>
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
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($cnt++); ?></td>
                                        <td><?php echo e($order->cname); ?> - <?php echo e($order->mobile); ?></td>
                                        <td>Bkash</td>
                                        <td>Ac-02415654845</td>
                                        <td><?php echo e($order->order_value); ?> TK.</td>
                                        <td>
                                            <?php if($order->order_status == 0): ?>
                                                <span class="label label-warning">Pending</span>
                                            <?php elseif($order->order_status == 1): ?>
                                                <span class="label label-info">Payment Accept</span>
                                            <?php elseif($order->order_status == 2): ?>
                                                <span class="label label-warning">Progress</span>
                                            <?php elseif($order->order_status == 3): ?>
                                                <span class="label label-success">Delivered</span>
                                            <?php else: ?>
                                                <span class="label label-danger">Cancel</span>
                                            <?php endif; ?>
                                        </td>

                                        <td><?php echo e(date_format(date_create($order->created_at), 'm/d/Y h:i A')); ?></td>
                                        
                                            
                                        <td>
                                            <span class="">
                                                <a href="<?php echo e(route('orders.show', $order->id)); ?>">
                                                    <small class="label bg-green" style="margin-right: 15px">View</small>
                                                </a>
                                                
                                                <?php if($order->order_status == 0): ?>
                                                <a onclick="return confirm('Are you sure?')"
                                                    href="<?php echo e(route('cancel.order', $order->id)); ?>">
                                                    <small class="label bg-red" style="margin-right: 15px">Cancel</small>
                                                </a>
                                                <?php endif; ?>

                                            </span>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dokan\resources\views/order/index.blade.php ENDPATH**/ ?>