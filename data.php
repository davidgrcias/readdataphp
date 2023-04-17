<html>
  <head></head>
  <body>
    <table border = 1 cellpadding = 5>
      <tr>
        <td>#</td>
        <td>Name</td>
        <td>Age</td>
      </tr>
      <?php
      require 'connection.php';

      $datas = mysqli_query($conn, "SELECT * FROM tb_data");
      $i = 1;
      foreach($datas as $data) :
      ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['age']; ?></td>
      </tr>
      <?php endforeach ?>
    </table>
    <a href="index.php">Insert Data</a>
  </body>
</html>
