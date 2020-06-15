<?php
	$idClients=$action;
	$act=$id;
	$validEdit=$edit;
//	echo "act";
	//echo $act;
	//echo "string";

	require('clientsrep/modele.php');

	if(empty($idClients)){
	//	echo "-->1--";
			if(empty($act)){
			//	echo "-->2--";
						$tabclients=get_all_clients();
						require ('clientsrep/viewclientsall.php');
			}else {
				 if(empty($name)){
					 	require ('clientsrep/createclients.php');
				}else{
						$clients=new clients($idClients,$name,$prenom,$adresse,$ville,$tel,$sexe);
						create_clients($clients);
						$tabclients=get_all_clients();
						require ('clientsrep/viewclientsall.php');
				}
			}
	}
	else{
		//echo "45";
		//echo "validEdit ---->".$validEdit;
	if(empty($validEdit)){
	//	echo "<br/>";
	//	echo "50";
			$tabclients=get_clients($idClients);

				if($act=="show"){
					//echo "id ---->.$idclients";
				//	echo "47";
				//	$tab_ingredients=get_all_ingredients($idClients);
				$tab_commande=get_all_commande($idClients);
					require ('clientsrep/viewclients.php');
				}elseif($act=="edit") {
				//	echo "48";
					require ('clientsrep/editclients.php');
				}else {
				//	echo "46";
					remove_clients($idClients);
					$tabclients=get_all_clients();
					require ('clientsrep/viewclientsall.php');
				}
			}else{
			//	echo "45";

				$clients=new clients($idClients,$name,$prenom,$adresse,$ville,$tel,$sexe);
			//	echo "je vais modifier la clients".$clients->getNom();
				edit_clients($clients);
				//echo ($clients->getNom());
				$tabclients=get_all_clients();
				require ('clientsrep/viewclientsall.php');
			}


	}
	//var_dump($tabclientss);







?>
