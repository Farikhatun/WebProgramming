<?php

  function buatBintangReverse($n){
    for($i=0; $i <= $n; $i++){  
      for($j= $n - $i; $j >= 1; $j--){  
        echo "* ";  
      }  
      echo "<br>";  
    }   
  }

  buatBintangReverse(4);
   
?>