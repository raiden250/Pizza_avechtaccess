<?php
class Pizza
{
    private $id;
    private $nom;
    private $description;
    private $prix;

    public function __construct($_id,$_nom,$_description,$_prix)
    {
        $this->id = $_id;
        $this->nom = $_nom;
        $this->description = $_description;
        $this->prix = $_prix;
    }
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
    public function setDescription($_description){
       $this->description=$_description;
   }
   public function getDescription(){
       return $this->description;
   }
     public function setPrix($_prix){
        $this->prix=$_prix;
    }
    public function getPrix(){
        return $this->prix;
    }

}
