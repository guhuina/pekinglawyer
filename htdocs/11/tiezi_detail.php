<?
include "bbs.php";
$id=$_GET['id'];
$sql0="update liuyan set read_num=read_num+1 where Id=$id";
$rec0=mysql_query($sql0,$conn);
$sql="select * from liuyan where Id=$id";
$rec=mysql_query($sql,$conn);
$row=mysql_fetch_array($rec);
$title=$row['title'];
$qq=$row['qq'];
$homepage=$row['homepage'];
$email=$row['email'];
$content=$row['content'];
$instime=$row['instime'];
$re_time=$row['re_time'];
$re_content=$row['re_content'];
$isprivate=$row['isprivate'];
$smarty->assign("isprivate",$isprivate);
$smarty->assign("qq",$qq);
$smarty->assign("homepage",$homepage);
$smarty->assign("email",$email);
$smarty->assign("title",$title);
$smarty->assign("content",$content);
$smarty->assign("re_content",$re_content);
$smarty->assign("instime",date("Y-m-d H:i:s",$instime));
$smarty->assign("re_time",date("Y-m-d H:i:s",$re_time));
$smarty->display("tiezi_detail.tpl");
?>