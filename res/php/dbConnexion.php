<?php
const HOST = 'localhost';
const USER = "root";
const PASSWORD = "";
const DATABASE = 'mytraining';

function connexionDB($host, $user, $password, $database){
    try{
        $db = new PDO('mysql:host=' . $host . ';dbname=' . $database . ';charset=utf8', $user, $password);
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }

    return $db;
}