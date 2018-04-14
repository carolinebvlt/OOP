<?php
class Pokemon
{
  public  $nom,
          $type,
          $PV,
          $XP;

  public function attaquer(Pokemon $cible){
    $cible->subir_degats(5);
    $this->XP = $this->XP + 1;
  }
  public function subir_degats($degats){
    $this->PV = $this_2->PV - $degats;
  }
}
$pokemon_1 = new Pokemon;
$pokemon_2 = new Pokemon;
$pokemon_1->attaquer($pokemon_2);

$premier_pokemon->attaquer();


echo '<pre>';
var_dump($premier_pokemon);
echo '</pre>';
