<?php

function h($s){
  return htmlspecialchars($s, ENT_QUOTES, 'utf-8');
}

session_start();
//ログイン済みの場合
if (isset($_SESSION['EMAIL'])) {
  echo 'ようこそ' .  h($_SESSION['EMAIL']) . "さん。一度ログアウトをしてから再度ログイン願います。<br>";
  echo "<a href='/logout.php'>ログアウトはこちら。</a>";
  exit;
}

 ?>

<!DOCTYPE html>
<html lang="ja">
 <head>
   <meta charset="utf-8">
   <title>Login</title>
    <link rel="stylesheet" href="./css.css">
 </head>
 <body>
 <?php require("TOP.html"); ?>
     <div><img src="./img/font.jpg"></div>
   <h1>ようこそ、ログインしてください。</h1>
    	<div class="tb-cell mail-form">
	<link rel="stylesheet" href="form.css">
		<form id="form" action="loginseiko.php" method="post">
		<div class="row">
		<div class="cell">
		<label>email</label>
		<!--cell--></div>
		<div class="cell">
		<input type="text" name="email" required>
		<!--cell--></div>
		<!--row--></div>
		<div class="row">
		<div class="cell">
		<label>パスワード</label>
		<!--cell--></div>
		<div class="cell">
		<input type="password" name="password" required>
		<!--cell--></div>
		<!--row--></div>
		<div class="row">
		<div class="cell">
		 <button type="submit">ログイン!</button>
		<!--cell--></div>
		<!--row--></div>
		</form>
	<!--tb-cell-->

   <h1>初めての方はこちら</h1>
      	<div class="tb-cell mail-form">
	<link rel="stylesheet" href="form.css">
		<form id="form" action="Datebase.php" method="post">
		<div class="row">
		<div class="cell">
		<label>email</label>
		<!--cell--></div>
		<div class="cell">
		<input type="text" name="email" required>
		<!--cell--></div>
		<!--row--></div>
		<div class="row">
		<div class="cell">
		<label>パスワード</label>
		<!--cell--></div>
		<div class="cell">
		<input type="password" name="password" required>
		<!--cell--></div>
		<!--row--></div>
		<div class="row">
		<div class="cell">
		 <button type="submit">会員登録!</button>
		<!--cell--></div>
		<!--row--></div>
		</form>
	<!--tb-cell-->
 </body>
 
</html>