<!DOCTYPE html>
<html dir="rtl" class="loading" lang="en"  >
    <meta charset="utf-8">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
          content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="apple-touch-icon" href="<?php echo e(asset('public/assets/admin/images/ico/apple-icon-120.png')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('public/assets/admin/images/ico/favicon.ico')); ?>">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/css-rtl/plugins/animate/animate.css')); ?>">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/css-rtl/vendors.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/vendors/css/weather-icons/climacons.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/fonts/meteocons/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/vendors/css/charts/morris.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/vendors/css/charts/chartist.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/vendors/css/forms/selects/select2.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/vendors/css/charts/chartist-plugin-tooltip.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/vendors/css/forms/toggle/bootstrap-switch.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/vendors/css/forms/toggle/switchery.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/css-rtl/core/menu/menu-types/vertical-menu.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/css-rtl/pages/chat-application.css')); ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('public/assets/front/css/font-awesome.min.css')); ?>">

    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/css-rtl/app.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/css-rtl/custom-rtl.css')); ?>">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('public/assets/admin/css-rtl/core/menu/menu-types/vertical-menu.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/css-rtl/core/colors/palette-gradient.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/fonts/simple-line-icons/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/css-rtl/core/colors/palette-gradient.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/css-rtl/pages/timeline.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/vendors/css/cryptocoins/cryptocoins.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/vendors/css/extensions/datedropper.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/vendors/css/extensions/timedropper.min.css')); ?>">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/admin/css-rtl/style-rtl.css')); ?>">
    <!-- END Custom CSS-->
    @notify_css
    <?php echo $__env->yieldContent('style'); ?>
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>
<body class="vertical-layout vertical-menu 2-columns  <?php if(Request::is('admin/users/tickets/reply*')): ?> chat-application <?php endif; ?> menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">



<?php echo $__env->make('admin.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php echo $__env->make('admin.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php echo $__env->make('admin.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


@notify_js
@notify_render
<script src="<?php echo e(asset('public/assets/admin/vendors/js/vendors.min.js')); ?>" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<script src="<?php echo e(asset('public/assets/admin/vendors/js/tables/datatable/datatables.min.js')); ?>"
        type="text/javascript"></script>
<script src="<?php echo e(asset('public/assets/admin/vendors/js/tables/datatable/dataTables.buttons.min.js')); ?>"
        type="text/javascript"></script>

<script src="<?php echo e(asset('public/assets/admin/vendors/js/forms/toggle/bootstrap-switch.min.js')); ?>"
        type="text/javascript"></script>
<script src="<?php echo e(asset('public/assets/admin/vendors/js/forms/toggle/bootstrap-checkbox.min.js')); ?>"
        type="text/javascript"></script>
<script src="<?php echo e(asset('public/assets/admin/vendors/js/forms/toggle/switchery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('public/assets/admin/js/scripts/forms/switch.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('public/assets/admin/vendors/js/forms/select/select2.full.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('public/assets/admin/js/scripts/forms/select/form-select2.js')); ?>" type="text/javascript"></script>

<!-- BEGIN PAGE VENDOR JS-->
<script src="<?php echo e(asset('public/assets/admin/vendors/js/charts/chart.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('public/assets/admin/vendors/js/charts/echarts/echarts.js')); ?>" type="text/javascript"></script>

<script src="<?php echo e(asset('public/assets/admin/vendors/js/extensions/datedropper.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('public/assets/admin/vendors/js/extensions/timedropper.min.js')); ?>" type="text/javascript"></script>

<script src="<?php echo e(asset('public/assets/admin/vendors/js/forms/icheck/icheck.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('public/assets/admin/js/scripts/pages/chat-application.js')); ?>" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="<?php echo e(asset('public/assets/admin/js/core/app-menu.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('public/assets/admin/js/core/app.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('public/assets/admin/js/scripts/customizer.js')); ?>" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="<?php echo e(asset('public/assets/admin/js/scripts/pages/dashboard-crypto.js')); ?>" type="text/javascript"></script>


<script src="<?php echo e(asset('public/assets/admin/js/scripts/tables/datatables/datatable-basic.js')); ?>"
        type="text/javascript"></script>
<script src="<?php echo e(asset('public/assets/admin/js/scripts/extensions/date-time-dropper.js')); ?>" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script src="<?php echo e(asset('public/assets/admin/js/scripts/forms/checkbox-radio.js')); ?>" type="text/javascript"></script>

<script src="<?php echo e(asset('public/assets/admin/js/scripts/modal/components-modal.js')); ?>" type="text/javascript"></script>


     <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>





    // ==============================
<script>

    $('#meridians1').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians2').timeDropper({
        meridians: true,setCurrentTime: false

    });
    $('#meridians3').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians4').timeDropper({
        meridians: true,
        setCurrentTime: false
    });
    $('#meridians5').timeDropper({
        meridians: true,setCurrentTime: false

    });
    $('#meridians6').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians7').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians8').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians9').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians10').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians11').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians12').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians13').timeDropper({
        meridians: true,setCurrentTime: false
    });
    $('#meridians14').timeDropper({
        meridians: true,setCurrentTime: false
    });
 </script>





<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<?php echo $__env->make('ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH /opt/lampp/htdocs/resturant/resources/views/layouts/admin.blade.php ENDPATH**/ ?>