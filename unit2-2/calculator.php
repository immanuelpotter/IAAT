<?php
//htmlspecialchars was playing up, still rendered XSS in browser
//so needs looking at
if (isset($_GET["int1"]) && isset($_GET["int2"])){
  $int1 = $_GET["int1"];
  $int2 = $_GET["int2"];
  echo "<p>Your first input is: " . $int1 . "</p>";
  echo "<p>Your second input is: " . $int2 . "</p><br>";
  
  $add_res = $int1 + $int2 ;
  print "<p>Addition result: " . $add_res . "</p>" ; 
  
  $minus_res = $int1 - $int2 ;
  print "<p>Deduction result: " . $minus_res . "</p>";
  
  $mult_res = $int1 * $int2 ;
  print "<p>Multiplication result: " . $mult_res . "</p>";
 
  //can divide 0 by any int, however, cannot divide by 0  
  if($int2 != 0){
    $div_res = $int1 / $int2 ;
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
