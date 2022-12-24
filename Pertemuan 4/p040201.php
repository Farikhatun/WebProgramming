<?php

function hitungGaji($gol, $masaKerja){
  switch($gol){
    case 'A':
      if($masaKerja < 10){
        $gaji = "Rp5.000.000";
      }else{
        $gaji = "Rp7.000.000";
      }
      break;
    case 'B':
      if($masaKerja < 10){
        $gaji = "Rp6.000.000";
      }else{
        $gaji = "Rp8.000.000";
      }
      break;
    default :
      $gaji = "Inputan salah";
  }  
   return $gaji;
}

echo hitungGaji('A', 13);

?>