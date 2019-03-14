<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	  include("connection.php");
	  $id=$_GET['id'];
	  $res=mysql_query("select * from staff where sid='$id'");
	  if($res1=mysql_fetch_array($res))
		  
	  {
	 
	?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="291" border="0">
    <tr>
      <td width="135">Staff Name</td>
      <td width="144"><label for="name"></label>
        <input type="text" name="name" id="name" value="<?php echo $res1[1]?>" /></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><label for="age"></label>
        <input type="text" name="age" id="age" value="<?php echo $res1[2]?>" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><label for="gender"></label>
        <input type="text" name="gender" id="gender" value="<?php echo $res1[3]?>" /></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label for="place"></label>
        <input type="text" name="place" id="place" value="<?php echo $res1[4]?>" /></td>
    </tr>
    <tr>
      <td>Post</td>
      <td><label for="post"></label>
        <input type="text" name="post" id="post" value="<?php echo $res1[5]?>" /></td>
    </tr>
    <tr>
      <td>City</td>
      <td><label for="city"></label>
        <input type="text" name="city" id="city" value="<?php echo $res1[6]?>" /></td>
    </tr>
    <tr>
      <td>District</td>
      <td><label for="district"></label>
        <input type="text" name="district" id="district" value="<?php echo $res1[7]?>" /></td>
    </tr>
    <tr>
      <td>State</td>
      <td><label for="state"></label>
        <input type="text" name="state" id="state" value="<?php echo $res1[8]?>" /></td>
    </tr>
    <tr>
      <td>Pincode</td>
      <td><label for="pin"></label>
        <input type="text" name="pin" id="pin" value="<?php echo $res1[9]?>" /></td>
    </tr>
    <tr>
      <td>Phone Number</td>
      <td><label for="phone"></label>
        <input type="text" name="phone" id="phone" value="<?php echo $res1[10]?>" /></td>
    </tr>
    <tr>
      <td>Qualification</td>
      <td><label for="quali"></label>
        <input type="text" name="quali" id="quali" value="<?php echo $res1[11]?>" /></td>
    </tr>
    <tr> 
      <td>Email</td>
      <td><label for="email"></label>
        <input type="text" name="email" id="email" value="<?php echo $res1[12]?>" /></td>
    </tr>
    <tr>
      <td>College</td>
      <td><label for="college"></label>
        <label for="college"></label>
        <select name="college" id="college">
          <option>select</option>
          <?php
			include("connection.php");
			$a=mysql_query("select * from college");
			while($b=mysql_fetch_array($a))
			{
				?>
          <option value="<?php echo $b[0] ?>" <?php if($res1[1]==$b[0]) { ?> selected="selected" <?php } ?> ><?php echo $b[1] ?></option>
          <?php
			}
		?>
        </select></td>
    </tr>
    <tr>
      <td>Department</td>
      <td><label for="dept"></label>
        <label for="dept"></label>
        <select name="dept" id="dept">
          <option>select</option>
          <?php
			//include("connection.php");
			$a=mysql_query("select * from department");
			while($b=mysql_fetch_array($a))
			{
				?>
          <option value="<?php echo $b[0] ?>" <?php if($res1[1]==$b[0]) { ?> selected="selected" <?php } ?> ><?php echo $b[1] ?></option>
          <?php
			}
		?>
        </select></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="register" id="register" value="Registert" />
      </div></td>
    </tr>
    <?php
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
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$place=$_POST['place'];
	$post=$_POST['post'];
	$city=$_POST['city'];
	$district=$_POST['district'];
	$state=$_POST['state'];
	$pin=$_POST['pin'];
	$phone=$_POST['phone'];
	$quali=$_POST['quali'];
	$email=$_POST['email'];
 $i=mysql_query("update staff set sname='$name',age='$age',gender='$gender',place='$place',post='$post',city='$city',district='$district',state='$state',pincode='$pin',phone='$phone',quali='$quali',email='$email' where sid='$id'");

if($i>0)
{
	?>
<script>
alert("update successfully");
window.location="staffview.php";
</script>
<?php
}
}
?>