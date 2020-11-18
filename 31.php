<?php
	class tablazat
	{
		private $border;
		private $tomb = array();	//Kétdimenziós tömb, amely tartalmazza az adatokat
		public function __construct($border_, $tomb_)
		{
			$this->border = $border_;
			$this->tomb = $tomb_;
		}
		public function kirajzol()
		{
			echo "<table border='".$this->border."'>";
			$sor = count($this->tomb);
			$oszlop = count($this->tomb[0]);
			for($i=0;$i<$sor;$i++)
			{
				echo "<tr>";
				for($j=0;$j<$oszlop;$j++)
				{
					echo "<td>".$this->tomb[$i][$j]."</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		}
		public function __toString()
		{
			$string = "<table border='".$this->border."'>";
			$sor = count($this->tomb);
			$oszlop = count($this->tomb[0]);
			for($i=0;$i<$sor;$i++)
			{
				$string = $string . "<tr>";
				for($j=0;$j<$oszlop;$j++)
				{
					$string = $string . "<td>".$this->tomb[$i][$j]."</td>";
				}
				$string = $string . "</tr>";
			}
			$string = $string . "</table>";
			return $string;
		}
	}
?>