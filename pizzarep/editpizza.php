<?php
$compteur=0;
echo "<div id=Listepizza> ";
echo("<table align='center' ><tr>");
echo ("<div class='container'>");
$cpt=1;
foreach($tabpizzas as $ligne){
    echo'<div class="row">';
      echo("<a class='list btn btn-info' href='index?controller=pizza'>Retour à la liste</a>");
        echo('<div class="container" style="">');
          echo('<div class="col-md-offset-3 col-md-6"">');
            echo('<form action="index?controller=pizza" method="post">');
              echo('<input type="hidden" name="action" value="'.$ligne->getId().'">');
              echo('<input type="hidden" name="edit" value="true">');
              echo('<h4>Modification :</h4>');
              echo('<div class="form-group">');
                echo('<label>Nom de la pizza :</label>');
                echo('<input type="text" class="form-control" name ="nom" id="nom" value="'.$ligne->getNom().'">');
              echo('</div>');
              echo('<div class="form-group">');
                echo('<label>Description :</label>');
                echo('<textarea class="form-control" name="description" id="description"  rows="6">'.$ligne->getDescription().'</textarea>');
              echo('</div>');
              echo('<div class="form-group">');
                echo('<label>Inserer la photo :  </label>');
                echo("<img src='images/".$ligne->getId().".jpg' style='width:300px'>");
                echo('<input class="form-control" type="file" name="photo" id="photo">');
              echo('</div>');
              echo('<div class="form-group">');
                echo('<label>Tarif (€):</label>');
                echo('<input type="number" class="form-control" name="tarif" id="tarif" value="'.$ligne->getPrix().'">');
              echo('</div>');
              echo('<button type="submit" class="btn btn-primary">Valider</button>');
            echo('</form>');
        echo('</div>');
      echo('</div>');
    echo'</div>';

    $cpt++;
}
echo'</div>';

?>
