<?php
class Voiture
{
  private $immatriculation,
          $date_mise_en_circulation,
          $kilometrage,
          $modele,
          $marque,
          $couleur,
          $poids,
          $free = true,
          $classe,
          $origine,
          $usure,
          $age;

  public function __construct($immatriculation,
    $date_mise_en_circulation, $kilometrage,
    $modele, $marque, $couleur, $poids)
  {
    $this->immatriculation = ($immatriculation);
    $this->date_mise_en_circulation = (
      $date_mise_en_circulation);
    $this->kilometrage =($kilometrage);
    $this->modele =($modele);
    $this->marque =($marque);
    $this->couleur =($couleur);
    $this->poids =($poids);

    $this->free     = $this->is_free();
    $this->classe   = $this->quelle_classe();
    $this->origine  = $this->quelle_origine();
    $this->usure    = $this->quelle_usure();
    $this->age      = $this->quel_age();
  }

  private function is_free()
  {
    return $bool = ($this->marque === "Audi") ? false : true ;
  }

  private function quelle_classe()
  {
    if($this->poids < 3.5){
      return "Utilitaire";
    }
    else{
      return "Commercial";
    }
  }

  private function quelle_origine()
  {
    $deux_premiers_caractères =
    $this->immatriculation[0].$this->immatriculation[1];
    switch ($deux_premiers_caractères) {
      case 'BE': return "Belgique"; break;
      case 'FR': return "France"; break;
      case 'DE': return "Pays-Bas"; break;
      default:   return "VOITURE VOLEE"; break;
    }
  }

  private function quelle_usure()
  {
    if($this->kilometrage < 100000){
      return "low";
    }
    elseif ($this->kilometrage < 200000) {
      return "middle";
    }
    else{
      return "high";
    }
  }

  private function quel_age()
  {
    $date = date_create_from_format('d/m/Y',
            $this->date_mise_en_circulation);
    $anne_fabrication = $date->format('Y');
    $cette_annee = (new DateTime())->format('Y');
    return $age = $cette_annee - $anne_fabrication;
  }

  public function setKilometrage($kilometrage)
  {
    if(is_int($kilometrage)){
      $this->kilometrage = $kilometrage;
      $this->usure = $this->quelle_usure();
    }
  }

  public function rouler(){
    $this->setKilometrage($this->kilometrage + 210000);
  }

  public function display(){
    $url_image = "../../assets/img/voitures/".$this->modele.".png";
    echo "
      <table>
        <tr>
          <th>Photo</th>
          <td>
            <img style='width:200px' src='".$url_image."' alt='Photo de voiture'/>
          </td>
        </tr>
        <tr>
          <th>Immatriculation</th>
          <td>".$this->immatriculation."</td>
        </tr>
        <tr>
          <th>Date de mise en circulation</th>
          <td>".$this->date_mise_en_circulation."</td>
        </tr>
        <tr>
          <th>Kilométrage</th>
          <td>".$this->kilometrage."</td>
        </tr>
        <tr>
          <th>Modèle</th>
          <td>".$this->modele."</td>
        </tr>
        <tr>
          <th>Marque</th>
          <td>".$this->marque."</td>
        </tr>
        <tr>
          <th>Couleur</th>
          <td>".$this->couleur."</td>
        </tr>
        <tr>
          <th>Poids</th>
          <td>".$this->poids."</td>
        </tr>
        <tr>
          <th>Status</th>
          <td>".$this->free."</td>
        </tr>
        <tr>
          <th>Pays d'origine</th>
          <td>".$this->origine."</td>
        </tr>
        <tr>
          <th>Age / Etat</th>
          <td>".$this->age." ans / ".$this->usure."</td>
        </tr>
      </table>
      ";
  }
}

$titine = new Voiture("BE-1234567", "12/04/2001", 50000,
  "SLK", "Mercedes", "Gris métalisé", 1.2);

$titine->rouler();
$titine->display();
