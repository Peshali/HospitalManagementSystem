<html>
 <head>
 <title>Hospital Management System</title>
 <style type="text/css">
 .heading {
	text-align: center;
}
 .fsize {
	font-size: 18px;
}
 </style>
 </head>
 <body background="login.jpg">
 
 <?php
 
 $db = mysqli_connect('localhost','root','','hospital')
 or die('Error connecting to MySQL server.');
 

$name = $_POST["name"];
$sex = $_POST["sex"];
$address = $_POST["address"];
$contact = $_POST["contact"];
$admissiondate = $_POST["admissiondate"];
//$dischargedate = null;
$disease = $_POST["disease"];
$roomid = $_POST["roomid"];
//$billid = null;
$roomavailability = 0;
$comments = $_POST["comments"];

 
 
 $query = "INSERT INTO Patient(Name, Sex, Address, ContactNumber, DateOfAdmit, Disease, RoomId, Comments) VALUES ('$name','$sex','$address' ,'$contact','$admissiondate','$disease','$roomid','$comments')";

 
 $result = mysqli_query($db, $query) or die('Error querying database.');
 
 $query = "SELECT PatientId FROM Patient WHERE Name='$name' AND DateOfAdmit='$admissiondate' AND RoomId='$roomid'";


 $result = mysqli_query($db, $query) or die('Error querying database.');
 
 while ($row = mysqli_fetch_array($result)) { 
 $pid = $row['PatientId'];
 }
 
$query = "UPDATE Room SET Availability='$roomavailability' WHERE RoomID='$roomid'";

 $result = mysqli_query($db, $query) or die('Error querying database.');
 ?>
 
 <h1 align="center">Registration was successful.</h1>
     <table style="font-size=10px;" align="center" cellpadding="15"><font size=8> <tr><td>   

<span class="fsize"><b>Patient's Id number:</td><td> <?php echo $pid; ?> </b></td>
</tr><tr>
         <td><b>
            Name:
         </td><td>  <?php echo $name; ?></b> 
            </td></tr>
         <tr>
             <td><b>Sex:</td>
         
  <td><?php echo $sex; ?></td> </b></tr>
         <tr> <td><b> Address:</td>
         
<td><?php echo $address; ?></b></td> </tr>
         <tr><td><b>
             Contact Number:</td><td> <?php echo $contact; ?>   </b></td>
             <tr><td><b>
                 Date of admission:</td><td><?php echo $admissiondate; ?> 
 </b>
                 </td></tr>
         <tr><td><b>
             RoomId:</td>
             <td><?php echo $roomid; ?> 
                 </b></td></tr>
<tr><td><b>
    Comments:</td><td><?php echo $comments; ?> </b></td></tr> 
         </font></table>
 <?php
mysqli_close($db);
 ?>
 
 </span>
</body>
</html>
