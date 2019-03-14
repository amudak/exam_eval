<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
 <?php
	  include("connection.php");
	  $id=$_GET['id'];
	  $res=mysql_query("select * from department where depid='$id'");
	  if($res1=mysql_fetch_array($res))
		  
	  {
	 
	?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="273" border="1">
    <tr>
      <td width="113">Department Name</td>
      <td width="144"><label for="name"></label>
        <input type="text" name="name" id="name" value="<?php echo $res1[1]?>" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="register" id="register" value="Register" />
      </div></td>
    </tr><?php
    }
	?>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['register']))
	
{

    $name=$_POST['name'];
 $i=mysql_query("update department set depname='$name' where depid='$id'");

if($i>0)
{
	?>
<script>
alert("update successfully");
window.location="deptview.php";
</script>
<?php
}
}
?>