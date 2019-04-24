 <select name="student" id="student">
    <option>select</option>
        <?php
		include("connection.php");
		$id=$_GET['id'];
		session_start();
		$lid=$_SESSION['lid'];
		$a=mysql_query("select students.* from examapplication,students where examapplication.sid=students.lid and students.colid='$lid' and examapplication.eid='$id'")
;
		while($b=mysql_fetch_array($a))
			{

		?>
        
        <option value="<?php echo $b["lid"] ?>"><?php echo $b[1] ?></option>
         <?php
			}
		?>
		</select>