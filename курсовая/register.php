<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header('Location: profile.php');
    }
?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
    <?php require('templates/header.php');?>
    <div class="registration">
        <h1>Регистрация</h1>
        <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <p><input type="text" name="full_name" placeholder="ФИО" required></p>
        <p><input type="text" name="login" placeholder="Имя пользователя" required></p>
        <p><input type="email" name="email" placeholder="Email" required></p>
        <p><input style="padding: 1em; border: none;" type="file" name="avatar" required></p>
        <p><input type="password" name="password" placeholder="Пароль" required></p>
        <p><input type="password" name="password_confirm" placeholder="Подтверждение пароля"></p>
        <button type="submit"><p>Accept<p></button>
        <p>
            <a href="login.php">Авторизироваться</a>
        </p>
        <?php
            if (isset($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
    </div>
    <br>
   <?php require('templates/footer.php');?>
</body>
</html>