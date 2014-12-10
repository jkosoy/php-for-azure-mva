<?php
	// basic objects are referred to associative arrays, and have a key value syntax as below
	$hero = array("name"=>"Spiderman", "secret_identity"=>"Peter Parker");

	echo $hero["secret_identity"]; // Peter Parker

	// you can loop through and grab keys and values as well.
	foreach($hero as $key=>$value) {
		echo $key; // name, secret_identity
		echo $value; // Spiderman, Peter Parker
	}
?>