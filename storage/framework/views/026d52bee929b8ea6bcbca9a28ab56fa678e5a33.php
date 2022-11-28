<?php $__env->startSection('title', 'Detail'); ?>

<?php $__env->startSection('content'); ?>

  <div class="container-fluid hero-header bg-light py-5 mb-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
        <div class="col-lg-6">
            <h1 style="font-size: 2.5rem;" class="display-4 mb-3 animated slideInDown"><?php echo e($details->title); ?></h1>
                <h5> by <?php echo e($details->author); ?></h5>
                <p> Published by : <?php echo e($details->publishers->name); ?> <br> Year : <?php echo e($details->year); ?> <br> Sysnopis : <?php echo e($details->synopsis); ?></p>
            </div>
            <div class="col-lg-6 animated fadeIn detail">
                <img class="img-fluid animated pulse infinite" style="animation-duration: 3s; width:350px; margin-left: 125px" src="<?php echo e($details->image); ?>"alt="">
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\uts_webprogramming\resources\views/detail.blade.php ENDPATH**/ ?>