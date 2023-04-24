<?php
    session_start();
if (!$_SESSION['user']) {
    header('Location: /');
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
<section class="profile-section">
    <div class="flexbox-profile">
        <div class="profile-flexbox-in">
            <div class="pfp-box" style="background-image: url('<?= $_SESSION['user']['avatar'] ?>')"></div>
            <div class="profile-inner">
                <h2 class="profile-name"><?= $_SESSION['user']['full_name'] ?></h2>
                <p href="#"><?= $_SESSION['user']['email'] ?></p>
                <div class="profile-flexbox-out">
            </div>
            <a href="vendor/logout.php" class="logout-btn">Logout</a>
        </div>
    </div>
</section>
</body>
</html>

