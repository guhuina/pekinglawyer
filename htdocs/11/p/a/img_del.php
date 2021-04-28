<?
include "../../config/admin_public_include.php";
include "../../config/admin_auth.php";
include "../../config/db_function.php"; 
$conn = Connect_DB($DB_VARS_ARRAY);  
$id=$_GET['id'];
$sql0 = "select * from img where id=$id";
$rec0= mysql_query($sql0,$conn);
$row = mysql_fetch_array($rec0);
$czyear=$row['czyear'];
$types=$row['types'];
$un=unlink("../../uploads/$czyear")?1:0;
if (0 == $un){
chdir('../../uploads');
$aa = getcwd();
echo $cv = "系统未能自动删除，请手动删除图片.路径$aa\\$czyear";
echo "<script>alert('请手动删除图片$czyear')
		 location.href('img.php?id=$id&types=$types')
	</script>";
} 		
$sql="delete from img where id=$id";
mysql_query($sql,$conn);
$smarty->assign("czyear",$czyear);
$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);	
$smarty->assign("return_url","javascript:history.go(-2);");
$smarty->display('showmsg.tpl');
?>	