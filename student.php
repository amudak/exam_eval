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
		if(document.getElementById("dob").value=="")
	{
            flag=false;
            document.getElementById("b").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("b").style.visibility="hidden";
        }
		if(document.getElementById("select").value=="-1")
	{
		flag=false;
		document.getElementById("c").style.visibility="visible";
    	}
        else
        {
            document.getElementById("c").style.visibility="hidden";
       }
if(document.getElementById("place").value=="")
	{
            flag=false;
            document.getElementById("d").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("d").style.visibility="hidden";
        }
		if(document.getElementById("post").value=="")
	{
            flag=false;
            document.getElementById("e").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("e").style.visibility="hidden";
        }
		if(document.getElementById("district").value=="")
	{
            flag=false;
            document.getElementById("f").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("f").style.visibility="hidden";
        }
			if(document.getElementById("pin").value=="")
	{
            flag=false;
            document.getElementById("g").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("g").style.visibility="hidden";
        }
		
	if(document.getElementById("year").value=="")
	{
            flag=false;
            document.getElementById("h").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("h").style.visibility="hidden";
        }
		  if(document.getElementById("email").value=="")
	{
            flag=false;
            document.getElementById("i").style.visibility="visible";
 	}
        var emailPat =/^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
	var emailid=document.getElementById("email").value;
	var matchArray = emailid.match(emailPat);
	if (matchArray == null)
	{
		flag=false;
            document.getElementById("i").style.visibility="visible";
	}
        else
        {
            document.getElementById("i").style.visibility="hidden";
        }
		if((document.getElementById("phone").value).length!=10)
	
	{
	    flag=false;
            document.getElementById("j").style.visibility="visible";
	}
        else
        {
            document.getElementById("j").style.visibility="hidden";
        }
		if(document.getElementById("password").value=="")
	{
		flag=false;
		document.getElementById("k").style.visibility="visible";
 	}
		if(document.getElementById("select").value=="-1")
	{
		flag=false;
		document.getElementById("l").style.visibility="visible";
    	}
        else
        {
            document.getElementById("l").style.visibility="hidden";
       }
        
	if(document.getElementById("password").value.length<6)
	{
		document.getElementById("k").style.visibility="visible";
	}
         else
        {
            document.getElementById("k").style.visibility="hidden";
        }

		return flag;
}
</script>
<?php
include("connection.php");
			session_start();
			$clid=$_SESSION['lid'];
			
?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="272" border="0">
    <tr>
      <td width="112">student name</td>
      <td width="144"><label for="name"></label>
      <input type="text" name="name" id="name" /></td>
            <td><div style="visibility:hidden" id="a"><font color="#FF0000">Invalid Entry</font></div></td>

    </tr>
    <tr>
      <td>course</td>
      <td><label for="course"></label>
        <label for="select"></label>
        <select name="course" id="select">
         <option value="-1">select</option>
        <?php
			
			
			$a=mysql_query("select * from course");
			while($b=mysql_fetch_array($a))
			{
				?>
                <option>select</option>
          <option value="<?php echo $b[0] ?>"><?php echo $b[2] ?></option>
          <?php
			}
		?>
      </select></td>
                  <td><div style="visibility:hidden" id="c"><font color="#FF0000">Invalid Entry</font></div></td>

    </tr>
    <tr>
      <td>date of birth</td>
      <td><label for="dob"></label>
      <input type="text" name="dob" id="dob" /></td>
                  <td><div style="visibility:hidden" id="b"><font color="#FF0000">Invalid Entry</font></div></td>

    </tr>
    <tr>
      <td>place</td>
      <td><label for="place"></label>
      <input type="text" name="place" id="place" /></td>
                      <td><div style="visibility:hidden" id="d"><font color="#FF0000">Invalid Entry</font></div></td>
  
    </tr>
    <tr>
      <td>post</td>
      <td><label for="post"></label>
      <input type="text" name="post" id="post" /></td>
         <td><div style="visibility:hidden" id="e"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td>District</td>
      <td><label for="district"></label>
      <input type="text" name="district" id="district" /></td>
               <td><div style="visibility:hidden" id="f"><font color="#FF0000">Invalid Entry</font></div></td>

    </tr>
    <tr>
      <td>pin code</td>
      <td><label for="pin"></label>
      <input type="text" name="pin" id="pin" /></td>
               <td><div style="visibility:hidden" id="g"><font color="#FF0000">Invalid Entry</font></div></td>

    </tr>
    <tr>
      <td>year</td>
      <td><label for="year"></label>
      <input type="text" name="year" id="year" /></td>
                     <td><div style="visibility:hidden" id="h"><font color="#FF0000">Invalid Entry</font></div></td>

    </tr>
    <tr>
      <td>email</td>
      <td><label for="email"></label>
      <input type="text" name="email" id="email" /></td>
                     <td><div style="visibility:hidden" id="i"><font color="#FF0000">Invalid Entry</font></div></td>

    </tr>
    <tr>
      <td>Phonenumber</td>
      <td><label for="phone"></label>
      <input type="text" name="phone" id="phone" /></td>
                           <td><div style="visibility:hidden" id="j"><font color="#FF0000">Invalid Entry</font></div></td>

    </tr>
    <tr>
      <td>sem</td>
      <td><select name="sem" id="sem">
         <option value="-1">select</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
      </select></td>
                     <td><div style="visibility:hidden" id="l"><font color="#FF0000">Invalid Entry</font></div></td>
   
    </tr>
    <tr>
      <td>password</td>
      <td><input type="password" name="password" id="password" /></td>
                                 <td><div style="visibility:hidden" id="k"><font color="#FF0000">Invalid Entry</font></div></td>

    </tr>
   
    <tr>
      <td height="29" colspan="2"><label for="password">
        <div align="center">
          <input type="submit" name="register" id="register" value="Register" onclick="return valid()"/>
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
	$password=$_POST['password'];
	
	mysql_query("insert into login values(null,'$email','$password','student')");
	$lid=mysql_insert_id();
	mysql_query("insert into students values(null,'$name','0','$course','$dob','$place','$post','$district','$pincode','$year','$email','$phone','$sem','$clid','$lid')");  
}

?>