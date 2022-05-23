<?php
    session_start();
	$template_pageTitle = "Mon entraînement sportif | CONNEXION";
    $template_pageDescription = "Mon entraînement sportif";

    $template_additionnalCSS = "";
    $template_pageScript = "";

    ob_start();
?>
<p id="pConnexion">Connectez-vous afin de pouvoir enregistrer vos entraînements et suivre votre progression.</p>
<form id="formConnexion">
    <input type="text" placeholder="Identifiant" class="formConnexionField">
    <input type="password" placeholder="Mot de passe" class="formConnexionField">
    <input type="submit" value="CONNEXION" class="formConnexionSubmit">
</form>
<hr>
<p id="pConnexion">Pas encore de compte ?</p>
<?php
    $template_pageContent = ob_get_clean();
    require("res/template/template.php");
?>