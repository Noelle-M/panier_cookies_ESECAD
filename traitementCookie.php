<?php

require('includes/inc_header.php');

if(isset($_POST['submit_form'])) 
{
	$temps = 15*24*3600;
	$produit = $_POST['produit'];
	$prix = $_POST['prix'];

	//setcookie($produit, $prix, time() + $temps);
	if(isset($_COOKIE[$produit]))
	{
		$prix = $_COOKIE[$produit] + $prix;
		setcookie($produit, $prix, time() + $temps);

	}
	else
	{
		setcookie($produit, $prix, time() + $temps);
	}

	echo'
	<div class="row justify-content-center">
		<div class="card card-50 ombre radius mt-5">
			<p class="center"><img src="images/'.$produit.'.jpg" alt="'.$produit.'" title="'.$produit.'" height="140px" width="140px"></p> <br/>
			<p> a bien été ajouté à votre panier ! </p><br/>';
			echo'<a href="card.php"> voir mon Panier </a> <br/>
			 <a href="index.php"> Retour aux produits </a>
		</div>
	</div>';
}
else 
{
	echo '<p class="error">Une erreur s\'est produite, le produit n\'a pas été ajouté au panier';
}

require('includes/inc_footer.php');

