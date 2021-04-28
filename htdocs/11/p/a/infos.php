<?
include "../../config/admin_public_include.php";
include "../../config/admin_auth.php";
include "../../config/db_function.php";
include "../../config/functions.inc.php"; 
$conn=Connect_DB($DB_VARS_ARRAY);
$action=$_POST['action'];
$types=$_GET['types'];
if($types==1){
	$name="关于我们";	
}
if($types==2){
	$name="联系我们";	
}
if($types==3){
	$name="网站关键字";	
}
$sql="select * from infos where types=$types";
$rec=mysql_query($sql,$conn);
$row=mysql_fetch_array($rec);
$content=$row['content'];
if($action=="submit"){
	$content=$_POST['content'];
    if(mysql_num_rows($rec)>0){		
		$sql="update infos set content='$content' where types=$types";
   }else{
        $sql="insert into infos set types=$types,content='$content'";
   }
	if(!mysql_query($sql,$conn)){
				echo(mysql_error().$sql);
	}
	$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
	$smarty->assign("return_url","infos.php?types=$types");
	$smarty->display('showmsg.tpl');
	return;
}
$smarty->assign('content',$content);
$smarty->assign('name',$name);
$smarty->assign("types",$types);
$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
$smarty->assign("url",$url);
$smarty->display('infos.tpl');
?>