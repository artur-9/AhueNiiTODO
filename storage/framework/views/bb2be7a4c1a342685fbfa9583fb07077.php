<?php $__env->startSection('content'); ?>

<div class="container my-4">

    <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card mb-3">
        <div class="card-body d-flex flex-column gap-2">


            <a href="<?php echo e(route('notes.show', $item->id)); ?>" class="text-decoration-none text-dark">
                <h5 class="card-title"><?php echo e($item->body); ?></h5>
            </a>


            <div class="d-flex gap-2">
                <a href="<?php echo e(route('notes.edit', $item->id)); ?>" class="btn btn-warning btn-sm">Изменить</a>

                <form action="<?php echo e(route('notes.delete', $item->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                </form>
            </div>


            <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($item->status_id == $elem->id): ?>
            <p class="mt-2 mb-0"><strong>Статус:</strong> <?php echo e($elem->status); ?></p>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div>
<?php echo e($notes->links()); ?>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/resources/views/notes/index.blade.php ENDPATH**/ ?>