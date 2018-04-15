<?php
class Pokemon
{
  public $PV = 20, $XP = 10, $bonbons = 10;

  public function attaquer(Pokemon $cible){
    $cible->subir_attaque(5);
    $this->XP += 2;
    $this->gagner_bonbons($this->XP/2);
  }
  public function subir_attaque($degats){
    $this->subir_degats($degats);
    $this->perdre_bonbons($this->XP/2);
  }
  public function subir_degats($degats){
    $this->PV -= $degats;
  }
  public function gagner_bonbons($nbr_de_bonbons){
    $this->bonbons += $nbr_de_bonbons;
  }
  public function perdre_bonbons($nbr_de_bonbons){
    $this->bonbons -= $nbr_de_bonbons;
  }
}

$bulbi = new Pokemon;
$cara = new Pokemon;

$cara->attaquer($bulbi);

echo '<pre>';
var_dump($cara);
echo '</pre>';
echo '<pre>';
var_dump($bulbi);
echo '</pre>';
/*
  Cara:
    PV = 20
    XP = 10 + 2
    bonbons = 10 + 6

  Bulbli:
    PV = 20 - 5
    XP = 10
    bonbons = 10 - 5
*/
