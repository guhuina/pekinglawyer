<?
include "include.php";
$id=$_GET['id'];
$type=$_GET['type'];
if($type==1){
 	$name="民事法律法规";	
 }
 if($type==2){
 	$name="金融法律法规";	
 }
 if($type==3){
 	$name="公司法律法规";	
 }
 if($type==4){
 	$name="知识产权法律法规";	
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