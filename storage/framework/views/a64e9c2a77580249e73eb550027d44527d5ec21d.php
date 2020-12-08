<?php $__env->startSection('title', $slug ); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">
        <p><?php echo e($slug); ?></p>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Desktop/project/resources/views/posts/show.blade.php ENDPATH**/ ?>