<!DOCTYPE html>
<html>
<head>
	<title>Gift Cards</title>
	<link rel="stylesheet" type="text/css" href="style/css.css">
</head>
<body>
	<?php require('templates/header.php');?>
	<div class="card_list">
		<h1>Подарочные карты</h1>
		<p><b>Подарочные карты Феникс можно купить в любом нашем розничном магазине</b></p><br>
		<div class="default_card">
			<h1>Ласточка обычная</h1>
			<img src="images/swallow.svg">
			<img src="images/swallow_back.svg">
			<p>Подарочная карта на 3000 рублей, которую вы можете использовать на товары нашей компании.</p>
		</div>
		<div class="golden_card">
			<h1>Ласточка премиум</h1>
			<img src="images/swallow_golden.svg">
			<img src="images/swallow_golden_back.svg">
			<p>Подарочная карта на 10000 рублей, которую вы можете использовать на товары нашей компании.</p>
		</div>
	</div>
	<br>
	<?php require('templates/footer.php');?>
</body>
</html>