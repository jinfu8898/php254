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
	<title>3-1-6</title>
</head>
<body>
<?php
echo "<table border=1>";
for ($i = 1; $i <= 9; $i++) {
	echo "<tr>";
	for ($j = 1; $j <= 9; $j++) {
		echo "<td>$i*$j=" . $i * $j . "</td>";
	}
	echo "<tr>";
}
echo "</table>";
?>

</body>
</html>