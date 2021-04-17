<?php
session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
	<?php require('templates/header.php');?>
	<div class="login">
		<h1>Авторизация</h1>
		<form action="vendor/signin.php" method="post">
        <p><input type="text" name="login" placeholder="Имя пользователя" required></p>
        <p><input type="password" name="password" placeholder="Пароль" required></p>
        <button type="submit"><p>Accept<p></button>
        <p>
           <a href="register.php">Зарегистрироваться</a>
        </p>
        <?php
            if ($_SESSION['message']) {
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