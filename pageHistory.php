<!DOCTYPE html>
<html lang="uk">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--MY STYLE-->
	<link rel="stylesheet" href="css/style.css">
	<!--NORMALIZE-->
	<link rel="stylesheet" href="css/normalize.css">
	<!--GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link
		href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@400;500;600&display=swap"
		rel="stylesheet">

	<title>Історія "Проміня"</title>
</head>
<?php
 $url = $_SERVER['REQUEST_URI']; 
 setcookie ("url", $url);
?>
<body class="lock-padding">
	<div class="wrapper">
		<?php require('./components/general/header.php'); ?>
		<main class="content">
			<?php require('./components/pageHistory/history.php'); ?>
		</main>
			<?php require('./components/general/footer.php'); ?>
	</div>
	<?php require('./components/general/popup.php'); ?>
	<?php require('./components/general/burger.php'); ?>
	<?php $uri = $_SERVER['REQUEST_URI']; ?>

	<script src="js/burger.js"></script>
	<script src="js/popup.js"></script>
</body>
</html>