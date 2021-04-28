<?
include "../../config/admin_public_include.php";
include "../../config/admin_auth.php";
include "../../config/db_function.php"; 
$conn = Connect_DB($DB_VARS_ARRAY); 
$id=$_GET['id'];
$sql0 = "select pic from link where id=$id";
$rec0= mysql_query($sql0,$conn);
$row = mysql_fetch_array($rec0);
$pic = $row['pic'];
$types = $row['types'];
if($pic!=""){
	$un=unlink("../../uploads/$pic")?1:0;
	if (0 == $un){
	chdir('../../uploads');
	$aa = getcwd();
	echo $cv = "系统未能自动删除，请手动删除图片.路径$aa\\$pic";
	echo "<script>alert('请手动删除图片$pic')
			 location.href('hezuo.php?types=$types')
		</script>";
	} 	
}	
$smarty->assign("pic",$pic);
$smarty->assign("types",$types);
$sql="delete from link where id=$id";
mysql_query($sql,$conn);
$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
$smarty->assign("return_url","javascript:history.go(-2);");
$smarty->display('showmsg.tpl');
?>	