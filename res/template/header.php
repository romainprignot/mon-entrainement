<header id="headerMain">
	<img src="res/img/logo.svg" alt="Logo site" id="headerMainLogo">
	<nav id="headerMainNav">
		<?php
			if(isset($_SESSION['connect']) && $_SESSION['connect'] == true){
				echo "<a href='dashboard.php' class='headerMainNavLink'>ACCUEIL</a>";
			}
			
			else{
				echo "<a href='index.php' class='headerMainNavLink'>ACCUEIL</a>";
			}
		?>
		<a href="" class="headerMainNavLink">PARTICIPANTS</a>
		<?php
			if(isset($_SESSION['connect']) && $_SESSION['connect'] == true){
				echo "<a href='' class='headerMainNavLink'>MES STATS</a>";
				echo "<a href='deconnexion.php' class='headerMainNavLink'>DÉCONNEXION</a>";
			}

			else{
				echo "<a href='connexion.php' class='headerMainNavLink'>CONNEXION</a>";
			}
		?>
	</nav>
</header>