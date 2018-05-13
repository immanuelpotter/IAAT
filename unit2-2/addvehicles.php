<!DOCTYPE html>
<html>
  <head>
    <title>Adding vehicles</title>
  </head>

  <body>
  <?php require_once('connectdb.php'); ?>
    <h1>Add your vehicle to our list using the form below</h1>
    <br>
    <form method="post" action="listvehicles.php">
      Reg Plate: <input type="text" name="reg_no"></input>
      <br>
      Brand: <input type="text" name="brand"></input>
      <br>
      Daily Rate: <input type="float" name="daily_rate"></input>
      <br>
      Category (choose):
      <input type="radio" value="car" name="category"></input>
      <input type="radio" value="truck" name="category"></input>
      <br>
      <input type="submit" name="submit"></input>
      <input type="reset" name="reset"></input>
      <input type="hidden" name="submitted" value="true"/>
    </form>
  </body>
</html>
