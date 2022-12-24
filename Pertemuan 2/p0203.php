<!DOCTYPE html>
<html>
<head>
	<title>Story</title>
</head>
<body>
	<?php
	$paragraph1 = "Hello, my name is Eleanor. I am 13 years old. Everyone has a family and I have also. I love my family very much. I live with my family. Today I will share something about my family. There are 4 people in total in our family. My parents, my sister, and me. We are a very small family.";
	$paragraph2 = "My father is an engineer and my mother is a doctor, but after their work, they spend so much time with us. They both love us a lot. They work really hard to make our future better. It is a very happy family. If we face any bad time, my parents handle it with care.";
	
    //Menggabungkan 2 paragraf menjadi 1 variable
	$story = $paragraph1.$paragraph2;

	//Mengubah angka menjadi huruf
	$story = str_ireplace('13', 'thirteen', $story);
	$story = str_ireplace('4', 'four', $story);

	//menghitung jumlah karakter
	$count = strlen($story);

	//menghitung jumlah kata
	$countword = str_word_count($story);

	?>
<p>
	<?= $story ?>
</p><br>

<li><?= 'Jumlah karakter :'.$count ?></li>
<li><?= 'Jumlah kata :'.$countword ?></li>

</body>
</html>