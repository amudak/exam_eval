<?php
include("header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
	
	
	if(document.getElementById("place").value=="")
	{
            flag=false;
            document.getElementById("c").style.visibility="visible";
    	
 	}
        else
        {
            document.getElementById("c").style.visibility="hidden";
        }
	
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
		if((document.getElementById("pincode").value).length!=6)
	
	{
	    flag=false;
            document.getElementById("h").style.visibility="visible";
	}
        else
        {
            document.getElementById("h").style.visibility="hidden";
        }
		 
		if((document.getElementById("phonenumber").value).length!=10)
	
	{
	    flag=false;
            document.getElementById("i").style.visibility="visible";
	}
        else
        {
            document.getElementById("i").style.visibility="hidden";
        }
		
	return flag;
}
</script>

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
<p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

  <table width="262" border="0" align="center" cellpadding="10" bgcolor="#CCCCFF">
    <tr>
      <td width="102"><font color="#000000">Collagename</font></td>
      <td width="144"><label for="name"></label>
        <input type="text" name="name" id="name" value="<?php echo $res1[1]?>" /></td>
        <td><div style="visibility:hidden" id="a"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td><font color="#000000">Collegecode</font></td>
      <td><label for="code"></label>
        <input type="text" name="code" id="code" value="<?php echo $res1[2]?>" /></td>
        <td><div style="visibility:hidden" id="b"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td><font color="#000000">Place</font></td>
      <td><label for="place"></label>
        <input type="text" name="place" id="place" value="<?php echo $res1[3]?>" /></td>
        <td><div style="visibility:hidden" id="c"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td><font color="#000000">Post</font></td>
      <td><label for="post"></label>
        <input type="text" name="post" id="post" value="<?php echo $res1[4]?>" /></td>
        <td><div style="visibility:hidden" id="d"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td><font color="#000000">City</font></td>
      <td><label for="city"></label>
        <input type="text" name="city" id="city" value="<?php echo $res1[5]?>" /></td>
        <td><div style="visibility:hidden" id="e"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td><font color="#000000">District</font></td>
      <td><label for="district"></label>
        <input type="text" name="district" id="district" value="<?php echo $res1[6]?>" /></td>
        <td><div style="visibility:hidden" id="f"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td><font color="#000000">State</font></td>
      <td><label for="state"></label>
        <input type="text" name="state" id="state" value="<?php echo $res1[7]?>" /></td>
        <td><div style="visibility:hidden" id="g"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td><font color="#000000">Pincode</font></td>
      <td><label for="pincode"></label>
        <input type="number" name="pincode" id="pincode" value="<?php echo $res1[8]?>" /></td>
        <td><div style="visibility:hidden" id="h"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    <tr>
      <td><font color="#000000">Email</font></td>
      <td><label for="email"></label>
        <input type="text" name="email" id="email" value="<?php echo $res1[10]?>" readonly="readonly"/></td>
    </tr>
    <tr>
      <td><font color="#000000">Phone Number</font></td>
      <td><input type="number" name="phonenumber" id="phonenumber" value="<?php echo $res1[9]?>" /></td>
      <td><div style="visibility:hidden" id="i"><font color="#FF0000">Invalid Entry</font></div></td>
    </tr>
    
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="register" id="register" value="Update" onclick="return valid()" style="background:#CC6"/>
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
<?php
include("footer.php");
?>