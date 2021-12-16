<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
       <div class="main-menu-content">
           <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

               <li class="nav-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="la la-mouse-pointer"></i><span
                           class="menu-title" data-i18n="nav.add_on_drag_drop.main">Main </span></a>
               </li>
    
               <li class="nav-item  open ">
                <a href=""><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">Members </span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2"><?php echo e(App\Models\User::count()); ?></span>
                </a>
                



               <li class="nav-item"><a href=""><i class="la la-group"></i>
                       <span class="menu-title" data-i18n="nav.dash.main">Products  </span>
                       <span
                           class="badge badge badge-danger badge-pill float-right mr-2"><?php echo e(App\Models\item::count()); ?></span>
                   </a>
                   <ul class="menu-content">
                       <li class="active"><a class="menu-item" href="<?php echo e(route('all.items')); ?>"
                                             data-i18n="nav.dash.ecommerce">Show All</a>
                       </li>
                       <li><a class="menu-item" href="<?php echo e(route('create.item')); ?>" data-i18n="nav.dash.crypto">Add Product
                            </a>
                       </li>
                   </ul>
               </li>

       </div>
   </div>
<?php /**PATH /opt/lampp/htdocs/resturant/resources/views/admin/includes/sidebar.blade.php ENDPATH**/ ?>