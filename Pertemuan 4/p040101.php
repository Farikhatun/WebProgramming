<?php

  function buatBintang($n){
    for($i=0; $i<= $n; $i++){  
      for($j=1;$j<=$i;$j++){  
        echo "* ";  
      }  
      echo "<br>";  
    }   
  }
  
  buatBintang(4);
  buatBintang(5);
   
?>