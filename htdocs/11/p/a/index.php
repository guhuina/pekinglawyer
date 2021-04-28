<?
include "../../config/admin_public_include.php";
include "../../config/admin_auth.php";
$left_url = $ABS_URL."/p/a/left.php";
$right_url = $ABS_URL."/p/a/right.php";
$smarty->assign("left_url",$left_url);
$smarty->assign("right_url",$right_url);
$smarty->display("index.tpl");
?>