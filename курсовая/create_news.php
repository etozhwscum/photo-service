<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Create News</title>
	<link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
	<?php require('templates/header.php');?>
    <div class="newsFormCreate">
        <h1>Создание новостей</h1>
        <form action="vendor/add_news.php" method="post" enctype="multipart/form-data">
            <p><input style="padding: 1em; border: none;" name="avatar" type="file"></p>
            <p><input name="title" type="text" placeholder="Заголовок" required></p>
            <p><textarea name="body" rows="10" cols="45" placeholder="Новость" required></textarea></p>
            <button type="submit"><p>Create<p></button>
        </form>
        <br>
        <a href="news.php">Назад</a>
    </div>
    <br><br>
	<?php require('templates/footer.php');?>
</body>
</html>