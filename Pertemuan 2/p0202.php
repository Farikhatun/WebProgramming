<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$array = [["Sulis", "K3510001", "Solo", "RPL"], 
					["Rendi", "K3510002", "Klaten", "TKJ"],
					["Jatmiko", "K3510003", "Boyolali", "Multimedia"], 
					["Feri", "K3510004", "Wonogiri", "RPL"]]; 
	?>

	<ul>
		<li><?= $array[0][0]." | ".$array[0][1]." | ".$array[0][2]." | ".$array[0][3] ?></li>
		<li><?= $array[1][0]." | ".$array[1][1]." | ".$array[1][2]." | ".$array[1][3] ?></li>
		<li><?= $array[0][0]." | ".$array[2][1]." | ".$array[2][2]." | ".$array[2][3] ?></li>
		<li><?= $array[3][0]." | ".$array[3][1]." | ".$array[3][2]." | ".$array[3][3] ?></li>
	</ul>
</body>
</html>