<?php
	$mysql = mysqli_connect('localhost', 'wedding', 'wedding'); // connects to localhost w/ username: wedding / pw: wedding
	$mysql->select_db('WeddingDB'); // selects the database

	// create a query string...
	$query = "SELECT * FROM `rsvps` WHERE 1";

	// and send it to mysql
	$result = $mysql->query($query);

	// if there are any errors, print them to the screen
	echo $mysql->error;
?>

<h1>Results</h1>


<?php while($row = $result->fetch_assoc()): ?>
<h2>Name: <?php echo $row['name']; ?></h2>
<h3>Attending? <?php echo $row['attending']; ?></h2>
<h3>Guest <?php echo $row['guest']; ?></h2>

<hr />

<?php endwhile; ?>
