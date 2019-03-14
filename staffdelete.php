<?php
include("connection.php");
$id=$_GET['id'];
$i=mysql_query("delete from staff where sid='$id'");
if($i>0)
{
	?>
	<script>
	alert("delete successfully");
	window.location="staffview.php";
	</script>
    <?php
}
?>