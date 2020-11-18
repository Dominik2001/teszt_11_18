<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once("arazfuggveny.php");
?>
<!DOCTYPE html>
<html lang="hu">
<head>
	<title>Függvények és Reguláris kifejezések</title>
	<meta charset="UTF-8"/>
</head>
<body>
 <?php
        //echo"<h1>Függvények és Reguláris kifejezések együtt.</h1>";
        $arak = array(100,200,500,1000);
        echo "Eredeti árak <br />";
        echo "<pre>";
        print_r($arak);
        echo "</pre>";
        $valt = 0.1; //10%os növelés.
        echo $valt*100 . "%-os növelés <br />";
        araz($arak,$valt);
        echo "Megnövelt árak<br />";
        echo "<pre>";
        print_r($arak);
        echo "</pre>";
 ?>
</body>
</html>
