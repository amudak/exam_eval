<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	  include("connection.php");
	  $id=$_GET['id'];
	  $res=mysql_query("select * from subject where sid='$id'");
	  if($res1=mysql_fetch_array($res))
		  
	  {
	 
	?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="256" border="0">
    <tr>
      <td width="96">Semester</td>
      <td width="144"><label for="sem"></label>
        <label for="sem2"></label>
        <input type="text" name="sem" id="sem2" value="<?php echo $res1[2]?>" /></td>
    </tr>
    
    <tr>
      <td>Subject Name</td>
      <td><label for="name"></label>
        <input type="text" name="name" id="name"  value="<?php echo $res1[3]?>"/></td>
    </tr>
    <tr>
      <td>Subject Code</td>
      <td><label for="code"></label>
        <input type="text" name="code" id="code" value="<?php echo $res1[4]?>" /></td>
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
    $sem=$_POST['sem'];
	
    $name=$_POST['name'];
	 $code=$_POST['code'];
	  //$sem=$_POST['sem'];
 $i=mysql_query("update subject set sem='$sem',name='$name',code='$code' where sid='$id'");

if($i>0)
{
	?>
<script>
alert("update successfully");
window.location="subview.php";
</script>
<?php
}
}
?>