<?php

date_default_timezone_set('Europe/Kyiv');

$command = $argv[1] ?? null;

$commandFile = __DIR__ . '/commands/' . $command . '.php';

if (file_exists($commandFile)) {
  require $commandFile;
} else {
  echo "Wrong command! List of available commands: add, list, update\n";
}