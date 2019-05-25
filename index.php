<?php

$person = [
	'age'       => 31,
	'hairColor' => 'black',
	'career'    => 'software engineer',
];

$task = [
	'title' => 'Cut the grass',
	'due' => 'Monday',
	'assigned_to' => 'Dom',
	'completed' => false
];


$person['name'] = 'Dominique Hallan';


unset($person['age']);
require 'index.view.php';
