<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Produtos</title>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <style>
        body{
            padding: 20px;
        }

        .navbar{
            margin-bottom: 20px;
        }
    </style>

    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <div class="container">
        <?php $__env->startComponent('component'); ?>
            
        <?php echo $__env->renderComponent(); ?>
        <main role="main">
            <?php if (! empty(trim($__env->yieldContent('body')))): ?>
                <?php echo $__env->yieldContent('body'); ?>
            <?php endif; ?>
        </main>
    </div>

    <script src="<?php echo e(asset('js/app.js')); ?>" type="text/javascript"></script>
</body>
</html><?php /**PATH /home/gabriel/code/projetoCadastro/resources/views/layout/app.blade.php ENDPATH**/ ?>