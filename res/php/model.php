<?php
require("dbConnexion.php");  



function createAccount($login, $password, $email){
    $db = connexionDB(HOST, USER, PASSWORD, DATABASE);

	$sql = "INSERT INTO members VALUES('', :pseudo, :password, :email)";
	$req = $db->prepare($sql);
	$req->execute(array(
		"pseudo" => $login,
		"password" => $password,
		"email" => $email
	));

	$req->closeCursor();
}

function checkUser($login, $password){
	$db = connexionDB(HOST, USER, PASSWORD, DATABASE);

	$sql = "SELECT * FROM members WHERE pseudo = :pseudo AND password = :password";
	$req = $db->prepare($sql);
	$req->execute(array(
		"pseudo" => $login,
		"password" => $password
	));

	return $req;

	$req->closeCursor();
}