<?php
	header('Content-Type: application/json');

	$foo = array('foo'=>'bar');

	echo json_encode($foo);
?>