<!DOCTYPE html>
<html>
<?php
  $Ascore = $_POST['Ascore'];
  $Bscore = $_POST['Bscore'];
  $Cscore = $_POST['Cscore'];
  $Dscore = $_POST['Dscore'];
  $Escore = $_POST['Escore'];
  $Ateam  = $_POST['Ateam'];

  $Fscore = $_POST['Fscore'];
  $Gscore = $_POST['Gscore'];
  $Hscore = $_POST['Hscore'];
  $Iscore = $_POST['Iscore'];
  $Jscore = $_POST['Jscore'];
  $Bteam  = $_POST['Bteam'];
  
  if ($Ateam === '' or $Bteam === '') {
	echo 'チーム名が入力されていません';
	exit;
  }
  
  if ($Ascore === '' or $Bscore === ''or $Cscore === ''
      or $Dscore === ''or $Escore === ''or $Fscore === ''
      or $Gscore === ''or $Hscore === ''or $Iscore === ''
      or $Jscore === '') {
	echo '点数が入力されていない箇所があります';
	exit;
  }
  
  if (preg_match("/[^0-9^]/",$Ascore)){
	echo '数字以外が入力されております';
	exit;
  }
  
  if (preg_match("/[^0-9^]/",$Bscore)){
	echo '数字以外が入力されております';
	exit;
  }
  
  if (preg_match("/[^0-9^]/",$Cscore)){
	echo '数字以外が入力されております';
	exit;
  }
  
   if (preg_match("/[^0-9^]/",$Dscore)){
	echo '数字以外が入力されております';
	exit;
  }
  
  if (preg_match("/[^0-9^]/",$Escore)){
	echo '数字以外が入力されております';
	exit;
  }
  
  if (preg_match("/[^0-9^]/",$Fscore)){
	echo '数字以外が入力されております';
	exit;
  }
  
  if (preg_match("/[^0-9^]/",$Gscore)){
	echo '数字以外が入力されております';
	exit;
  }
  
   if (preg_match("/[^0-9^]/",$Hscore)){
	echo '数字以外が入力されております';
	exit;
  }
  
    if (preg_match("/[^0-9^]/",$Iscore)){
	echo '数字以外が入力されております';
	exit;
  }
  
    if (preg_match("/[^0-9^]/",$Jscore)){
	echo '数字(半角英数字)以外が入力されております';
	exit;
  }
                                                                                             
                       
?>
<head>
<link rel="stylesheet" type="text/css" href="./css.css">
<div><img src="./img/font.jpg"></div>
</head>
<body>
<div class="baseball game_score">
<table class="game_box baseball times5">
<tbody>
<tr>
</tr>
<tr>
</tr>
<tr>
<br>
<br>
<br>
<table border="2" style="border-collapse: collapse; border-color: red">
<td class="game_cell_data team_name"><?=$Ateam ?></td>
<td class="game_cell_data score"><?=$Ascore ?></td>
<td class="game_cell_data score"><?=$Bscore ?></td>
<td class="game_cell_data score"><?=$Cscore ?></td>
<td class="game_cell_data score"><?=$Dscore ?></td>
<td class="game_cell_data score"><?=$Escore ?></td>
<td class="game_cell_data total_score"><?php echo $Ascore + $Bscore + $Cscore + $Dscore + $Escore ?></td><tr>

<tr>
<td class="game_cell_data team_name"><?=$Bteam ?></td>
<td class="game_cell_data score"><?=$Fscore ?></td>
<td class="game_cell_data score"><?=$Gscore ?></td>
<td class="game_cell_data score"><?=$Hscore ?></td>
<td class="game_cell_data score"><?=$Iscore ?></td>
<td class="game_cell_data score"><?=$Jscore ?></td>
<td class="game_cell_data total_score"><?php echo $Fscore + $Gscore + $Hscore + $Iscore + $Jscore ?> </td>
</tr>
</tbody>
</table>

<?php
echo "<br />";
if ( $Ascore + $Bscore + $Cscore + $Dscore + $Escore < $Fscore + $Gscore + $Hscore + $Iscore + $Jscore){
   echo $Bteam."の勝利です。";
}
elseif ( $Ascore + $Bscore + $Cscore + $Dscore + $Escore > $Fscore + $Gscore + $Hscore + $Iscore + $Jscore){
	echo $Ateam."の勝利です。";
}

else{
echo "引き分けです。";
}
?>
<br>
<a href='/index.php'>入力に戻る場合は、こちら</a>
<?php require("footer.html"); ?>

</div>
</body>
</html>
