
<?php
 require_once 'vendor/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vcacncies</title>
	<link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
	<?php require('templates/header.php');?>
	<div class="title"><h1>Вакансии</h1><br></div>
	<div class="vacancies">
		<form class="currentVacancy">
		   <?php
			   $find="SELECT * FROM vacancy";
			   $res=mysqli_query($connect, $find);
			   if(!$res)die(mysqli_error($connect));
			   while($vacancy=mysqli_fetch_assoc($res)){
				   ?>
				   <p>
				   <h2><?=$vacancy['title'];?></h2>
				   <?=$vacancy['body']?>
				   </p>
				   <?php
			   }
		    ?>
        </form>
		<div>
			<a href="create_vacancy.php">Create Vacancy</a>	
		</div>
	</div>
	<br><br>
	<?php require('templates/footer.php');?>
</body>
</html>