<?
include "include.php";
$types=$_GET['types'];
$id=$_GET['id'];
$sql="select * from img";
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
$sql="select * from img where Id=$id-1";
$rec=mysql_query($sql,$conn);
$row=mysql_fetch_array($rec);
$subject1=$row['subject'];
if($subject1==''){
	$subject1="没有了";
}
$smarty->assign("subject1",$subject1);
$sql="select * from img where Id=$id+1";
$rec=mysql_query($sql,$conn);
$row=mysql_fetch_array($rec);
$subject2=$row['subject'];
if($subject2==''){
	$subject2="没有了";
}
$smarty->assign("subject2",$subject2);
$sql="select * from img where Id=$id";
$rec=mysql_query($sql,$conn);
$row=mysql_fetch_array($rec);
$subject=$row['subject'];
$czyear=$row['czyear'];
$content1=$row['content'];
$smarty->assign("czyear",$czyear);
$smarty->assign("subject",$subject);
$smarty->assign("content1",$content1);
$smarty->assign("types",$types);
$smarty->display("img_detail.tpl");
?>