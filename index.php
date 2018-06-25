<?php
require('database.php');
initMigration($pdo);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD</title>
  </head>
  <body>
    <a href="create.php">Create User</a>
    <a href="read.php?show=all">Show All Users</a>

  </body>
</html>
