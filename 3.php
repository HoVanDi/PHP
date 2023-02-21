Tìm UCLN, BSCNN của 2 a,b <br>

<?php

$a = 45;
$b = 150;
            if($a>$b){
                for($i=1;$i<=$b;$i++){
                    if($a%$i==0 && $b%$i==0){
                        $c=$i;
                    }
                }               
                if($a*$b%$c==0){
                    $d=$a*$b/$c;
                }
            }
            else if($a<$b){
                for($i=1;$i<=$a;$i++){
                    if($a%$i==0 && $b%$i==0){
                        $c=$i;
                    }
                }
                if($a*$b%$c==0){
                    $d=$a*$b/$c;
                }
            }
           
  echo "USCLN của ( $a và $b ) là $c <br>"." BSCNN của ( $a và $b ) là $d";
               
        


?>