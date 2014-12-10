<?php
	header('Content-Type: application/json');


	$mysql = mysqli_connect('localhost', 'wedding', 'wedding');
	$mysql->select_db('WeddingDB'); 

	$query = ""; 

	if(isset($_GET['attending'])) {
		$query = "SELECT * FROM `rsvps` WHERE `attending`=1";
	}
	else {
		$query = "SELECT * FROM `rsvps` WHERE 1";		
	}

	$result = $mysql->query($query);

	$output = array(); // this time we'll set the output to be an array.
	$output["status"] = "okay"; // I like to design my APIs with a "status" variable, in case of errors.
	$output["data"] = array();

	// loop through our data and add it to our output array.
	while($row = $result->fetch_assoc()) {
		array_push($output["data"], $row);
	}

	echo json_encode($output); // as with our previous example, use the json_encode function to convert an array to a json string.
?>