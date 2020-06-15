<?php

/**
 * Created by PhpStorm.
 * User: Safinou
 * Date: 04/04/2017
 * Time: 15:08
 */

class Commande
{
    private $NroCmde;
    private $DateCmde;
    private $HeureCmde;
    private $NroClieCmde;
    private $NroLivrCmde;



    public function __construct($_NroCmde, $_DateCmde,$_HeureCmde,$_NroClieCmde,$_NroLivrCmde)
    {
        $this->NroCmde = $_NroCmde;
        $this->DateCmde = $_DateCmde;
        $this->HeureCmde = $_HeureCmde;
        $this->NroClieCmde = $_NroClieCmde;
        $this->NroLivrCmde = $_NroLivrCmde;

    }

  //   public function ajoutPizza($_NroCmde,_$DateCmde,$_prix){
  //   	$sql_req="insert into pizza(".$_NroCmde.",".$_DateCmde.",".$_prix.")";
		// $execution=$bdd->query($sql_req)or die("query Error ");
		// $result=$execution->fetchAll(PDO::FETCH_OBJ);

  //   }
    public function setNroCmde($_NroCmde){
        $this->NroCmde=$_NroCmde;
    }
    public function getNroCmde(){
        return $this->NroCmde;
    }
     public function setDateCmde($_DateCmde){
        $this->DateCmde=$_DateCmde;
    }
    public function getDateCmde(){
        return $this->DateCmde;
    }
     public function setHeureCmde($_HeureCmde){
        $this->HeureCmde=$_HeureCmde;
    }
    public function getHeureCmde(){
        return $this->HeureCmde;
    }
    public function setNroClieCmde($_NroClieCmde){
       $this->NroClieCmde=$_NroClieCmde;
    }
    public function getNroClieCmde(){
       return $this->NroClieCmde;
    }
    public function setNroLivrCmde($_NroLivrCmde){
      $this->NroLivrCmde=$_NroLivrCmde;
    }
    public function getNroLivrCmde(){
      return $this->NroLivrCmde;
    }

}
