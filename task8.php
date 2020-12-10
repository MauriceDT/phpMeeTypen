<?php

$person = [
    'age' => 31,
    'hair' => 'Brown',
    'career' => 'Junior Web Developer'
];

$person['name'] = 'Maurice';

unset($person['hair']);



$task = [
    'chore'             => 'Do the dishes',
    'due'               => 'Tomorrow',
    'assigned_to'       => 'Maurice',
    'completed'         => true,
    'was_it_fun?'       => false
];


require 'index.view.php';
