<?php
require_once("atlagvalidal.php");
?>

<!DOCTYPE html>
<html lang="hu ">
<head>
	<title>Függvény és Regex</title>
	<meta charset="UTF-8"/>

</head>
<body>
 <?php
    if(!isset($_POST["elkuld"]))
    {
        echo "Nem űrlapből jöttél";
    }
		else if(!validal($_POST["szoveg"]))
		{
			echo "A bemeneti formátum nem megfelelő!";
			header("refresh:3; url=atlagvalidal.html");
			exit;
		}
    else
    {
        $szoveg = $_POST["szoveg"];
        $sorok = explode(";",$szoveg);
       	if($sorok[count($sorok)-1]=="")
        {
            unset($sorok[count($sorok)-1]);
        }
      //  var_dump($sorok);

			echo "<table border ='1'>";
				echo "<tr>";
					echo "<th>Tantárgy</th>";
					echo "<th>Jegyek</th>";
					echo "<th>Átlag</th>";
				echo "</tr>";
				for($i=0;$i<count($sorok);$i++)
				{
					$ujtomb = explode(" ",$sorok[$i]);
					//var_dump($ujtomb);
					echo "<tr>";
							echo "<td>$ujtomb[0]</td>";
							echo "<td>";
										for($j=1;$j<count($ujtomb);$j++)
										{
											echo $ujtomb[$j]," ";
										}
							echo "</td>";
							echo "<td>".round(atlag($ujtomb),2)."</td>";
					echo "</tr>";
					unset($ujtomb);
				}
			echo "</table>";

    }


 ?>
</body>
</html>
