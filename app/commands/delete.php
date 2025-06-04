<?php

include __DIR__ . '/../load_tasks.php';

$searchedID = (int) $argv[2];
$updateStatus = false;

if ($searchedID === 0) {
  echo "Wrong! ID must be integer greater than zero!\n";
  exit();
}

foreach ($tasks as $key => $task) {
  if ($task['id'] === $searchedID) {

    $updateStatus = true;
    unset($tasks[$key]);
    echo "Task deleted\n";
    break;
  }
}

file_put_contents($json, json_encode($tasks));

if (!$updateStatus) {
  echo "Todo with such ID is not found!\n";
  exit();
}

