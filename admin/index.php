<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only BOOTSTRAP -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
 	rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Авторизація</title>
</head>
<style>
	.main {
		display: flex;
		height: 100vh;
		justify-content: center;
		align-items: center;
	}
	.admin-form {
		max-width: 400px
	}
	.form__button_row {
		display: flex;
		justify-content: space-between;
	}
	
	@media (max-width: 424px) {
		body {
   	 		padding: 0 15px;
  		}
	}
</style>
<body>
	<main class="main">
		
		<form action="includes/login.php" method="post" class="row g-3 cold-md-6 admin-form">
			<h2>Авторизація</h2>
			
			<div class="col-md-12">
				<label for="input-log" class="form-label">Логін</label>
				<input type="text" name="login" class="form-control" id="input-log"> 
			</div>
			<div class="col-md-12">
				<label for="input-pass" class="form-label">Пароль</label>
				<input type="password" name="pass" class="form-control" id="input-pass"> 
			</div>

			<div class="col-12 form__button_row">
				<a href="/diplom_&_sitePromin/index.php" class="btn btn-primary">
				На головну
			</a>
				<button type="submit" class="btn btn-primary">Увійти</button>
			</div>
		</form>
		
	</main>
<!-- JavaScript Bundle with Popper BOOTSTRAP-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>