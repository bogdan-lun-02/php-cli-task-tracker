<?php

include __DIR__ . '/../load_tasks.php';

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

file_put_contents($json, json_encode($tasks));

if (!$updateStatus) {
  echo "Todo with such ID is not found!\n";
  exit();
}

