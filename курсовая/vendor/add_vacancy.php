<?php

    session_start();
    require_once 'connect.php';

    $title = $_POST['title'];
    $body = $_POST['body'];
    
    mysqli_query($connect, "INSERT INTO `vacancy` (`id`, `title`, `body`) VALUES (NULL, '$title', '$body')");
    
    header('Location: ../index.php');

?>
