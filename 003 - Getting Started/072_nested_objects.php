<?php
	// here's an example nesting an associative array inside a numeric array.
	
	$heroes = array(
		array(
			"name"=>"Spiderman",
			"secret_identity"=>"Peter Parker"
		),

		array(
			"name"=>"Superman",
			"secret_identity"=>"Clark Kent"
		)
	);

	foreach($heroes as $hero) {
		echo "A new hero!";
		
		foreach($hero as $key=>$value) {
			echo $key . " is equal to " . $value;
		}
	}

?>