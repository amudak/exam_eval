<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script>
function valid()
{
	var flag=true;
	if(document.getElementById("name").value=="")
	{
            flag=false;
            document.getElementById("a").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("a").style.visibility="hidden";
        }
	return flag;
}
	</script>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="273" border="0">
    <tr>
      <td width="113">Department Name</td>
      <td width="144"><label for="name"></label>
      <input type="text" name="name" id="name" /></td>
      <td>  <div style="visibility:hidden" id="a"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="register" id="register" value="Register" onclick="return valid()" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['register']))
{
	include("connection.php");
	$name=$_POST['name'];
	$qry=mysql_query("insert into department values(null,'$name')");  
if($qry>0)
	{
		?>
        <script>
		alert("successfully added");
		window.location="admin_home.php";
		</script>
        <?php
	}
}

?>