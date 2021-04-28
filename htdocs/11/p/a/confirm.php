<?
include "../../config/admin_auth.php";
include "../../config/admin_public_include.php";
$url=$_GET['url'];
$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
$types=$_GET['types'];
$smarty->assign("url",$url);
$smarty->assign("types",$types);
//echo $url."&types=".$types;
$smarty->display('confirm.tpl');
?>