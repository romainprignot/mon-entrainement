<?php
if(isset($_POST['formConnexion'])){
    require('model.php');
    require('function_hash_password.php');

    $login = htmlspecialchars($_POST['formConnexionLogin']);
    $password = hashPassword($_POST['formConnexionPassword'], $login);

    $user = checkUser($login, $password);

	if($user->rowCount() > 0){
		session_start();
		$_SESSION['connect'] = true;
		while($dataUser = $user->fetch()){
			$_SESSION['USER_id'] = $dataUser['ID'];
			$_SESSION['USER_pseudo'] = $dataUser['pseudo'];
			$_SESSION['USER_email'] = $dataUser['email'];
		}
		$returnURL = "../../dashboard.php";
	}

	else{
		$returnURL = "../../connexion.php";
	}

	header("Location: " . $returnURL);
	exit();
}