<?php

    session_start();
    require_once 'connect.php';

    $title = $_POST['title'];
    $body = $_POST['body'];
    
    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
        
    }
    mysqli_query($connect, "INSERT INTO `news` (`id`, `avatar`, `title`, `body`) VALUES (NULL, '$path', '$title', '$body')");
    
    header('Location: ../news.php');

?>
