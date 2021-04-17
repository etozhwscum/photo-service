<?php
 require_once 'vendor/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	<link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
	<?php require('templates/header.php');?>
	<div class="news">
		<h1>Новости</h1>
		<form>
		   <?php
			   $find_news="SELECT * FROM news";
			   $res=mysqli_query($connect, $find_news);
               if(!$res)die(mysqli_error($connect));
               if (!empty($_GET['del']) && !empty((int)$_GET['id'])) {
                    $id = (int)$_GET['id'];
                    $delete_news = "DELETE FROM news WHERE id=$id";
                    $res = mysqli_query($connect, $delete_news);
                
                    if (!$res) die (mysqli_error($connect));
                
                    if (mysqli_affected_rows($connect) == 1) {
                        echo "<h2>Запись успешно удалена</h2>";
                    }
                }
                $delete_news = "SELECT * FROM news";
                $res = mysqli_query($connect, $delete_news);
                if (!$res) die (mysqli_error($connect));
			    while($news=mysqli_fetch_assoc($res)){
				   ?>
				   <p>
				   <img src="<?=$news['avatar'];?>" style="width:250px">
				   <h2><?= $news['title']; ?> <a href="?del=ok&id=<?= $news['id']; ?>">уд.</a></h2>
				   <?=$news['body']?>
				   </p>
				   <?php
                }
		    ?>
        </form>
		
	</div>
		<div class="nextLink">
			<a  href="create_news.php">Create News</a>	
		</div>
	<br><br>
	<?php require('templates/footer.php');?>
</body>
</html>