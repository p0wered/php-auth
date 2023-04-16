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
    <div class="flexbox-reg">
        <div class="form-box">
            <form class="form-sign-reg" action="vendor/signup.php" method="post" enctype="multipart/form-data">
                <h2 class="welcome-text">Let's sign you up!</h2>
                <div class="input-flexbox">
                    <label class="form-sign-text">First Name</label>
                    <input class="input-main" type="text" name="full_name">
                </div>
                <div class="input-flexbox">
                    <label class="form-sign-text">Login</label>
                    <input class="input-main" type="text" name="login">
                </div>
                <div class="input-flexbox">
                    <label class="form-sign-text">E-Mail</label>
                    <input class="input-main" type="email" name="email">
                </div>
                <div class="input-flexbox">
                    <label class="form-sign-text">Profile Pic</label>
                    <input class="input-main" type="file" name="avatar">
                </div>
                <div class="input-flexbox">
                    <label class="form-sign-text">Password</label>
                    <input class="input-main" type="password" name="password">
                </div>
                <div class="input-flexbox">
                    <label class="form-sign-text">Confirm Password</label>
                    <input class="input-main" type="password" name="password_confirm">
                </div>
                <div class="btn-flexbox">
                    <button class="btn-main">Sign up</button>
                </div>
                <div style="text-align: center; padding: 2rem 2rem 0 2rem">
                    <p class="form-alt-text">Already have an account?</p>
                    <a class="any-acc-btn" href="/index.php">Sign in</a>
                </div>
                <p class="msg">
                    ЖОПА ЖОПА ЧЛЕН
                </p>
            </form>
        </div>
    </div>
</section>
</body>
</html>

