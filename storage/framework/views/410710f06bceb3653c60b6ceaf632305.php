<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management & Ticketing</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #050515;
            color: white;
        }

        .nav-link {
            font-weight: 500;
            margin-left: 20px;
        }

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background-position: center;
            background-size: cover;
            padding-top: 80px;
        }

        .img-grid img {
            height: 180px;
            object-fit: cover;
        }

        .play-btn {
            background: rgba(255, 255, 255, 0.8);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 22px;
            font-weight: bold;
            color: black;
        }

body {
    padding-top: 90px;
}

.custom-navbar {
    background: rgba(0, 0, 0, 0.65);
    backdrop-filter: blur(12px);
    padding: 18px 0;
    transition: all 0.25s ease-in-out;
    border-bottom: 1px solid rgba(255,255,255,0.08);
}

.custom-navbar.scrolled {
    background: rgba(0, 0, 0, 0.85);
    padding: 12px 0;
    border-bottom-color: rgba(255,255,255,0.18);
}

.nav-link {
    color: #dcdcdc !important;
    font-weight: 500;
    padding-left: 18px !important;
    padding-right: 18px !important;
    transition: 0.2s ease-in-out;
}

.nav-link:hover {
    color: #fff !important;
}
    </style>
</head>
<body>

    

<nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top custom-navbar px-4">
    <div class="container-fluid">

        <a class="navbar-brand fw-bold text-white" href="<?php echo e(route('home')); ?>">
            EVTIX
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('events')); ?>">Events</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('tickets')); ?>">Tickets</a></li>
            </ul>
        </div>

    </div>
</nav>


    
    <?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\praktikumakhir\resources\views/layouts/main.blade.php ENDPATH**/ ?>