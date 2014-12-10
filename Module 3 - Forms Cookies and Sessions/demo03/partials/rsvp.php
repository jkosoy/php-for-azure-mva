<h2>RSVP</h2>

<?php if($rsvpError): ?>
<h3><?php echo $rsvpError; ?></h3>
<?php endif; ?>

<form action="./?page=rsvp" method="post">
	<p>
		<label for="name">Name</label>
		<input type="text" name="name" id="name" placeholder="Name" />
	</p>

	<p>
		<input type="radio" name="attending" value="yes" /> I&rsquo;m coming! <br />
		<input type="radio" name="attending" value="no" /> I can&rsquo;t make it.

	</p>

	<p>
		<label for="guests">Date&rsquo;s Name (if applicable)</label>
		<input type="text" name="date_name" id="date_name" placeholder="Guest Name" />
	</p>

	<input type="submit" value="RSVP" class="submit" />
</form>