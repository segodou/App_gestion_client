<?php 
	require_once '../Model/db.php';
	require_once '../Model/client.php';
	$client = getClient($_GET['idc']);
	$ligne = $client->fetch();
	require_once '../menu.php';
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edition Client</title>
        <link rel="stylesheet" href="../Style/cerulean/theme/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../Style/style.css" />
        <script type="text/javascript" src="../Script/script.js"></script>
</head>
<body>
	<div class="container col-md-6 col-md-offset-3 spacer">
		<div class="panel panel-info">
			<div class="panel-heading">Formulaire d'édition de client</div>
			<div class="panel-body">
				<form method="POST" action="../Controller/clientController.php">
					<div class="form-group">
						<label class="control-label">Identifiant</label>
						<input type="text" name="id" class="form-control" required readonly="readonly" value="<?php echo $ligne[0] ?>">
					</div>
					<div class="form-group">
						<label class="control-label">Nom</label>
						<input type="text" name="nom" class="form-control" required value="<?php echo $ligne[1] ?>">
					</div>
					<div class="form-group">
						<label class="control-label">Prénoms</label>
						<input type="text" name="prenom" class="form-control" required value="<?php echo $ligne[2] ?>">
					</div>
					<div class="form-group">
						<label class="control-label">Adresse</label>
						<input type="text" name="adresse" class="form-control" required value="<?php echo $ligne[3] ?>">
					</div>
					<div class="form-group">
						<label class="control-label">Téléphone</label>
						<input type="tel" name="phone" class="form-control" required value="<?php echo $ligne[4] ?>">
					</div>
					<?php if ($ligne[5] == 'M') {
							  $sexe1 = "checked";
						  }else{
						  	$sexe2 = "checked";
						  }
					?>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="sexe" id="m" value="M" <?php if (isset($sexe1)) {
					  echo $sexe1; }  ?> >
					  <label class="form-check-label" for="m">
					   		Masculin
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="sexe" id="f" value="F" <?php if (isset($sexe2)) {
					  echo $sexe2; }  ?>>
					  <label class="form-check-label" for="f">
					    		Féminin
					  </label>
					</div>
					<button class="btn btn-success" name="modifier" type="submit">Modifier</button>
					<a href="View/list.php" class="btn btn-primary">Annuler</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>