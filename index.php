<?php

require_once 'bootstrap.php';

// available tasks
$tasksNumbersAndFiles = [
    1 => 'tasks/task1_exchangeRates.php',
    2 => 'tasks/task2_rateStats.php',
];

if (!isset($_GET['taskNr']) || !is_numeric($_GET['taskNr']) || !array_key_exists($_GET['taskNr'], $tasksNumbersAndFiles)) {
    throw new Exception(('$_GET should provide a `taskNr` variable with an existing task number to work'));
}


$taskNr = $_GET['taskNr'];
$taskFile = $tasksNumbersAndFiles[$taskNr];

// run the task!
require $taskFile;

// this is just for testing SSH connection and push

