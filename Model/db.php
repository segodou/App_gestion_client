<?php 
	function dbConnect(){
		try
		{
			// On se connecte à MySQL
			$bdd = new PDO('mysql:host=localhost;dbname=myapp;charset=utf8', 'root', '');
			return $bdd;
		}
		catch(Exception $e)
		{
			// En cas d'erreur, on affiche un message et on arrête tout
			die('Erreur : '.$e->getMessage());
		} 
		/*$host='localhost';
		$user='root';
		$pwd= '';
		$dbname= 'myapp';
		$con = mysqli_connect($host, $user, $pwd, $dbname);
		return $con;*/
	}

	/*function executeSQL($sql){
		$exec = mysqli_query(dbConnect(), $sql);
		return $exec;
	}*/
 ?>