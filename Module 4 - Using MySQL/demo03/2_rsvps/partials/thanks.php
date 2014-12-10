<h2>RSVP</h2>

<p>Hey, thanks for submitting! Here's the information we got back from you!</p>

<table>
	<tr>
		<th>key</th>
		<th>value</th>
	</tr>
	<?php foreach($_POST as $key=>$value): ?>
	<tr>
		<td><?php echo $key; ?></td>
		<td><?php echo $value; ?></td>
	</tr>
	<?php endforeach; ?>
</table>