<?
include "../../config/admin_auth.php";
include "../../config/config.php";
include "../../config/admin_public_include.php";
include "../../config/db_function.php";
$conn=Connect_DB($DB_VARS_ARRAY);
$userid=$_SESSION['SESSION_ADMIN_USERID'];
$action=$_POST['action'];
$id=$_GET['id'];
$types=$_GET['types'];
if($types==1){
 	$name="��������";	
 }
 if($types==2){
 	$name="�л�ͼƬ";	
 }
$smarty->assign("name",$name);
if($action=="submit"){
	$pid=$_POST['pid'];	
	$linkname=$_POST['linkname'];
	$linkweb=$_POST['linkweb'];
	$tmparray=explode(".",basename($_FILES['upfile']['name']));//��ȡ�ļ���
	 $fname=date("YmdHis").".".$tmparray[1];//�ϴ����ļ���
	//$_FILES['upfile']['size']�ж��ϴ��ļ��Ĵ�С,��λ�ֽ�1024 * 1=1kb	 
	$uploadfile="../../uploads/".$fname;	
    if(move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile)){
 		
    }
	$time=time();
	if(!empty($_FILES['upfile']['name'])){
    $sql="insert into link set types=$types,pic='$fname',pid=$pid,linkname='$linkname',linkweb='$linkweb'";
    }else{
	$sql="insert into link set pid=$pid,types=$types,linkname='$linkname',linkweb='$linkweb'";
	}    
    //echo $sql;
	$rec=mysql_query($sql,$conn);
	if($rec){
		$smarty->assign("return_url","hezuo.php?types=$types");	
		$smarty->display('showmsg.tpl');
		return;
	}
}
$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
$smarty->assign("types",$types);
$smarty->display("hezuo_ins.tpl");	
?>