<html>
 <head>
 <title>Buy T-Shirts Online</title>
 </head>
 <body>

<?php

$db = mysqli_connect('localhost','root','','e13222lab02')
 or die('Error connecting to MySQL server.');

$orderno = $_POST["orderno"];

$query = "SELECT * FROM CustomerOrderDetails WHERE OrderNo='$orderno'";


$result = mysqli_query($db, $query) or die('Error querying database.');

$row = mysqli_fetch_array($result); 


if($row['cap'] && $row['wristBand']) $extra = "Wrist band, Cap";
elseif($row['cap']) $extra = "Cap";
elseif($row['wristBand']) $extra = "Wrist Band";
else $extra="";
?>


<h1>Your Order Details</h1>
 
 Thank you <b><?php echo $row['firstName']; ?> </b>for your purchase on our website! <br>
 
 Your order number is <b><?php echo $row['OrderNo']; ?> </b><br>
 Size: <b><?php echo $row['size']; ?></b> <br>
 Color:<b> <?php echo $row['color']; ?> </b><br>
 <br>
 You ordered these extra items: <b><?php echo $extra; ?>   </b><br>
 <br>
 Your items will be shipped to: <br>
 <br>
 
<b><?php echo $row['firstName']; ?>  <?php echo $row['lastName']; ?> <br>
 <?php echo $row['address1'] ?>, <br>
 <?php echo $row['address2']; ?>, <br>
 <?php echo $row['address3']; ?>. <br></b>
 <br>
 Thank you for submitting your comments! We appreciate it. You said: <br>
<br>
<b><?php echo $row['comments'];
mysqli_close($db);
 ?>  </b><br>
 <br>


</body>
</html>
