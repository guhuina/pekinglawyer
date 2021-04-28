<?
include "bbs.php";
$page_now=$_GET['page_now'];
if(strlen($page_now)<1){
$page_now=1;
}
$sql="select * from liuyan where ifpass=1 order by id desc";
//echo $sql;
$rec=mysql_query($sql,$conn); 
$page_recs=20;
$total_user=mysql_num_rows($rec);
$pages=ceil($total_user/$page_recs);
if($page_now>$pages){
	$page_now=$pages;
}
if($page_now<=1){
	$before_page=1;
	if($pages>1){
		$after_page=$page_now+1;
	}else{
		$after_page=1;
	}
}else{
	$before_page=$page_now-1;
	if($page_now < $pages){
		$after_page=$page_now+1;
	}else{
		$after_page=$pages;
	}
} 
$i=($page_now-1)*$page_recs;
if($total_user>0){
	mysql_data_seek($rec,$i);
}
$row=mysql_num_rows($rec);
$tmp=0;
$tmpnum=$total_user-$i;
while($row=mysql_fetch_array($rec)){
	$userarray[$tmp]['id']=$row['Id'];
	$userarray[$tmp]['name']=$row['name'];
	$userarray[$tmp]['title']=$row['title'];
	$userarray[$tmp]['read_num']=$row['read_num'];
	$userarray[$tmp]['instime']=date("Y-m-d H:i:s",$row['instime']);
	$tmp++;
	if($tmp>=$page_recs){
		break;
	}
}
$smarty->assign("userarray",$userarray);
$smarty->assign("page_now",$page_now);
$smarty->assign("page_recs",$page_recs);
$smarty->assign("pages",$pages);
$smarty->assign("total_user",$total_user);
$smarty->assign("before_page",$before_page);
$smarty->assign("after_page",$after_page);	
$smarty->display("tiezi.tpl");
?>