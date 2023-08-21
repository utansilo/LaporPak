<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/ef8d38f3f3.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('css/login.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>  
    <div class="container">
        <div class="sub-title">
            <p class="sub1">PERPUSTAKAAN SALAZAR</p>
            <p class="sub2">TEMPAT MENCARI BUKU</p>
        </div>
        <div class="card-login">
            <img src="<?= base_url('img/amikom-logo.png'); ?>" alt="">
            <div class="subcard">
                <p class="sub-card1">Sign up</p>
                <p class="sub-card2">Silahkan daftar akun terlebih dahulu!</p>
            </div>
            <?= session()->getFlashdata('massage') ?>
            <?php if (session()->getFlashdata('errors')) : ?>
                <div style="color: red;">
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <?= $error ?><br>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="formLogin">
                <form id="signup-form" method="post" action="<?php site_url('signup') ?>">
                    <div class="input-group flex-nowrap input-uname" style="margin-bottom: 16px;">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="bi bi-person"></i>
                        </span>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap" aria-label="Nama Lengkap" aria-describedby="addon-wrapping">
                    </div>
                    <div class="input-group flex-nowrap input-uname">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="bi bi-person"></i>
                        </span>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping">
                    </div>
                    <div class="input-group flex-nowrap input-pass">
                        <span class="input-group-text" id="addon-wrapping">
                            <i class="bi bi-lock"></i>
                        </span>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
                    </div>
                    <div class="checkbox-group" style="margin-top: 16px; margin-bottom: 16px;">
                        <label for="agreement">
                            <input type="checkbox" id="agreement" name="agreement" required>
                            Saya menyetujui persyaratan yang berlaku.
                        </label>
                    </div>
                    <input type="hidden" name="role" id="role" value="user">
                    <button class="btn btn-primary mb-2" type="submit">Sign up</button>
                    <p>You already have account?</p>
                    <a href="/">Sign in</a>
                </form>
            </div>
        </div>
    </div>
    
    <script>
        const signupForm = document.getElementById('signup-form');
        signupForm.addEventListener('submit', function(event) {
            const namaInput = document.getElementById('nama');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const agreementCheckbox = document.getElementById('agreement');

            if (!isValidName(namaInput.value)) {
                alert('Nama lengkap harus diisi dengan minimal 3 karakter')
                namaInput.focus();
                event.preventDefault();
                return false;
            }

            if (!isValidEmail(emailInput.value)) {
                alert('Email lengkap harus diisi');
                emailInput.focus();
                event.preventDefault();
                return false;
            }

            if (!isValidPassword(passwordInput,value)) {
                alert('Password lengkap minimal 8 karakter');
                passwordInput.focus();
                event.preventDefault();
                return false;
            }

            if (!agreementCheckbox.checked) {
                alert('Anda harus menyetujui syarat dan ketentuan');
                event.preventDefault();
                return false;
            }
        });

        function isValidName(nama) {
            return nama.length >= 3;
        }

        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function isValidPassword(password) {
            return password.length >= 8;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>