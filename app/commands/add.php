<?php

include __DIR__ . '/../load_tasks.php';

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

file_put_contents($json, json_encode($tasks));

echo "Task added successsfully (ID: {$id})\n";