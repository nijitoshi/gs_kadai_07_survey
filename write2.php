<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$age  = $_POST["age"];
$c    = ",";

//文字作成
$str = date("Y/m/d H:i:s").$c.$name.$c.$mail.$c.$age;

//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<!-- <h1>書き込みしました。</h1> -->
<h2>正しく送信されました。</h2>

<ul>
<li><a href="read.php">一覧を見る</a></li>
</ul>
</body>
</html>