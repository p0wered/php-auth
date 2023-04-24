<?php
    session_start();
    $connect = mysqli_connect('localhost','root','', 'test');

    if (!$connect) {
        die('Unable to connect to DB');
    }

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Errow while loading a file';
            header('Location: ../register.php');
        }

        $password = md5($password);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");

        $_SESSION['message'] = 'Registration completed';
        header('Location: ../index.php');

    } else {
        $_SESSION['message'] = 'Password mismatch';
        header('Location: ../register.php');
    }

