<?php

require('includes/inc_header.php');

$produits=['a'=> 9, 'b'=> 19,'c'=> 79,'d'=> 5,'e' => 45,'f'=> 29,'g'=> 10];

echo "<h1> Mon panier </h1>";



if(!empty($_COOKIE))
{
	
	echo'
	<div class="row justify-content-center">
		<div class="card card-50 ombre radius mt-5">
			<table width="100%">
				<tr>
					<th class="center"> Produit </th>
					<th class="center"> Tarif unitaire</th>
					<th class="center"> Quantité </th>
					<th class="center"> Prix total </th>
				</tr>';
				$var_sum = 0;
			foreach ($_COOKIE as $produit => $prix) 
			{
				if(is_numeric($prix))
				{
					$prixBase = $produits[$produit];
					$var_sum = $var_sum + $prix;

					echo'
					<tr>
						<td><img src="images/'.$produit.'.jpg" alt="Produit '.$produit.'" title="Produit'.$produit.'" height="80px" width="80px">
						<td class="center"><p>'.$prixBase.' euros</p></td>
						<td class="center"><p>' .$prix / $prixBase .'</p></td>
						<td class="center"><p>' .$prix. ' euros </p></td>
					<tr>';
				}
			}
			echo'</table>';
			echo'<p class="retour"><a href="index.php?total='.$var_sum.'"> Reprendre mes achats </a></p>';
}


		if(isset($var_sum))
		{
			if($var_sum > 0)
			{	 
				echo '<p class="total">Le montant de ton panier est de ' . $var_sum . ' euros</p>';
				echo'<p><a href="suppcookie.php"> Vider mon panier </a></p>';
			}
			else
			{
				echo '<p class="total">Ton panier est vide !</p>';
			}
			
		}
		else
		{
			echo '<p class="total center">Ton panier est vide !</p>';
			echo '<p class="center"><a href="index.php">Retour aux produits</a></p>';
		}
echo'</div>
</div>';


require('includes/inc_header.php');
