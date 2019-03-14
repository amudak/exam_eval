<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
 <?php
	  include("connection.php");
	  $id=$_GET['id'];
	  $res=mysql_query("select * from college where colid='$id'");
	  if($res1=mysql_fetch_array($res))
		  
	  {
	 
	?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="262" border="1">
    <tr>
      <td width="102">collagename</td>
      <td width="144"><label for="name"></label>
        <input type="text" name="name" id="name" value="<?php echo $res1[1]?>" /></td>
    </tr>
    <tr>
      <td>Collegecode</td>
      <td><label for="code"></label>
        <input type="text" name="code" id="code" value="<?php echo $res1[2]?>" /></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label for="place"></label>
        <input type="text" name="place" id="place" value="<?php echo $res1[3]?>" /></td>
    </tr>
    <tr>
      <td>Post</td>
      <td><label for="post"></label>
        <input type="text" name="post" id="post" value="<?php echo $res1[4]?>" /></td>
    </tr>
    <tr>
      <td>City</td>
      <td><label for="city"></label>
        <input type="text" name="city" id="city" value="<?php echo $res1[5]?>" /></td>
    </tr>
    <tr>
      <td>District</td>
      <td><label for="district"></label>
        <input type="text" name="district" id="district" value="<?php echo $res1[6]?>" /></td>
    </tr>
    <tr>
      <td>State</td>
      <td><label for="state"></label>
        <input type="text" name="state" id="state" value="<?php echo $res1[7]?>" /></td>
    </tr>
    <tr>
      <td>Pincode</td>
      <td><label for="pincode"></label>
        <input type="number" name="pincode" id="pincode" value="<?php echo $res1[8]?>" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="email"></label>
        <input type="text" name="email" id="email" value="<?php echo $res1[10]?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td>Phone Number</td>
      <td><input type="number" name="phonenumber" id="phonenumber" value="<?php echo $res1[9]?>" /></td>
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
	$code=$_POST['code'];
	$place=$_POST['place'];
	$post=$_POST['post'];
	$city=$_POST['city'];
	$district=$_POST['district'];
	$state=$_POST['state'];
	$pincode=$_POST['pincode'];
	$phone=$_POST['phonenumber'];
	$email=$_POST['email'];
	//$password=$_POST['password'];
 $i=mysql_query("update college set colname='$name',colcode='$code',place='$place',post='$post',city='$city',district='$district',state='$state',pincode='$pincode',phonenumber='$phone' where colid='$id'");

if($i>0)
{
	?>
<script>
alert("update successfully");
window.location="collegeview.php";
</script>
<?php
}
}
?>