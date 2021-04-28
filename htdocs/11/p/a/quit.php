<?
session_start();
include("../../config/config.php");
include "../../config/functions.inc.php"; 
include "../../config/db_function.php"; 
$conn = Connect_DB($DB_VARS_ARRAY);  		
session_destroy();
session_unset();
header('Location: '.$ABSC_URL.'/p/a/login.php');
?>