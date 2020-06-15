<?php
//echo "string";
$compteur=0;

$cpt=1;
foreach($tabclients as $ligne){
    echo'<div class="row">';
      echo("<a class='list btn btn-info' href='index?controller=clients' style='margin-left: 20px;''>Retour à la liste</a>");
        echo('<div class="container" style="">');
          echo('<div class="col-md-offset-1 col-md-4"">');
            echo('<form action="index?controller=clients" method="post">');
              echo('<input type="hidden" name="action" value="'.$ligne->getId().'">');
              echo('<input type="hidden" name="edit" value="true">');
              echo('<h4>detail :</h4>');
              echo('<div class="form-group">');
                echo('<label>Nom du client :</label>');
                echo('<input type="text" class="form-control" name ="nom" id="nom" value="'.$ligne->getNom().'" disabled>');
              echo('</div>');
              echo('<div class="form-group">');
                echo('<label>Nom du client :</label>');
                echo('<input type="text" class="form-control" name ="prenom" id="prenom" value="'.$ligne->getPrenom().'"disabled>');
              echo('</div>');
              echo('<div class="form-group">');
                echo('<label>Adresse :</label>');
                echo('<input type="text" class="form-control" name ="adresse" id="adresse" value="'.$ligne->getAdresse().'"disabled>');
              echo('</div>');
              echo('<div class="form-group">');
                echo('<label>Ville :</label>');
                echo('<input type="text" class="form-control" name ="ville" id="ville" value="'.$ligne->getVille().'"disabled>');
              echo('</div>');
              echo('<div class="form-group">');
                echo('<label>Numéro de tel :</label>');
                echo('<input type="text" class="form-control" name ="tel" id="tel" value="'.$ligne->getTel().'"disabled>');
              echo('</div>');
              echo('<div class="form-group">');
                echo('<label for="sel1">Sexe:</label>');
                echo('<select class="form-control" name="sexe" id="sel1" disabled>');
                  echo('<option value="'.$ligne->getSexe().'" selected>'.$ligne->getSexe().' </option>');
                  echo('<option value="Mme">Mme</option>');
                  echo('<option value="Mlle">mlle</option>');
                  echo('<option value="M">M</option>');
                echo('</select>');
              echo('</div>');
          //    echo('<button type="submit" class="btn btn-default">Valider</button>');
            echo('</form>');
        echo('</div>');
        echo('<div class="col-md-offset-2 col-md-4">');
        echo('<h4>Liste de commandes faite par le client: </h4>');
        echo('<table id="dtBasic" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">');
        echo('<thead class="thead-dark">');
          echo('<tr>');
            echo('<th class="th-sm" scope="col">Numero</th>');
            echo('<th class="th-sm" scope="col">Date </th>');
            echo('<th class="th-sm" scope="col">heure</th>');
            echo('<th class="th-sm" scope="col">Numero client</th>');

          echo('</tr>');
        echo('</thead>');
        echo('<tbody>');
          foreach($tab_commande as $ligne){
            echo('<tr>');
                  echo('<td scope="col">'.$ligne->getNroCmde().'</td>');
                  echo('<td>'.$ligne->getDateCmde().'</td>');
                  echo('<td>'.$ligne->getHeureCmde().'</td>');
                  echo('<td>'.$ligne->getNroClieCmde().'</td>');
            echo('</tr>');
          }
          echo('</tbody>');
          echo('</table>');

        echo('</div>');
      echo('</div>');
    echo'</div>';
echo'</div>';
    $cpt++;
}


?>
<script>
  $(document).ready(function () {
    $('#dtBasic').DataTable();
    $('.dataTables_length').addClass('bs-select');
  });
</script>
