<?
include "include.php";
$id=$_GET['id'];
$types=$_GET['types'];
if($types==1){
 	$name="法律新闻";	
 }
 if($types==2){
 	$name="社会热点";	
 }
 if($types==3){
 	$name="经典案例";	
 }
 if($types==4){
 	$name="辩词鉴赏";	
 }
 if($types==5){
 	$name="法律法规";	
 }
 if($types==6){
 	$name="法理探讨";	
 }
 if($types==7){
 	$name="合同纠纷";	
 }
  if($types==8){
 	$name="诉讼流程";	
 }
 if($types==9){
 	$name="业务范围";	
 }
  if($types==10){
 	$name="快速帮助";	
 }
 $smarty->assign("name",$name);
$sql="select * from news where types=$types";
$rec=mysql_query($sql,$conn);
$nn=mysql_num_rows($rec);
$nextid=$id+1;
$lastid=$id-1;
if($lastid==0){
	$lastid=1;	
}
if($nextid > $nn){
	$nextid=$nextid-1;	
}
$smarty->assign("id",$id);
$smarty->assign("lastid",$lastid);
$smarty->assign("nextid",$nextid);
$sql="select * from news where Id=$id-1";
$rec=mysql_query($sql,$conn);
$row=mysql_fetch_array($rec);
$subject1=$row['subject'];
if($subject1==''){
	$subject1="没有了";
}
$smarty->assign("subject1",$subject1);
$sql="select * from news where Id=$id+1";
$rec=mysql_query($sql,$conn);
$row=mysql_fetch_array($rec);
$subject2=$row['subject'];
if($subject2==''){
	$subject2="没有了";
}
$smarty->assign("subject2",$subject2);
$sql="select * from news where Id=$id";
$rec=mysql_query($sql,$conn);
$row=mysql_fetch_array($rec);
$subject=$row['subject'];
$content1=$row['content'];
$smarty->assign("subject",$subject);
$smarty->assign("content1",$content1);
$smarty->assign("types",$types);
$smarty->display("news_detail.tpl");
?>