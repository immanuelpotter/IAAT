<?php

function connect_to_db(){
  $db = new PDO("mysql:dbname=carrent;host=localhost","root","");
//set error handles
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $rows=$db->query("SELECT * FROM vehicles");
?>  
<table>
<tr><th>Brand</th><th>Reg plate</th><th>type</th><th>Daily Rate</th><th>Description</th></tr>
<?php
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
try {
  connect_to_db();
} catch (Exception $e){
  echo 'Caught exception: ', $e->getMessage(), "\n";
}
?>

</table>
