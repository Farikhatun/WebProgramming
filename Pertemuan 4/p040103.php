<?php

  function buatBintangAdv($n, $m){
    if($m != true){
      for($i=0; $i<= $n; $i++){  
        for($j=1;$j<=$i;$j++){  
          echo "* ";  
        }
        echo "<br>";  
      }   
    }else{
      for($i=0; $i <= $n; $i++){  
        for($j= $n - $i; $j >= 1; $j--){  
          echo "* ";  
        }  
        echo "<br>";  
      }   
    }
  }
  
  buatBintangAdv(4,false);
  buatBintangAdv(5,true);
   
?>