<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="./slick/slick/slick-theme.css"/>
</head>
<body>
    <div><img src="./img/font.jpg"></div>
    <hr size="10" color="green">
    <div class="your-class">
        <div><img src="./img/ball.jpg"></div>
        <div><img src="./img/yakyu.jpg"></div>
        <div><img src="./img/baseball108.jpg"></div>
        <div><img src="./img/kyuuzyou1.jpg"></div>
     </div>
     <hr size="10" color="green">
     <h3 class="self">このサイトは野球の楽しさをより多くの人に知ってもらう為のサイトです</h3>
     
     <div class="image">
	 <a href="http://sportsh.php.xdomain.jp/login.php"><img  class="img_1" src="./img/yjimage.jpg"></a>
	 <p>野球のスコアボード</p>
	 </div>
	 <div class="image">
	 	<a href="http://sportsh.php.xdomain.jp/form.php"><img class="img_2" src="./img/hatena.jpg"></a>
	 	<p>お問い合わせ</p>
	  </div>
	  <div class="image">
	 <a href="http://sportsh.php.xdomain.jp/PR.php"> <img class="img_3" src="./img/PR.jpeg"></a>
	 	<p>自己紹介</p>
	 </div>
	 
	 <ul class="msr_newslist04">
	 <更新履歴＞
  <li>
    <a href="#">
    <div>
      <time datetime="2019-9-15">2019.09.15</time>
      <p class="cat01">cat01</p>
    </div>
    <p> 更新履歴の設置、野球のスコアボードに会員登録機能を追加 </p>
    </a>
  </li>
  <li>
    <a href="#">
    <div>
      <time datetime="2019-8-26">2019.08.26</time>
      <p class="cat02">cat02</p>
    </div>
    <p> 画像スライド機能の設置 </p>
    </a>
  </li>
  <li>
    <a href="#">
    <div>
      <time datetime="2019-8-10">2016.08.10</time>
      <p class="cat01">cat01</p>
    </div>
    <p>野球のスコアボードを設置 </p>
    </a>
  </li>
  <li>
    <a href="#">
    <div>
      <time datetime="2019-8-1">2019.08.01</time>
      <p class="cat02">cat02</p>
    </div>
    <p> WEBページ新規開設 </p>
    </a>
  </li>
</ul>

<?php require("footer.html"); ?>
	 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="./slick/slick/slick.min.js"></script> <!-- slickのjavascriptファイル -->

    <!-- スライダー機能 -->
    <script>
            $(document).ready(function(){
                $('.your-class').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    dots: true,
                    arrows: true,
                });
            });
    </script>
</body>
</html>