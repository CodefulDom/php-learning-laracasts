<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PHP</title>

</head>
<body>
	<h1>Tasks for the Day</h1>
	<ul>
		<li>
		<strong>Title: <?= $task['title'] ?></strong>
		</li>
	</ul>
	<ul>
		<li>
			<strong>Day Due: <?= $task['due'] ?></strong>
		</li>
	</ul>
	<ul>
		<li>
			<strong>Person responsible for Task: <?= $task['assigned_to'] ?></strong>
		</li>
	</ul>
	<ul>
		<li>
			<strong>Status: <?= $task['completed'] ? 'Completed' : 'Incomplete'; ?></strong>
		</li>
	</ul>
</body>
</html>
