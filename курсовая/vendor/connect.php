<?php

    $connect = mysqli_connect('localhost', 'root', '', '482_sva');

    if (!$connect) {
        die('Error connect to DataBase');
    }