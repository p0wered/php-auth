<?php
    session_start();

    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>php-auth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<section class="sign-in-section">
    <div class="flexbox">
        <div class="form-box">
            <form class="form-sign" action="vendor/signin.php" method="post">
                <h2 class="welcome-text">Welcome!</h2>
                <div class="input-flexbox">
                    <label class="form-sign-text">Login</label>
                    <input class="input-main" type="text" name="login">
                </div>
                <div class="input-flexbox">
                    <label class="form-sign-text">Password</label>
                    <input class="input-main" type="password" name="password">
                </div>
                <div class="btn-flexbox">
                    <button type="submit" class="btn-main">Sign in</button>
                </div>
                <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['message']);
                ?>
            </form>
            <div class="form-image">
                <i class="bi bi-lightning-charge-fill"></i>
                <p class="form-alt-text">Don't have an account?</p>
                <a class="any-acc-btn" href="/register.php">Sign up</a>
            </div>
        </div>
    </div>
</section>
</body>
</html>
