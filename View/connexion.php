<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Connexion</title>
        <link rel="stylesheet" href="./Style/cerulean/theme/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="./Style/style.css" />
        <script type="text/javascript" src="./Script/script.js"></script>
</head>
<body>
	<div class="container col-md-6 col-md-offset-3 spacer">
		<div class="panel panel-info">
			<div class="panel-heading">Connexion</div>
			<div class="panel-body">
				<form method="POST" action="./Controller/clientController.php">
					<?php 
						if(isset($_GET['okk'])){
							echo $_GET['okk'] ;
						}
					 ?>
					<div class="form-group">
						<label class="control-label">Email</label>
						<input type="email" name="mail" class="form-control" required>
					</div>
					<div class="form-group">
						<label class="control-label">Mot de passe</label>
						<input type="password" name="mdp" class="form-control" required>
					<br/>
					<button class="btn btn-success" name="connect" type="submit">Connexion</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>