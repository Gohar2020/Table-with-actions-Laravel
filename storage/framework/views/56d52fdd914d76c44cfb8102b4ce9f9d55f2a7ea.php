<?php $__env->startSection('content'); ?>
    <div>
        <div>
            <?php echo e($post->title); ?>

        </div>
        <div>
            <?php echo e($post->post_content); ?>

        </div>
        <div>
            <a href="<?php echo e(route('post.index')); ?>">Back</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\laravelProject\resources\views/post/show.blade.php ENDPATH**/ ?>