<?php

function hitungDenda($tglHarusKembali, $tglKembali){
  $newTglKmbl = strtotime($tglKembali);
  $newTglHrsKmbl = strtotime($tglHarusKembali); 
  //1 hari 86400 detik
  $keterlambatan = round(($newTglKmbl - $newTglHrsKmbl) / 86400);
	$denda = 5000;
	if ($keterlambatan > 0) {
		return $keterlambatan * $denda;
	}
	else{
		return 0;
	}
}

echo "Besarnya denda adalah: Rp ".hitungDenda("2021-02-03","2021-04-05");
?>