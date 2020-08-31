<?php

include "header.php";
class Film{
  private $id;
  private $nom;
  private $realisateur;
  private $annee;

  public function __construct($id, $nom, $realisateur, $annee){

    $this->id = $id;
    $this->nom = $nom;
    $this->realisateur = $realisateur;
    $this->annee = $annee;
  }


  public function id(){
    return $this->id;
  }
  public function nom(){
    return $this->nom;
  }
  public function realisateur(){
    return $this->realisateur;
  }
  public function annee(){
    return $this->annee;
  }
}
  $newFilm = new Film("1", "Commando", "Mark_Lester", "1986");
  echo "le titre du film est " . $newFilm->nom() . " " . "et à été réalisé en " . $newFilm->annee();

?>
