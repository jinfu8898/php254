<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="renderer" content="webkit">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="author" content="NTU CSIE Information System Training Course">
	<meta name="keywords" content="Keyword 1,Keyword 2">
	<meta name="description" content="description">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/favicon.png">
	<title>hw3</title>
</head>
<body>
<h1>簡易字典查詢系統</h1>
<form action="hw3.php" method="post">
	請輸入想要查的英文單字:<input type="text" name="words">
	<input type="submit">
</form>
<?php

dictionary(@$_POST['words']);

function dictionary($words) {
	if ($words) {
		switch ($words) {
		case 'apple':
			find($words, '蘋果');
			break;

		case 'orange':
			find($words, '橘子');
			break;

		case 'watermelon':
			find($words, '西瓜');
			break;

		case 'strawberry':
			find($words, '草莓');
			break;

		case 'pineapple':
			find($words, '鳳梨');
			break;

		default:
			echo "水果字典中沒有" . $words . "這個單字";
			break;
		}

	}

}

function find($english, $chinese) {
	echo "<table border=1>";
	echo "<tr>";
	echo "<td>英文</td><td>中文</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>$english</td><td>$chinese</td>";
	echo "<tr>";
	echo "</table>";
}

?>

</body>
</html>