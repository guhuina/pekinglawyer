<?
session_start();
include "../../config/admin_public_include.php";
include "../../config/db_function.php";
include "../../config/admin_auth.php";
$conn=Connect_DB($DB_VARS_ARRAY);
$action=$_POST['action'];
$userid=$_SESSION['SESSION_ADMIN_USERID'];
if($action=="submit"){
	$oldpass=md5($_POST['oldpass']);
	//echo $oldpass;
	$uname=$_POST['userid'];
	$newpass=md5($_POST['newpass']);
	$renewpass=md5($_POST['renewpass']);
	$sql="select * from admin where userid='".$_SESSION['SESSION_ADMIN_USERID']."'";
	$rec=mysql_query($sql);
	$row=mysql_fetch_array($rec);
	$password=$row['password'];
	$userid=$row['userid'];
	//echo $userid;
	if($oldpass!=$password){
?>
<script language="javascript">
	alert("旧密码输入错误！重新输入");
	location.href("updpass.php");
</script>
<?			
	}else{                             
		$sql="update admin set password='$newpass',userid='$uname' where userid = '".$_SESSION['SESSION_ADMIN_USERID']."'";
		$sql;
		if(!mysql_query($sql,$conn)){
			echo mysql_error().$sql;
		}else{
			$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
			$smarty->assign("return_url","login.php");
		    $smarty->display('msg.tpl');		
		    die();
		}
	}
}
$smarty->assign("userid",$userid);
$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
$smarty->display('updpass.tpl');
?>