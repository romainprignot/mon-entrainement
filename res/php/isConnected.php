<?php
session_start();
if(!isset($_SESSION['connect']) || $_SESSION['connect'] == false){
	header('Location: index.php');
	exit();
}