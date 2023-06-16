<?php 
	require_once '../menu.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter Client</title>
        <link rel="stylesheet" href="../Style/cerulean/theme/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../Style/style.css" />
</head>
<body>
	<div class="container col-md-6 col-md-offset-3 spacer">
		<div class="panel panel-info">
			<div class="panel-heading">Formulaire d'ajout de client</div>
			<div class="panel-body">
				<form method="POST" action="../Controller/clientController.php">
					<div class="form-group">
						<label class="control-label">Nom</label>
						<input type="text" name="nom" class="form-control" required>
					</div>
					<div class="form-group">
						<label class="control-label">Prénoms</label>
						<input type="text" name="prenom" class="form-control" required>
					</div>
					<div class="form-group">
						<label class="control-label">Adresse</label>
						<input type="text" name="adresse" class="form-control" required>
					</div>
					<div class="form-group">
						<label class="control-label">Téléphone</label>
						<input type="tel" name="phone" class="form-control" required>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="sexe" id="m" value="M" checked>
					  <label class="form-check-label" for="m">
					   		Masculin
					  </label>
					</div>
					<div class="form-check">
					  <input class="form-check-input" type="radio" name="sexe" id="f" value="F" >
					  <label class="form-check-label" for="f">
					    		Féminin
					  </label>
					</div><br/>
					<button class="btn btn-success" name="valider" type="submit">Ajouter</button>
					<button class="btn btn-danger" name="annuler" type="reset">Annuler</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>