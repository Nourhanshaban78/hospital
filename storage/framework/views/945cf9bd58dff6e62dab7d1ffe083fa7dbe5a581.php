<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>


      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="doctorimage/<?php echo e($data->image); ?>" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0"><?php echo e($data->name); ?></p>
              <span class="text-sm text-grey"><?php echo e($data->speciality); ?></span>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        
      </div>
    </div>
  </div><?php /**PATH E:\totorial\hospital\resources\views/user/doctor.blade.php ENDPATH**/ ?>