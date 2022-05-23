<header id="headerMain">
	<img src="res/img/logo.svg" alt="Logo site" id="headerMainLogo">
	<nav id="headerMainNav">
		<a href="index.php" class="headerMainNavLink">ACCUEIL</a>
		<a href="" class="headerMainNavLink">PARTICIPANTS</a>
		<?php
			if(isset($_SESSION['login']) && $_SESSION['login'] == true){
				echo "<a href='' class='headerMainNavLink'>MES STATS</a>";
				echo "<a href='' class='headerMainNavLink'>DÉCONNEXION</a>";
			}

			else{
				echo "<a href='connexion.php' class='headerMainNavLink'>CONNEXION</a>";
			}
		?>
	</nav>
</header>