<?
include "include.php";
$id=$_GET['id'];
$types=$_GET['types'];
if($types==1){
 	$name="���ڱ�վ";	
 }
 if($types==2){
 	$name="��ϵ����";	
 }
$smarty->assign("name",$name);
$smarty->assign("types",$types);
$sql="select * from infos where types=$types";
$rec=mysql_query($sql,$conn);
$row=mysql_fetch_array($rec);
$content1=$row['content'];
$smarty->assign("content1",$content1);
$smarty->display("infos.tpl");
?>