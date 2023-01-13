<!DOCTYPE html>
<html lang = "ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content = "widht = device-wight, initial-scale=1.0">
	<meta http-equiv = "X-UA-Compatible" content="ie=edge">
	<title>Форма регистрации</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet"  href="style.css">
</head>
<body>
	<div class="conteiner mt-4">
		<?php

		if($_COOKIE['user'] == ''):

		?>
		<div class="row">
			<div class="col">
				      <h1>Форма регистрации</h1>
	   <form  action="check.php" method="post">
		<input type="text" class="form-control" name="login"
		id="login" placeholder="Введите Логин"><br>
		<input type="text" class="form-control" name="name"
		id="name" placeholder="Введите имя"><br>
		<input type="password" class="form-control" name="pass"
		id="pass" placeholder="Введите Пароль"><br>
		<button class="btn btn-success"
		type="submit">Зарегистрировать</button>
		</form>
	</div>

				      <h1>Форма авторизации</h1>
	   <form  action="auth.php" method="post">
		<input type="text" class="form-control" name="login"
		id="login" placeholder="Введите Логин"><br>
		<input type="password" class="form-control" name="pass"
		id="pass" placeholder="Введите Пароль"><br>
		<button class="btn btn-success"
		type="submit">авторизоваться</button>
		</form>
	</div>
<?php else: ?>
	<p>Добро пожаловать, <?=$_COOKIE['user']?>. Что выйти нажмите <a href="exit.php">здесь</a>.</p>
<?php endif;?>

	</div>
</div>


</body>
</html>