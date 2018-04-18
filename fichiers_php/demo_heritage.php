<?php
function chargerClasse($classe){
  require 'mes_classes/'.$classe.'.php';
}
spl_autoload_register('chargerClasse');

/*------------------------------------------------*/

$velo = new Vehicule_sans_moteur;
$velo->rouler();
$voiture = new Vehicule_avec_moteur;
var_dump($voiture);
