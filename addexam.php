
 
<form id="form1" name="form1" method="post" action="">
  <table width="739" border="1">
    <tr>
      <td width="43">s/no</td>
      <td width="144">Subject code</td>
      <td width="144">Subject Name</td>
      <td width="76">year</td>
      <td width="144">Date</td>
      <td width="148">Time</td>
    </tr>
     <?php
		include("connection.php");
		$sem=$_GET['sem'];
		$cid=$_GET['cid'];
		
		$res=mysql_query("select * from subject where cid='$cid' and sem='$sem'");
		if(mysql_num_rows($res)>0)
		{
			 $i=1;
	  while($res1=mysql_fetch_array($res))
		  
	 
	  {
		?>
    <tr>
      <td><?php echo $i++?></td>
      <td><?php echo $res1['name']?></td>
      <td><?php echo $res1['code']?></td>
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
        <input type="submit" name="add" id="add" value="Add" />
      </div></td>
    </tr>
  </table>
  </form>
 