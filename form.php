<!DOCTYPE html>
<meta charset="UTF-8">
	<div><img src="./img/font.jpg"></div>
	<div class="tb-cell mail-form">
	<link rel="stylesheet" href="form.css">
		<form id="form" action="confirm.php" method="post">
		<div class="row">
		<div class="cell">
		<label>名前</label>
		<!--cell--></div>
		<div class="cell">
		<input type="text" name="name" required>
		<!--cell--></div>
		<!--row--></div>
		<div class="row">
		<div class="cell">
		<label>メールアドレス</label>
		<!--cell--></div>
		<div class="cell">
		<input type="email" name="email" required>
		<!--cell--></div>
		<!--row--></div>
		<div class="row">
		<div class="cell">
		<label>会社名</label>
		<!--cell--></div>
		<div class="cell">
		<input type="text" name="company" required>
		<!--cell--></div>
		<!--row--></div>
		<div class="row">
		<div class="cell">
		<label>コメント</label>
		<!--cell--></div>
		<div class="cell">
		<textarea name="comment" required></textarea>
		<!--cell--></div>
		<!--row--></div>
		<div class="row">
		<div class="cell">
		&nbsp; 
		<!--cell--></div>
		<div class="cell">
		<button type="submit" id="sbtn" name="action" value="post">送　信</button>
		<button type="reset" id="rbtn">リセット</button>
		<!--cell--></div>
		<!--row--></div>
		</form>
	<!--tb-cell-->
	<a href="http://sportsh.php.xdomain.jp/html.php">TOPページへ戻る</a>
	</div>