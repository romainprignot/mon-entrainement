<?php
if(isset($_POST['formCreateAccount'])){
    if(strlen($_POST['formCreateAccountLogin']) > 20 || strlen($_POST['formCreateAccountPassword']) > 40 || strlen($_POST['formCreateAccountEmail']) > 255){
        header('Location: ../../create-account.php');
    }

    else{
        require('model.php');
        require('function_hash_password.php');

        $login = htmlspecialchars($_POST['formCreateAccountLogin']);
        $password = hashPassword($_POST['formCreateAccountPassword'], $login);
        $email = htmlspecialchars($_POST['formCreateAccountEmail']);

        createAccount($login, $password, $email);
    }
}