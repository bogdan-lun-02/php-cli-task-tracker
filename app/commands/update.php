<?php

$jsonTasks = __DIR__ . '/../tasks.json';

if (file_exists($jsonTasks)) {
  $tasks = json_decode(file_get_contents($jsonTasks), true) ?? [];
}

$searchedID = (int) $argv[2];
$newDesk = $argv[3];
$updateStatus = false;

if ($searchedID === 0) {
  echo "Wrong! ID must be integer greater than zero!\n";
  exit();
}

foreach ($tasks as &$task) {
  if ($task['id'] === $searchedID) {
    $task['description'] = $newDesk;
    $task['updatedAt'] = date("d.m.Y H:i");

    $updateStatus = true;

    echo "Task updated successsfully (ID: {$searchedID}. New description: {$newDesk})\n";
    break;
  }
}

file_put_contents($jsonTasks, json_encode($tasks));

if (!$updateStatus) {
  echo "Todo with such ID is not found!\n";
  exit();
}

