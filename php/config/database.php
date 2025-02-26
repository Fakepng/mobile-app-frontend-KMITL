<?php
  include('config.php');

  $dbConn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  if (!$dbConn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  header('Location: /');
?>