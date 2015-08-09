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
	<title>4-1-1</title>
</head>
<body>

<form action="4-1-1.php" method="post">
	請輸入營業員「阿寶」的三個月業績(單位:千元)<br>
	第一個月:<input type="text" name="bob[]"><br>
	第二個月:<input type="text" name="bob[]"><br>
	第三個月:<input type="text" name="bob[]"><br>
	請輸入營業員「阿花」的三個月業績(單位:千元)<br>
	第一個月:<input type="text" name="flower[]"><br>
	第二個月:<input type="text" name="flower[]"><br>
	第三個月:<input type="text" name="flower[]"><br>
	<input type="submit">
</form>
<?php
if (@$_POST['bob'] != "" && @$_POST['flower'] != "") {
	echo "阿寶業績" . total(@$_POST['bob']) . "千元<br>";
	echo "阿花業績" . total(@$_POST['flower']) . "千元<br>";
}

function total($array) {
	$total = 0;
	foreach ($array as $key => $value) {
		$total += $value;
	}
	return $total;
}

?>

</body>
</html>