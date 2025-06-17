<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Laravel SIoT</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/css/tabler.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('dist/css/tabler.min.css')); ?>">

    <!-- Styles / Scripts -->
    <?php if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))): ?>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php endif; ?>

    <style>
        main {
            display: flex;
            flex-direction: column;
            min-width: auto;
            min-height: 100vh;
        }
        .btn-custom-yellow {
            color: #A6C210;
            border-color: #A6C210;
        }

        .btn-custom-yellow:hover {
            background-color: #A6C210;
            color: white;
        }
        .card-hover:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .card-hover {
        transition: all 0.3s ease;
        will-change: transform;
    }
    </style>
</head>

<body>
    <div class="app">
        <main>
            <?php echo $__env->make('partials.nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
    <script src="<?php echo e(asset('dist/js/tabler.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/tabler.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Laragon2\laragon\www\UPRAK_SIOT\belajar_laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>