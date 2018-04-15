<?php
class Pokemon
{
  private $date_reveil;

  public function endormir_jusque_lundi_prochain(Pokemon $cible)
  {
    $next_monday = $this->get_next_monday();
    $cible->setDate_reveil($next_monday);
  }

  private function get_next_monday()
  {
    $today = new DateTime;
    $today_jour = $today->format('N');
    switch ($today_jour) {
      case '1': $i = 'P0D'; break;
      case '2': $i = 'P6D'; break;
      case '3': $i = 'P5D'; break;
      case '4': $i = 'P4D'; break;
      case '5': $i = 'P3D'; break;
      case '6': $i = 'P2D'; break;
      case '7': $i = 'P1D'; break;
    }
    $interval = new DateInterval($i);
    return $next_monday = $today->add($interval);
  }


  public function getDate_reveil()
  {

  }
  public function setDate_reveil()
  {

  }
}

$pokemon = new Pokemon;
