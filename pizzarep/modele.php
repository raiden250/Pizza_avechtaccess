<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
</head>
<body>



<?php
require_once('conf.php');
require_once('pizzarep/pizza.class.php');
require_once('pizzarep/ingredient.class.php');
function dbconnect(){
        try{
	           $bdd=new PDO($GLOBALS['_connexion'],$GLOBALS['_username'],$GLOBALS['_password'],array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));

            }
        catch(PDOExeption $e){

	           print"	Erreur ! :" . $e->getMessage() . "<br/>"; die();
            }

        return $bdd;
}
function get_all_pizza(){
        $bdd=dbconnect();
        echo("je suis connecté à ma base ".$GLOBALS['_dbname']);
        $sql_req="select * from pizza";
        $execution=$bdd->query($sql_req)or die("query Error ");
        $result=$execution->fetchAll(PDO::FETCH_OBJ);
        // var_dump($result);
        $pizza=array();
        // $tab_ingredients;
        foreach ($result as $ligne) {
            //instanciation d'une pizza
            $pizza[$ligne->NroPizz]= new Pizza($ligne->NroPizz,$ligne->DesignPizz,$ligne->description,$ligne->TarifPizz);
            // $tab_ingredients

        }

        return $pizza;
}

function get_pizza($id){

        $bdd=dbconnect();
        //echo("je suis connecté à ma base ".$GLOBALS['_dbname']);
        $sql_req="select * from pizza where NroPizz=".$id;
        $execution=$bdd->query($sql_req)or die("query Error ");
        $result=$execution->fetchAll(PDO::FETCH_OBJ);
        // var_dump($result);
        $pizza=array();
        // $tab_ingredients;
        foreach ($result as $ligne) {
            //instanciation d'une pizza
            $pizza[$ligne->NroPizz]= new Pizza($ligne->NroPizz,$ligne->DesignPizz,$ligne->description,$ligne->TarifPizz);
            // $tab_ingredients

        }

        return $pizza;
}
function edit_pizza($pizza){
				$nom=$pizza->getNom();
				$tarif=$pizza->getPrix();
				$description=$pizza->getDescription();

				$id=$pizza->getId();
        $bdd=dbconnect();
        //echo("je suis connecté à ma base ".$GLOBALS['_dbname']);

        $sql_req="UPDATE pizza SET DesignPizz='$nom',description='$description',TarifPizz='$tarif' WHERE NroPizz=".$id;
			//	echo "--->".$sql_req;
        $execution=$bdd->query($sql_req)or die("query Error ");
        $result=$execution->fetchAll(PDO::FETCH_OBJ);
        // var_dump($result);

}
function create_pizza($pizza){

				$nom=$pizza->getNom();
				$tarif=$pizza->getPrix();
				$description=$pizza->getDescription();
				$id=$pizza->getId();
        $bdd=dbconnect();
        //echo("je suis connecté à ma base ".$GLOBALS['_dbname']);
        $sql_req="INSERT INTO `pizza`(`DesignPizz`,`description`,`TarifPizz`) VALUES ('$nom','$description',$tarif)";
			//	echo $sql_req;


        $execution=$bdd->query($sql_req)or die("query Error ");
        $result=$execution->fetchAll(PDO::FETCH_OBJ);
        // var_dump($result);

}

function remove_pizza($id){

        $bdd=dbconnect();
        //echo("je suis connecté à ma base ".$GLOBALS['_dbname']);
        $sql_req="DELETE FROM `pizza` WHERE NroPizz=".$id;
				//echo $sql_req;


        $execution=$bdd->query($sql_req)or die("query Error ");
        $result=$execution->fetchAll(PDO::FETCH_OBJ);
        // var_dump($result);

}

function get_all_ingredients($idPizza){
        $bdd=dbconnect();
        //echo("je suis connecté à ma base ".$GLOBALS['_dbname']);

        $sql_req="SELECT ingredient.CodeIngr,ingredient.NomIngr,ingredient.UniteIngr FROM ingredient JOIN pizza JOIN composer WHERE pizza.NroPizz=composer.NroPizzComp AND ingredient.CodeIngr=composer.CodeIngrComp AND pizza.NroPizz=".$idPizza;
			//	echo("<br>");
			//	echo "query".$sql_req;
				$execution=$bdd->query($sql_req)or die("query Error ");
        $result=$execution->fetchAll(PDO::FETCH_OBJ);
	//echo("<br>");
			//	var_dump($result);
        $ingredients=array();
        // $tab_ingredients;
        foreach ($result as $ligne) {
        //  echo  "instanciation d'une pizza";
					//echo $ligne->CodeIngr." ".$ligne->NomIngr." ".$ligne->UniteIngr;
            $ingredients[$ligne->CodeIngr]= new Ingredient($ligne->CodeIngr,$ligne->NomIngr,$ligne->UniteIngr);

            //echo  "instanciation d'une pizza ok";

        }

        return $ingredients;
}


?>
