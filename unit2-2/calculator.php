<?php

//Not sure why XSS attacks still work even though 
//attempted escaping of chars here

function _escape($string){
  echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

if (isset($_GET["int1"]) && isset($_GET["int2"])){
  $int1 = $_GET["int1"];
  $int2 = $_GET["int2"];
  $safe1 = _escape($int1);
  $safe2 = _escape($int2);

  echo "<p>Your first input is: " . $safe1 . "</p>";
  echo "<p>Your second input is: " . $safe2 . "</p><br>";
  
  $add_res = $safe1 + $safe2 ;
  print "<p>Addition result: " . $add_res . "</p>" ; 
  
  $minus_res = $safe1 - $safe2 ;
  print "<p>Deduction result: " . $minus_res . "</p>";
  
  $mult_res = $safe1 * $safe2 ;
  print "<p>Multiplication result: " . $mult_res . "</p>";
 
  //can divide 0 by any int, however, cannot divide by 0  
  if($safe2 != 0){
    $div_res = $safe1 / $safe2 ;
    print "<p>Result: " . $div_res . "</p>" ; 
  }
  else {
    print "Oh noez, divide by zeroez";
  }
}
else {
  echo "No unset inputs are allowed."; 
}

?>
