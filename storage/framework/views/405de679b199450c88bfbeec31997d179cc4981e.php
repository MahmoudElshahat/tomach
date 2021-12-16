<?php $__env->startSection('content'); ?>

    <div class="row">
      <div class="col bg">
          <div style="width: 100%; height: 100%; background: rgba(40, 40, 40, 0.59);">
            <h1 style="
          color: white;
          height: 100%;
          display: flex;
          justify-content: center;
          align-items: center;
          ">
          Корзина</h1>
          </div>
        </div>
    </div> -->
    <div class="row d-flex justify-content-center my-5">
            <div class="col-11">
                <div class="d-flex align-items-center justify-content-between px-3  " style="padding: 22px 45px 20px 20px; background: rgba(254, 93, 93, 0.15);">
                    <p class="m-0">Минимальная сумма заказа составляет 1499. Пожалуйста, закажите что-нибудь ещё.</p>
                    <a href=""><i class="fas fa-times"></i></a>
                </div>
            </div>
    </div>
    <div class="row ">

        <?php $__currentLoopData = $cart_data['items']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


      <div class="col d-flex flex-column text-center">
        <i style="font-size: 200px;"></i>
        <img src="">
         <h3><?php echo e($item-> name); ?></h3>
        <p><?php echo e($item-> description); ?></p>




        <h4>$ <?php echo e($item-> price); ?></h4>

        <form action="<?php echo e(route('update.cart',$item-> id)); ?>" Method="POST" id="cart_quntity">
            <?php echo csrf_field(); ?>

           <h6>

            <input type="number" name="quntity" placeholder="cahnge Quntity"  style="width:15em;margin:auto;color:blue" size="4" min="1" class="input-text qty text" title="Qty" value=""  step="1">

            <span><?php echo e(App\Models\cart::quntity($item-> id)); ?></span>

          </h6>
           
            <input type="submit" value="update Cart">
        </form>

      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
   <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/resturant/resources/views/front/card.blade.php ENDPATH**/ ?>