<?php
session_start();
?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
     <link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
    <?php require('templates/header.php');?>
    <div class="user">
        <h1>Профиль</h1>
        <form>
            <img class="userPic" src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="Фото профиля">
            <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
            <a href="#"><?= $_SESSION['user']['email'] ?></a>
            <p><a href="vendor/logout.php" class="logout"><img src="images/logout.svg" width="40px"></a></p>
        </form>
    </div>
    <br>
    <?php require('templates/footer.php');?>
</body>
</html>