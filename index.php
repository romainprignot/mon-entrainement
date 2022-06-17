<?php
    session_start();

    if(isset($_SESSION['connect']) && $_SESSION['connect'] == true){
        header('Location: dashboard.php');
        exit();
    }

	$template_pageTitle = "Mon entraînement sportif | ACCUEIL";
    $template_pageDescription = "Mon entraînement sportif !!!";

    $template_additionnalCSS = "";
    $template_pageScript = "";

    ob_start();
?>
<?php
    $template_pageContent = ob_get_clean();
    require("res/template/template.php");
?>