<?php 
	if (isset($_GET['ok'])) {
		require_once 'menu.php';
		switch ($_GET['ok']) {
			case 'addc':
				require_once './View/add.php';
				break;
			case 'listc':
				require_once './Model/db.php';
				require_once './Model/client.php';
				$list = listClient();
				require_once './View/list.php';
				break;
			case 'editc':
				require_once './Model/db.php';
				require_once './Model/client.php';
				$client = getClient($_GET['idc']);
				$ligne = $client->fetch();
				require_once './View/edit.php';
				break;
			default:
				# code...
				break;
		}
	}
	else{
		require_once 'menu.php';
	}
 ?>