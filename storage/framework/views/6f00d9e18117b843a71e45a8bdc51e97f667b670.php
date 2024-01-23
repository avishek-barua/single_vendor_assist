

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <?php if(Session::has('supplier_delete_message')): ?>
            <div class="row">
                <div class="col-md-6">
                    <p class="alert <?php echo e(Session::get('alert-class', 'alert-success')); ?>">
                        <?php echo e(Session::get('supplier_delete_message')); ?></p>
                    <?php echo e(Session::forget('supplier_delete_message')); ?>

                </div>
            </div>
        <?php elseif(Session::has('supplier_add_message')): ?>
            <div class="row">
                <div class="col-md-6">
                    <p class="alert <?php echo e(Session::get('alert-class', 'alert-success')); ?>">
                        <?php echo e(Session::get('supplier_add_message')); ?></p>
                    <?php echo e(Session::forget('supplier_add_message')); ?>

                </div>
            </div>
        <?php endif; ?>
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
                                <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($cnt++); ?></td>
                                        <td><?php echo e($supplier->name); ?></td>
                                        <td><?php echo e($supplier->phone); ?></td>
                                        <td><?php echo e($supplier->organization_name); ?></td>
                                        <td><?php echo e($supplier->organization_address); ?></td>
                                        <td><?php echo e($supplier->trade_license); ?></td>
                                        <td>
                                            <span class="">
                                                <a href="<?php echo e(route('suppliers.edit', $supplier->id)); ?>">
                                                    <small class="label bg-yellow" style="margin-right: 15px">Edit</small>
                                                </a>
                                                <a onclick="return confirm('Are you sure?')"
                                                    href="<?php echo e(route('suppliers.delete', $supplier->id)); ?>">
                                                    <small class="label bg-red" style="margin-right: 15px">Delete</small>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\All_works\online class\final project\project\laravel\Shop_management\resources\views/supplier/index.blade.php ENDPATH**/ ?>