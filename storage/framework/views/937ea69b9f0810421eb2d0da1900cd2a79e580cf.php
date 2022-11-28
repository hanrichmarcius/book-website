<?php $__env->startSection('title','publisher'); ?>

<?php $__env->startSection('content'); ?>

<?php $__currentLoopData = $publisher; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publishers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="containerBook">
    <div class="PublisherList">
        <img style="width: 500px"src="<?php echo e($publishers->image); ?>" alt="">
    </div>

    <div class="text-center" style="margin-top: 1rem; background-color:rgba(0, 0, 0, 0.1)">
        <div style="color: black; padding: 1rem">
            <h5><?php echo e($publishers->name); ?></h5>
            <p> Address - <?php echo e($publishers->address); ?></p>
            <p> Phone - <?php echo e($publishers->phone); ?></p>
            <p> Email - <?php echo e($publishers->email); ?></p>
        </div>
    </div>


    <div class="HomePageBookList">

        <?php $__currentLoopData = $publishers->book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booklist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="width: 13rem;">
            <img src="<?php echo e($booklist->image); ?>" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><?php echo e($booklist->title); ?></h5>
            <p class="card-text"><p>by</p><?php echo e($booklist->author); ?></p>
            <a href="/detail<?php echo e($booklist->id); ?>" class="btn btn-primary">Detail</a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WEB\uts_webprogramming\resources\views/publisher.blade.php ENDPATH**/ ?>