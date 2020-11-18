<?php
class automobil
{
private $uzemanyagMennyiseg = 0;
protected $uzemanyagTipus;
private $kmOra;
private $fogyasztas;
private $uzemanyagTartalyMeret;



public function __construct($tipus,$fogy,$utm) 
{
  $this->uzemanyagTipus = $tipus; //atributumok
  $this->uzemanyagMennyiseg = 0;
  $this->fogyasztas = $fogy;
  $this->kmOra = 0;
  $this->uzemanyagTartalyMeret = $utm;
}

/*public function __destruct()  //memória kezelés
  {
      echo "Autót eladtuk ".$this->uzemanyagMennyiseg." literrel a tankban.<br />";   //megszüntetéskor történik
  }
*/

public function tankol($mennyiseg)
{
  if ($this->uzemanyagTartalyMeret < $this->uzemanyagMennyiseg+$mennyiseg)
    {
      echo "Nem tudsz ennyit tankolni";
      $this->uzemanyagMennyiseg = $this->uzemanyagTartalyMeret;
    }
    else 
    {
      echo "Tankoltunk"; 
      $this->uzemanyagMennyiseg += $mennyiseg;
    }
}

public function megy($tavolsag) //távolságnk van üzemanyag igénye.ha nagyobb az igny mint a mennyiség akkor..le kell kezelni vagy mi
{
    $uzemanyagIgeny = $this->fogyasztas*$tavolsag/100;
    if ($uzemanyagIgeny > $this->uzemanyagMennyiseg)
    {
      $this->kmOra += $this->uzemanyagMennyiseg/$this->fogyasztas*100;
      echo "Csak ". $this->uzemanyagMennyiseg/$this->fogyasztas*100 
      . " km-re volt elegendő az üzemanyag";
      $this->uzemanyagMennyiseg = 0;
    }
    else{
      $this->kmOra += $tavolsag;
      $this->uzemanyagMennyiseg += $this->fogyasztas*$tavolsag/100;
      echo("Eléred a célt");
    }

}

}


?>