<?php

function connect_to_db(){
  $db = new PDO("mysql:dbname=carrent;host=localhost","root","");
//set error handles
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $rows=$db->query("SELECT * FROM vehicles");
    foreach ($rows as $row) {
?>
    <li> Brand: <?= print_r($row) ?>,
<?php
  }
}

try {
  connect_to_db();
} catch (Exception $e){
  echo 'Caught exception: ', $e->getMessage(), "\n";
}

?>
