<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
 $db = mysqli_connect('localhost','root','','hospital')
 or die('Error connecting to MySQL server.');

 $query = "SELECT * FROM Doctor";

$result = mysqli_query($db, $query) or die('Error querying database.');

echo "<table border='1'> <tr> <th> DoctorID </th> <th>Name</th> <th> Specialization</th> </tr> ";

while ($row = mysqli_fetch_array($result)) { 
	echo "<tr> <td>".$row['DoctorID'] . "</td> <td>" . $row['Name']. "</td> <td>" . $row['Specialization']. "</td> </tr>";
}
echo "</table>";
mysqli_close($db);
 ?>
</body>
</html>