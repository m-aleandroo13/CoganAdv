<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V15</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('images/icons/favicon.ico'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('fonts/Linearicons-Free-v1.0.0/icon-font.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendor/animate/animate.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendor/css-hamburgers/hamburgers.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendor/animsition/css/animsition.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendor/select2/select2.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('vendor/daterangepicker/daterangepicker.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/util.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/main.css'); ?>">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url(<?= base_url('images/login_background.jpg'); ?>);">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(<?= base_url('images/bg-01.jpg'); ?>);">
                    <span class="login100-form-title-1">

                    </span>
                </div>
                <?= view('Myth\Auth\Views\_message_block') ?>
                <form class="login100-form validate-form" action="<?= route_to('login') ?>" method="POST">
                    <?= csrf_field(); ?>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Username or Email</span>
                        <!-- <input class="input100" type="text" name="username" placeholder="Enter username"> -->
                        <input type="text" class="input100 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                        <?= session('errors.login') ?>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <!-- <input class="input100" type="password" name="password" placeholder="Enter password"> -->
                        <input type="password" name="password" class="input100  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                        <?= session('errors.password') ?>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                    <div class="form-check mt-4">
                        <label class="form-check-label">
                            <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                            <?= lang('Auth.rememberMe') ?>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="<?= base_url('vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('vendor/animsition/js/animsition.min.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('vendor/bootstrap/js/popper.js'); ?>"></script>
    <script src="<?= base_url('vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('vendor/select2/select2.min.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('vendor/daterangepicker/moment.min.js'); ?>"></script>
    <script src="<?= base_url('vendor/daterangepicker/daterangepicker.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('vendor/countdowntime/countdowntime.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url('js/main.js'); ?>"></script>

</body>

</html>