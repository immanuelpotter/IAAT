<!DOCTYPE html>
<html>
  <head>
    <title>Adding vehicles</title>
  </head>

  <body>
  <?php require_once('connectdb.php'); ?>
    <h1>Add your vehicle to our list using the form below</h1>
    <br>
    <?php
      $reg_noErr = $brandErr = $rateErr = $categoryErr = "";
      $reg_no = $brand = $category = "";
      $daily_rate = 0.0;
      if (!isset($_POST["submitted"])){
    ?>
    <form method="post" action="addvehicles.php">
      Reg Plate: <input type="text" name="reg_no"></input>
      <br>
      Brand: <input type="text" name="brand"></input>
      <br>
      Daily Rate: <input type="float" name="daily_rate"></input>
      <br>
      Category (choose):
      <br>
      Car <input type="radio" value="car" name="category"></input>
      Truck<input type="radio" value="truck" name="category"></input>
      <br>
      <input type="submit" name="submit"></input>
      <input type="reset" name="reset"></input>
      <input type="hidden" name="submitted" value="true"/>
    </form>
    <?php
      } else {
        if (empty($_POST["reg_no"])){ 
          $reg_noErr = "Missing!";
        }
          else {
          $reg_no = $_POST["reg_no"];
        }
        if (empty($_POST["brand"])){ 
          $brandErr = "Missing!";
        }
          else {
          $brand = $_POST["brand"];
        }
        if (!is_numeric($_POST["daily_rate"])){ 
          $rateErr = 0.0;
        }
          else {
          $daily_rate = $_POST["daily_rate"];
        }
        if (!isset($_POST["category"])){ 
          $categoryErr = "Missing!";
        }
          else {
          $category = $_POST["category"];
        }
      //sql time
      //Looking for way to store doubles using PDO
      //currently met with:
      // Error Details: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined
        try {
          $prep = $db->prepare("INSERT INTO vehicles(reg_no,brand,daily_rate,category) VALUES (:reg_no,:brand,:dailyrate,:category) ");
          $prep->bindParam('reg_no', $reg_no, PDO::PARAM_STR,8);
          $prep->bindParam('brand', $brand, PDO::PARAM_STR,30);
          $prep->bindParam('daily_rate', $daily_rate, PDO::PARAM_STR,10);
          $prep->bindParam('category', $category, PDO::PARAM_STR,5);

          $prep->execute();
        } catch (PDOException $pd_ex){
        ?>
          <p>Sorry, a DB error occurred. Try again.</p>
          <p>Error Details: <?= $pd_ex->getMessage() ?></p>
    <?php
        }
      }
    ?>
  </body>
</html>
