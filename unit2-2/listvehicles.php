<!DOCTYPE html>
<html>
  <head>
    <title>Vehicle List</title>
  </head>

  <body>
  <?php require_once('connectdb.php'); ?>
    <table>
      <thead>
        <tr>
          <th>Brand</th>
          <th>Reg Plate</th>
          <th>Category</th>
          <th>Daily Rate</th>
          <th>Description</th>
        </tr>
<?php 
    try{
      $rows = $db->query("SELECT * FROM vehicles");
      foreach ($rows as $row) {
      ?>

      <tr><td><?= $row["brand"]; ?></td>
      <td><?= $row["reg_no"]; ?></td>
      <td><?= $row["category"]; ?></td>
      <td><?= $row["dailyrate"]; ?></td>
      <td><?= $row["description"]; ?></td></tr>
<?php
    }
  }
  catch (Exception $e){
    echo "Failed.";
    $e->getMessage();
    exit;
  } 
?>
 
 </body>
</html>
