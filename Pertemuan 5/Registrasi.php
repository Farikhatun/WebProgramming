<?php 
	$target = $_FILES['foto']['name'];
    $temp = $_FILES['foto']['tmp_name'];
    move_uploaded_file($temp, $target);
 ?>

<center>
   <img src="<?= $target ?>" width="100px"> 
   <h2><?= $_POST['namadepan']." ".$_POST['namabelakang']?></h2>
</center>
 