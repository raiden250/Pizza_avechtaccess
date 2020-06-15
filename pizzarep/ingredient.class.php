<?php
class Ingredient
{
    private $id;
    private $nomIn;
    private $uniteIn;





    public function __construct($_id, $_nomIn,$_uniteIn)
    {
        $this->id = $_id;
        $this->nomIn = $_nomIn;
        $this->uniteIn = $_uniteIn;
    }
    public function setId($_id){
        $this->id=$_id;
    }
    public function getId(){
        return $this->id;
    }
     public function setNomIn($_nomIn){
        $this->nomIn=$_nomIn;
    }
    public function getNomIn(){
        return $this->nomIn;
    }
     public function setUniteIn($_uniteIn){
        $this->uniteIn=$_uniteIn;
    }
    public function getUniteIn(){
        return $this->uniteIn;
    }

}
