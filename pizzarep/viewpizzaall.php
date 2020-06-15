<script> var pizzaId</script>
<?php
$compteur=0;
echo "<div id=Listepizza> ";
echo("<table align='center' ><tr>");
echo ("<div class='container'>");
echo("<a class='list btn btn-info' href='index?controller=pizza&id=create'>Add Pizza</a>");
echo'<div class="row">';
$cpt=1;
foreach($tabpizzas as $ligne){

        echo'<div class="col s12 m4">';
          echo'<div class="card small">';
              echo'<div class="card-image waves-effect waves-block waves-light">';
                echo'<img src="images/'.$cpt.'.jpg " alt="pizza'.$ligne->getNom().'" height="220">';
              echo'</div>';
              echo'<div class="card-content">';
                  echo'<span class="card-title activator blue-text text-dark-4">'.$ligne->getNom().'<i class="material-icons right">more_vert</i></span>';
                  echo '<div class="" >';
                      echo '<a class="btn btn-info" href="index?controller=pizza&action='.$ligne->getId().'&id=show">Detail</a>';
                      echo '<a class="btn btn-info" style="margin-left:5px;background-color:#FF333C;" href="index?controller=pizza&action='.$ligne->getId().'&id=edit">Modifier</a>';
                    /*  echo '<a class="btn btn-info" style="margin-left:5px;background-color:#D00D05;width=40px !important;" href="index?controller=pizza&action='.$ligne->getId().'&id=remove" onclick="" >Supprimer</a>';*/
                    //  echo('<a class="btn btn-info" style="margin-left:5px;background-color:#D00D05;width=40px !important;" data-toggle="modal" data-target="#exampleModalCenter"  data-pizza-id="'.$ligne->getId().'" >Supprimer</button>');
                      echo('<button id="exampleModal" type="button" class="dec btn btn btn-danger" style="margin-left:5px" data-toggle="modal" data-target="#exampleModalCenter"  data-pizza-id="'.$ligne->getId().'" >Supprimer</button>');
                    //  echo('<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>');
                  echo '</div >';

              echo'</div>';
              echo'<div class="card-reveal">';
                echo'<span class="card-title blue-text text-dark-4">'.$ligne->getNom().'<i class="material-icons right">close</i></span>';
                echo'<span class="card-title black-text text-dark-2">'.$ligne->getPrix().' €</span>';
                echo '<div class="" >';
                    echo '<a class="btn btn-info" href="index?controller=pizza&action='.$ligne->getId().'&id=show">Detail</a>';
                    echo '<a class="btn btn-info" style="margin-left:5px;background-color:#F7A72E;" href="index?controller=pizza&action='.$ligne->getId().'&id=edit">Modifier</a>';
                  /*  echo '<a class="btn btn-info" style="margin-left:5px;background-color:#D00D05;width=40px !important;" href="index?controller=pizza&action='.$ligne->getId().'&id=remove" onclick="" >Supprimer</a>';*/
                  //  echo('<a class="btn btn-info" style="margin-left:5px;background-color:#D00D05;width=40px !important;" data-toggle="modal" data-target="#exampleModalCenter"  data-pizza-id="'.$ligne->getId().'" >Supprimer</button>');
                    echo('<button id="exampleModal" type="button" class="dec btn btn btn-danger" style="margin-left:5px" data-toggle="modal" data-target="#exampleModalCenter"  data-pizza-id="'.$ligne->getId().'" >Supprimer</button>');
                  //  echo('<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>');
                echo '</div >';
              echo'</div>';
         echo'</div>';
       echo'</div>';




    $cpt++;
}
echo'</div>';
echo'</div>';
?>
<script>
$(document).ready(function(){
  $('#exampleModalCenter').on('show.bs.modal', function(e) {

    //get data-id attribute of the clicked element
    pizzaId = $(e.relatedTarget).data('pizza-id');
    //alert("toto"+ pizzaId);
    //populate the textbox
    $(".modal-body #PizzaId").val( pizzaId );

    message= "index?controller=pizza&id=remove&action="+pizzaId;

    $("#monbutton").attr("href",message);

  });
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
        Êtes vous sûr de vouloir supprimer cette pizza ?
        <input type="hidden" name="PizzaId" id="PizzaId" value=""/>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>

        <a id ="monbutton" class='dec btn btn-danger' href="" >Supprimer</a>


      </div>
    </div>
  </div>
</div>
