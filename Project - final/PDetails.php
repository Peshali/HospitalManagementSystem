<html>
<head>
<title>Hospital Management Sysytem</title>
<style type="text/css">
 .heading {
	text-align: center;
}
 .fsize {
	font-size: 18px;
}
 .hsize {
	font-size: 18px;
}
 .fsize {
	font-size: 18px;
}
.fsize {
	font-size: 18px;
}
.fsize {
	font-size: 18px;
}
.fsize {
	font-size: 18px;
}
.fsize {
	font-size: 18px;
}
.fsize {
	font-size: 18px;
}
.fsize {
	font-size: 18px;
}
</style>
</head>
 <body background=login.jpg>

<?php

$db = mysqli_connect('localhost','root','','hospital')
 or die('Error connecting to MySQL server.');
if (isset($_POST["pId"])) {
$pId = $_POST["pId"];
$pname = "";
}
     elseif (isset($_POST["pname"])) {
$pname = $_POST["pname"];
$pId = "";
}

$query = "SELECT * FROM Patient WHERE PatientId='$pId' or Name='$pname' ";


$result = mysqli_query($db, $query) or die('Error querying database.');

$row = mysqli_fetch_array($result); 

?>


<h1 class="heading">Details of Patient</h1>
<br> <br>
<table align="center" cellpadding="8">
<tr>
  <td class="hsize">Patient's Id number:</td><td> <b><?php echo $pId; ?> </b></td></tr>

<tr>
  <td class="fsize">
Name:</td><td> <b> <?php echo $row['Name']; ?></b></td></tr> <tr>
  <td class="fsize">
Sex:</td><td> <b><?php echo $row['Sex']; ?> </b></td></tr>
<tr>
  <td class="fsize">
Address:</td><td><b> <?php echo $row['Address']; ?></b> </td></tr>
<tr>
  <td class="fsize">
Contact Number:</td><td> <b><?php echo $row['ContactNumber']; ?>   </b></td></tr><tr>
  <td class="fsize">
Date of admission:</td><td><b><?php echo $row['DateOfAdmit']; ?> 
 </b></td></tr>
<tr>
  <td class="fsize">
RoomId:</td><td><b><?php echo $row['RoomID']; ?> <br>
 </b></td></tr>
<tr>
  <td class="fsize">
Comments:</td><td><b><?php echo $row['Comments']; ?> </b></td></tr> 
</table>

<?php
mysqli_close($db);
 ?>
<br>
 <br>


</body>
</html>
