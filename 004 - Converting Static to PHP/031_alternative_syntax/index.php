<div>
	<h1>A For Loop</h1>
	<?php for($i=0;$i<100;$i++): ?>
		<p>i is equal to <?php echo $i; ?></p>
	<?php endfor; ?>
</div>

<div>
	<?php $test = 3; ?>
	<h1>If statement</h1>

	<?php if($test == 1): ?>
	<p>Test is 1</p>
	<?php elseif($test == 2): ?>
	<p>Test is 2</p>
	<?php else: ?>
	<p>Test is something other than 1 or 2</p>
	<?php endif; ?>
</div>