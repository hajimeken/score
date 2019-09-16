<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./pr.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="./slick/slick/slick.min.js"></script> <!-- slickのjavascriptファイル -->
	<meta charset="UTF-8">
</head>
<body>
	    <div><img src="./img/font.jpg"></div>
		<div class="demo demo5">
  		<div class="heading"><span id='1'>PR</span></div>
		</div>
	<div class="demo demo3" onmouseover="mouseover();" onmouseout="mouseout();"/>
  		<div class="heading"><span id='2'>Name</span></div>
  		<p>H・F</p>
	</div>
	<div class="demo demo3">
  		<div class="heading"><span id='3'>Birthday</span></div>
  		<p>1993年 4月12日 26歳</p>
	</div>
	<div class="demo demo3">
  		<div class="heading"><span id='4'>Career</span></div>
  		<p>IT系の専門学校でプログラムミング言語を中心に学習し、
  		　現在は、IT系の会社に6年程勤務しています。OP業務や、
  		  システムの運用担当業務を遂行中</p>
	</div>
	<div class="demo demo3">
  		<div class="heading"><span id='5'>Hobby</span></div>
  		<p>野球鑑賞・ゲーム・読書</p>
	</div>
	<div class="demo demo1">
  <div class="wrapper">
    <div class="caption">コメント</div>
    <div class="heading"><p>フルスタックエンジニアを目指し、HTML、CSS、Javascript、PHP
    を学習中</p></div>
  </div>
</div>
</div>
<script>
$(function(){
	 $('#1').hover(function(){
		 $(this).text('自己紹介');
	 },function(){
		$(this).text('PR');
	 });
	 $('#2').hover(function(){
		 $(this).text('名前');
	 },function(){
		$(this).text('Name');
	 });
	 $('#3').hover(function(){
		 $(this).text('生年月日');
	 },function(){
		$(this).text('Birthday');
	 });
	  $('#4').hover(function(){
		 $(this).text('経歴');
	 },function(){
		$(this).text('Carrer');
	 });
	 $('#5').hover(function(){
		 $(this).text('趣味');
	 },function(){
		$(this).text('Hobby');
	 });
});
</script>
</body>
	 <?php require("footer.html"); ?>
</html>