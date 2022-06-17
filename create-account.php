<?php
    session_start();
	$template_pageTitle = "Mon entraînement sportif | CRÉER COMPTE";
    $template_pageDescription = "Mon entraînement sportif";

    $template_additionnalCSS = "";
    $template_pageScript = "";

    ob_start();
?>
<p id="pConnexion">Créez votre compte afin de pouvoir enregistrer vos entraînements et suivre votre progression.</p>
<form id="formCreateAccount" method="post" action="res/php/create_account.php" class="formLogin">
    <input type="text" placeholder="Identifiant" name="formCreateAccountLogin" class="formLoginField" required maxlength="20">
    <input type="password" placeholder="Mot de passe" name="formCreateAccountPassword" class="formLoginField" required maxlength="40">
    <input type="email" placeholder="E-mail" name="formCreateAccountEmail" class="formLoginField" required maxlength="255">
    <input type="submit" value="CRÉER VOTRE COMPTE" name="formCreateAccount" class="formLoginSubmit">
</form>
<hr class="hrConnexion">
<p id="pConnexion">Vous avez déjà un compte ?</p>
<a href="connexion.php" class="aConnexion">Connectez-vous</a>
<?php
    $template_pageContent = ob_get_clean();
    require("res/template/template.php");
?>