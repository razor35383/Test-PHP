<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Страница авторизации!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container mt-4">
	
	<?php 
		if($_COOKIE['user']==''):
	 ?>

	<div class="row">

		<div class="col">
			<h1>Форма регистрации</h1>
	<form action="/check.php" method="post">
		<input type="text" class = "form" name = "login" id = "login" placeholder="Введите логин"> </br>
		<input type="text" class = "form" name = "name" id = "name" placeholder="Введите имя"></br>
		<input type="password" class = "form" name = "pass" id = "pass" placeholder="Введите пароль"></br>
		<button type="submit" class = "btn btn-success">			Зарегистрироваться</button>
		</form>
			</div>
		<div class="col">
			<h1>Форма авторизации</h1>

	<form action="/auth.php" method="post">
		<input type="text" class = "form" name = "login" id = "login" placeholder="Введите логин"> </br>
		<input type="password" class = "form" name = "pass" id = "pass" placeholder="Введите пароль"></br>
		<button type="submit" class = "btn btn-success">Войти</button>
	</form>
		</div>
	<?php else: ?>
	<p>Добро пожаловать <?=$_COOKIE['user'] ?>. Что бы перейти на главную страницу нажмите <a href="main.php">здесь</a> Что бы выйти из аккаунта, нажмите <a href="exit.php">здесь!!</a>

	</p>

	<?php endif; ?>
	</div>
	</div>
	
</body>
</html>