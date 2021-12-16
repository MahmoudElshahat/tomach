<?php $__env->startSection('content'); ?>

    <!-- <ul>
      <li><a href="home page.html">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">services</a></li>
      <li><a href="#">pictures</a></li>
      <li><a href="#">Videos</a></li>
      <li><a href="#">music</a></li>
      <li><a href="#">Contact us</a></li>
    </ul> -->
    <div class="box">
      <h2>LOGIN</h2>
      <form action="<?php echo e(route('user_get_login')); ?>" Method="post">
        <?php echo csrf_field(); ?>
        <div class="inputBox">
          <input type="text" name="phone" value='+' required=""/>
          <label>phone</label>

          <?php if($errors->has('phone')): ?>
                  <div class="error alert-danger"><?php echo e($errors->first('phone')); ?></div>
            <?php endif; ?>

        </div>
        <div class="inputBox">
          <input type="password" name="password" required=""/>
          <label>Password</label>

          <?php if($errors->has('password')): ?>
                  <div class="error alert-danger"><?php echo e($errors->first('password')); ?></div>
            <?php endif; ?>

        </div>



        <input type="submit" name="" value="Submit">

      </form>
            <h2>OR</h2>
      <div id="signup" class="inputBox">
        <h4><a style="color:aliceblue" href="<?php echo e(route('user.signup')); ?>">Create NEw Acount</a></h4>
      </div>
   </div>



    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.userlogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/resturant/resources/views/front/signin/login.blade.php ENDPATH**/ ?>