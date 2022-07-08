<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dunia Gadget | Pembayaran</title>
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
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="coll-md-8">
                    <div class="btn btn-sm btn-success">
                        <?php $grand_total = 0; if($keranjang = $this->cart->contents()){
                            foreach ($keranjang as $item){
                                $grand_total = $grand_total + $item['subtotal'];
                            }
                            echo "Total Pembayaran: Rp. ". number_format($grand_total, 0, ',', '.');
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <h3 class="mb-4 mt-5">Alamat Pengiriman dan Pembayaran</h3>
            <form method="POST" action="<?php echo base_url('index.php/welcome_admin/ke_proses_pesanan') ?> ">
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_lengkap" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" name="alamat" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">No. Telepon</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_telp" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Metode Pembayaran</label>
                    <div class="col-sm-10">
                        <select name="metode_pembayaran" class="form-control">
                            <option>- Pilih -</option>
                            <option>Transfer Bank</option>
                            <option>Kartu Kredit</option>
                            <option>Kartu Debit</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Pilih Bank</label>
                    <div class="col-sm-10">
                        <select name="bank" class="form-control">
                            <option>- Pilih -</option>
                            <option>Bank Mandiri</option>
                            <option>Bank BRI</option>
                            <option>Bank BCA</option>
                            <option>Bank BNI</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Jasa Pengiriman</label>
                    <div class="col-sm-10">
                        <select name="jasa_pengiriman" class="form-control">
                            <option>- Pilih -</option>
                            <option>J&T</option>
                            <option>JNE</option>
                            <option>SiCepat</option>
                            <option>AnterAja</option>
                        </select>
                    </div>
                </div>
                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-lg btn-primary mb-4">Checkout</button>
                </div>
            </form>
            <?php 
                }else{
                    echo "<script>alert('Keranjang Belanja Anda Masih Kosong');</script>";
                    echo "<script>location='".base_url('index.php/welcome_admin/detail_keranjang_belanja')."';</script>";
                }
            ?>
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