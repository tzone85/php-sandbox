<?php

	$loggedIn = false;
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
//	echo ($loggedIn) ? 'You are logged in' : 'You are not logged in';

//	$isRegistered = ($loggedIn == false) ? true : false;
//	echo $isRegistered;

//	$age = 10;
//	$score = 15;

	// nested short hand

//	echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible': 'Average'));

?>

<div>
	<?php if ($loggedIn):  ?>
		<h1>Welcome User</h1>
	<?php else: ?>
		<h1>Welcome Guest</h1>
	<?php endif; ?>
</div>

<div>
	<?php foreach ($arr as $item): ?>
		<?= $item; ?>
	<?php endforeach; ?>
</div>

<div>
	<?php for ($i = 0; $i < 10; $i++): ?>
		<li><?= $i ?></li>
	<?php endfor; ?>
</div>
