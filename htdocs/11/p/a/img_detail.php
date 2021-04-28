<?
include "../../config/admin_public_include.php";
include "../../config/admin_auth.php";
include "../../config/db_function.php"; 
$conn = Connect_DB($DB_VARS_ARRAY);  
$id=$_GET['id'];
$sql="select * from img where Id=$id";
$rec=mysql_query($sql,$conn);
$row=mysql_fetch_array($rec);
$smarty->assign("pid",$row['pid']);
//$smarty->assign("price",$row['price']);
$smarty->assign("subject",$row['subject']);
$smarty->assign("content",htmlspecialchars_decode($row['content']));
$smarty->assign("czyear",$row['czyear']);
$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
$smarty->display('img_detail.tpl');
?>