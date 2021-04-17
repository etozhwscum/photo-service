<?php
 require_once 'vendor/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
	<div class="title"><h1>Вакансии</h1><br></div>
	<div class="vacancies">
		<form class="currentVacancy">
		   <?php
			   $find="SELECT * FROM vacancy";
			   $res=mysqli_query($connect, $find);
               if(!$res)die(mysqli_error($connect));
               if (!empty($_GET['del']) && !empty((int)$_GET['id'])) {
                    $id = (int)$_GET['id'];
                    $delete = "DELETE FROM vacancy WHERE id=$id";
                    $res = mysqli_query($connect, $delete);
                
                    if (!$res) die (mysqli_error($connect));
                
                    if (mysqli_affected_rows($connect) == 1) {
                        echo "<h2>Запись успешно удалена</h2>";
                    }
                }
                $delete = "SELECT * FROM vacancy";
                $res = mysqli_query($connect, $delete);
                if (!$res) die (mysqli_error($connect));
			    while($vacancy=mysqli_fetch_assoc($res)){
				   ?>
				   <p>
				   <h2><?= $vacancy['title']; ?> <a href="?del=ok&id=<?= $vacancy['id']; ?>">уд.</a></h2>
				   <?=$vacancy['body']?>
				   </p>
				   <?php
                }
		    ?>
        </form>
	</div>
</body>
</html>