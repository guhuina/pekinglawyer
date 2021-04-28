<?
include "../../config/admin_auth.php";
include "../../config/admin_public_include.php";
include "../../config/db_function.php";
$conn = Connect_DB($DB_VARS_ARRAY);  
$id=$_GET['id'];
$sql0 = "select * from news where id=$id";
$rec0= mysql_query($sql0,$conn);
$row = mysql_fetch_array($rec0);
$pic=$row['pic'];
$types=$row['types'];
$un=unlink("../../uploads/$pic")?1:0;
if (0 == $un){
chdir('../../uploads');
$aa = getcwd();
echo $cv = "系统未能自动删除，请手动删除图片.路径$aa\\$pic";
echo "<script>alert('请手动删除图片$pic')
		 location.href('news.php?id=$id&types=$types')
	</script>";
} 		
$sql="delete from news where id=$id";
mysql_query($sql,$conn);
$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);	
$smarty->assign("return_url","javascript:history.go(-2);");
$smarty->display('showmsg.tpl');
?>	