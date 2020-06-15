<script> var clientsId</script>
<?php
$compteur=0;


echo ("<div class='container'>");
echo("<a class='list btn btn-info' href='index?controller=clients&id=create'>Add clients</a>");
echo("<table id='dtBasicExample' class='table table-striped table-bordered table-sm'  cellspacing='0' width='100%'>");
echo("<thead class='thead-dark'>");
  echo("<tr>");
    echo("<th class='th-sm' scope='col'>Numero Client</th>");
    echo("<th class='th-sm' scope='col'>Nom </th>");
    echo("<th class='th-sm' scope='col'>Prenom</th>");
    echo("<th class='th-sm' scope='col'>Adresse</th>");
    echo("<th class='th-sm' scope='col'>Ville</th>");
    echo("<th class='th-sm' scope='col'>Telephone</th>");
    echo("<th class='th-sm' scope='col'>Sexe </th>");
    echo("<th class='th-sm' scope='col'>Action</th>");
  echo("</tr>");
echo("</thead>");
echo("<tbody>");

foreach($tabclients as $ligne){
  echo("<tr>");
        echo("<th scope='col'>".$ligne->getId()."</th>");
        echo("<td>".$ligne->getNom()."</td>");
        echo("<td>".$ligne->getPrenom()."</td>");
        echo("<td>".$ligne->getAdresse()."</td>");
        echo("<td>".$ligne->getVille()."</td>");
        echo("<td>".$ligne->getTel()."</td>");
        echo("<td>".$ligne->getSexe()."</td>");
        echo("<td>");
                  echo('<a href="index?controller=clients&action='.$ligne->getId().'&id=show" class="view" title="View" data-toggle="tooltip"> <i style="color:#03a9f4" class="material-icons">&#xE417;</i></a>');
                  echo('<a href="index?controller=clients&action='.$ligne->getId().'&id=edit" class="edit" title="Edit" data-toggle="tooltip"><i style="color:#ffc107"class="material-icons">&#xE254;</i></a>');
                  echo('<button id="exampleModal" type="button"  style="margin-left:5px" data-toggle="modal" data-target="#exampleModalCenter"  data-clients-id="'.$ligne->getId().'"><i class="material-icons">&#xE872;</i></button>');
        echo("</td>");
      echo("</tr>");


}
echo("</tbody>");
echo("</table>");
echo ("</div>");



?>
<script>
$(document).ready(function(){
  $('#exampleModalCenter').on('show.bs.modal', function(e) {

    //get data-id attribute of the clicked element
    clientsId = $(e.relatedTarget).data('clients-id');
    //alert("toto"+ clientsId);
    //populate the textbox
    $(".modal-body #ClientsId").val( clientsId );

    message= "index?controller=clients&id=remove&action="+clientsId;

    $("#monbutton").attr("href",message);

  });
});
</script>
<script>
  $(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
  });
</script>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="false" style="height:48% !important;width:43%;background-color:#6c757d;">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Êtes vous sûr de vouloir supprimer le client ?
        <input type="hidden" name="ClientsId" id="ClientsId" value=""/>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>

        <a id ="monbutton" class='dec btn btn-danger' href="" >Supprimer</a>


      </div>
    </div>
  </div>
</div>
