<?
session_start();
if(strlen($_SESSION['SESSION_ADMIN_USERID'])< 1){
	header('Location: '.$ABS_URL.'/p/a/login.php');
}
?>