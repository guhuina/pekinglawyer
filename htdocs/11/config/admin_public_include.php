<?
session_start();
include "../../config/config.php";
include "../../libs/Smarty.class.php";
$smarty = new smarty();
$smarty->complie_check = true;
$smarty->debugging = false;
$smarty->left_delimiter = "^";
$smarty->right_delimiter = "^";
$smarty->template_dir = "../../t/a/";
$smarty->compile_dir = "../../libs/templates_c/a/";
$smarty->cache_dir = "../../libs/cache/a/";  
$smarty->config_dir = "../../config/"; 
?>