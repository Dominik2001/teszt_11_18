<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	require_once("31.php");
?>

<!DOCTYPE html>
<html lang="hu">
<head>
	<title>valami</title>
	<meta charset="UTF-8"/>
</head>
<body>
	<?php
		$szamok = array( array(1, 2, 3, 4),
							  array(5,6,7,8),
							  array(9,10,11,12)
							);
		$tablica = new tablazat(1,$szamok);
		echo "<pre>";
		print_r($tablica);
		echo "</pre>";
		$tablica->kirajzol();
		echo $tablica;
	?>

</body>
</html>