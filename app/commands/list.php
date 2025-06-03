<?php

$jsonTasks = __DIR__ . '/../tasks.json';

if (file_exists($jsonTasks)) {
  $tasks = json_decode(file_get_contents($jsonTasks), true) ?? [];
}

// print_r($tasks);

foreach ($tasks as $task) {
  echo "Description: {$task['description']}. ID: {$task['id']}\n";
  echo "Task status: {$task['status']}\n";
  echo "Creation date: {$task['createdAt']}\n";
  echo "Last update: {$task['updatedAt']}\n";
  echo "-------------------------------------\n";
}