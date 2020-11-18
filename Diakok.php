<?php
error_reporting(E_ALL);
ini_set('display errors', '1');
require_once("Tanulok.php");
?>

<!DOCTYPE html>
<html lang="hu">
 <head>
 <title>valami</title>
 <meta charset="UTF-8"/>
 
 </head>
 <body>
   <?php
    $tanu = new Tanulo("Aladár");
    $tanu->jegyetkap(1);
    $tanu->jegyetkap(5);
    $tanu->jegyetkap(2);
    $tanu->jegyetkap(3);
    $tanu->jegyetkap(4); 

    
    echo "<pre>";
    echo $tanu->kiiro();
    echo "</pre>";

    echo "<pre>";
    echo $tanu->atlag();
    echo "</pre>";


    $tanu->setIskola("Csány Teknikum");
    var_dump($tanu);
    echo $tanu->getNev()." tanulo ".$tanu->getIskola()." iskolába jár"; 



    ?>
 </body>
</html>