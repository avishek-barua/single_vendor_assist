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
        <?php if(Session::has('settings_update_message')): ?>
            <div class="row">
                <div class="col-md-6">
                    <p class="alert <?php echo e(Session::get('alert-class', 'alert-success')); ?>">
                        <?php echo e(Session::get('settings_update_message')); ?></p>
                    <?php echo e(Session::forget('settings_update_message')); ?>

                </div>
            </div>
        <?php endif; ?>
        <?php if(Session::has('user_add_message')): ?>
            <div class="row">
                <div class="col-md-6">
                    <p class="alert <?php echo e(Session::get('alert-class', 'alert-success')); ?>">
                        <?php echo e(Session::get('user_add_message')); ?></p>
                    <?php echo e(Session::forget('user_add_message')); ?>

                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">

                            <a href="<?php echo e(route('manage.alluser')); ?>" class="btn btn-primary" >
                                Manage User
                            </a>
                        </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="col-md-12">
                            <form class="form-horizontal" id="formId" action="<?php echo e(route('user.store')); ?>"
                                method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="company_name" class="col-sm-2 control-label">User Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="name"
                                            required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name" class="col-sm-2 control-label">User Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email" name="email"
                                            required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="company_name" class="col-sm-2 control-label">User Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="password" name="password"
                                            required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="col-sm-2 control-label">Select User Role</label>
                                        <div class="col-sm-10">
                                            <select name="is_admin" id="is_admin" class="form-control">
                                                <option value="">Choose One</option>
                                                <option value="0">Seller</option>
                                                <option value="2">Purchaser</option>
                                            </select>
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
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dokan\resources\views/settings/manage_user.blade.php ENDPATH**/ ?>