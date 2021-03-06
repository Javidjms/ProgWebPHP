<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="./images/favicon.ico">

    <title>Edition de l'Adresse Mail </title>

    <!-- Bootstrap core CSS -->
    <link href="../vue/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../vue/css/dashboard.css" rel="stylesheet">

	

  </head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
			<a class="navbar-brand" href="#">PlanningParSemaine</a>
		</div>
	  </div>
	 </nav>
	 
<div class="container">
<div class="row">
<div class="col-sm-12">
<center><h1>Changer Adresse Mail</h1><center>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<form method="post" id="emailForm">
<input type="email" class="input-lg form-control" name="email1" id="email1" placeholder="Nouveau Adresse Mail" autocomplete="off">
<input type="email" class="input-lg form-control" name="email2" id="email2" placeholder="Confirmer Nouveau Adresse Mail" autocomplete="off">
<div class="row">
<div class="col-sm-12">
<span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Correspondance d'adresse Mail
</div>
</div>
<input type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" value="Valider">
<input type="button" class="col-xs-12 btn btn-default btn-load btn-lg"  onclick="document.location.href='index.php'" value="Retour">
</form>
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../vue/js/bootstrap.min.js"></script>
	<script src="../vue/js/bootbox.min.js"></script>
<script>

$("input[type=email]").keyup(function(){
	if($("#email1").val() == $("#email2").val()){
		$("#pwmatch").removeClass("glyphicon-remove");
		$("#pwmatch").addClass("glyphicon-ok");
		$("#pwmatch").css("color","#00A41E");
	}else{
		$("#pwmatch").removeClass("glyphicon-ok");
		$("#pwmatch").addClass("glyphicon-remove");
		$("#pwmatch").css("color","#FF0004");
	}
});
</script>
</body>
</html>

