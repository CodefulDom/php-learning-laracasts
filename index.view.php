<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PHP</title>

</head>
<body>
	<ul>
		<?php foreach ( $person as $key => $val ) : ?>
			<li><strong><?= $key; ?>: </strong><?= $val; ?></li>
		<?php endforeach; ?>
	</ul>
	<div>
		<?php foreach ($task as $key => $val) : ?>
			<strong><?= ucwords($key); ?>: </strong><?= $val; ?>
		<?php endforeach; ?>
	</div>
</body>
</html>
