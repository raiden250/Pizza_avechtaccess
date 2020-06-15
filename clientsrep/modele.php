<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
</head>
<body>



<?php
//echo "78";
require_once('conf.php');
//echo "79";
require_once('clientsrep/clients.class.php');
require_once('clientsrep/commande.class.php');
//echo "80";

function dbconnect(){
        try{
	           $bdd=new PDO($GLOBALS['_connexion'],$GLOBALS['_username'],$GLOBALS['_password'],array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));

            }
        catch(PDOExeption $e){

	           print"	Erreur ! :" . $e->getMessage() . "<br/>"; die();
            }

        return $bdd;
}
function get_all_clients(){
        $bdd=dbconnect();
        //echo("je suis connecté à ma base ".$GLOBALS['_dbname']);
        $sql_req="select * from client";
        $execution=$bdd->query($sql_req)or die("query Error ");
        $result=$execution->fetchAll(PDO::FETCH_OBJ);
        // var_dump($result);
        $clients=array();
        // $tab_ingredients;
        foreach ($result as $ligne) {
            //instanciation d'une pizza
            $clients[$ligne->NroClie]= new Clients($ligne->NroClie,$ligne->NomClie,$ligne->PrenomClie,$ligne->AdresseClie,$ligne->VilleClie,$ligne->NroTelClie,$ligne->TitreClie);
            // $tab_ingredients

        }

        return $clients;
}
function get_clients($id){

        $bdd=dbconnect();
        //echo("je suis connecté à ma base ".$GLOBALS['_dbname']);
        $sql_req="select * from client where NroClie=".$id;
				//echo $sql_req;
        $execution=$bdd->query($sql_req)or die("query Error ");
        $result=$execution->fetchAll(PDO::FETCH_OBJ);
        // var_dump($result);
        $clients=array();
        // $tab_ingredients;
        foreach ($result as $ligne) {
            //instanciation d'une pizza
						$clients[$ligne->NroClie]= new Clients($ligne->NroClie,$ligne->NomClie,$ligne->PrenomClie,$ligne->AdresseClie,$ligne->VilleClie,$ligne->NroTelClie,$ligne->TitreClie);
            // $tab_ingredients

        }

        return $clients;
}

function remove_clients($id){

        $bdd=dbconnect();
        //echo("je suis connecté à ma base ".$GLOBALS['_dbname']);
        $sql_req="DELETE FROM `client` WHERE NroClie=".$id;
				//echo $sql_req;


        $execution=$bdd->query($sql_req)or die("query Error ");
        $result=$execution->fetchAll(PDO::FETCH_OBJ);
        // var_dump($result);

}
function edit_clients($client){

				$nom=$client->getNom();
				$prenom=$client->getPrenom();
				$adresse=$client->getAdresse();
				$ville=$client->getVille();
				$tel=$client->getTel();
				$sexe=$client->getSexe();
				$id=$client->getId();
        $bdd=dbconnect();
        //echo("je suis connecté à ma base ".$GLOBALS['_dbname']);

        $sql_req="UPDATE `client` SET `NomClie`='$nom',`PrenomClie`='$prenom',`AdresseClie`='$adresse',`VilleClie`='$ville',`NroTelClie`='$tel',`TitreClie`='$sexe' WHERE NroClie=".$id;

        $execution=$bdd->query($sql_req)or die("query Error ");
        $result=$execution->fetchAll(PDO::FETCH_OBJ);
        // var_dump($result);

}

function get_all_commande($id){
        $bdd=dbconnect();
        //echo("je suis connecté à ma base ".$GLOBALS['_dbname']);
        $sql_req="select * from commande where NroClieCmde=".$id;
        $execution=$bdd->query($sql_req)or die("query Error ");
        $result=$execution->fetchAll(PDO::FETCH_OBJ);
        // var_dump($result);
        $commande=array();
        // $tab_ingredients;
        foreach ($result as $ligne) {
            //instanciation d'une pizza
            $commande[$ligne->NroCmde]= new Commande($ligne->NroCmde,$ligne->DateCmde,$ligne->HeureCmde,$ligne->NroClieCmde,$ligne->NroLivrCmde);
            // $tab_ingredients

        }
        return $commande;
}

function create_clients($client){
				$nom=$client->getNom();
				$prenom=$client->getPrenom();
				$adresse=$client->getAdresse();
				$ville=$client->getVille();
				$tel=$client->getTel();
				$sexe=$client->getSexe();
        $bdd=dbconnect();
        //echo("je suis connecté à ma base ".$GLOBALS['_dbname']);
        $sql_req="INSERT INTO `client`(`NomClie`, `PrenomClie`, `AdresseClie`, `VilleClie`, `NroTelClie`, `TitreClie`) VALUES ('$nom','$prenom','$adresse','$ville',$tel,'$sexe')";
			//	echo $sql_req;


        $execution=$bdd->query($sql_req)or die("query Error ");
        $result=$execution->fetchAll(PDO::FETCH_OBJ);
        // var_dump($result);

}


?>
