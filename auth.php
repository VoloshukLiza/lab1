<?php
  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),
  FILTER_SANITIZE_STRING);

  $pass = md5($pass."sol22");

  $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');

  $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
  $user = $result->fetch_assoc();
  if(empty($user) or count($user) == 0){
  	echo "Такой пользователь не найден";
  	exit();
  }

setcookie('user', $user['name'], time() + 3600, "/");


  $mysql->close();

  header('Location: index.php')
?>
