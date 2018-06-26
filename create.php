<?php
require('database.php');

// Create New User
if($_server['REQUEST_METHOD'] == "POST") {
  $first_name = $_POST["first_name"];
  $first_name = $_POST["last_name"];
  $first_name = $_POST["age"];

  try {
    $statement = $pdo->prepare(
      'INSERT INTO users (first_name, last_name, age) VALUES (:first_name, :last_name, :age);'
    );

    $statement->execute(['first_name' => $first_name, 'last_name' => $last_name, 'age' => $age]);
    echo "Insert user: {$first_name} {$last_name}";

    $id= $pdo->lastInsertId();

    echo "<script>location.href='/read.php?show=one&id={$id}'</script>";
  } catch(PDOException $e) {
    echo "<h4 style='color: red;'>".$e->getMessage(). "</h4>";

  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD</title>
  </head>
  <body>
  <form action="/create.php" method="POST">
      <label for="first_name">First Name</label> <br>
      <input type="text" name="first_name" value=""> <br>
      <label for="last_name">Last Name</label> <br>
      <input type="text" name="last_name" value=""> <br>
      <label for="age">Age</label> <br>
      <input type="text" name="age" value=""> <br>
      <button type="submit">Save</button>
  </form>

  </body>
</html>