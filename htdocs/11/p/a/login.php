<?
session_start();
include "../../config/admin_public_include.php"; 
include "../../config/functions.inc.php"; 
include "../../config/db_function.php";
include "../../config/config.php";
$Login_f=$_POST['Login_f'];
$conn = Connect_DB($DB_VARS_ARRAY);  
if($Login_f=='1'){ 
  	$userid=$_POST['username'];
  	//echo $userid;	
	$password=$_POST['password'];
	$lg_num=$_POST['lg_num'];
	if($lg_num!=$_SESSION['SESSION_VAL_NUM']){
		$smarty->assign("alert","抱歉：认证码输入错误，请重新输入");
    }else{		
		$smarty->assign("alert","");
	 	$sql="select * from admin where userid='$userid' and password='".md5($password)."'";
	  	$rec=Select_DB($sql,$conn);
		if(mysql_num_rows($rec)>0){
			$_SESSION['SESSION_ADMIN_USERID']=$userid;
			$tmptime=time();
			$sql="update admin set lastlogin_time=$tmptime where userid='$userid'";
			//echo $sql;
			mysql_query($sql,$conn);	
			header('Location:'.$ABS_URL.'/p/a/index.php');
		}
		else{
			$smarty->assign("alert","对不起输入错误，请重新输入！！");
		}
	}	
}
$val_num=FUNCTION_GET_RAND();
$_SESSION['SESSION_VAL_NUM']=$val_num;
$smarty->assign("session_userid",$userid);
$smarty->assign("val_num",$val_num);
$smarty->display('login.tpl');
?>