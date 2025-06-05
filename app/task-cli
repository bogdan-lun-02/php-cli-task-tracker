#!/usr/bin/env php
<?php

date_default_timezone_set('Europe/Kyiv');

$command = $argv[1] ?? null;

switch ($command) {
  case 'add':
    require __DIR__ . '/commands/add.php';
    break;
  case 'list':
    require __DIR__ . '/commands/list.php';
    break;
  case 'update':
    require __DIR__ . '/commands/update.php';
    break;
  case 'delete':
    require __DIR__ . '/commands/delete.php';
    break;
  case 'mark-done':
  case 'mark-in-progress':
  case 'mark-todo':
    require __DIR__ . '/commands/mark.php';
    break;
  default:
    echo "Wrong command! List of available commands: add, list, update, delete, mark-done, mark-in-progress\n";
    break;
}
