<?php $__env->startSection('title', 'Category'); ?>

<?php $__env->startSection('content'); ?>

<div class="containerCategories">

    

    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="col-lg-6 categorytitle">
                <h1 style="font-size: 2.5rem;" class="display-4 mb-3 animated slideInDown"><?php echo e($categorysearch->name); ?></h1>
            </div>
            
        </div>
    </div>

    <div class="CategoriesBookList">

        <?php $__currentLoopData = $categorysearch->book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booklist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\uts_webprogramming\resources\views/categories.blade.php ENDPATH**/ ?>