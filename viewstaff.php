<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>


            var xmlHttp;
            function showclass(){
                if (typeof XMLHttpRequest != "undefined"){
                xmlHttp= new XMLHttpRequest();
                }
                else if (window.ActiveXObject){
                    xmlHttp= new ActiveXObject("Microsoft.XMLHTTP");
                }
                if (xmlHttp==null){
                    alert("Browser does not support XMLHTTP Request")
                    return;
                }
                var url="staff_ajax.php";
				var crs=document.getElementById("college").value;
                url +="?cid=" +crs;
                xmlHttp.onreadystatechange = stateChange;
                xmlHttp.open("GET", url, true);
                xmlHttp.send(null);
            }
            
            
            function stateChange(){
                if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){
                    document.getElementById("staff").innerHTML=xmlHttp.responseText   
                }
	}

</script>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="0">
    <tr>
      <td>College</td>
      <td><label for="college"></label>
        <select name="college" id="college" onchange="showclass()">
        <?php
		include("connection.php");
		$res=mysql_query("select * from college");
	  while($res1=mysql_fetch_array($res))
		  
	  
	  {
		?> 
        <option>select</option>
        <option value="<?php echo $res1['colid']?>"><?php echo $res1['colname']?></option>
        <?php
	  }?>
      </select></td>
    </tr>
  </table>
   <table width="858" border="1" id="staff">
   </table>
</form>
</body>
</html>