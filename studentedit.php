<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	  include("connection.php");
	  $id=$_GET['id'];
	  $res=mysql_query("select * from students where sid='$id'");
	  if($res1=mysql_fetch_array($res))
		  
	  {
	 
	?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="272" border="0">
    <tr>
      <td width="112">student name</td>
      <td width="144"><label for="name"></label>
        <input type="text" name="name" id="name" value="<?php echo $res1[1]?>" /></td>
    </tr>
    <tr>
      <td>Register number</td>
      <td><label for="regno"></label>
        <input type="text" name="regno" id="regno" value="<?php echo $res1[2]?>"/></td>
    </tr>
    <tr>
      <td>course</td>
      <td><label for="course"></label>
        <input type="text" name="course" id="course" value="<?php echo $res1[3]?>" /></td>
    </tr>
    <tr>
      <td>date of birth</td>
      <td><label for="dob"></label>
        <input type="text" name="dob" id="dob" value="<?php echo $res1[4]?>"/></td>
    </tr>
    <tr>
      <td>place</td>
      <td><label for="place"></label>
        <input type="text" name="place" id="place" value="<?php echo $res1[5]?>" /></td>
    </tr>
    <tr>
      <td>post</td>
      <td><label for="post"></label>
        <input type="text" name="post" id="post" value="<?php echo $res1[6]?>" /></td>
    </tr>
    <tr>
      <td>District</td>
      <td><label for="district"></label>
        <input type="text" name="district" id="district" value="<?php echo $res1[7]?>" /></td>
    </tr>
    <tr>
      <td>pin code</td>
      <td><label for="pin"></label>
        <input type="text" name="pin" id="pin" value="<?php echo $res1[8]?>" /></td>
    </tr>
    <tr>
      <td>year</td>
      <td><label for="year"></label>
        <input type="text" name="year" id="year" value="<?php echo $res1[9]?>" /></td>
    </tr>
    <tr>
      <td>email</td>
      <td><label for="email"></label>
        <input type="text" name="email" id="email" value="<?php echo $res1[10]?>"/></td>
    </tr>
    <tr>
      <td>Phonenumber</td>
      <td><label for="phone"></label>
        <input type="text" name="phone" id="phone" value="<?php echo $res1[11]?>"/></td>
    </tr>
    <tr>
      <td>sem</td>
      <td><select name="sem" id="sem" value="<?php echo $res1[12]?>">
        <option value="first" <?php if($res1[12]=="first") { ?> selected="selected" <?php } ?>>first</option>
          <option value="second" <?php if($res1[12]=="second") { ?> selected="selected" <?php } ?>>second</option>
          <option value="third" <?php if($res1[12]=="third") { ?> selected="selected" <?php } ?>>Third</option>
          <option value="fourth" <?php if($res1[12]=="fourth") { ?> selected="selected" <?php } ?>>fourth</option>
          <option value="fifth" <?php if($res1[12]=="fifth") { ?> selected="selected" <?php } ?>>Fifth</option>
          <option value="sixth" <?php if($res1[12]=="sixth") { ?> selected="selected" <?php } ?>>sixth</option>
      </select></td>
    </tr>
    <tr>
      <td>college</td>
      <td><label for="sem"></label>
        <label for="college"></label>
        <select name="college" id="college" value="<?php echo $res1[1]?>">
          <option>select</option>
          <?php
			include("connection.php");
			$a=mysql_query("select * from college");
			while($b=mysql_fetch_array($a))
			{
				?>
          <option value="<?php echo $b[0] ?>" <?php if($res1[13]==$b[0]) { ?> selected="selected" <?php } ?> ><?php echo $b[1] ?></option>
          <?php
			}
		?>
        </select></td>
    </tr><?php
	  }
	  ?>
    <tr>
      <td height="29" colspan="2"><label for="password">
        <div align="center">
          <input type="submit" name="register" id="register" value="Register" />
        </div>
        </label></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['register']))
	
{

    $name=$_POST['name'];
	$regno=$_POST['regno'];
	$course=$_POST['course'];
	$dob=$_POST['dob'];
	$place=$_POST['place'];
	$post=$_POST['post'];
	$district=$_POST['district'];
	$pincode=$_POST['pin'];
	$year=$_POST['year'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$sem=$_POST['sem'];
	
	
 $i=mysql_query("update students set sname='$name',regno='$regno',course='$course',dob='$dob',place='$place',post='$post',district='$district',pincode='$pincode',year='$year',email='$email',phone='$phone',sem='$sem' where sid='$id'");

if($i>0)
{
	?>
<script>
alert("update successfully");
window.location="studentview.php";
</script>
<?php
}
}
?>