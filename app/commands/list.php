<?php

include __DIR__ . '/../load_tasks.php';

$status = $argv[2] ?? '';

if (!empty($status)) {
  $tasks = array_filter($tasks, fn($task) => $task['status'] === $status);
}

foreach ($tasks as $task) {
  echo "Description: {$task['description']}. ID: {$task['id']}\n";
  echo "Task status: {$task['status']}\n";
  echo "Creation date: {$task['createdAt']}\n";
  echo "Last update: {$task['updatedAt']}\n";
  echo "-------------------------------------\n";
}

