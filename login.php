<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="0">
    <tr>
      <td width="93">Username</td>
      <td width="91"><label for="username"></label>
      <input type="text" name="username" id="username" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="password"></label>
      <input type="password" name="password" id="password" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="register" id="register" value="Register" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
include("connection.php");
if(isset($_POST['register']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$a=mysql_query("select * from login where username='$username'and password='$password'");
	if($b=mysql_fetch_array($a))
	{
		$lid=$b['logid'];
		$type=$b['type'];
		session_start();
		$_SESSION["lid"]=$lid;
	$_SESSION["type"]=$type;
	if($type=='admin')
	{
		header("location:admin_home.php");
	}
	else if($type=='student')
	{
		header("location:student_home.php");
	}
	else if($type=='staff')
	{
		header("location:staff_home.php");
	}
	else if($type=='college')
	{
		header("location:college_home.php");
	}
	else
	{
		?>
		<script>alert("invalid user")</script>
        <?php
	}
	}
}
?>