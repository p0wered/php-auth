<?php

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

    }
    else {

        die('Пароли не совпадают');
    }

    //27:27

