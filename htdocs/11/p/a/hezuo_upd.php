<?
include "../../config/admin_auth.php";
include "../../config/config.php";
include "../../config/admin_public_include.php";
include "../../config/db_function.php";
$conn=Connect_DB($DB_VARS_ARRAY);
$userid=$_SESSION['SESSION_ADMIN_USERID'];
$action=$_POST['action'];
$types=$_GET['types'];
 if($types==1){
 	$name="��������";	
 }
 if($types==2){
 	$name="�л�ͼƬ";	
 }
$smarty->assign("name",$name);
$id=$_GET['id'];
$sql="select * from link where Id=$id";
$rec=mysql_query($sql,$conn);
$row=mysql_fetch_array($rec);
$pic=$row['pic'];
if($action=="submit"){
	$pid=$_POST['pid'];	
	$linkname=$_POST['linkname'];
	$linkweb=$_POST['linkweb'];
	$time=time();
	$tmparray=explode(".",basename($_FILES['upfile']['name']));//��ȡ�ļ���
	$filenamepic=date("YmdHis").".".$tmparray[1];//�ϴ����ļ���
	//$_FILES['upfile']['size']�ж��ϴ��ļ��Ĵ�С,��λ�ֽ�1024 * 1=1kb	 
	$uploadfile="../../uploads/".$filenamepic;	
	if (empty($_FILES['upfile']['name'])){
		$sql="update link set pid=$pid,linkname='$linkname',linkweb='$linkweb' where Id=$id";	
	}else{
		 if(move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile)){
		 	$un = unlink("../../uploads/$pic")?1:0;
		 	if (0 == $un){
		 		chdir('../../uploads');
		 		$aa = getcwd();
		 	echo $cv = "ϵͳδ���Զ�ɾ�������ֶ�ɾ��ͼƬ.·��$aa\\$pic";
		 		echo "<script>alert('���ֶ�ɾ��ͼƬ$pic')
		 				location.href('hezuo_upd.php?id=$id&types=$types')
		 			</script>";
		 	} 			
    	$sql="update link set pid=$pid,pic='$filenamepic',linkname='$linkname',linkweb='$linkweb' where Id=$id";
   }else{
				echo "<script>alert('�ϴ�ʧ��')
		    	location.href('hezuo_upd.php?id=$id&types=$types')
		    	</script>";	
	    }
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
$smarty->assign("id",$row['Id']);
$smarty->assign("pid",$row['pid']);
$smarty->assign("pic",$pic);
$smarty->assign("linkname",$row['linkname']);
$smarty->assign("linkweb",$row['linkweb']);
$smarty->display("hezuo_upd.tpl");	
?>