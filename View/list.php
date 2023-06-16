<?php 
	require_once '../Model/db.php';
	require_once '../Model/client.php';
	$list = listClient();
	require_once '../menu.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter Client</title>
        <link rel="stylesheet" href="../Style/cerulean/theme/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../Style/style.css" />
        <script type="text/javascript" src="../Script/script.js"></script>
</head>
<body>
	<div class="container spacer">
		<div class="panel panel-info">
			<div class="panel-heading">Listes des clients</div>
			<div class="panel-boby">
				<table class="table table-hover table-dark text-center">
					<thead>
						<tr>
							<th scope="col">Identifiant</th>
							<th scope="col">Nom</th>
							<th scope="col">Prénoms</th>
							<th scope="col">Adresse</th>
							<th scope="col">Téléphone</th>
							<th scope="col">Sexe</th>
							<th scope="col">Action 1</th>
							<th scope="col">Action 2</th>
						</tr>
					</thead>
					<a href=""></a>
					<tbody>
						<?php 
							while ($donnees = $list->fetch()) {	
									echo "<tr>
											<td scope='col'>$donnees[0]</td>
											<td scope='col'>$donnees[1]</td>
											<td scope='col'>$donnees[2]</td>
											<td scope='col'>$donnees[3]</td>
											<td scope='col'>$donnees[4]</td>
											<td scope='col'>$donnees[5]</td>
											<td scope='col'><a href='../Controller/clientController.php?idc=$donnees[0]' class='btn btn-danger' onclick = 'return confirmation();'>Supprimer</a></td>
											<td scope='col'><a href='edit.php?idc=$donnees[0]' class='btn btn-primary'>Editer</a></td>
										<tr>";							
								}
						?> 
					</tbody>
			</div>
		</div>
	</div>
<!--	<script type="text/javascript" src="../Style/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>