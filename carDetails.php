<?php
include_once('try.php');
$result = $mysqli -> query("select * from vehicle_details where vehicleID ='$_POST[radio]' ");
$result2 =$mysqli -> query("select * from current_cust");
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>

      <!-- <?php
      while($rows=$result->fetch_assoc())
      {
      ?>
          <tr>
            <td><?php echo $rows['model']; ?></td>
            <td><?php echo $rows['rph']; ?></td>
            <td><?php echo $rows['ex_chrg']; ?></td>
            <?php $rate= $rows['rph']; ?>
            <?php $ext= $rows['ex_chrg']; ?>
    <?php } ?>
    <h4>Total charges:</h4><br>
  <?php echo $_POST['hours']*$rate+$_POST['ex_dist']*$ext?> -->

  <?php
  while($rows=$result2->fetch_assoc()){
    $custid=$rows['custid'];
  }

  while($rows=$result->fetch_assoc()){
    $ext= $rows['ex_chrg'];
    $rate= $rows['rph'];
  }
  $amt=$_POST['hours']*$rate+$_POST['ex_dist']*$ext;
  $mysqli -> query("insert into rental_details(vehicleID,custid,amt,hrs) values('$_POST[radio]','$custid','$amt','$_POST[hours]')");

  ?>
  <h4>Your Grand total amount to be paid is:</h4> <br>
  <?php echo $amt ?>/-
  <p><a href='http://localhost/CRS_project/CRS_p/src/main/webapp/finalize.php'>
  <button>Make Payment</button>
  </a></p>



</body>
</html>
