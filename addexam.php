
<?php
include("connection.php");
		$sem=$_GET['sem'];
		$cid=$_GET['cid'];
		
		$res=mysql_query("select * from subject where cid='$cid' and sem='$sem'");
		if(mysql_num_rows($res)>0)
		{
?> 
<form id="form1" name="form1" method="post" action="">
  <table width="739" border="1" align="center" cellpadding="10" bgcolor="#CCCCFF">
    <tr>
      <td width="43"><font color="#FF3300">S/no</font></td>
      <td width="144"><font color="#FF3300">Subject code</font></td>
      <td width="144"><font color="#FF3300">Subject Name</font></td>
      <td width="76"><font color="#FF3300">Year</font></td>
      <td width="144"><font color="#FF3300">Date</font></td>
      <td width="148"><font color="#FF3300">Time</font></td>
    </tr>
     <?php
		
			 $i=1;
	  while($res1=mysql_fetch_array($res))
		  
	 
	  {
		?>
    <tr>
      <td><font color="#000000"><?php echo $i++?></font></td>
      <td><font color="#000000"><?php echo $res1['code']?></font></td>
      <td><font color="#000000"><?php echo $res1['name']?></font></td>
      <td><label for="year"></label>
      <input type="hidden" name="sid[]" id="sid" value="<?php echo $res1['sid']?>"/>
        <select name="year[]" id="year">
<option>select</option>
<option>2018</option>
<option>2019</option>
      </select>        <label for="date"></label></td>
      <td><input type="date" name="date[]" id="date" /></td>
      <td><label for="time"></label>
      <input type="time" name="time[]" id="time" /></td>
      
    </tr>
    <?php
	  }}?>
    <tr>
      <td colspan="6"><div align="center">
        <input type="submit" name="add" id="add" value="Add" style="background:#CC6"/>
      </div></td>
    </tr>
  </table>
  </form>
 