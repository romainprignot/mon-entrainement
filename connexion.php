<?php
    session_start();
	$template_pageTitle = "Mon entraînement sportif | CONNEXION";
    $template_pageDescription = "Mon entraînement sportif";

    $template_additionnalCSS = "";
    $template_pageScript = "";

    ob_start();
?>
<p id="pConnexion">Connectez-vous afin de pouvoir enregistrer vos entraînements et suivre votre progression.</p>
<form id="formConnexion" method="post" action="res/php/connexion_account.php" class="formLogin">
    <input type="text" placeholder="Identifiant" name="formConnexionLogin" class="formLoginField" required maxlength="20">
    <input type="password" placeholder="Mot de passe" name="formConnexionPassword" class="formLoginField" required maxlength="40">
    <input type="submit" value="CONNEXION" name="formConnexion" class="formLoginSubmit">
</form>
<hr class="hrConnexion">
<p id="pConnexion">Pas encore de compte ?</p>
<a href="create-account.php" class="aConnexion">Créer mon compte</a>
<?php
    $template_pageContent = ob_get_clean();
    require("res/template/template.php");
?>