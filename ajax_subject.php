<table width="540" border="1">
    <tr>
      <td width="39">S/no</td>
      <td width="78">Semester</td>
      <td width="104">Subject Name</td>
      <td width="79">Subject Code</td>
           <td width="78"></td>
      <td width="78"></td>
    </tr>
     <?php
	  include("connection.php");
	  $i=0;
	  $cid=$_GET['cid'];
	  $sem=$_GET['sem'];
	  $res=mysql_query("select * from subject where cid='$cid' and sem='$sem'");
	  while($res1=mysql_fetch_array($res))
		    
	  {
		  $i++;
	 
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $res1['sem'] ?></td>
      <td><?php echo $res1['name'] ?></td>
      <td><?php echo $res1['code'] ?></td>
  
	 
      <td width="36"><a href="subdelete.php?id=<?php echo $res1[0]?>">delete</a></td>
       <td width="18"><a href="subedit.php?id=<?php echo $res1[0]?>">edit</a></td>
      </tr>
	  <?php 
	  }
	  ?>
  </table>
  