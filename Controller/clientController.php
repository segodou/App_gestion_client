<?php 
	require_once '../Model/db.php';
	require_once '../Model/client.php';
	//Connextion
	
	//Ajout
	if (isset($_POST['valider'])) {
		$nom = valid_donnees($_POST['nom']);
		$prenom = valid_donnees($_POST['prenom']);
		$adresse = valid_donnees($_POST['adresse']);
		$phone = valid_donnees($_POST['phone']);
		$sexe = valid_donnees($_POST['sexe']);

		addClient($nom, $prenom, $adresse, $phone, $sexe);
		header("location: ../View/list.php");
	}
	if (isset($_POST['annuler'])) {
		header("location: http://localhost/gestionclient/?ok=listc");
	}
	//Supprimer
	if(isset($_GET['idc'])){
		deleteClient($_GET['idc']);

		header("location: http://localhost/gestionclient/?ok=listc");
	}
	//Modifier
	if (isset($_POST['modifier'])) {
		$id = valid_donnees($_POST['id']);
		$nom = valid_donnees($_POST['nom']);
		$prenom = valid_donnees($_POST['prenom']);
		$adresse = valid_donnees($_POST['adresse']);
		$phone = valid_donnees($_POST['phone']);
		$sexe = valid_donnees($_POST['sexe']);

		updateClient($id, $nom, $prenom, $adresse, $phone, $sexe);
		header("location: http://localhost/gestionclient/?ok=listc");
	}

    function valid_donnees($donnees){
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }

 ?>