<html>
 <head>
 <title>Buy T-Shirts Online</title>
 </head>
 <body>
 
 <?php
 
 $db = mysqli_connect('localhost','root','','e13222lab02')
 or die('Error connecting to MySQL server.');
 
$fname = $_POST["fname"];
$add1 = $_POST["add1"];
$add2 = $_POST["add2"];
$add3 = $_POST["add3"];
$size = $_POST["size"];
$color = $_POST["color"];
$lname = $_POST["lname"];
$comments = $_POST["comments"];

 if(isset($_POST["caps"]) && isset($_POST["bands"])){
 $caps = 1;
 $bands = 1;
 $extra =  "Wrist Band, Cap" ;
 }
 elseif(isset($_POST["caps"])){
 $caps = 1;
 $bands = 0;
 $extra = "Cap";
 }
 
 elseif(isset($_POST["bands"] )){
 $bands = 1;
 $caps = 0;
 $extra = "Wrist band"; 
 }
 else{
 $bands = 0;
 $caps = 0;
 $extra = "";
  }
 
 
 $query = "INSERT INTO CustomerOrderDetails(size, color, cap, wristBand, firstName, lastName, address1, address2, address3, comments) VALUES ('$size','$color',$caps,$bands,'$fname','$lname','$add1','$add2','$add3','$comments')";

 
 $result = mysqli_query($db, $query) or die('Error querying database.');
 
 $query = "SELECT OrderNo FROM CustomerOrderDetails WHERE firstName='$fname' AND lastName='$lname' AND address1='$add1' AND address2='$add2' AND address3='$add3'";


 $result = mysqli_query($db, $query) or die('Error querying database.');
 
 while ($row = mysqli_fetch_array($result)) { 
 $orderno = $row['OrderNo'];
 }
 

 ?>
 
 <h1>Your Order Details</h1>
 
 Thank you<b> <?php echo $fname; ?></b> for your purchase on our website! <br>
 
 Your order number is <b><?php echo $orderno; ?> </b><br>
 Size: <b><?php echo $size; ?> </b><br>
 Color:<b> <?php echo $color; ?></b> <br>
 <br>
 You ordered these extra items: <b><?php echo $extra; ?>   </b><br>
 <br>
 Your items will be shipped to: <br>
 <br>
<b><?php echo $fname; ?>  <?php echo $lname; ?> <br>
 <?php echo $add1 ?>, <br>
 <?php echo $add2; ?>, <br>
 <?php echo $add3; ?>. <br></b>
 <br>
 Thank you for submitting your comments! We appreciate it. You said: <br>
<br>
<b><?php echo $comments; ?> </b> <br>
 <br>
 <?php
 $query = "SELECT * FROM CustomerOrderDetails";


$result = mysqli_query($db, $query) or die('Error querying database.');

echo "<table border='1'> <tr> <th> OrderNo </th> <th> Size </th> <th> Color </th> <th> Cap  </th> <th> WristBand  </th> <th> FirstName </th> <th>  LastName </th> <th> Address1  </th> <th> Address2  </th> <th> Address3  </th> <th> Comments </th> </tr> ";

while ($row = mysqli_fetch_array($result)) { 
	echo "<tr> <td>".$row['OrderNo'] . "</td> <td>" . $row['size']. "</td> <td>" . $row['color']. "</td> <td>" . $row['cap'] . "</td> <td>" . $row['wristBand'] . "</td> <td>" . $row['firstName'] . "</td> <td>" . $row['lastName'] . "</td> <td>" . $row['address1'] . "</td> <td>" . $row['address2'] . "</td> <td>" . $row['address3'] . "</td> <td>" . $row['comments'] . "</td> </tr>";
}
echo "</table>";
mysqli_close($db);
 ?>
 
 </body>
</html>
