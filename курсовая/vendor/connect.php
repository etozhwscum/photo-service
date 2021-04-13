<?php

    $connect = mysqli_connect('localhost', 'root', '', 'sva_482');

    if (!$connect) {
        die('Error connect to DataBase');
    }

    $connect_vacancy = mysqli_connect('localhost', 'root', '', 'test');

    if (!$connect_vacancy) {
        die('Error connect to DataBase');
    }