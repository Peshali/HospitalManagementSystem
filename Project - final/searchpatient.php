<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Patient Details</title>
</head>

<body background="login.jpg">

<h1 align="center">Search Patient Details</h1>

<form action="PDetails.php" method="POST">

<table background=transparent cellpadding=12 align="center">
<tr>
<td>
<label><b><center>
Search by Patient ID:
</center></b></label>
</td>
<td>
<input placeholder="Patient ID" style="height:30px;width:250px" type="text" name="pId">

</td>
</tr>
    <tr><td></td><td><b>OR</b></td></tr>
    
    <tr>
<td>
<label><b>
Search by Patient Name:
</b></label>
</td>
<td>
<input placeholder="Patient Name" style="height:30px;width:250px" type="text" name="pname">

</td>
</tr>
    <tr><td></td><td><input type="submit" value="Search"></td></tr>
</table>
</form>

</body>
</html>