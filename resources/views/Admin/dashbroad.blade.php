<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin </title>
    <link rel="stylesheet" href="<?php echo url('css/bootstrap.css'); ?>"> 
    <link rel="stylesheet" href="<?php echo url('css/dashboard.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootst">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icon@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo('css/dataTables.bootstrap5.css') ?>;">
    <link rel="stylesheet" href="DataTables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo url('css/DataTables/datatables.min.css');?>">


</head>
<body>
    <header class="navbar navbar-dark bg-dark sticky-top">
        <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a href="<?php echo('admin/pengguna') ?>" class="navbar-brand px-3">HOME</a>
        <div class="navbar-nav">
            <div class="nav-item">
                <a href="{{ url('homee') }}" class="nav-link px-3">
                    <i class="bi bi-box-arrow-right"></i> Sign out
                </a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar"
            class="col-md3 col-lg-2 bg-light position-fixed start-0 top-0 bottom-0 py-5 collapse d-md-block sidebar">
            <div class="container text-center pt-3">
                <img class="w-50 h-50" src="/img/admin.png" alt="">
                <h6><?php echo session('nama'); ?></h6>
            </div>
            <div class="pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="<?php echo url('admin/dashboar'); ?>" class="nav-link text-dark">
                            <i class="bi bi-house-door"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo url('admim/profil'); ?>" class="nav-link text-dark">
                            <i class="bi bi-inbox"></i>
                            Profil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo url('admin/pengguno'); ?>" class="nav-link text-dark">
                            <i class="bi bi-inbox"></i>
                            Daftar Karyawan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo url('admin/rekap'); ?>" class="nav-link text-dark">
                            <i class="bi bi-inbox"></i>
                            Rekap Presensi
                        </a>
                    </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <?php if(session('pesan_sukses')): ?>
    <script> 
        alert("<?php echo session('pesan_sukses'); ?>")
    </script>
    <?php endif ?>
    <?php if (session('pesan_gagal')); ?>
    <script>
        alert("<?php echo session('pesan_gagal'); ?>")
    </script>
    

    <main class="col-md-9 col-lg-10 ms-sm-auto px-md-3 bg-light vh-100 py-4">
        @yield('konten')
    </main>
    
    
    <script src="<?php echo url('js/bootstrap.bundle.min.js'); ?>"></script>    
    <script src="<?php echo url('js/jquery-3.5.1.min.js'); ?>"></script>    
    <script src="<?php echo url('js/dataTables.js'); ?>"></script>    
    <script src="<?php echo url('js/dataTables.bootstrap5.js'); ?>"></script>    
    <script src="<?php echo url('js/DataTables/dataTables.min.js'); ?>"></script>    

    <script>
        new DataTables('#thetable')
    </script>
</body>
</html>