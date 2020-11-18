<?php
error_reporting(E_ALL);
ini_set('display errors', '1');
require_once("taxis_autos.php");
?>

<!DOCTYPE html>
<html lang="hu">
 <head>
 <title>valami</title>
 <meta charset="UTF-8"/>
 
 </head>
 <body>
   <?php
    $ujTaxi = new Taxi("benzin",8,60,300);
    echo "<pre>";
    var_dump($ujTaxi);
    echo "</pre>";
   
    $ujTaxi->tankol(80);
    echo "<pre>";
    var_dump($ujTaxi);
    echo "</pre>";

    $ujTaxi->fuvar(100);
    echo "<pre>";
    var_dump($ujTaxi);
    echo "</pre>";

    ?>
 </body>
</html>