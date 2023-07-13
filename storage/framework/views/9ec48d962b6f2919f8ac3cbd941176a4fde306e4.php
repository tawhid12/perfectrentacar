<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php echo e(asset(config('settings.admin'))); ?>/plugins/images/favicon.png">
    <title><?php echo e($title ?? ''); ?></title>

    <?php echo $lr_header ?? ''; ?>


</head>

<body class="mini-sidebar">
<!-- ===== Main-Wrapper ===== -->
<div id="wrapper">
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <!-- ===== Top-Navigation ===== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">


            <a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)"
               data-toggle="collapse" data-target=".navbar-collapse">
                <i class="fa fa-bars"></i>
            </a>
            <div class="top-left-part" style="height: 60px" >
       
                    
                    <a  style="padding: 15px 10px 10px 30px" class="logo waves-effect " href="<?php echo e(env('APP_URL')); ?>" aria-expanded="false">
                        <span class="hide-menu"><?php echo e(__('admin.Visit Site')); ?></span></a>

            </div>


            <ul class="nav navbar-top-links navbar-left hidden-xs">

                <li>
                    <a href="javascript:void(0)" class="sidebartoggler font-20 waves-effect waves-light"><i
                                class="icon-arrow-left-circle"></i></a>
                </li>
                
                    
                        
                        
                    
                

            </ul>
            <ul class="nav navbar-top-links navbar-right pull-right">

                <li class="dropdown">
                    <a class="dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown" href="javascript:void(0);">
                        <i class="icon-speech"></i>
                        <span class="badge badge-xs badge-danger admin-notices-bagde"></span>
                    </a>
                    <ul class="admin-notices dropdown-menu mailbox animated bounceInDown">
                        <?php Eventy::action('dashboard.icon-header'); ?>
                    </ul>
                </li>
                <li>
                    <div class="pull-right">
                        <div class="language-switcher">
                            <button type="button"
                                    class="btn waves-effect waves-light btn-info dropdown-toggle"
                                    data-toggle="dropdown"><?php echo e(__('admin.Language')); ?> <?php echo e(App::getLocale()); ?> <span class="caret"></span>
                            </button>

                            <ul class="dropdown-menu">


                                <?php $__currentLoopData = config('translatable.locales'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li <?php if(App::getLocale() == $v): ?> class="active" <?php endif; ?>>
                                        <a href="<?php echo e(route( 'setlocale', [ 'lang' => $v] )); ?>"><span
                                                    class="flag-icon flag-icon-ru"></span> <?php echo e($v); ?> </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>

                        </div>

                    </div>
                </li>
                
                    
                       
                        
                        
                    
                    
                        
                            
                        
                        
                            
                                
                                    
                                        
                                             
                                        
                                    
                                    
                                        
                                        
                                        
                                    
                                
                                
                                    
                                        
                                             
                                        
                                    
                                    
                                        
                                        
                                        
                                    
                                
                                
                                    
                                        
                                             
                                                
                                    
                                    
                                        
                                        
                                        
                                    
                                
                                
                                    
                                        
                                             
                                        
                                    
                                    
                                        
                                        
                                        
                                    
                                
                            
                        
                        
                            
                                
                                
                            
                        
                    
                
                
                    
                       
                        
                        
                    
                    
                        
                            
                                
                                    
                                        
                                        
                                    
                                    
                                        
                                             
                                             
                                            
                                        
                                    
                                
                            
                        
                        
                        
                            
                                
                                    
                                        
                                        
                                    
                                    
                                        
                                             
                                             
                                            
                                        
                                    
                                
                            
                        
                        
                        
                            
                                
                                    
                                        
                                        
                                    
                                    
                                        
                                             
                                             
                                            
                                        
                                    
                                
                            
                        
                        
                        
                            
                                
                                    
                                        
                                        
                                    
                                    
                                        
                                             
                                             
                                            
                                        
                                    
                                
                            
                        
                        
                        
                            
                                
                                
                            
                        
                    
                
                
                    
                        
                    
                
            </ul>
        </div>
    </nav>
    <!-- ===== Top-Navigation-End ===== -->
    <!-- ===== Left-Sidebar ===== -->

<?php echo $__env->yieldContent('sidebar-left'); ?>

<!-- ===== Left-Sidebar-End ===== -->
    <!-- ===== Page-Content ===== -->

    <div class="page-wrapper">
        

        
        
        




        

        
        
        


        



        
        


        
        <?php echo $__env->yieldContent('content'); ?>

        <footer class="footer t-a-c">
            © 2017-<?php echo e(date('Y')); ?> Lararent Admin
        </footer>
    </div>
    <!-- ===== Page-Content-End ===== -->
</div>
<!-- ===== Main-Wrapper-End ===== -->
<!-- ==============================
    Required JS Files
=============================== -->

<?php echo $lr_footer ?? ''; ?>

<script>

    if (typeof Dropzone !== "undefined") {
        Dropzone.autoDiscover = false;
    }

</script>












<!-- ===== Style Switcher JS ===== -->





<script>
    jQuery(document).ready(function ($) {
        //  $('#myTable').DataTable();

        /* var table = $('#example').DataTable({
             "columnDefs": [{
                 "visible": false,
                 "targets": 2
             }],
             "order": [
                 [2, 'asc']
             ],
             "displayLength": 2,
             "drawCallback": function(settings) {
                 var api = this.api();
                 var rows = api.rows({
                     page: 'current'
                 }).nodes();
                 var last = null;
                 api.column(2, {
                     page: 'current'
                 }).data().each(function(group, i) {
                     if (last !== group) {
                         $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                         last = group;
                     }
                 });
             }
         });
         // Order by the grouping
         $('#example tbody').on('click', 'tr.group', function() {
             var currentOrder = table.order()[0];
             if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                 table.order([2, 'desc']).draw();
             } else {
                 table.order([2, 'asc']).draw();
             }
         });*/
    });
    /* $('#example23').DataTable({
         dom: 'Bfrtip',
         buttons: [
             'copy', 'csv', 'excel', 'pdf', 'print'
         ]
     });*/
</script>
</body>

</html>
