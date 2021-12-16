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
      <h2>Sign UP</h2>

    <div class="alert alert-danger" id="error" style="display: none;"></div>
      <div class="alert alert-success" id="successAuth" style="display: none;"></div>

      <form action="<?php echo e(route('insert.user')); ?>" Method="post">
      

        <?php echo csrf_field(); ?>

        <input type="numder" name='active' value=0 hidden />

        <div class="inputBox">
          <input type="text" name="name" required=""/>
          <label>Name</label>

          <?php if($errors->has('name')): ?>
            <div class="error alert-danger"><?php echo e($errors->first('name')); ?></div>
         <?php endif; ?>


        </div>

        <div class="inputBox">  
            <input type="text" id="number" value='+' name="phone" required/>
            <label>Mobile</label>

            <?php if($errors->has('phone')): ?>
                  <div class="error alert-danger"><?php echo e($errors->first('phone')); ?></div>
            <?php endif; ?>
        </div>

        <div class="inputBox">
            <input type="password" name="password" required/>
            <label>Password</label>

            <?php if($errors->has('password')): ?>
            <div class="error alert-danger"><?php echo e($errors->first('password')); ?></div>
         <?php endif; ?>

          </div>

        <div class="inputBox">
            <input type="text" name="adress" required/>
            <label>Adress</label>

            <?php if($errors->has('adress')): ?>
                  <div class="error alert-danger"><?php echo e($errors->first('adress')); ?></div>
            <?php endif; ?>

                <input id="submit" style="margin:auto;" type="submit" name="Verify code" value="Submit">
                


        </div>




        

      </form>
   </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.userlogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/resturant/resources/views/front/signin/signup.blade.php ENDPATH**/ ?>