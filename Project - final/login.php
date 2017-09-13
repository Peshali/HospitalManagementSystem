<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login to i-cure</title>
</head>

<body background="login.jpg">
    <h1 align="center"><font size=12>i-Cure Hospital System <br />Login</font></h1>
        <form name="login" style="background-color:transparent" ><font size=5>
            <p><table align="center" background-color:transparent><tr><td><b>UserID</b></td><td>
                <input placeholder="Enter Your EmployeeID" type="text" style="height:30px;width:250px" name="userid"/></td></tr>	
           <tr><td><b>
                Password</b></td><td><input placeholder="Enter the Password" type="password" style="height:30px;width:250px" name="pswrd"/></td><br /><br /></tr><tr align="left"><td></td><td>
            <input type="button" style="height:30px;width:80px" onclick="check(this.form)" value="Login"/>
            <input type="reset"  style="height:30px;width:80px" value="Cancel"/></td></tr></table></font>
            </p>
        </form>
<script language="javascript">
            function check(form) { /*function to check userid & password*/
                /*the following code checkes whether the entered userid and password are matching*/
                if(form.userid.value == "reception" && form.pswrd.value == "r123") {
                    window.open('searchlist.php')/*opens the target page while Id & password matches*/
                }
				else if(form.userid.value == "doctor" && form.pswrd.value == "d123") {
                    window.open('searchlist1.php')/*opens the target page while Id & password matches*/
                }
                else {
                    alert("Error Password or Username")/*displays error message*/
                }
            }
        </script>
</body>
</html>
</body>
</html>