<?php
	/*
	 * this example builds off our previous one to add in some basic form validation.
	 * here we see a new function, empty(), which is true if a variable passed to it is a blank string.
	 */

	$nav = array(
		'index'=>'Home',
		'story'=>'Story',
		'details'=>'Details',
		'faq'=>'FAQ',
		'rsvp'=>'RSVP',
		'registry'=>'Registry'
	);

	if(isset($_GET['page'])) {
		$page = $_GET['page'];
	}
	else {
		$page = 'index';
	}


	if(!in_array($page, array_keys($nav))) {
		header('HTTP/1.0 404 Not Found');
		$page = 'error';
	}
	elseif($page == 'rsvp') {
		$rsvpError = false;

		if(isset($_POST['name'])) {

			// begin validation, and show some errors. the $rsvpError variable will be printed in the RSVP page if needed.
			if(empty($_POST['name'])) {
				$rsvpError = 'No name entered';
			}
			else if(!isset($_POST['attending']) || empty($_POST['attending'])) {
				$rsvpError = 'Not sure if the user is attending.';
			}

			if(!$rsvpError) {
				$page = 'thanks';				
			}
		}

	}

?>

<!doctype html>
<html>

<head>
	<title>Jamie and Hilary are getting married!</title>

	<link href='https://fonts.googleapis.com/css?family=Ovo|Muli:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="./css/site.css" />
</head>

<body>
	<div class="wholepage">
		<header>
			<div class="heart">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
					<g>
						<path class="outside" fill="#ffffff"  d="M82.076,24.497c6.039,4.541,9.147,11.344,8.74,19.173c-0.879,12.468-15.967,26.416-31.332,39.633l-1.888,1.611       c-1.448,1.236-2.995,2.555-3.678,3.174l-2.669,2.393l-2.669-2.393c-1.221-1.091-4.558-4.004-6.592-5.713       C26.542,69.484,11.389,55.894,10.542,43.8c-0.407-7.942,2.686-14.762,8.724-19.303c4.199-3.158,9.538-4.899,15.072-4.899       c2.637,0,5.176,0.407,7.584,1.188c3.304,1.09,6.299,2.815,8.74,5.013c2.474-2.214,5.453-3.955,8.757-5.013       c2.393-0.781,4.932-1.172,7.552-1.172C72.489,19.614,77.844,21.339,82.076,24.497z M84.354,44.565       c0.309-6.022-2.019-11.23-6.543-14.682c-4.834-3.662-11.687-4.801-17.448-2.896c-3.89,1.285-7.096,3.711-9.164,6.705       c-2.051-2.994-5.257-5.403-9.147-6.705c-5.778-1.904-12.63-0.781-17.448,2.896c-4.525,3.451-6.853,8.659-6.543,14.73       c0.684,9.798,14.567,22.331,27.539,33.317c1.937,1.644,5.062,4.427,6.136,5.403c0.928-0.847,3.613-3.157,5.16-4.509       C69.82,67.547,83.654,54.689,84.354,44.565z" />
						<path class="inside" fill="#ffffff" d="M74.849,33.774c2.279,1.725,4.916,4.947,4.639,10.498C78.869,53.176,61.861,68.02,53.69,75.148       c-0.684,0.586-1.318,1.139-1.888,1.644c-0.896-0.765-1.921-1.644-3.044-2.588c-8.187-6.934-25.228-21.354-25.83-29.883       c-0.276-5.6,2.36-8.822,4.623-10.547c3.581-2.719,8.675-3.564,12.956-2.148c4.427,1.465,10.693,9.505,10.693,9.505       s6.283-8.04,10.694-9.505C66.19,30.21,71.269,31.056,74.849,33.774z" />
					</g>
				</svg>
			</div>

			<h1>Jamie + Hilary</h1>

			<div class="nav">
				<?php foreach($nav as $key=>$value): ?>
					<a href="./?page=<?php echo $key; ?>" <?php if($page == $key): ?>class="is-active"<?php endif; ?>><?php echo $value; ?></a>
				<?php endforeach; ?>
			</div>
		</header>

		<article class="page">
			<?php include('partials/' . $page . '.php'); ?>
		</article>
	</div>
</body>
</html>