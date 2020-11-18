<?php
error_reporting(E_ALL);
ini_set('display errors', '1');
require_once("matekos.php");
?>

<!DOCTYPE html>
<html lang="hu">
 <head>
 <title>matekos</title>
 <meta charset="UTF-8"/>
 
 </head>
 <body>
   <?php
    echo "Az 5 cm sugaru kör kerülete: " . 2 * 5 * Matek::pi . " cm, területe:  " . 5 * 5 * Matek::pi . " cm2<br>";
    echo "A 15 cm élű kocka térfogata: " . Matek::kob(15) . " cm3 <br>";
    echo "A 10 faktoriálisa: " . Matek::faktorialis(10) . "<br>;"




    ?>
 </body>
</html>