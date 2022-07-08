<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dunia Gadget</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/index/style.css'); ?>">
</head>

<body>
    <!-- navbar -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Dunia Gadget</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                        <a class="nav-link" href="<?php echo base_url('index.php/welcome/nav_masuk'); ?>">Masuk</a>
                        <a class="nav-link" href="<?php echo base_url('index.php/welcome/nav_daftar'); ?>">Daftar</a>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <!-- content -->
    <section class="home">
        <div class="container">
            <div class="row">
                <div class="col-md-6 home-detail">
                    <h2>Selamat Datang<br> di Dunia Gadget</h2>
                    <p class="mb-3">Cari hp murah dengan harga terjangkau?</p>
                    <button class="btn btn-primary"
                        href="<?php echo base_url('index.php/welcome/nav_daftar'); ?>">Daftar Sekarang</button>
                </div>
                <div class="col-md-6 home-img">
                    <img src="assets/images/first.jpg">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark fixed-bottom">
        <div class="text-center p-4 text-white">
            ©2022 Copyright:
            <a class="text-reset fw-bold" href="https://duniagadget.com/">duniagadget.com</a>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>