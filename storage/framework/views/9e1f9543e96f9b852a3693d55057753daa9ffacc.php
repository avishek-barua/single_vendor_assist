<?php $__env->startSection('content'); ?>
<section class="content-header">
<h1>
Dashboard
<small>Control panel</small>
</h1>
</section>
<!-- Main content -->
<section class="content">
<!-- Small boxes (Stat box) -->
<?php if(Session::has('product_update_message')): ?>
<div class="row">
<div class="col-md-6">
<p class="alert <?php echo e(Session::get('alert-class', 'alert-success')); ?>">
<?php echo e(Session::get('product_update_message')); ?></p>
<?php echo e(Session::forget('product_update_message')); ?>

</div>
</div>
<?php endif; ?>
<div class="row">
<div class="col-md-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">Update Product</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
<div class="col-md-8">
<form class="form-horizontal" id="formId"
    action="<?php echo e(route('products.update', $product->id)); ?>" method="POST"
    enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo e(method_field('PUT')); ?>

    <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
    <div class="box-body">
        <div class="form-group">
            <?php if($errors->has('title')): ?>
                <span class="invalid-feedback" style="" role="alert">
                    <strong style="color: red">* <?php echo e($errors->first('title')); ?></strong>
                </span>
            <?php endif; ?>
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title"
                    value="<?php echo e($product->title); ?>" required>
            </div>
        </div>
        




        <div class="form-group">
            <?php if($errors->has('category_id')): ?>
                <span class="invalid-feedback" style="" role="alert">
                    <strong style="color: red">* <?php echo e($errors->first('category_id')); ?></strong>
                </span>
            <?php endif; ?>
            <label for="quantity" class="col-sm-2 control-label">Category</label>
            <div class="col-sm-10">

                


                    <select name="category_id" id="category_id" class="form-control">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($row->id); ?>"
                                <?php if($row->id == $product->category_id): ?>
                                    selected
                                <?php endif; ?>
                        ><?php echo e($row->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>

            </div>
        </div>


        <div class="form-group">
            <?php if($errors->has('supplier_id')): ?>
                <span class="invalid-feedback" style="" role="alert">
                    <strong style="color: red">* <?php echo e($errors->first('supplier_id')); ?></strong>
                </span>
            <?php endif; ?>
            <label for="quantity" class="col-sm-2 control-label">Supplier</label>
            <div class="col-sm-10">

                


                    <select name="supplier_id" id="supplier_id" class="form-control">
                        <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($row->id); ?>"
                                <?php if($row->id == $product->supplier_id): ?>
                                    selected
                                <?php endif; ?>
                        ><?php echo e($row->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>

            </div>
        </div>



        <div class="form-group">
            <?php if($errors->has('origin')): ?>
                <span class="invalid-feedback" style="" role="alert">
                    <strong style="color: red">* <?php echo e($errors->first('origin')); ?></strong>
                </span>
            <?php endif; ?>
            <label for="origin" class="col-sm-2 control-label">Origin</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="origin" name="origin"
                    value="<?php echo e($product->origin); ?>" required>
            </div>
        </div>
        <div class="form-group">
            <?php if($errors->has('quantity')): ?>
                <span class="invalid-feedback" style="" role="alert">
                    <strong style="color: red">* <?php echo e($errors->first('quantity')); ?></strong>
                </span>
            <?php endif; ?>
            <label for="quantity" class="col-sm-2 control-label">Quantity</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="quantity" name="quantity"
                    value="<?php echo e($product->stock); ?>" required>
            </div>
        </div>
        <div class="form-group">
            <?php if($errors->has('case')): ?>
                <span class="invalid-feedback" style="" role="alert">
                    <strong style="color: red">* <?php echo e($errors->first('case')); ?></strong>
                </span>
            <?php endif; ?>
            <label for="quantity" class="col-sm-2 control-label">Case</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="case" name="case"
                    value="<?php echo e($product->case); ?>" required>
            </div>
        </div>
        <div class="form-group">
            <?php if($errors->has('art_no')): ?>
                <span class="invalid-feedback" style="" role="alert">
                    <strong style="color: red">* <?php echo e($errors->first('art_no')); ?></strong>
                </span>
            <?php endif; ?>
            <label for="art_no" class="col-sm-2 control-label">SKU #</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="art_no" name="art_no"
                    value="<?php echo e($product->art_no); ?>" required>
            </div>
        </div>
        <div class="form-group">
            <?php if($errors->has('price')): ?>
                <span class="invalid-feedback" style="" role="alert">
                    <strong style="color: red">* <?php echo e($errors->first('price')); ?></strong>
                </span>
            <?php endif; ?>
            <label for="price" class="col-sm-2 control-label">Unit Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="price" name="price"
                    value="<?php echo e($product->unit_price); ?>" required>
            </div>
        </div>
        <div class="form-group">
            <?php if($errors->has('trading_price')): ?>
                <span class="invalid-feedback" style="" role="alert">
                    <strong style="color: red">* <?php echo e($errors->first('trading_price')); ?></strong>
                </span>
            <?php endif; ?>
            <label for="price" class="col-sm-2 control-label">Trading Price</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="price" name="trading_price"
                    value="<?php echo e($product->trading_price); ?>" required>
            </div>
        </div>
        <div class="form-group">
            <?php if($errors->has('mrp')): ?>
                <span class="invalid-feedback" style="" role="alert">
                    <strong style="color: red">* <?php echo e($errors->first('mrp')); ?></strong>
                </span>
            <?php endif; ?>
            <label for="price" class="col-sm-2 control-label">MRP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="mrp" name="mrp"
                    value="<?php echo e($product->mrp); ?>" required>
            </div>
        </div>
        <div class="form-group">
            <?php if($errors->has('stk')): ?>
                <span class="invalid-feedback" style="" role="alert">
                    <strong style="color: red">*
                        <?php echo e($errors->first('stk')); ?></strong>
                </span>
            <?php endif; ?>
            <label for="stk" class="col-sm-2 control-label">Stock</label>
            <div class="col-sm-10">
                <select class="form-control" id="stk" name="stk">
                    <option value="1" <?php echo e($product->stk == 1 ? 'selected' : ''); ?>>
                        Yes
                    </option>
                    <option value="0" <?php echo e($product->stk == 0 ? 'selected' : ''); ?>>No
                    </option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="custom-file">
                <label class="col-sm-2 control-label custom-file-label" for="customFile">Choose
                    file</label>
                <div class="col-sm-10">
                    <input type="file" class="custom-file-input" id="customFile"
                        name="customFile">
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="custom-file">
                <label class="col-sm-2 control-label custom-file-label"
                    for="customFile">Previous Image</label>
                <div class="col-sm-10">
                    <img src="<?php echo e(asset($product->image_path)); ?>" height="300" width="300">
                </div>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-success pull-right" id="submitId"
            style="padding-left: 40px; padding-right: 40px">Update</button>
    </div>
    <!-- /.box-footer -->
</form>
</div>
</div>
<!-- /.box-body -->
</div>
</div>
</div>

    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dokan\resources\views/product/edit.blade.php ENDPATH**/ ?>