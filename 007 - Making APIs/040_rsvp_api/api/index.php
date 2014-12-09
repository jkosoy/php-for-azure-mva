<?php
	$output = 'json';

	if(isset($_GET['output']) && $_GET['output'] == 'csv') {
		$output = 'csv';
	}

	include('partials/' . $output . '.php');
?>