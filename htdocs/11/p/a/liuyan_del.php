<?
include "../../config/admin_auth.php";
include "../../config/config.php";
include "../../config/admin_public_include.php";
include "../../config/db_function.php";
$conn = Connect_DB($DB_VARS_ARRAY);  
$id=$_GET['id'];
$sql="delete from liuyan where id=$id";
mysql_query($sql,$conn);
$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);	
$smarty->assign("return_url","javascript:history.go(-2);");
$smarty->display('showmsg.tpl');
?>	