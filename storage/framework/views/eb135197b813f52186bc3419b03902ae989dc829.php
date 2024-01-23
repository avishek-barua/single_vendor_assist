<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <?php if(Session::has('product_delete_message')): ?>
            <div class="row">
                <div class="col-md-6">
                    <p class="alert <?php echo e(Session::get('alert-class', 'alert-success')); ?>">
                        <?php echo e(Session::get('product_delete_message')); ?></p>
                    <?php echo e(Session::forget('product_delete_message')); ?>

                </div>

            </div>
        <?php endif; ?>
        <div class="row ">
            
            


                <div class="col-sm-3">
                    <!-- small box -->
                    <div class="small-box bg-teal">
                        <div class="inner">
                            <?php if(isset($searchTransaction)): ?>
                                <h4> <b><?php echo e($searchTransaction); ?> Tk</b></h4>
                            <?php else: ?>
                                <h4> <b><?php echo e($weekTransaction); ?> Tk</b></h4>
                            <?php endif; ?>

                        <?php if(isset($searchTransaction)): ?>
                            <p>Total Transaction</p>
                        <?php else: ?>
                            <p>Current Week Transaction</p>
                        <?php endif; ?>
                        </div>
                        <div class="icon">
                        <i class="fa fa-camera"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <?php if(isset($searchTransaction)): ?>

                <?php else: ?>

                    <div class="col-sm-3">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                            <h4> <b><?php echo e($monthTransaction); ?> Tk</b></h4>

                            <p>Current Month Transaction</p>
                            </div>
                            <div class="icon">
                            <i class="fa fa-camera"></i>
                            </div>
                            <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                <?php endif; ?>

                <?php if(isset($searchTransaction)): ?>

                <?php else: ?>
                <div class="col-sm-3">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                        <h4> <b><?php echo e($yearTransaction); ?> Tk</b></h4>

                        <p>Current Year Transaction</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-camera"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <?php endif; ?>



                <?php if(isset($searchTransaction)): ?>

                <?php else: ?>
                <div class="col-sm-3">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <h4> <b><?php echo e($totalTransaction); ?> Tk</b></h4>

                        <p>Total Transaction amount</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-camera"></i>
                        </div>
                        <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <?php endif; ?>


        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box">

                    <!-- /.box-header -->
                    <div class="box-body">
                        

                        <form class="form-horizontal" action="<?php echo e(route('account.filter')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
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
                                <?php
                                    $i = 1;
                                ?>
                                <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($i++); ?></td>
                                        <td><?php echo e(date_format(date_create($account->created_at), 'm/d/Y h:i A')); ?></td>
                                        <td><?php echo e($account->amount); ?></td>
                                        <td><?php echo e($account->account_type); ?>

                                            <?php if($account->account_type_2): ?>
                                                , <?php echo e($account->account_type_2); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td>

                                            <?php if($account->transaction_code == NULL): ?>
                                                Cash
                                            <?php else: ?>
                                                <?php echo e($account->transaction_code); ?>

                                            <?php endif; ?>

                                            <?php if($account->transaction_code_2): ?>
                                                , <?php echo e($account->transaction_code_2); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo e($account->customer_name); ?></td>
                                        <td><?php echo e($account->category); ?></td>
                                        <td><?php echo e($account->reference); ?>

                                            <?php if($account->reference_2): ?>
                                                , <?php echo e($account->reference_2); ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dokan\resources\views/account/index.blade.php ENDPATH**/ ?>