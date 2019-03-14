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
	if(document.getElementById("name2").value=="-1")
	{
		flag=false;
		document.getElementById("a").style.visibility="visible";
    	}
        else
        {
            document.getElementById("a").style.visibility="hidden";
       }
	   if(document.getElementById("sem").value=="-1")
	{
		flag=false;
		document.getElementById("b").style.visibility="visible";
    	}
        else
        {
            document.getElementById("b").style.visibility="hidden";
       }
	   if(document.getElementById("name").value=="")
	{
            flag=false;
            document.getElementById("c").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("c").style.visibility="hidden";
        }
		 if(document.getElementById("code").value=="")
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
  <table width="256" border="0">
    
    <tr>
      <td>Course</td>
      <td><label for="name"></label>
        <label for="name2"></label>
        <select name="name2" id="name2">
        <option value="-1">select</option>
         <?php
			include("connection.php");
			$a=mysql_query("select * from course");
			while($b=mysql_fetch_array($a))
			{
				?>
                <option value="<?php echo $b[0] ?>"><?php echo $b[2] ?></option>
                <?php
			}
		?>
      </select></td>
      <td>  <div style="visibility:hidden" id="a"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td width="96">Semester</td>
      <td width="144"><label for="sem"></label>
        <label for="sem2"></label>
      <select name="sem" id="sem">
      <option value="-1">select</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      </select></td>
      <td>  <div style="visibility:hidden" id="b"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td>Subject Name</td>
      <td><label for="name"></label>
      <input type="text" name="name" id="name" /></td>
       <td> <div style="visibility:hidden" id="c"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td>Subject Code</td>
      <td><label for="code"></label>
      <input type="text" name="code" id="code" /></td>
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
	//include("connection.php");
	$sem=$_POST['sem'];
	$cname=$_POST['name2'];
	$name=$_POST['name'];
	$code=$_POST['code'];
	$qry=mysql_query("insert into subject values(null,'$cname','$sem','$name','$code')");  
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