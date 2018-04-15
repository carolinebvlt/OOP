<?php
function chargerClasse($classe)
{
  require  'mes_classes/' . $classe . '.php';
}
spl_autolad_register('chargerClasse');
$pokemon = new Pokemon;
