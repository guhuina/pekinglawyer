<?
include "../../config/admin_auth.php";
include "../../config/admin_public_include.php";
include "../../config/db_function.php";
$conn = Connect_DB($DB_VARS_ARRAY); 
//$id=$_GET['id'];	
$action=$_POST['action'];
$types=$_GET['types'];
if($types==1){
 	$name="��ʦ�Ŷ�";	
 }
if($action=='submit'){
    $subject=$_POST['biaoti'];
    $content=$_POST['content'];
    $pid=$_POST['pid'];
	$tmparray=explode(".",basename($_FILES['upfile']['name']));//��ȡ�ļ���
	$fname=date("YmdHis").".".$tmparray[1];//�ϴ����ļ���
	//$_FILES['upfile']['size']�ж��ϴ��ļ��Ĵ�С,��λ�ֽ�1024 * 1=1kb	 
	$uploadfile="../../uploads/".$fname;	
    if(move_uploaded_file($_FILES['upfile']['tmp_name'],$uploadfile)){
	 	
	}
	$sql="insert into img set pid=$pid,types=$types,content='$content',subject='$subject',czyear='$fname'";
	if(mysql_query($sql,$conn)){
		mysql_error().$sql;
    } 
    //echo $sql;  
	$smarty->assign("return_url","img.php?types=$types");
	$smarty->display('showmsg.tpl');
	return;
}
$smarty->assign("name",$name);
$smarty->assign("types",$types);
$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
$smarty->assign('userarray',$userarray);
$smarty->assign('czyear',$czyear);
$smarty->display('img_ins.tpl');
?>