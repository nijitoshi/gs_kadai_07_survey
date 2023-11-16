<?php
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $age  = $_POST["age"];
?>   

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<!-- <h1>書き込みしました。</h1> -->
<h2>入力内容を確認してください。<br>内容に間違いが無ければ送信してください。</h2>

<form action="write2.php" method="post"> 
	<p>お名前: <input type="hidden" name="name" value="<?php echo $_POST['name'];?>"><?=$name?></p>
	<p>メール: <input type="hidden" name="mail" value="<?php echo $_POST['mail'];?>"><?=$mail?></p>
	<p>年　齢: <input type="hidden" name="age" value="<?php echo $_POST['age'];?>"><?=$age?></p>
	<input type="submit" value="送信">
</form>

<ul>
<li><a href="post.php">入力画面に戻る</a></li>
</ul>
</body>
</html>