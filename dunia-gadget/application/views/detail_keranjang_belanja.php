<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dunia Gadget | Keranjang Belanja</title>
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
    <section class="cart">
        <div class="container mt-5">
            <h3>Keranjang Belanja</h3>
            <table class="table table-striped mt-3">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" class="text-left">No</th>
                        <th scope="col" class="text-left">Nama Produk</th>
                        <th scope="col" class="text-center">Jumlah</th>
                        <th scope="col" class="text-end">Harga</th>
                        <th scope="col" class="text-end">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach ($this->cart->contents() as $items) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $items['name']?></td>
                        <td class="text-center"><?php echo $items['qty'] ?></td>
                        <td class="text-end">Rp. <?php echo number_format($items['price'], 0, ',','.') ?></td>
                        <td class="text-end">Rp. <?php echo number_format($items['subtotal'], 0, ',','.') ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <h3 class="mt-5">Total Belanja</h3>
            <table class="table mt-3">
                <tbody>
                    <tr>
                        <th scope="col" class="text-left">Subtotal</th>
                        <td scope="col" class="text-end">Rp.
                            <?php echo number_format($this->cart->total(), 0, ',','.') ?></td>
                    </tr>
                    <tr>
                        <th scope="col" class="text-left">Total</th>
                        <td scope="col" class="text-end">Rp.
                            <?php echo number_format($this->cart->total(), 0, ',','.') ?></td>
                    </tr>
                </tbody>
            </table>
            <div align="end" class="mb-5">
                <a href="<?php echo base_url('index.php/welcome_admin/hapus_keranjang_belanja') ?>">
                    <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
                </a>
                <a href="<?php echo base_url('index.php/welcome_admin') ?>">
                    <div class="btn btn-sm btn-primary">Lanjut Belanja</div>
                </a>
                <a href="<?php echo base_url('index.php/welcome_admin/fungsi_form_pembayaran') ?>">
                    <div class="btn btn-sm btn-success">Pembayaran</div>
                </a>
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