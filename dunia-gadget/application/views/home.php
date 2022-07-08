<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dunia Gadget | Beranda</title>
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
                <a class="navbar-brand" href="<?php echo base_url('index.php/welcome_admin'); ?>">Dunia Gadget</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mt-2">
                            <?php $keranjang = 'Keranjang: '.$this->cart->total_items(). ' items' ?>
                            <?php echo anchor('welcome_admin/detail_keranjang_belanja', $keranjang ) ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Profil Saya</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo base_url('index.php/welcome/nav_logout'); ?>">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <!-- content -->
    <section>
        <div class="container mt-5 mb-5 px-4">
            <div class="row justify-content-between gy-4">
                <?php foreach ($produk as $produkk) { ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo base_url().'/assets/images/'.$produkk->foto_produk ?>"
                        class="card-img-top mt-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" href="#"><?php echo $produkk->nama_produk ?></h5>
                        <span class="badge bg-success">Rp.
                            <?php echo number_format($produkk->harga_produk, 0, ',','.') ?></span><br>
                        <?php echo anchor('welcome_admin/detail_produk/'.$produkk->id_produk, '<div class="btn btn-sm mt-2 btn-primary">Detail Produk</div>') ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark relative-bottom">
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