<?php $__env->startSection('title', 'Detail'); ?>

<?php $__env->startSection('content'); ?>

<div class="card mb-3" style="max-width: 100%">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="<?php echo e($details->image); ?>" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?php echo e($details->title); ?></h5>
          <p class="card-text"><?php echo e($details->author); ?></p>
          <p class="card-text"><?php echo e($details->publishers->name); ?></p>
          <p class="card-text"><?php echo e($details->year); ?></p>
          <p class="card-text"><?php echo e($details->synopsis); ?></p>
        </div>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WEB\uts_webprogramming\resources\views/detail.blade.php ENDPATH**/ ?>