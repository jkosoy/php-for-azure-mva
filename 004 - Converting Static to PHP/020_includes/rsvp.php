<?php include("partials/header.php"); ?>

<h2>RSVP</h2>

<form>
	<p>
		<label for="name">Name</label>
		<input type="text" name="name" id="name" placeholder="Name" />
	</p>

	<p>
		<input type="radio" name="attending" /> I&rsquo;m coming! <br />
		<input type="radio" name="attending" /> I can&rsquo;t make it.

	</p>

	<p>
		<label for="guests">Date&rsquo;s Name (if applicable)</label>
		<input type="text" name="date_name" id="date_name" placeholder="Guest Name" />
	</p>

	<input type="submit" value="RSVP" class="submit" />
</form>

<?php include("partials/footer.php"); ?>
