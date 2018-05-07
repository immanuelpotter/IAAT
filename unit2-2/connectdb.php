<?php

try {
  $db = new PDO("mysql:dbname=carrent;host=localhost","root","");
//set error handles
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e){
  echo 'Caught exception: ', $e->getMessage(), "\n";
}

?>
