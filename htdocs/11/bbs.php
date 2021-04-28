<?
session_start();
include "config/config.php";
include "config/client_public_include.php";
include "config/db_function.php";
include "config/functions.inc.php"; 
$conn = Connect_DB($DB_VARS_ARRAY);
$types=$_GET['types'];
if($types==''){
	$types=1;	
}
$smarty->assign("types",$types);
if($types==1){
	$fangshi="讨论区方式";
}else{
	$fangshi="留言本方式";	
}
$smarty->assign("fangshi",$fangshi);
$sql="select * from liuyan where ifpass=0";
$rec=mysql_query($sql,$conn);
$num=mysql_num_rows($rec);
$smarty->assign("num",$num);
//网站关键字
$sql="select * from infos where types=3";
$rec=mysql_query($sql,$conn);
$row=mysql_fetch_array($rec);
$titles=$row['content'];
$smarty->assign("titles",$titles);  
?>