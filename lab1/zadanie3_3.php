<?php
function tabliczka($bok) {
   for ($i = 0;$i<=$bok;$i++){
       printf ("%4d",$i);
   }
    echo "\n";
   for ($i = 1; $i<=$bok; $i++){
    printf ("%4d",$i);
       for($j=1; $j<=$bok; $j++){
           printf ("%4d",$i*$j, " ");
       }
       echo "\n";
   }
}
tabliczka(10);
?>