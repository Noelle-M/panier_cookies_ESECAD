<?php

require('includes/inc_header.php');

foreach ($_COOKIE as $produit => $prix) 
{
	if(!empty($produit))
	{
		setcookie($produit, FALSE);
		setcookie($prix, FALSE);
	}
}

echo'<meta http-equiv="refresh" content="0.5;URL=card.php">';