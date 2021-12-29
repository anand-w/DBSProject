<!--
<?php
include_once('try.php');
// $result = $mysqli -> query("select * from vehicle_details");
if($_POST['brand'] ==null)

$result = $mysqli -> query("select * from vehicle_details where city ='$_POST[city]' and NOP>='$_POST[nop]' and RPH<='$_POST[price]'");
      // $result = $mysqli -> query("select * from vehicle_details where city ='$_POST[city]' and NOP>='$_POST[nop]' and RPH<='$_POST[price]' ");
else $result = $mysqli -> query("select * from vehicle_details where city ='$_POST[city]' and NOP>='$_POST[nop]' and RPH<='$_POST[price]' and model='$_POST[brand]'");
// $result = $mysqli -> query("select * from vehicle_details where city ='$_POST[city]'and NOP='$_POST[nop]' and RPH<='$_POST[price]'");
?> -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Based on your search result:</h3>
<table border=1 cellspacing=1 cellpadding=1>
  <head>
    <thead>
      <td>
          <font color=green>
              Vehicle ID
          </font>
      </td>
        <td>
            <font color=green>
                Model
            </font>
        </td>
        <td>
            <font color=green>
                fuel type
            </font>
        </td>
        <td>
            <font color=green>
                NOP
            </font>
        </td>
        <td>
            <font color=green>
                Avail
            </font>
        </td>
        <td>
            <font color=green>
                gear
            </font>
        </td>
        <td>
            <font color=green>
                RPH
            </font>
        </td>
        <td>
            <font color=green>
                eC
            </font>
        </td>
        <td>
            <font color=green>
                input
            </font>
        </td>
    </thead>

  </head>
  <form action="http://localhost/CRS_project/CRS_p/src/main/webapp/carDetails.php" method="post">
  <?php
  while($rows=$result->fetch_assoc())
  {
  ?>
      <tr>
        <td><?php echo $rows['vehicleID']; ?></td>
        <td><?php echo $rows['model']; ?></td>
        <td><?php echo $rows['fueltype']; ?></td>

        <td><?php echo $rows['NOP']; ?></td>

        <td><?php echo $rows['avail']; ?></td>

        <td><?php echo $rows['gear']; ?></td>
        <td><?php echo $rows['rph']; ?></td>
        <td><?php echo $rows['ex_chrg']; ?></td>
        <td><input type="radio" name="radio" value= <?php echo $rows['vehicleID']?>></td>
      </tr>
    <?php
  }
  ?>
  </table>
  <p>  <input type="number" name="hours" placeholder="Number of hours ">
       <input type="number" name="ex_dist" placeholder="Excess distance">
      <input type="submit" value="submit">
  </p>

  </form>

<!-- </table> -->


  <!-- <a href='http://localhost:8080/CRS_p/carDetails.html'>
  	<button >Search</button> -->
  </body>
</html>
