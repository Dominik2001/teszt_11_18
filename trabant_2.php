<?php
error_reporting(E_ALL);
ini_set('display errors', '1');
require_once("automobil.php");
?>

<!DOCTYPE html>
<html lang="hu">
 <head>
 <title>valami</title>
 <meta charset="UTF-8"/>
 
 </head>
 <body>
   <?php
    $trabant = new automobil("benzin",8,40);
    echo "<pre>";
    var_dump($trabant);
    echo "</pre>";
   
    $trabant->tankol(80);
    echo "<pre>";
    var_dump($trabant);
    echo "</pre>";

    $trabant->megy(100);
    echo "<pre>";
    var_dump($trabant);
    echo "</pre>";

    $trabant->megy(500);
    echo "<pre>";
    var_dump($trabant);
    echo "</pre>";
    
    /*unset($trabant);  // unset --> felszabadítja a memóriát mielött lefut a program.
    
    $opel = new automobil("dizel",6);
    echo "<pre>";
    var_dump($opel);
    echo "</pre>";

    echo $opel->uzemanyagMennyiseg . "<br />";
    echo $opel->uzemanyagTipus . "<br>";
   */
  
    ?>
 </body>
</html>