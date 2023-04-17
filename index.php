<html>
  <head></head>
  <body>
    <form action="" method="post">
      Name
      <input type="text" name="name" value="">
      <br>
      Age
      <input type="number" name="age" value="">
      <br>
      <button type="submit" name="submit">Submit</button>
    </form>
    <a href="data.php">View Data</a>
  </body>
</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "data");

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $age = $_POST["age"];

  $query = "INSERT INTO tb_data VALUES('', '$name', '$age')";

  mysqli_query($conn, $query);

  header("Location: data.php");
}
?>
