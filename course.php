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
	if(document.getElementById("name").value=="-1")
	{
		flag=false;
		document.getElementById("a").style.visibility="visible";
    	}
        else
        {
            document.getElementById("a").style.visibility="hidden";
       }
	if(document.getElementById("name2").value=="")
	{
            flag=false;
            document.getElementById("b").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("b").style.visibility="hidden";
        }
		if(document.getElementById("code").value=="")
	{
            flag=false;
            document.getElementById("c").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("c").style.visibility="hidden";
        }
		if(document.getElementById("sem").value=="")
	{
            flag=false;
            document.getElementById("d").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("d").style.visibility="hidden";
        }
	return flag;
}
	</script>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="343" border="0">
    <tr>
      <td width="77">Department Name</td>
      <td width="146"><label for="name"></label>
        <select name="name" id="name">
        <option value="-1">select</option>
        <?php
			include("connection.php");
			$a=mysql_query("select * from department");
			while($b=mysql_fetch_array($a))
			{
				?>
                <option value="<?php echo $b[0] ?>"><?php echo $b[1] ?></option>
                <?php
			}
		?>
      </select></td>
     <td width="98">  <div style="visibility:hidden" id="a"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td>Course Name</td>
      <td><label for="name2"></label>
      <input type="text" name="name2" id="name2" /></td>
    <td>  <div style="visibility:hidden" id="b"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td>Course Code</td>
      <td><label for="code"></label>
      <input type="text" name="code" id="code" /></td>
     <td> <div style="visibility:hidden" id="c"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td>No of Semester</td>
      <td> <input type="number" name="sem" id="sem" /></td>
     <td> <div style="visibility:hidden" id="d"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="register" id="register" value="Register" onclick="return valid()"/>
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if(isset($_POST['register']))
{

	$dname=$_POST['name'];
	$cname=$_POST['name2'];
	$code=$_POST['code'];
	$sem=$_POST['sem'];
	$qry=mysql_query("insert into course values(null,'$dname','$cname','$code','$sem')");  
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