<?php

$jsonTasks = __DIR__ . '/../tasks.json';

if (file_exists($jsonTasks)) {
  $tasks = json_decode(file_get_contents($jsonTasks), true) ?? [];
}

$id = count($tasks) > 0 ? end($tasks)['id'] += 1 : 1;
$description = $argv[2];
$status = 'todo';
$createdAt = date("d.m.Y H:i");
$updatedAt = null;

$task = [
  'id' => $id,
  'description' => $description,
  'status' => $status,
  'createdAt' => $createdAt,
  'updatedAt' => $updatedAt
];

array_push($tasks, $task);

file_put_contents($jsonTasks, json_encode($tasks));

echo "Task added successsfully (ID: {$id})\n";