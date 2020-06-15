<?php
	$idPizza=$action;
	$act=$id;
	$validEdit=$edit;
	echo "string";
	echo $act;

	require('pizzarep/modele.php');

	if(empty($idPizza)){
			if(empty($act)){
						$tabpizzas=get_all_pizza();
						require ('pizzarep/viewpizzaall.php');
			}else {
				 if(empty($name)){
					 	require ('pizzarep/createPizza.php');
				}else{
						$pizza=new Pizza(1,$name,$description,$prix);
						create_pizza($pizza);
						$tabpizzas=get_all_pizza();
						require ('pizzarep/viewpizzaall.php');
				}
			}





	}
	else{
		//echo "validEdit ---->".$validEdit;
	if(empty($validEdit)){
			$tabpizzas=get_pizza($idPizza);

				if($act=="show"){
					//echo "id ---->.$idPizza";
					$tab_ingredients=get_all_ingredients($idPizza);
					require ('pizzarep/viewpizza.php');
				}elseif($act=="edit") {
				
					require ('pizzarep/editpizza.php');
				}else {
					remove_pizza($idPizza);
					$tabpizzas=get_all_pizza();
					require ('pizzarep/viewpizzaall.php');
				}
			}else{

				$pizza=new Pizza($idPizza,$name,$description,$prix);
			//	echo "je vais modifier la pizza".$pizza->getNom();
				edit_pizza($pizza);
				//echo ($pizza->getNom());
				$tabpizzas=get_all_pizza();
				require ('pizzarep/viewpizzaall.php');
			}


	}
	//var_dump($tabpizzas);







?>
