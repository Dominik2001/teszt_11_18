<?php
 function araz(&$tomb,$valtozas)
 {
   for($i=0;$i<count($tomb);$i++)
   {
     $tomb[$i] = $tomb[$i]*(1+$valtozas);
   }
   return;
 }
?>
