<footer>
    <p>© www.bretzic.com<a class="connection-link" href="./connectionadmin" title="Administration"><i class="fas fa-user-cog"></i></a> &nbsp;<a href="./confidentiality">Politique de confidentialité</a></p>

	<?php if(isset($_COOKIE['accept_cookie'])) {
	   $showcookie = false;
		} else {
		   $showcookie = true;
		}
		require_once('./views/includes/footer.php');
	?>

    <?php if($showcookie) { ?>
		<div class="cookie-alert">
		   En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de cookies pour vous proposer des contenus et services adaptés à vos centres d’intérêts.<br />
		   Vous acceptez notre <a style="color:purple" href="./confidentiality">politique de confidentialité</style></a> et les cookies nécessaires au bon fonctionnement de celui-ci.<span><a href="./accept_cookie">J'accèpte</a></span><span><a href="https://www.google.fr">Je refuse et quitte le site</a></span>
		</div>
	<?php } ?>

</footer>