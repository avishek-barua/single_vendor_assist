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
        <?php if(Session::has('supplier_add_message')): ?>
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
                        <h3 class="box-title">Add New Supplier</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="col-md-8">
                            <form class="form-horizontal" id="formId" action="<?php echo e(route('suppliers.store')); ?>"
                                method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id">
                                <div class="box-body">
                                    <div class="form-group">
                                        <?php if($errors->has('name')): ?>
                                            <span class="invalid-feedback" style="" role="alert">
                                                <strong style="color: red">* <?php echo e($errors->first('name')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                        <label for="name" class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <?php if($errors->has('mobile')): ?>
                                            <span class="invalid-feedback" style="" role="alert">
                                                <strong style="color: red">* <?php echo e($errors->first('phone')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                        <label for="mobile" class="col-sm-2 control-label">Mobile</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="phone" name="phone">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <?php if($errors->has('address')): ?>
                                            <span class="invalid-feedback" style="" role="alert">
                                                <strong style="color: red">* <?php echo e($errors->first('organization_name')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                        <label for="address" class="col-sm-2 control-label">Company Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="organization_name" name="organization_name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <?php if($errors->has('address')): ?>
                                            <span class="invalid-feedback" style="" role="alert">
                                                <strong style="color: red">* <?php echo e($errors->first('organization_address')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                        <label for="address" class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="organization_address" name="organization_address">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <?php if($errors->has('nid')): ?>
                                            <span class="invalid-feedback" style="" role="alert">
                                                <strong style="color: red">* <?php echo e($errors->first('trade_license')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                        <label for="nid" class="col-sm-2 control-label">Trade License</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="trade_license" name="trade_license">
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-success pull-right" id="submitId"
                                        style="padding-left: 40px; padding-right: 40px">Save</button>
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

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dokan\resources\views/supplier/create.blade.php ENDPATH**/ ?>