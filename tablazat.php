<?php
class Tanulo
{
private $nev;
protected $jegy = array();
private $db = 0;
protected $iskola;

public function __construct($name) 
{
  $this->nev = $name;
}


/*public function  __destruct()
{
    echo ($this->nev . " kiiratkozott");
}*/

public function jegyetkap($jgy)
{

  $this->jegy[$this->db] = $jgy;
  $this->db++;
}

public function atlag()
{
  $ossz = 0;
  $db=0;
  for($i=1;$i<count($this->jegy);$i++)
  {
    $ossz +=$this->jegy[$i];
    $db++;
  }
  return ($ossz/$db);
}

public function kiiro()
{
  if($this->db == 0)
  {
    echo "Nincs jegye";
  }
  else
  {
    echo "Neve: " . $this->nev . "Jegyek: " .var_dump($this->jegy);
    // var_dump($this->jegy);
  }
}

public function setIskola($iskolanev)
{
    $this->iskola = $iskolanev;
}

public function getIskola()
{
    return $this->iskola;
}

public function getNev()
{
    return $this->nev;
}



}

?>