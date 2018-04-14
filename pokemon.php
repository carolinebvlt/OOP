<?php
class Pokemon
{
  public  $nom, $type, $PV = 20, $XP;

  public function __construct($un_nom, $un_type, $nbr_XP)
  {
    $this->nom  = $un_nom;
    $this->type = $un_type;
    $this->XP   = $nbr_XP;
  }
}
$pokemon1 = new Pokemon('Cara', 'Eau', 18);
$pokemon2 = new Pokemon('Bulbi', 'Plante', 32);

echo '<pre>';
var_dump($pokemon1);
echo '</pre>';
echo '<pre>';
var_dump($pokemon2);
echo '</pre>';
