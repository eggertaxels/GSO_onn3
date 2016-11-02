<?php
/*
 * Það er takmarkað hvað við megum nota margar cookie breytur pr domain (max 20).
 * Það er ekki hægt að nota fylki beint í cookie.
 */

// cookie breyta með mörgum gildum (ekki hægt að nota fylki)

	// Fylki með myndaheitum (ekki hafa autt bil)
	$myndir = ["mynd1","mynd2","mynd3","mynd4"];
	
	// notum implode() til að breyta í streng. http://php.net/implode
	// setjum kommu til að aðgreina gildin. 
	$strMyndir = implode(',', $myndir);
	// notaðu var_dump() til að skoða innihald.
			
	// Vistum streng í cookie breytu
	setcookie('nylMyndir', $strMyndir);
?>
<!DOCTYPE html>
<html>
<head>
	<title> cookie - fylki </title>
</head>
<body>
<?php

	// Athugum hvort til er cookie 
	if(array_key_exists('nylMyndir', $_COOKIE)){
			
		// Sækjum streng (gildin) úr cookie breytu
		$nylegarMyndir = $_COOKIE['nylMyndir']; 
		// echo $nylegarMyndir;

		// Breytum í fylki með explode()  http://php.net/explode
		$myndir2 = explode( "," , $nylegarMyndir);

		// Skoðum hvað við höfum
		print_r($myndir2);
	}

	if(!isset($_COOKIE['nylMyndir'])){
	  echo "<p>Þú verður að reloada vefsíðunni til að sjá cookies </p>";
	}

?>
</body>
</html>
<?php
// Aðrar hugsanlegar aðgerðir:

//  in_array(); 		to check if item is in the array;
//  array_push();		to add item to array
//  array_key_exists 	if you want to find out if that key exists in the array, regardless of whether it contains a value or not.
//  isset() 			if you want to find out if the key exists in an array and has a value in it of meaning. Note that isset will return false for NULL values.
//  json_encode()		setcookie('your_cookie_name', json_encode($data), time()+3600);  // fylki breytt í streng
//  json_decode()		$data = json_decode($_COOKIE['your_cookie_name'], true);		 //	streng breytt í fylki.

// Forðast skal serialize() og unserialize() vegna öryggisatriða  
?>