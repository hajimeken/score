<?php
$action = $_POST['action'];
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$comment = htmlspecialchars($_POST['comment']);
$company = htmlspecialchars($_POST['company']);
$to = 'hajimeken2@gmail.com';
$subject = 'お問い合わせがありました';
$message = '[お名前]'."\n".$name."\n";
$message .= '[email]'."\n".$email."\n";
$message .= '[会社名]'."\n".$company."\n";
$message .= '[コメント]'."\n".$comment."\n\n\n";
$header = 'From: '.$email."\r\n";
$header .= 'Reply-To: '.$email."\r\n";
if($action == "post"){
$status = mb_send_mail($to, $subject, $message, $header,$company);
if ($status) {
echo '<p class="msg">メッセージは正常に送信されました</p>';
echo '<button type="button" onclick="history.go(-1)">入力フォームに戻る</button>';
} else {
echo '<p class="msg">メッセージの送信に失敗しました</p>';
echo '<button type="button" onclick="history.go(-1)">入力フォームに戻る</button>';
}
}
?>