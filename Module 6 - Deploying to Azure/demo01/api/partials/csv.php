<?php
	header('Content-Type: text/csv');
	header('Content-Disposition: attachment; filename="rsvps.csv"'); // change the filename

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

	$total_columns = $result->field_count;

	$output = "";
	$props = array();

	// print the field names
	while($property = $result->fetch_field()) {
		$output .= '"' . $property->name . '",';
		array_push($props, $property->name);
	}

	// print a line break
	$output .= "\n";

	// print the records
	while($row = $result->fetch_assoc()) {
		for($i=0; $i<count($props); $i++) {
			$output .= '"' . $row[$props[$i]]. '",';
		}

		// print a line break
		$output .= "\n";
	}

	echo $output;
?>