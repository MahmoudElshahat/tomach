


<header style="position: fixed;width: 100%; z-index: 1; background-color: white; border-bottom: 1px solid rgba(0, 0, 0, 0.06);">
    <nav class="navbar navbar-expand-lg py-0">

        <div class="container-fluid">

            <div style="width: 35%;"><a class="navbar-brand col-2" href="#"><img style="width: 29%;" src="./public/assets/front/images/logo.gif" alt=""></a>

            </div>




            <div class="collapse navbar-collapse justify-content-end btn-nav-desktop" id="navbarNavDropdown">


                <ul class="navbar-nav">
                

                
                <li class="nav-item">

                 </li>
                 
                 
                 <?php if(session('phone')): ?>

                        <li>
                            <a class="nav-link active text-black" aria-current="page" href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a>
                        </li>
                 <?php endif; ?>
               


                <li class="nav-item">
                    <h6 class="nav-link active text-black"><?php echo e(session('user_name')); ?></h6>
                </li>

                <li>
                    <?php if(session('phone')==Null): ?>
                            <a class="nav-link active text-black" aria-current="page" href="<?php echo e(route('user.login')); ?>">login</a>
                    <?php else: ?>
                        <a class="nav-link active text-black" aria-current="page" href="<?php echo e(route('user.logout')); ?>">Log Out</a>
                    <?php endif; ?>
                </li>

                

              <li class="nav-item">
                <a class="nav-link active text-black" aria-current="page" href="<?php echo e(route('back.home')); ?>">home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active text-black" aria-current="page" href="#">deleivery meny</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-black" aria-current="page" href="#we">about us</a>
              </li>

              
              <li class="nav-item">
                <a class="nav-link active text-black" aria-current="page" href="#">contacts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-black" aria-current="page" href="#">franchise</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-black" aria-current="page" href="#">8 (495) 149-49-88</a>
              </li>
            </ul>
            <div class="d-flex align-item-center justify-content-evenly" style="width:150px">
                <div class="d-flex align-items-center">
                  <a href="<?php echo e(route('show.items.cart')); ?>"><i style="font-size: 20px;" class="fas fa-shopping-basket text-black"></i></a>
                  <p class="mb-0 mx-1"><?php echo e(App\Models\cart::qunt()); ?></p>

                  <li class="nav-item">

                </li>
                </div>

                <div style="font-size: 20px;">
                    <a href=""><i class="fab fa-whatsapp text-black"></i></a>
                    <a href=""><i class="fab fa-instagram  text-black"></i></a>
                </div>
            </div>

          </div>
          <div class="btn-nav-mobile">
            <div class="d-flex align-item-center justify-content-evenly" style="width:150px">
              <div class="d-flex align-items-center">
                <a href="card.html"><i style="font-size: 20px;" class="fas fa-shopping-basket text-black"></i></a>
                <p class="mb-0 mx-1"><?php echo e(App\Models\cart::count()); ?></p>
              </div>
              <div style="font-size: 20px;">
                  <a href=""><i class="fab fa-whatsapp text-black"></i></a>
                  <a href=""><i class="fab fa-instagram  text-black"></i></a>
              </div>
          </div>
          </div>
        </div>
      </nav>
</header>
<?php /**PATH /opt/lampp/htdocs/resturant/resources/views/front/includes/top-header.blade.php ENDPATH**/ ?>