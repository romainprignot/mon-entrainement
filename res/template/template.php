<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title><?=$template_pageTitle?></title>
		<link rel="icon" href="res/img/favicon.png">
		<link rel="stylesheet" href="res/css/style.css">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="<?=$template_pageDescription?>">
		<?=$template_additionnalCSS?>
	</head>
	<body>
		<?php
            require("header.php");
            echo $template_pageContent;
		?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<?php
			echo $template_pageScript;
		?>
	</body>
</html>