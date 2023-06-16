<?php 
	require_once 'db.php';
	function addClient($nom, $prenom, $adresse, $telephone, $sexe){
		$bdd=dbConnect();
		$sql =$bdd->prepare("INSERT INTO client (nom, prenom, adresse, tel, sexe) VALUES (?,?,?,?,?) ");
		$sql->execute(array($nom, $prenom, $adresse, $telephone, $sexe));
	}

	function listClient(){
		$bdd=dbConnect();
		$sql =$bdd->prepare("SELECT * FROM client");
		$sql->execute(array());
		return $sql;
	}

	function deleteClient($idc){
		$bdd=dbConnect();
		$sql =$bdd->prepare("DELETE FROM client WHERE id = ?");
		$sql->execute(array($idc));
	}

	function getClient($idc){
		$bdd=dbConnect();
		$sql =$bdd->prepare("SELECT * FROM client WHERE id = ?");
		$list = $sql->execute(array($idc));
		return $list;
	}

	function updateClient($id, $nom, $prenom, $adresse, $telephone, $sexe){
		$bdd=dbConnect();
		$sql =$bdd->prepare("UPDATE client SET nom = ?,  prenom = ?, adresse = ?, tel = ?, sexe = ? WHERE id = ?");
		$sql->execute(array($nom, $prenom, $adresse, $telephone, $sexe, $id));
	}

	function connectadmin($mail, $mdp){
		$bdd=dbConnect();
		$sql = $bdd->prepare("SELECT * FROM user where email = ? AND password = ?");
        $sql->execute(array($mail, $mdp));
        return $sql;
	}
 ?>