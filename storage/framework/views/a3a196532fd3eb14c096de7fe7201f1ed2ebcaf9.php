<?php $__env->startSection('content'); ?>
    <div>
        <video autoplay>
            <source src="Try.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <?php echo e($post->title); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\laravelProject\resources\views/posts.blade.php ENDPATH**/ ?>