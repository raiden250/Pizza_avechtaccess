<?php

echo'<div class="row">';

    echo('<div class="container" style="">');
    echo("<a class='list btn btn-info' href='index?controller=clients'>Retour à la liste</a>");
      echo('<div class="col-md-offset-3 col-md-6"">');
        echo('<form action="index?controller=clients" method="post">');
          echo('<input type="hidden" name="id" value="create">');
          echo('<h4>Création :</h4>');
          echo('<div class="form-group">');
            echo('<label>Nom du client :</label>');
            echo('<input type="text" class="form-control" name ="nom" id="nom">');
          echo('</div>');
          echo('<div class="form-group">');
            echo('<label>Nom du client :</label>');
            echo('<input type="text" class="form-control" name ="prenom" id="prenom">');
          echo('</div>');
          echo('<div class="form-group">');
            echo('<label>Adresse :</label>');
            echo('<input type="text" class="form-control" name ="adresse" id="adresse">');
          echo('</div>');
          echo('<div class="form-group">');
            echo('<label>Ville :</label>');
            echo('<input type="text" class="form-control" name ="ville" id="ville">');
          echo('</div>');
          echo('<div class="form-group">');
            echo('<label>Numéro de tel :</label>');
            echo('<input type="text" class="form-control" name ="tel" id="tel" >');
          echo('</div>');
          echo('<div class="form-group">');
            echo('<label for="sel1">Sexe:</label>');
            echo('<select class="form-control" name="sexe" id="sel1">');
              echo('<option>Mme</option>');
              echo('<option>mlle</option>');
              echo('<option>M</option>');
            echo('</select>');
          echo('</div>');
          echo('<button type="submit" class="btn btn-primary">Valider</button>');
        echo('</form>');
    echo('</div>');
  echo('</div>');
echo'</div>';

 ?>
