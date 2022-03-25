<?php

    $connect = mysqli_connect('localhost', 'root', '', 'praktika');

    if (!$connect) {
        die('Error connect to DataBase');
    }