<?php
	$mysql = mysqli_connect('localhost', 'wedding', 'wedding'); // connects to localhost w/ username: wedding / pw: wedding
	$mysql->select_db('WeddingDB'); // selects the database

	// create a query string...
	$query = "INSERT INTO `rsvps` (name,attending,guest) VALUES ('Guest Name From PHP', 1, '');";

	// and send it to mysql
	$mysql->query($query);

	// if there are any errors, print them to the screen
	echo $mysql->error;
?>

Done!