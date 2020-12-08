<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('style'); ?>
    <style>
        body{
            background: orange
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <div class="container">
       My Name is <?php echo $name; ?>

   </div>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbook/Desktop/project/resources/views/home.blade.php ENDPATH**/ ?>