<?php

$json = __DIR__ . '/tasks.json';

if (file_exists($json)) {
  $tasks = json_decode(file_get_contents($json), true) ?? [];
}