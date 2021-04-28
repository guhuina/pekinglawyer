<?
header('Content-Type:text/html;charset=gb2312');
include "../../config/admin_auth.php";
include "../../config/config.php";
include "../../config/admin_public_include.php";
include "../../config/db_function.php";
$conn=Connect_DB($DB_VARS_ARRAY);
$userid=$_SESSION['SESSION_ADMIN_USERID'];
$seldata=$_POST['seldata'];
if($seldata!=""){
$dataarray=explode(",",$seldata);
$numit=count($dataarray);
for($i=0;$i<$numit;$i++){
	if($dataarray[$i]>0){
		$sql="delete from liuyan where id=$dataarray[$i]";
		//echo $sql;
		mysql_query($sql,$conn);
		$smarty->assign("return_url","liuyan.php");
	}
}
$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);	
$smarty->display('showmsg.tpl');
return;
}
$page_now=$_GET['page_now'];
if(strlen($page_now)<1){
 $page_now=1;
}
$sql="select * from liuyan order by id desc";
$page_recs=10;
mysql_query("set names gbk");
$rec=mysql_query($sql,$conn);
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
$tmpi=0;
if($total_user>0)
mysql_data_seek($rec,$i);
$tmpnum=$total_user-$i;
while($row=mysql_fetch_array($rec)){
	$userarray[$tmpi]['id1']=$tmpnum;
    $userarray[$tmpi]['id']=$row['Id'];
    $userarray[$tmpi]['ifpass']=$row['ifpass'];
    $userarray[$tmpi]['name']=$row['name'];
    $ifpass=$row['ifpass'];
    if($ifpass=='0'){
    	$userarray[$tmpi]['ifpass']="Î´ÉóºË";	
    }
    if($ifpass=='1'){
    	$userarray[$tmpi]['ifpass']="ÒÑÉóºË";	
    }
    $userarray[$tmpi]['instime']=date("Y-m-d",$row['instime']);
    $userarray[$tmpi]['url']="liuyan_del.php?id=".$row['Id'];
     $id=$row['Id'];
    if($tmpi%2==0){
		$userarray[$tmpi]['class']='altbg1';
    }else{
    	$userarray[$tmpi]['class']='altbg2';
    }
	$tmpi++;
	$tmpnum--;
	if($tmpi>=$page_recs){
		break;
	}
}
$smarty->assign("types",$types);
$smarty->assign('userarray',$userarray);
$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
$smarty->assign("page_now",$page_now);
$smarty->assign("page_recs",$page_recs);
$smarty->assign("pages",$pages);
$smarty->assign("total_user",$total_user);
$smarty->assign("before_page",$before_page);
$smarty->assign("after_page",$after_page);
$smarty->display('liuyan.tpl');
?>