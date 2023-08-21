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
            <p class="sub1">LAPORIN AJA</p>
            <p class="sub2">ASAH SKILL CEPU ANDA SECARA ANONIM</p>
        </div>
        <div class="card-login">
            <img src="<?= base_url('img/amikom-logo.png'); ?>" alt="">
            <div class="subcard">
                <p class="sub-card1">Log In</p>
                <p class="sub-card2">Silahkan masuk dengan akun anda !</p>
            </div>
            <?= session()->getFlashdata('massage') ?>
            <?php if (session()->getFlashdata('error_message')) : ?>
                <div style="color: red;"><?php echo session()->getFlashdata('error_message'); ?></div>
            <?php endif; ?>
            <div class="formLogin">
                <form method="post" action="<?= site_url('auth') ?>">
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
                    <button class="btn btn-primary mb-2" style="margin-top: 24px;" type="submit">Login</button>
                    <p>You don't have account?</p>
                    <a href="/signup">Create an Account</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>