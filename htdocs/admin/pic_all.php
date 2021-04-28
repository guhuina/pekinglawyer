<style type="text/css">
<!--
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	color: #CC00FF;
}
a:hover {
	color: #000000;
}
-->
</style>
<?php require_once('../include/wzclass.php'); ?>
<?php require_once('adminqx.php'); ?>
<?php 
if(isset($_GET['dall'])){
$a_id=$_GET['dall'];
$sqlstr=mysql_query("delete from tuku where a_id=$a_id");
 echo "<script language=javascript>";
 echo "alert('É¾³ý³É¹¦');";
 echo "location='pic.php?a_id=$a_id';";
 echo "</script>";
 }else{
 echo "<script language=javascript>";
 echo "history.back(-1);";
 echo "</script>";
 }
 ?>