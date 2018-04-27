<!DOCTYPE html>
<html>
<head>
  <title>Unit2-1 Basic PHP Programming - Tasks </title>
</head>

<body>
	<h1>Unit2-1 tasks</h1>

	<!-- Task 1: String-->
	<!-- write your solution to Task 1 here -->
	<div class="section">
		<h2>Task 1 : String</h2>
		<?php
                   $doofus = "I love programming" ;
                ?>
                First letter is: <?= $doofus[0] ?><br>
                Length of string is: <?= strlen($doofus) ?><br>
                Last letter is: <?= substr($doofus,-1) ?> <br>
                First 6 letters are: <?= substr($doofus, 0,6) ?> <br>
               	In capitals: <?= strtoupper($doofus) ?> <br<br><br>
	
	</div>

	<!-- Task 2: Array and image-->
	<!-- write your solution to Task 2 here -->
	<div class="section">
		<h2>Task 2 : Array and image</h2>
                <?php
                  $img_array = array("earth.jpg","flower.jpg","plane.jpg","tiger.jpg") ;
                  $rand = rand();
                  $url_path = "/php/images/" ;
                  $url_path .= $img_array[$rand % 4] ;
                  echo "<img src=\"$url_path\">" ;
                ?>
               <br><br>
	</div>	

	<!-- Task 3: Function definition dayinmonth  -->
	<!-- write your solution to Task 3 here -->
	<div class="section">
		<h2>Task 3 : Function definition</h2>
		
                 <?php
                    function daysInMonth($month){
                     $months = array("31","28","31","30","31","30","31","31","30","31","30","31");
                     if ($month > 0 && $month <= 12){
                       $out = $months[$month - 1];
                     } else {
                       return 'That month doesn\'t work!';
                     }
                       echo 'Month ' . $month . ' => ' . $out . ' days.' . "\n";
                   }
                  ?>
                 <?php echo daysInMonth(3); ?> <br>
                 <?php echo daysInMonth(7); ?> <br>
                 <?php echo daysInMonth(2); ?> <br>	
                 <?php echo daysInMonth(1); ?> <br>	
                 <?php echo daysInMonth(0); ?> <br>	
                 <?php echo daysInMonth(12); ?> <br>	
                 <?php echo daysInMonth(-1); ?> <br>	
                 <?php echo daysInMonth(14); ?> <br>	
                 <?php echo daysInMonth(4); ?> <br>	
	
	</div>
	

	
	<!-- Task 4: Favorite Artists from a File (Files) -->
	<!-- write your solution to Task 4 here -->
	<div class="section">
		<h2>Task 4: My Favorite Artists from a file</h2>
	        <?php
 	           $file = file("favorite.txt");
                   echo "<ul>";
                      foreach ($file as $line) {
                         echo "<li><a href = \"";
                         $lower = strtolower($line);
                         $string_arr = explode(" ", $lower);
                         $url_string = implode("-", $string_arr);
                         echo "http://www.mtv.com/artists/" . $url_string . '"/></li>' . $line ;
                      }
                   echo "</ul>";
                ?>
            <br>	
	</div>
	
	<!-- Task 6: Directory operations -->
	<!-- write your solution to Task 6 here -->
	<div class="section">
		<h2>Task 6 : Directory operations</h2>
                    <?php
                       $dir = $_SERVER['DOCUMENT_ROOT'];
                       $files = scandir($dir);
                       foreach ($files as $file){
                         print "Files in webroot: $file <br>";
                       }
                    ?>
		
	</div>

	<!-- Task 6 optional: Directory operations -->
	<!-- write your solution to Task 6 optional here -->
	<div class="section">
		<h2>Task 6 optional: Directory operations optional</h2>
                    <?php
                       $dir = $_SERVER['DOCUMENT_ROOT'];
                       $files = scandir($dir);
                       foreach ($files as $file){
                         print "Files in webroot: $file <br>";
                          
                       }
                    ?>
	
	
	
	</div>
	</div


	
    <!-- Task 5: including external files -->
	<!-- write your solution to Task 5 here -->
	<div class="section">
		<h2>Task 5: including external files</h2>
	        <?php
                  include("footer.php");
                ?>	
			
	</div>

</body>
</html>
