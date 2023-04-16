<?php

    $connect = mysqli_connect('localhost','root','', 'test');

    if (!$connect) {
        die('Unable to connect to DB');
    }