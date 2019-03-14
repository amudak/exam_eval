<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	  include("connection.php");
	  $id=$_GET['id'];
	  $res=mysql_query("select * from course where cid='$id'");
	  if($res1=mysql_fetch_array($res))
		  
	  {
	 
	?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="289" border="1">
    <tr>
      <td width="157">Department Name</td>
      <td width="116"><label for="name"></label>
        <select name="name" id="name" >
          <option>select</option>
          <?php
			include("connection.php");
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
      <td>Course Name</td>
      <td><label for="name2"></label>
        <input type="text" name="name2" id="name2" value="<?php echo $res1[2]?>" /></td>
    </tr>
    <tr>
      <td>Course Code</td>
      <td><label for="code"></label>
        <input type="text" name="code" id="code" value="<?php echo $res1[3]?>" /></td>
    </tr>
    <tr>
      <td>Semester</td>
      <td><label for="sem"></label>
        <select name="sem" id="sem">
          <option >select</option>
          <option value="first" <?php if($res1[4]=="first") { ?> selected="selected" <?php } ?>>first</option>
          <option value="second" <?php if($res1[4]=="second") { ?> selected="selected" <?php } ?>>second</option>
          <option value="third" <?php if($res1[4]=="third") { ?> selected="selected" <?php } ?>>Third</option>
          <option value="fourth" <?php if($res1[4]=="fourth") { ?> selected="selected" <?php } ?>>fourth</option>
          <option value="fifth" <?php if($res1[4]=="fifth") { ?> selected="selected" <?php } ?>>Fifth</option>
          <option value="sixth" <?php if($res1[4]=="sixth") { ?> selected="selected" <?php } ?>>sixth</option>
        </select></td>
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

    $name=$_POST['name2'];
	 $code=$_POST['code'];
	  $sem=$_POST['sem'];
 $i=mysql_query("update course set cname='$name',code='$code',sem='$sem' where cid='$id'");

if($i>0)
{
	?>
<script>
alert("update successfully");
window.location="courseview.php";
</script>
<?php
}
}
?>