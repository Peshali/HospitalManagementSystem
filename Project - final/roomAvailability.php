<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Room Availability</title>
<style type="text/css">
.heading {
	text-align: center;
}
</style>
</head>

<body background="login.jpg">
<h1 class="heading">Details Of The Rooms</h1>
<?php
 $db = mysqli_connect('localhost','root','','hospital')
 or die('Error connecting to MySQL server.');

 $query = "SELECT * FROM Room where Availability=1";

$result = mysqli_query($db, $query) or die('Error querying database.');

echo "<table border='1' align=center cellpadding=16 bordercolor=#330066> <tr> <th> RoomID </th> <th> RoomType</th> <th> RoomFees </th> </tr> ";

while ($row = mysqli_fetch_array($result)) { 
	echo "<tr> <td>".$row['RoomID'] . "</td> <td>" . $row['RoomType']. "</td> <td>" . $row['RoomFees']. "</td> </tr>";
}
echo "</table>";
mysqli_close($db);
 ?>
</body>
</html>