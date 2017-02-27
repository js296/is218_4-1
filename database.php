<?php
  $dsn = 'mysql:host=sql1.njit.edu;dbname=js296';
  $username = 'js296';
  $password = 'Leavemeb3';

  try {
      $db = new PDO($dsn, $username, $password);
  } catch (PDOException $e) {
      $error_message = $e->getMessage();
      include('database_error.php');
      exit();
  }
?>
