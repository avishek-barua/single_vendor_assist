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
                                    
                                    
                                    
                                    <th>Stock</th>
                                    
                                    <th>SKU #</th>
                                    <th>Unit Price</th>
                                    <th>Trading Price</th>
                                    <th>MRP</th>
                                    <th>Image</th>
                                    
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $cnt = 1; ?>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($cnt++); ?></td>
                                        <td><?php echo e($product->title); ?></td>
                                        
                                        
                                        

                                        </td>
                                        <td>
                                            <?php echo e($product->stock); ?>

                                            
                                        </td>
                                        
                                        <td><?php echo e($product->art_no); ?></td>
                                        <td><?php echo e($product->unit_price); ?></td>
                                        <td><?php echo e($product->trading_price); ?></td>
                                        <td><?php echo e($product->mrp); ?></td>

                                        <td>
                                            <img src="<?php echo e(asset($product->image_path)); ?>" height="50" , width="50">
                                        </td>
                                        
                                            
                                            
                                        
                                        <td>
                                            <span class="">
                                                <a href="<?php echo e(route('stocks.add', $product->id)); ?>">
                                                    <small class="label bg-green" style="margin-right: 15px">Add
                                                        Stock</small>
                                                </a>
                                                <a href="<?php echo e(route('products.edit', $product->id)); ?>">
                                                    <small class="label bg-yellow" style="margin-right: 15px">Edit</small>
                                                </a>
                                                <a onclick="return confirm('Are you sure?')"
                                                    href="<?php echo e(route('products.delete', $product->id)); ?>">
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
                                    <th>Title</th>
                                    
                                    
                                    <th>Stock</th>
                                    <th>SKU #</th>
                                    <th>Unit Price</th>
                                    <th>Trading Price</th>
                                    <th>MRP</th>
                                    <th>Image</th>
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

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dokan\resources\views/report/stock.blade.php ENDPATH**/ ?>