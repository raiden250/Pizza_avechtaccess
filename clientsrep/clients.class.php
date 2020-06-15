<?php

/**
 * Created by PhpStorm.
 * User: Safinou
 * Date: 04/04/2017
 * Time: 15:08
 */
class Clients
{
    private $id;
    private $nom;
    private $prenom;
    private $adresse;
    private $ville;
    private $tel;
    private $sexe;





    public function __construct($_id, $_nom,$_prenom,$_adresse,$_ville,$_tel,$_sexe)
    {
        $this->id = $_id;
        $this->nom = $_nom;
        $this->prenom = $_prenom;
        $this->adresse = $_adresse;
        $this->ville = $_ville;
        $this->tel = $_tel;
        $this->sexe=$_sexe;
    }

  //   public function ajoutPizza($_id,_$nom,$_prix){
  //   	$sql_req="insert into pizza(".$_id.",".$_nom.",".$_prix.")";
		// $execution=$bdd->query($sql_req)or die("query Error ");
		// $result=$execution->fetchAll(PDO::FETCH_OBJ);

  //   }
    public function setId($_id){
        $this->id=$_id;
    }
    public function getId(){
        return $this->id;
    }
     public function setNom($_nom){
        $this->nom=$_nom;
    }
    public function getNom(){
        return $this->nom;
    }
     public function setPrenom($_prenom){
        $this->prenom=$_prenom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function setAdresse($_adresse){
       $this->adresse=$_adresse;
    }
    public function getAdresse(){
       return $this->adresse;
    }
    public function setVille($_ville){
      $this->ville=$_ville;
    }
    public function getVille(){
      return $this->ville;
    }

    public function setTel($_tel){
      $this->tel=$_tel;
    }
    public function getTel(){
      return $this->tel;
    }
    public function setSexe($_sexe){
        $this->sexe=$_sexe;
    }
    public function getSexe(){
        return $this->sexe;
    }

}
