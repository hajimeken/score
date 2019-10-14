
<html>
	<head>
<link rel="stylesheet" href="test.css">
    <title>試合結果</title>
    </head>
<body>
<h1>自軍チーム名を入力してください</h1>
<form action="score.php" method="post">
<div class="team_name">
	<label class="ef">
	<input type="text" name="Ateam" placeholder="自軍チーム名を入力">
	</label>
</div>
１回
<div class="A">2回</div>
<div class="B">3回</div>
<div class="C">4回</div>
<div class="D">5回</div>
<div class="E">1回</div>
<div class="F">2回</div>
<div class="G">3回</div>
<div class="H">4回</div>
<div class="I">5回</div>

<div class="kai">
	<input type="text" style="width:35px; height:30px;" name="Ascore" size="15" maxlength="60">点
</div>
<div class="kai2">
	<input type="text" style="width:35px; height:30px;" name="Bscore" size="15" maxlength="60">点
</div>
<div class="kai3">
	<input type="text" style="width:35px; height:30px;" name="Cscore" size="15" maxlength="60">点
</div>
<div class="kai4">
	<input type="text" style="width:35px; height:30px;" name="Dscore" size="15" maxlength="60">点
</div>
<div class="kai5">
	<input type="text" style="width:35px; height:30px;" name="Escore" size="15" maxlength="60">点
</div>
<hr class="sen"></hr>
<div class="kaiA">
	<input type="text" style="width:35px; height:30px;" name="Fscore" size="15" maxlength="60">点
</div>
<div class="kaiB">
	<input type="text" style="width:35px; height:30px;" name="Gscore" size="15" maxlength="60">点
</div>
<div class="kaiC">
	<input type="text" style="width:35px; height:30px;" name="Hscore" size="15" maxlength="60">点
</div>
<div class="kaiD">
	<input type="text" style="width:35px; height:30px;" name="Iscore" size="15" maxlength="60">点
</div>
<div class="kaiE">
	<input type="text" style="width:35px; height:30px;" name="Jscore" size="15" maxlength="60">点
</div>
<div class="teki"><h1>敵軍チーム名を入力してください</h1></div>
<div class="team_name2">
	<label class="ef2">
	<input type="text" name="Bteam" placeholder="敵軍チーム名を入力">
	</label>
</div>
<br/>
<br/>
     <input type="submit" value="入力が終わったらクリック">
</form>
</body>

<?php require("footer.html"); ?>
</html>