<?
session_start();
include "../../config/admin_public_include.php";
include "../../config/db_function.php";
$conn = Connect_DB($DB_VARS_ARRAY);  
$mysqlinfo=mysql_get_server_info($conn);
$max_upload = ini_get('file_uploads') ? ini_get('upload_max_filesize') : 'Disabled';
$max_ex_time= ini_get('max_execution_time').' seconds';
$sys_mail   = ini_get('sendmail_path') ? 'Unix Sendmail ( Path: '.ini_get('sendmail_path').')' :( ini_get('SMTP') ? 'SMTP ( Server: '.ini_get('SMTP').')': 'Disabled' );
$ifcookie   = isset($_COOKIE) ? "SUCCESS" : "FAIL";
$systemtime = date("Y-m-j g:i A");
$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
$smarty->assign("mysqlinfo",$mysqlinfo);
$smarty->assign("phpinfo",phpversion());
$smarty->assign("max_upload",$max_upload);
$smarty->assign("max_ex_time",$max_ex_time);
$smarty->assign("sys_mail",$sys_mail);
$smarty->assign("ifcookie",$ifcookie);
$smarty->assign("systemtime",$systemtime);
$smarty->assign("osinfo",$_SERVER['SERVER_SOFTWARE']);
$smarty->display('admin_right.tpl');
?>