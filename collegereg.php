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
		if(document.getElementById("code").value=="")
	{
            flag=false;
            document.getElementById("b").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("b").style.visibility="hidden";
        }
	
	var flag=true;
	if(document.getElementById("place").value=="")
	{
            flag=false;
            document.getElementById("c").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("c").style.visibility="hidden";
        }
	var flag=true;
	if(document.getElementById("post").value=="")
	{
            flag=false;
            document.getElementById("d").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("d").style.visibility="hidden";
        }
		if(document.getElementById("city").value=="")
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
		if(document.getElementById("state").value=="")
	{
            flag=false;
            document.getElementById("g").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("g").style.visibility="hidden";
        }
		if(document.getElementById("pincode").value=="")
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
		if((document.getElementById("phonenumber").value).length!=10)
	
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
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="262" border="1">
    <tr>
      <td width="102">collagename</td>
      <td width="144"><label for="name"></label>
      <input type="text" name="name" id="name" /></td>
      <td><div style="visibility:hidden" id="a"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td>Collegecode</td>
      <td><label for="code"></label>
      <input type="text" name="code" id="code" /></td>
      <td><div style="visibility:hidden" id="b"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label for="place"></label>
      <input type="text" name="place" id="place" /></td>
            <td><div style="visibility:hidden" id="c"><font color="#FF0000">Invalid Entry</font></div></td>

    </tr>
    <tr>
      <td>Post</td>
      <td><label for="post"></label>
      <input type="text" name="post" id="post" /></td>
            <td><div style="visibility:hidden" id="d"><font color="#FF0000">Invalid Entry</font></div></td>

    </tr>
    <tr>
      <td>City</td>
      <td><label for="city"></label>
      <input type="text" name="city" id="city" /></td>
            <td><div style="visibility:hidden" id="e"><font color="#FF0000">Invalid Entry</font></div></td>

    </tr>
    <tr>
      <td>District</td>
      <td><label for="district"></label>
      <input type="text" name="district" id="district" /></td>
            <td><div style="visibility:hidden" id="f"><font color="#FF0000">Invalid Entry</font></div></td>

    </tr>
    <tr>
      <td>State</td>
      <td><label for="state"></label>
      <input type="text" name="state" id="state" /></td>
            <td><div style="visibility:hidden" id="g"><font color="#FF0000">Invalid Entry</font></div></td>

    </tr>
    <tr>
      <td>Pincode</td>
      <td><label for="pincode"></label>
      <input type="text" name="pincode" id="pincode" /></td>
            <td><div style="visibility:hidden" id="h"><font color="#FF0000">Invalid Entry</font></div></td>

    </tr>
    <tr>
      <td>Email</td>
      <td><label for="email"></label>
      <input type="text" name="email" id="email" /></td>
            <td><div style="visibility:hidden" id="i"><font color="#FF0000">Invalid Entry</font></div></td>

    </tr>
    <tr>
      <td>Phone Number</td>
      <td><input type="text" name="phonenumber" id="phonenumber" /></td>
            <td><div style="visibility:hidden" id="j"><font color="#FF0000">Invalid Entry</font></div></td>

    </tr>
    <tr>
      <td>Password</td>
      <td><label for="password"></label>
      <input type="password" name="password" id="password" />        <label for="phonenumber"></label></td>
            <td><div style="visibility:hidden" id="k"><font color="#FF0000">Invalid Entry</font></div></td>

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
	$code=$_POST['code'];
	$place=$_POST['place'];
	$post=$_POST['post'];
	$city=$_POST['city'];
	$district=$_POST['district'];
	$state=$_POST['state'];
	$pincode=$_POST['pincode'];
	$phone=$_POST['phonenumber'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	mysql_query("insert into login values(null,'$email','$password','college')");
	$lid=mysql_insert_id();
	$qry=mysql_query("insert into college values(null,'$name','$code','$place','$post','$city','$district','$state','$pincode','$phone','$email','$lid')");  
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