<?
include "../../config/admin_auth.php";
include "../../config/config.php";
include "../../config/admin_public_include.php";
include "../../config/db_function.php";
$conn = Connect_DB($DB_VARS_ARRAY);  
$id=$_GET['id'];
$action=$_POST['action'];
if($action=='submit'){
	$re_content=$_POST['re_content'];
	$re_time=time();
	$sql="update liuyan set re_content='$re_content',re_time=$re_time where Id=$id";
	echo $sql;
	$rec=mysql_query($sql,$conn);
	if($rec){
		$smarty->assign("return_url","review.php?id=$id");	
		$smarty->display('showmsg.tpl');
		return;
	}	
}
$sql="select * from liuyan where Id=$id";
$rec=mysql_query($sql,$conn);
$row=mysql_fetch_array($rec);
$re_content=$row['re_content'];
if($re_content==''){
	$mess='н╢╩ь╦╢';	
}else{
	$mess='ря╩ь╦╢';
	}
$smarty->assign("content",$row['content']);
$smarty->assign("re_content",$re_content);
$smarty->assign("mess",$mess);
$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
$smarty->display('review.tpl');
?>