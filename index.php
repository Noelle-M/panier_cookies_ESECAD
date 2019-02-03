<?php

require('includes/inc_header.php');

$produits=['a'=> 9, 'b'=> 19,'c'=> 79,'d'=> 5,'e' => 45,'f'=> 29,'g'=> 10];

echo "<h1> Boutique de l'ABCD</h1>";

echo'<div class="row">';
foreach ($produits as $produit => $prix) 
{
	echo'
		<div class="col-3">
			<div class="card text-align-center">
				<img src="images/'.$produit.'.jpg" height="140px" width="140px"></a>
					<form method="post" action="traitementCookie.php">
						<input type="hidden" name="produit" value="'.$produit.'"/>
						<input type="hidden" name="prix" value="'.$prix.'"/>
						<p class="prix">'.$prix.' euros</p>
						<input type="submit" value="Ajouter" name="submit_form" class="btn btn-outline-success mt-2 ml-5 mb-5">
					</form>
				</div>
		</div>';
}
	echo'<div class="col-3">
			<div class="card text-align-center">
				<a href="card.php">
					<img src="images/panier.png" height="140px" width=200px">';
					if(!empty($_GET['total']))
					{
						$total=$_GET['total'];
						echo'<p>'.$total.' euros</p>';
					}
					else
					{
						echo'<p>Ton panier est vide</p>';
					}
					
					echo'<p><input type="button" value="Voir mon panier" class="btn btn-outline-success mt-2 ml-5 mb-5"></p>
				</a>
			</div>
		</div>
</div>';

require('includes/inc_footer.php');
