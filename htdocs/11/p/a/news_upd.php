<?
session_start();
include "../../config/admin_auth.php";
include "../../config/admin_public_include.php";
include "../../config/db_function.php";
$conn = Connect_DB($DB_VARS_ARRAY); 
$userid=$_SESSION['SESSION_ADMIN_USERID']; 
$id=$_GET['id'];
$page_now=$_GET['page_now'];
$types=$_GET['types'];
 if($types==1){
 	$name="��������";	
 }
 if($types==2){
 	$name="����ȵ�";	
 }
 if($types==3){
 	$name="���䰸��";	
 }
 if($types==4){
 	$name="��ʼ���";	
 }
 if($types==5){
 	$name="���ɷ���";	
 }
 if($types==6){
 	$name="����̽��";	
 }
 if($types==7){
 	$name="���ϳ�ʶ";	
 }
 if($types==8){
 	$name="��������";	
 }
 if($types==9){
 	$name="ҵ��Χ";	
 }
  if($types==10){
 	$name="���ٰ���";	
 }
$action=$_POST['action'];
$sql2="select pid,subject,content,type,pic from news where Id=$id";
$rec2=mysql_query($sql2,$conn);
$row=mysql_fetch_array($rec2);
$subject=$row['subject'];
$content=$row['content'];
$pid=$row['pid'];
$pic=$row['pic'];
$type=$row['type'];
if($action=='submit'){	
	$subject=$_POST['biaoti'];	
	$pid=$_POST['pid'];	
	$type=$_POST['type'];
	$content=stripslashes($_POST['content']);
	$time=time();
	$tmparray=explode(".",basename($_FILES['upfile']['name']));//��ȡ�ļ���
	$fname=date("YmdHis").".".$tmparray[1];//�ϴ����ļ���
	//$_FILES['upfile']['size']�ж��ϴ��ļ��Ĵ�С,��λ�ֽ�1024 * 1=1kb	 
	$uploadfile="../../uploads/".$fname;
	$time=time();	
	if (empty($_FILES['upfile']['name'])){
		$sql="update news set pid='$pid',content='$content',subject='$subject',type='$type',instime=$time where id='$id'";			
		}
	else{
		 if(move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile)){
		 	$un = unlink("../../uploads/$pic")?1:0;
		 	if (0 == $un){
		 		chdir('../../uploads');
		 		$aa = getcwd();
		 	echo $cv = "ϵͳδ���Զ�ɾ�������ֶ�ɾ��ͼƬ.·��$aa\\$pic";
		 		echo "<script>alert('���ֶ�ɾ��ͼƬ$pic')
		 				location.href('news_upd.php?id=$id&types=$types')
		 			</script>";
		 	} 
		 	$sql="update news set pid='$pid',content='$content',subject='$subject',pic='$fname',type='$type',instime=$time where id='$id'";				
	     }else{
				echo "<script>alert('�ϴ�ʧ��')
		    	location.href('news_upd.php?id=$id&types=$types')
		    	</script>";	
	    }
	    }
    if(!mysql_query($sql,$conn)){
		echo mysql_error().$sql;
	}			
	$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
	$smarty->assign("return_url","news.php?types=$types&page_now=$page_now");
	$smarty->display('showmsg.tpl');
	return;
}
$smarty->assign("types",$types);
$smarty->assign("subject",$subject);
$smarty->assign("content",$content);
$smarty->assign("type",$type);
$smarty->assign("pid",$pid);
$smarty->assign("pic",$pic);
$smarty->assign("types",$types);
$smarty->assign("name",$name);
$smarty->assign("userarray",$userarray);
$smarty->assign("id",$id);
$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
$smarty->display('news_upd.tpl');
?>