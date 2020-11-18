<?php
function atlag($tomb)
{
  $osszeg = 0;
  for($i=1;$i<count($tomb);$i++)
  {
    $osszeg +=$tomb[$i];
  }
  return $osszeg/(count($tomb)-1);
  unset($tomb);
}

function validal($szoveg)
{
  $regKif = "/([a-zA-z]+([ ][1-5])+;)+/" ;
  preg_match_all($regKif,$szoveg,$tomb);
  if($tomb[0][0]==$szoveg)
  {
    return  True;
  }
  else
  {
    return  False;
  }
  unset($tomb);
}
?>
