<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TODO list</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-light p-4">

    <div class="container">
        <h1 class="mb-4 text-center">TODO list</h1>


        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo e(route('notes.store')); ?>" method="post" class="d-flex gap-2">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('post'); ?>
                    <div class="flex-fill">
                        <label for="body" class="form-label">Напишите заметку</label>
                        <input type="text" class="form-control" name="body" id="body" placeholder="Заметки" />
                        <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <button type="submit" class="btn btn-primary align-self-end">Создать</button>
                </form>
            </div>
        </div>
        <div class="mb-3">
            <a href="<?php echo e(route('notes.index')); ?>" class="btn btn-primary">Мои заметки</a>
        </div>

        <?php echo $__env->yieldContent('content'); ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html><?php /**PATH /var/www/resources/views/welcome.blade.php ENDPATH**/ ?>