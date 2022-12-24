<!DOCTYPE html>
<html lang="en">
<head>
    <title>Statement Control</title>
</head>
<body>
    <table border="1">
		<?php
		for ($x=1; $x <= 5; $x++) { 
			echo "<tr>";
			for ($y=1; $y <= 6; $y++) { 
				$table = "<th>elemen $x - $y</th>";
				echo $table;
			}
			echo"</tr>";
        }
		?>
	</table>
</body>
</html>