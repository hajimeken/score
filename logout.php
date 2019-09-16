<?php
session_start();

//セッション変数のクリア
$_SESSION = array();
//セッションクッキーも削除
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
//セッションクリア
@session_destroy();
if (isset($_SESSION["EMAIL"])) {
} else {
  echo 'ログアウトしております';
}
?>
<html>
<a href="http://sportsh.php.xdomain.jp/html.php">TOPページへ戻る</a>
<html>
