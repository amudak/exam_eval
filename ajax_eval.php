<option>select</option>

<?php
include("connection.php");
$aid=$_GET['aid'];
$res=mysql_query("SELECT * FROM `stud_ans_pages` WHERE `aid`='$aid'");
while($res1=mysql_fetch_array($res))
{
?>
<input type="hidden" name="pid[]" value="<?php echo $res1['pid']?>" />
<input type="hidden" name="hash[]" value="<?php echo $res1['hash_value']?>" />
<input type="hidden" name="filename[]" value="<?php echo $res1['file_name']?>" />
<option value="<?php echo $res1['file_name'] ?>"><?php echo $res1['page_no'] ?></option>
<?php
}

?>