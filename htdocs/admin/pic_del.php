<?php require_once('../include/wzclass.php'); ?>
<?php require_once('adminqx.php'); ?>
<?php 
//echo $id;
//exit();
if(isset($_GET['del'])){
$id=$_GET['del'];
$cid=$_GET['cid'];
$sqlstr=mysql_query("delete from tuku where id=$id");
 echo "<script language=javascript>";
 echo "alert('É¾³ý³É¹¦');";
 echo "location='pic.php?cid=$cid';";
 echo "</script>";
 }else{
 echo "<script language=javascript>";
 echo "history.back(-1);";
 echo "</script>";
 }
 ?>