<?
include "include.php";
$id=$_GET['id'];
$type=$_GET['type'];
if($type==1){
 	$name="���·��ɷ���";	
 }
 if($type==2){
 	$name="���ڷ��ɷ���";	
 }
 if($type==3){
 	$name="��˾���ɷ���";	
 }
 if($type==4){
 	$name="֪ʶ��Ȩ���ɷ���";	
 }
$smarty->assign("name",$name);
$smarty->assign("type",$type);
$sql="select * from news where Id=$id";
$rec=mysql_query($sql,$conn);
$row=mysql_fetch_array($rec);
$subject=$row['subject'];
$content1=$row['content'];
$smarty->assign("subject",$subject);
$smarty->assign("content1",$content1);
$smarty->display("flfg_detail.tpl");
?>