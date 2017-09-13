
<!DOCTYPE html>
<html>
<head>
<title>Patient Details</title>
<style type="text/css">
.heading {
	text-align: center;
}
</style>
</head>
<body background="login.jpg">


<h1 class="heading">Patient Registration</h1>
<h3 class="heading">Fill out the details below</h3>

<form action="PReg.php" method="POST">

<table align="center" bgcolor="#0099FF">
<tr>
<td>
<label><b>Name:</b></label>
</td>
<td>
<input type="text" name="name">
</td>
</tr>
<tr>
<td>
<label><b>Sex:</b></label>
</td>
<td>
<input type="radio" name="sex" value="Male">Male
<input type="radio" name="sex" value="Female">Female
</td>
</tr>
<tr>
<td>
<label><b>Address:</b></label>
</td>
<td>
<input type="text" name="address">
</td>
</tr>
<tr>
<td>
<label><b>Contact No:</b></label>
</td>
<td>
<input type="text" name="contact">
</td>
</tr>
<tr>
<td>
<label><b>Date of Admission:</b></label>
</td>
<td>
<input type="date" name="admissiondate">
</td>
</tr>
<tr>
  <td>
  <label><b>Disease:</b></label>
  </td>
  <td>
  <input type="text" name="disease">
  </td>
</tr>
<tr>
  <td>
  <label><b>RoomId:</b></label>
  </td>
  <td>
  <input type="text" name="roomid">
  </td>
</tr>
<tr>
  <td>
  <label><b><center>
    Comments:
  </center></b></label>
  </td>
  <td>
  <textarea name="comments" rows="10" cols="60"></textarea>
  </td>
</tr>


<tr>
<td>
</td>
<td>
<input type="submit" value="Register">
</td>
</tr>
</table>
</form>
</body>
</html>
