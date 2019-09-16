<html>
  <meta charset="UTF-8">
  <head>
    <title>ログインユーザー追加ページ</title>
  </head>
  <body>
<?php
$link = new mysqli('127.0.0.1', 'root', 'root');
if (!$link) {
    die('接続失敗です。'.mysqli_error());
}
 
$db_selected = mysqli_select_db($link,'db_user');
if (!$db_selected){
    die('データベース選択失敗です。');
}
 
mysqli_set_charset('utf8');
 
$result = mysqli_query('SELECT name,password FROM menus');
if (!$result) {
    die('SELECTクエリーが失敗しました。');
}
 
$name = $_POST['name'];
$password = $_POST['password'];
 
$sql = "INSERT INTO db_user (name, password) VALUES ('$name','$password')";
$result_flag = mysqli_query($sql);
 
if (!$result_flag) {
    die('INSERTクエリーが失敗しました。すでに同じNAMEが登録されている可能性があります。<br><a href="add.html">戻る</a>');
}
 
print('<p>' . $name . 'ユーザーを登録しました。</p>');
 
$close_flag = mysqli_close($link);
 
?>
  <a href="add.html">戻る</a>
  </body>
</html>