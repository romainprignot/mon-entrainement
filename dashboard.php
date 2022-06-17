<?php
    require("res/php/isConnected.php");
	$template_pageTitle = "Mon entraînement sportif | MON TABLEAU DE BORD";
    $template_pageDescription = "Mon entraînement sportif !!!";

    $template_additionnalCSS = "";
    $template_pageScript = "";

    ob_start();
?>
<h1>Bonjour</h1>
<?php
    $template_pageContent = ob_get_clean();
    require("res/template/template.php");
?>