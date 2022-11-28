<?php $__env->startSection('title', 'detailnew'); ?>

<?php $__env->startSection('content'); ?>
<div class="card mb-3" style="max-width: 100%">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="<?php echo e($detailnew->image); ?>" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?php echo e($detailnew->title); ?></h5>
          <p class="card-text"><?php echo e($detailnew->author); ?></p>
          <p class="card-text"><?php echo e($detailnew->publishers->name); ?></p>
          <p class="card-text"><?php echo e($detailnew->year); ?></p>
          <p class="card-text"><?php echo e($detailnew->synopsis); ?></p>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WEB\uts_webprogramming\resources\views/detailnew.blade.php ENDPATH**/ ?>