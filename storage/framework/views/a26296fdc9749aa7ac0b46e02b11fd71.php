<?php $__env->startSection('content'); ?>

<div>
    <?php echo e($notes->id); ?>  <?php echo e('   '); ?>  <?php echo e($notes->body); ?>

</div>
     
<a href="<?php echo e(route('notes.edit', $notes->id)); ?>">Изменить</a>
 <form action="<?php echo e(route('notes.delete', $notes->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('delete'); ?>
    <button type="submit">Удалить</button>
 </form> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/resources/views/notes/show.blade.php ENDPATH**/ ?>