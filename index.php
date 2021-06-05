<!DOCTYPE html>
<html lang="uk">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords"
		content="Танці, танцювальний клуб, бальні танці, бальні танці тренування, танці тренування, центральний палац культури">

	<!--SWIPER CSS-->
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<!--MY STYLE-->
	<link rel="stylesheet" href="css/style.css">
	<!--NORMALIZE-->
	<link rel="stylesheet" href="css/normalize.css">
	<!--GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link
		href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@400;500;600&display=swap"
		rel="stylesheet">
	<!--ANIMATE CSS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

	<!-- <link href="/Logo/Group-2.ico" rel="icon">  --> <!-- !НЕ РАБОТАЕТ, А ПО ССЫЛКЕ РАБОТАЕТ -->
	<title>КСТ "Промінь"</title>
</head>
<?php
	 $url = $_SERVER['REQUEST_URI'];
	 setcookie ("url", $url);
?>
<body class="lock-padding">
	<div class="wrapper">
	 <?php require('./components/main/headerFullscreen.php'); ?>	
	 <main class="content" id="arrow">  
	 	<?php require('./components/main/aboutClub.php'); ?>	
		 <?php require('./components/main/newsClub.php'); ?>	
		<?php require('./components/main/achievments.php'); ?>	
		<?php require('./components/main/slider.php'); ?>	
		<?php require('./components/main/codex.php'); ?>	
	 </main>
	 <?php require('./components/general/footer.php'); ?>
	</div>
	<?php require('./components/general/popup.php'); ?>
	<?php require('./components/general/burger.php'); ?>
	

	<script src="js/burger.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/popup.js"></script>
</body>
</html>