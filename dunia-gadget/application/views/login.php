<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login-register/style.css'); ?>">

    <title>Masuk</title>
</head>

<body>
    <div class="container">
        <form action="<?php echo base_url('index.php/welcome/fungsi_masuk'); ?>" method="POST" class="login-username">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Masuk</p>
            <div class="input-group">
                <input type="username" placeholder="Username" name="username">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password">
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Masuk</button>
            </div>
            <p class="login-register-text">Tidak memiliki akun? <a
                    href="<?php echo base_url('index.php/welcome/nav_daftar'); ?>">Daftar disini</a></p>
        </form>
    </div>
</body>

</html>