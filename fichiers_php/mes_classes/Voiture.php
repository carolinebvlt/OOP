<?php
class Voiture
{
  protected $fiabilite;

  const TRES_FIABLE = 10;
  const MOYENNENEMENT_FIABLE = 5;
  const PEU_FIABLE = 1;

  public function getFiabilite()
  {
    return $this->fiabilite;
  }
}

class Mercedes extends Voiture
{
  public function __construct()
  {
    $this->fiabilite = Voiture::TRES_FIABLE;
  }
}
class Volkswagen extends Voiture
{
  public function __construct()
  {
    $this->fiabilite = Voiture::MOYENNENEMENT_FIABLE;
  }
}
class Dacia extends Voiture
{
  public function __construct()
  {
    $this->fiabilite = Voiture::PEU_FIABLE;
  }
}

$Atlas = new Volkswagen;
$SLK = new Mercedes;
$Duster = new Dacia;

echo "Fiabilité de l'Atlas : ". $Atlas->getFiabilite(). "<br/>";
echo "Fiabilité de la SLK : ". $SLK->getFiabilite(). "<br/>";
echo "Fiabilité de la Duster : ". $Duster->getFiabilite(). "<br/>";

                                                   
