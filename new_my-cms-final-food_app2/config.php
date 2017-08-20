<?php

return [
  'database' => [
      'dbname' => 'food_app',
      'username' => 'root',
      'password' => '',
      'connection' => 'mysql:host=localhost',
      'options' => [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
      ]
  ]
];