<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset =utf-8>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="resource/style.css">
		<link href="resource/addons/datatables-select2.min.css" rel="stylesheet">
  	<link href="resource/addons/datatables2.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <!--<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
			<script src="resource/addons/datatables2.min.js" type="text/javascript"></script>
			<script src="resource/addons/datatables-select2.min.js" type="text/javascript"></script>
</head>
<body>
<div class="row" style="background-color:#F7F9F9 !important">
	<nav class="navbar navbar-default" style="background-color:#3399FF !important;">
  <div class="container-fluid">
    <div class="navbar-header" style="text-align:center;font-size:1.6em;margin-left:45%">
      <p class="navbar-brand">Pizza-MVC-CRUD</p>
    </div>
	<br/>
    <ul class="nav navbar-nav" >
      <li class="active" ><a href="index?controller=pizza">Pizza</a></li>
      <li><a href="index?controller=clients">Clients</a></li>
    </ul>
  </div>
</nav>
</div>
<script> var pizzaId</script>
<?php
ini_set('display_errors','off');
$controller=$_GET['controller'];
$action=$_GET['action'];
$id=$_GET['id'];

$mesControllers= array("pizza","clients","commande");

if (in_array($controller,$mesControllers)){
		//echo "controller trouvé";echo("<br>");

		if (!empty($action)){
			if(!preg_match('/^[0-9]*$/',$action)){
			//echo("Mauvais numéro pour le controller".$controller);
			}
			else{
			//echo("Je vais appeler le controller : ".$controller." en transmettant le numéro ".$action);
			//echo("<br>");
			$controllerfile="./".$controller."rep/controller".$controller.".php"; //."?id=".$data[4]
                //echo ($controllerfile);
			require ($controllerfile);
			}
		}

		else{
		echo("Je vais appeler le controller : ".$controller);
			$controllerfile="./".$controller."rep/controller".$controller.".php"; //."?id=".$data[4]
			require ($controllerfile);
		}
}
else{
   echo("Controller non trouvé");
}
?>

</body>
</html>
