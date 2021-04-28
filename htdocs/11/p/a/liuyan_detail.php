<?
include "../../config/admin_auth.php";
include "../../config/config.php";
include "../../config/admin_public_include.php";
include "../../config/db_function.php";
$conn = Connect_DB($DB_VARS_ARRAY);  
$id=$_GET['id'];
$sql="select * from liuyan where Id=$id";
$rec=mysql_query($sql,$conn);
$row=mysql_fetch_array($rec);
$smarty->assign("id",$row['Id']);
$smarty->assign("name",$row['name']);
$smarty->assign("sex",$row['sex']);
$smarty->assign("qq",$row['qq']);
$smarty->assign("msn",$row['msn']);
$smarty->assign("email",$row['email']);
$smarty->assign("homepage",$row['homepage']);
$smarty->assign("content",$row['content']);
$smarty->assign("instime",date("Y-m-d",$row['instime']));
$smarty->assign("re_content",$row['re_content']);
$smarty->assign("read_num",$row['read_num']);
$smarty->assign("re_time",date("Y-m-d",$row['re_time']));
$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
$smarty->display('liuyan_detail.tpl');
?>