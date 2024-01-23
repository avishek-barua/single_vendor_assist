<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/font-awesome/css/font-awesome.min.css')); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/Ionicons/css/ionicons.min.css')); ?>">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="<?php echo e(asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/AdminLTE.min.css')); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo e(asset('dist/css/skins/_all-skins.min.css')); ?>">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/morris.js/morris.css')); ?>">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/jvectormap/jquery-jvectormap.css')); ?>">
    <!-- Date Picker -->
    <link rel="stylesheet"
        href="<?php echo e(asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet"
        href="<?php echo e(asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')); ?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('bower_components/select2/dist/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/extra.css')); ?>">

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<style>
    body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
</style>

    </head>

<body class="hold-transition skin-blue sidebar-mini <?php echo e(Request::is('pos*') ? 'sidebar-collapse ' : ''); ?>">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="<?php echo e(route('dashboard')); ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>D</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b>Dashboard</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo e(asset('images/avatar5.png')); ?>" class="user-image"
                                    alt="User Image">
                                <span class="hidden-xs">
                                    <?php echo e(Auth::user()->name); ?>

                                    <span>(
                                        <?php if((Auth::user()->is_admin) == 1): ?>
                                        Admin
                                        <?php elseif((Auth::user()->is_admin) == 0): ?>
                                            Seller
                                        <?php elseif((Auth::user()->is_admin) == 5): ?>
                                            Customer
                                        <?php endif; ?> )
                                    </p>

                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo e(asset('images/avatar5.png')); ?>" class="img-circle"
                                        alt="User Image">
                                    <p>
                                        <?php echo e(Auth::user()->name); ?>

                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="<?php echo e(route('my.logout')); ?>" class="btn btn-default btn-flat">Sign
                                            out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>


            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="<?php echo e(Request::is('/') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('dashboard')); ?>">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <?php if((Auth::user()->is_admin) == 1 || (Auth::user()->is_admin) == 2 ): ?>
                    <li class="treeview <?php echo e(Request::is('customers*') ? 'active' : ''); ?>">
                        <a href="#">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>Supplier</span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php echo e(Request::is('suppliers*') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('suppliers.index')); ?>"><i class="fa fa-circle-o"></i> All
                                    Supplier
                                </a></li>
                            <li class="<?php echo e(Request::is('suppliers/create*') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('suppliers.create')); ?>"><i class="fa fa-circle-o"></i> Add New
                                    Supplier </a></li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <?php if((Auth::user()->is_admin) == 1 || (Auth::user()->is_admin) == 0 ): ?>
                    <li class="treeview <?php echo e(Request::is('customers*') ? 'active' : ''); ?>">
                        <a href="#">
                            <i class="fa fa-users"></i>
                            <span>Customer</span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php echo e(Request::is('customers*') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('customers.index')); ?>"><i class="fa fa-circle-o"></i> All
                                    Customers
                                </a></li>
                            <li class="<?php echo e(Request::is('customers/create*') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('customers.create')); ?>"><i class="fa fa-circle-o"></i> Add New
                                    Customer </a></li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <?php if((Auth::user()->is_admin) == 1 || (Auth::user()->is_admin) == 2 ): ?>
                    <li class="treeview <?php echo e(Request::is('products*') ? 'active' : ''); ?>">
                        <a href="#">
                            <i class="fa fa-camera"></i>
                            <span>Product</span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php echo e(Request::is('products*') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('products.index')); ?>"><i class="fa fa-circle-o"></i> All Products
                                </a></li>
                            <li class="<?php echo e(Request::is('products/create*') ? 'active' : ''); ?>"><a
                                href="<?php echo e(route('products.create')); ?>"><i class="fa fa-circle-o"></i> Add New
                            Product</a></li>

                            <li class="<?php echo e(Request::is('products/create*') ? 'active' : ''); ?>"><a
                                href="<?php echo e(route('products.category')); ?>"><i class="fa fa-circle-o"></i> Add New
                            Category</a></li>
                        </ul>
                    </li>

                    <li class="treeview <?php echo e(Request::is('bundles*') ? 'active' : ''); ?>">
                        <a href="#">
                            <i class="fa fa-object-group" aria-hidden="true"></i>
                            <span>Bundle</span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php echo e(Request::is('bundles*') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('bundles.index')); ?>"><i class="fa fa-circle-o"></i> All Bundles
                                </a></li>
                            <li class="<?php echo e(Request::is('bundles/create*') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('bundles.create')); ?>"><i class="fa fa-circle-o"></i> Add New
                                    Bundle</a></li>
                        </ul>
                    </li>
                    <?php endif; ?>


                    <?php if((Auth::user()->is_admin) == 1 || (Auth::user()->is_admin) == 0|| (Auth::user()->is_admin) == 5 ): ?>
                    <li class="<?php echo e(Request::is('pos*') ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('pos.index')); ?>">
                            <i class="fa fa-line-chart"></i> <span>
                                <?php if(Auth::user()->is_admin == 5): ?>
                                    Place Order
                                <?php else: ?>
                                    Point Of Sale
                                <?php endif; ?>
                            </span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if((Auth::user()->is_admin) == 1 || (Auth::user()->is_admin) == 2 ): ?>
                        <li class="<?php echo e(Request::is('accounts*') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('stock.product')); ?>">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i><span>Stock</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    
                    <?php if((Auth::user()->is_admin) == 1 || (Auth::user()->is_admin) == 0 ): ?>
                    <li class="treeview <?php echo e(Request::is('customers*') ? 'active' : ''); ?>">
                        <a href="#">
                            <i class="fa fa-file-text" aria-hidden="true"></i>
                            <span>Report</span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php echo e(Request::is('accounts*') ? 'active' : ''); ?>">
                                <a href="<?php echo e(route('accounts.index')); ?>">
                                    <i class="fa fa-dollar"></i> <span>Transaction Report</span>
                                </a>
                            </li>
                            <li class="<?php echo e(Request::is('customers/create*') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('product.damage')); ?>"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Damage's </a></li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <?php if((Auth::user()->is_admin) == 1 || (Auth::user()->is_admin) == 0 ): ?>
                    <li class="treeview <?php echo e(Request::is('orders*') ? 'active' : ''); ?>">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Order</span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="<?php echo e(Request::is('orders*') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('orders.index')); ?>"><i class="fa fa-circle-o"></i> New Orders </a>
                            </li>
                            <li class="<?php echo e(Request::is('orders*') ? 'active' : ''); ?>"><a
                                    href="<?php echo e(route('orders.accept.payment')); ?>"><i class="fa fa-circle-o"></i> Accept Payments </a>
                            </li>

                            <li class="<?php echo e(Request::is('orders*') ? 'active' : ''); ?>"><a
                                href="<?php echo e(route('all.process.delivery')); ?>"><i class="fa fa-circle-o"></i> Process Delivery </a>
                            </li>
                            <li class="<?php echo e(Request::is('orders*') ? 'active' : ''); ?>"><a
                                href="<?php echo e(route('all.delivery')); ?>"><i class="fa fa-circle-o"></i> Delivery Success</a>
                            </li>
                            <li class="<?php echo e(Request::is('orders*') ? 'active' : ''); ?>"><a
                                href="<?php echo e(route('orders.all_cancel_orders')); ?>"><i class="fa fa-circle-o"></i> Cancel Orders </a>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>

                    

                    <?php if(Auth::user()->is_admin == 1): ?>
                        <li class="<?php echo e(Request::is('settings') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('settings.edit')); ?>">
                                <i class="fa fa-cogs"></i> <span>Settings</span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(Auth::user()->is_admin == 1): ?>
                        <li class="<?php echo e(Request::is('settings') ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('settings.user')); ?>">
                                <i class="fa fa-user"></i> <span>Manage User</span>
                            </a>
                        </li>
                    <?php endif; ?>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php echo $__env->yieldContent('content'); ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0
            </div>
        </footer>

    </div>

    <!-- jQuery 3 -->
    <script src="<?php echo e(asset('bower_components/jquery/dist/jquery.min.js')); ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo e(asset('bower_components/jquery-ui/jquery-ui.min.js')); ?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);

    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo e(asset('bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    <!-- Select2 -->
    <script src="<?php echo e(asset('bower_components/select2/dist/js/select2.full.min.js')); ?>"></script>
    <!-- DataTables -->
    <script src="<?php echo e(asset('bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo e(asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')); ?>"></script>
    <!-- jvectormap -->
    <script src="<?php echo e(asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo e(asset('bower_components/jquery-knob/dist/jquery.knob.min.js')); ?>"></script>
    <!-- daterangepicker -->
    <script src="<?php echo e(asset('bower_components/moment/min/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
    <!-- datepicker -->
    <script src="<?php echo e(asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')); ?>">
    </script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo e(asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')); ?>"></script>
    <!-- Slimscroll -->
    <script src="<?php echo e(asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo e(asset('bower_components/fastclick/lib/fastclick.js')); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('dist/js/adminlte.min.js')); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo e(asset('dist/js/demo.js')); ?>"></script>
    <!-- page script -->

    <?php echo $__env->yieldPushContent('js'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
  <?php if(Session::has('message')): ?>
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("<?php echo e(session('message')); ?>");
  <?php endif; ?>

  <?php if(Session::has('error')): ?>
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("<?php echo e(session('error')); ?>");
  <?php endif; ?>

  <?php if(Session::has('info')): ?>
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("<?php echo e(session('info')); ?>");
  <?php endif; ?>

  <?php if(Session::has('warning')): ?>
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("<?php echo e(session('warning')); ?>");
  <?php endif; ?>
</script>
</body>

</html>
<?php /**PATH G:\All_works\online class\final project\project\laravel\Shop_management\resources\views/layouts/app2.blade.php ENDPATH**/ ?>