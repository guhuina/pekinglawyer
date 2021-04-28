<?
include "../../config/admin_auth.php";
include "../../config/admin_public_include.php";
include "../../config/db_function.php";
$conn = Connect_DB($DB_VARS_ARRAY); 
$action=$_POST['action'];
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
 	$name="诉讼常识";	
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
if($action=='submit'){
    $subject=$_POST['biaoti'];
    $pid=$_POST['pid'];	
    $type=$_POST['type'];	
    $fontcolor=$_POST['fontcolor'];
    $content=stripslashes($_POST['content']);
    $time=time();
    $tmparray=explode(".",basename($_FILES['upfile']['name']));//截取文件名
	$fname=date("YmdHis").".".$tmparray[1];//上传的文件名
	//$_FILES['upfile']['size']判断上传文件的大小,单位字节1024 * 1=1kb	 
	$uploadfile="../../uploads/".$fname;	
    if(move_uploaded_file($_FILES['upfile']['tmp_name'],$uploadfile)){
	 	
	}
	if (empty($_FILES['upfile']['name'])){
		$sql="insert into news set types=$types,pid='$pid',content='$content',subject='$subject',type='$type',instime=$time";			
	}else{
		$sql="insert into news  set types=$types,pid=$pid,content='$content',type='$type',pic='$fname',subject='$subject',instime=$time";
	}
	//echo $sql;
	if(!mysql_query($sql,$conn)){
		mysql_error().$sql;
    }   
	$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
	$smarty->assign("return_url","news.php?types=$types");
	$smarty->display('showmsg.tpl');
	return;
	}
$smarty->assign("types",$types);
$smarty->assign("name",$name);
$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
$smarty->assign("subject",$subject);
$smarty->assign("content",$content);
$smarty->assign('userarray',$userarray);
$smarty->display('news_ins.tpl');
?>