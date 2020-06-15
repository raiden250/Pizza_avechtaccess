<?php
$compteur=0;
echo ("<div class='container'>");
echo("<a class='list btn btn-info' href='index?controller=pizza'>Retour à la liste</a>");
$cpt=1;
foreach($tabpizzas as $ligne){
    echo'<div class="row">';
        echo'<div class="col s12 m1" style="margin-top: 10%;" ></div>';
        echo'<div class="col s12 m4">';
            echo'<div class="card small">';
              echo'<div class="card-image waves-effect waves-block waves-light">';
                echo'<img src="images/'.$cpt.'.jpg " alt="pizza'.$ligne->getNom().'" height="220">';
              echo'</div>';
              echo'<div class="card-content">';
                  echo'<span class="card-title activator blue-text text-dark-4">'.$ligne->getNom().'<i class="material-icons right">more_vert</i></span>';
              echo'</div>';
              echo'<div class="card-reveal">';
                  echo'<span class="card-title blue-text text-dark-4">'.$ligne->getNom().'<i class="material-icons right">close</i></span>';
                  echo'<p>Prix de la pizza : '.$ligne->getPrix().'€</p>';
              echo'</div>';
            echo'</div>';
        echo'</div>';
        echo'<div class="col s12 m1" style="margin-top: 10%;" ></div>';
        echo'<div class="col s12 m5" style="" >';
			     echo'<div class="card fondIngr" style="">';
				       echo'<div class="card-image waves-effect waves-block waves-light center">';
					          echo'<h5 style="margin-bottom: 5%">Liste des ingredient de '.$ligne->getNom().' </h5>';
					            foreach($tab_ingredients as $ingredient){
    					               echo'<p class="center zoom ingr" style="">'.$ingredient->getNomIn().'</p>';
    								}
            	echo'</div>';
		    	echo'</div>';
		  echo'</div>';

    echo'</div>';
    $cpt++;
}
echo'</div>';

?>
