
 <?php
	  include("connection.php");
	  $i=0;
	  $cid=$_GET['cid'];
	  $sem=$_GET['sem'];
	  $res=mysql_query("select * from subject where cid='$cid' and sem='$sem'");
	  if(mysql_num_rows($res)>0)
	  {
?>
<table width="540" border="1" align="center" bgcolor="#CCCCFF" cellpadding="10">
    <tr>
      <td width="39"><font color="#FF3300">S/no</font></td>
      <td width="104"><font color="#FF3300">Subject Name</font></td>
      <td width="79"><font color="#FF3300">Subject Code</font></td>
           <td width="78"></td>
      <td width="78"></td>
    </tr>
    <?php
	  while($res1=mysql_fetch_array($res))
		    
	  {
		  $i++;
	 
	?>
    <tr>
      <td><font color="#000000"><?php echo $i ?></font></td>
      <td><font color="#000000"><?php echo $res1['name'] ?></font></td>
      <td><font color="#000000"><?php echo $res1['code'] ?></font></td>
  
	 
      <td width="36"><a href="subdelete.php?id=<?php echo $res1[0]?>">delete</a></td>
       <td width="18"><a href="subedit.php?id=<?php echo $res1[0]?>">edit</a></td>
      </tr>
	  <?php 
	  }}
	  ?>
  </table>
  