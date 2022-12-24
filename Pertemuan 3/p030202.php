<!DOCTYPE html>
<html lang="en">
<head>
    <title>Statement Control</title>
</head>
<body>
    <table border="1">
		<?php
		for ($x=1; $x <= 5; $x++) { 
			echo "<tr style='border-color:red;'>";
			for ($y=1; $y <= 6; $y++) { 
                if ($x % 2 == 1 && $y % 2 == 1 ) {
			 	$table = "<th style='background:red;'>elemen $x - $y</th>";
			 }elseif ($x % 2 == 0 && $y % 2 == 0 ) {
			 	$table = "<th style='background:red;'>elemen $x - $y</th>";
			 }else{
			 	$table = "<th style='color:red;'>elemen $x - $y</th>";
			 } 
				echo $table;
			}
			echo"</tr>";
		}
		?>
	</table>
</body>
</html>