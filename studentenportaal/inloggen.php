<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>
<body style="overflow: hidden;">
    <div class="limiter">
        <div class="container-login">
            <div class="wrap-login">
                <form action="" class="altform">

                </form>
                <?php
                session_start();

                if (isset($_SESSION['user_id'])) {
                    header("Location: index.php");
                    exit();
                }
                ?>
                <form action="" class="login-form validate-form active">
                    <span class="login-form-title">
                        welcome
                    </span>

                    <div class="wrap-input validate-input" data-validate="Onjuiste input.">
                        <input type="text" name="email" class="input">
                        <span class="focus-input" data-placeholder="Emailadres"></span>
                    </div>
                    <div class="wrap-input validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye" id="zmdi"></i>
                        </span>
                        <input type="password" name="pass" class="input">
                        <span class="focus-input" data-placeholder="Wachtwoord"></span>
                    </div>

                    <div class="container-login-form-btn">
                        <div class="wrap-login-form-btn">
                            <button class="login-form-btn">inloggen</button>
                        </div>
                    </div>
                    <div class="text-center">
                        <span class="txt1">
                            nog geen account?
                        </span>
                        <a href="registratiepagina.php" class="txt2" id="redirect"><br>Klik hier om een account aan te maken.</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="/assets/js/script.js" type="text/js"></script>
<script src="/assets/js/jquery.js" type="text/js"></script>
</html>