<?php
//echo "string";
$compteur=0;

$cpt=1;
foreach($tabclients as $ligne){
    echo'<div class="row">';

        echo('<div class="container" style="">');
        echo("<a class='list btn btn-info' href='index?controller=clients' style=>Retour à la liste</a>");
          echo('<div class="col-md-offset-3 col-md-6"">');
            echo('<form action="index?controller=clients" method="post">');
              echo('<input type="hidden" name="action" value="'.$ligne->getId().'">');
              echo('<input type="hidden" name="edit" value="true">');
              echo('<h4>Modification :</h4>');
              echo('<div class="form-group">');
                echo('<label>Nom du client :</label>');
                echo('<input type="text" class="form-control" name ="nom" id="nom" value="'.$ligne->getNom().'">');
              echo('</div>');
              echo('<div class="form-group">');
                echo('<label>Nom du client :</label>');
                echo('<input type="text" class="form-control" name ="prenom" id="prenom" value="'.$ligne->getPrenom().'">');
              echo('</div>');
              echo('<div class="form-group">');
                echo('<label>Adresse :</label>');
                echo('<input type="text" class="form-control" name ="adresse" id="adresse" value="'.$ligne->getAdresse().'">');
              echo('</div>');
              echo('<div class="form-group">');
                echo('<label>Ville :</label>');
                echo('<input type="text" class="form-control" name ="ville" id="ville" value="'.$ligne->getVille().'">');
              echo('</div>');
              echo('<div class="form-group">');
                echo('<label>Numéro de tel :</label>');
                echo('<input type="text" class="form-control" name ="tel" id="tel" value="'.$ligne->getTel().'">');
              echo('</div>');
              echo('<div class="form-group">');
                echo('<label for="sel1">Sexe:</label>');
                echo('<select class="form-control" name="sexe" id="sel1">');
                  echo('<option value="'.$ligne->getSexe().'" selected>'.$ligne->getSexe().' </option>');
                  echo('<option value="Mme">Mme</option>');
                  echo('<option value="Mlle">mlle</option>');
                  echo('<option value="M">M</option>');
                echo('</select>');
              echo('</div>');
              echo('<button type="submit" class="btn btn-primary">Valider</button>');
            echo('</form>');
        echo('</div>');
      echo('</div>');
    echo'</div>';

    $cpt++;
}


?>
