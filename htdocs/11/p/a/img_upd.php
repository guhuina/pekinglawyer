<?
session_start();
include "../../config/admin_public_include.php";
include "../../config/admin_auth.php";
include "../../config/db_function.php";
include "../../config/functions.inc.php";
//$sBasePath = $_SERVER['PHP_SELF'] ;
$conn = Connect_DB($DB_VARS_ARRAY); 
$userid=$_SESSION['SESSION_ADMIN_USERID']; 
$id=$_GET['id'];
$types=$_GET['types'];
if($types==1){
 	$name="律师团队";	
 }
$action=$_POST['action'];
$sql2="select pid,subject,content,czyear from img where id=$id and types=$types";
$rec2=mysql_query($sql2,$conn);
$row=mysql_fetch_array($rec2);
$subject=$row['subject'];
$pid=$row['pid'];
$czyear=$row['czyear'];
$content=$row['content'];
if($action=='submit'){
	$subject=$_POST['biaoti'];	
	$content=$_POST['content'];
	$pid=$_POST['pid'];
	$tmparray=explode(".",basename($_FILES['upfile']['name']));//截取文件名
	$fname=date("YmdHis").".".$tmparray[1];//上传的文件名
	//$_FILES['upfile']['size']判断上传文件的大小,单位字节1024 * 1=1kb	 
	$uploadfile="../../uploads/".$fname;
	$time=time();	
	if (empty($_FILES['upfile']['name'])){
		$sql="update img set pid=$pid,content='$content',subject='$subject' where id='$id'";			
		}
	else{
		 if(move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile)){
		 	$un = unlink("../../uploads/$czyear")?1:0;
		 	if (0 == $un){
		 		chdir('../../uploads');
		 		$aa = getcwd();
		 	echo $cv = "系统未能自动删除，请手动删除图片.路径$aa\\$czyear";
		 		echo "<script>alert('请手动删除图片$czyear')
		 				location.href('img_upd.php?id=$id&types=$types')
		 			</script>";
		 	} 
		 	$sql="update img set content='$content',subject='$subject',czyear='$fname' where id='$id'";				
	     }else{
				echo "<script>alert('上传失败')
		    	location.href('img_upd.php?id=$id&types=$types')
		    	</script>";	
	    }
	    }
	     if(!mysql_query($sql,$conn)){
			echo mysql_error().$sql;
		 }			
		$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
		$smarty->assign("return_url","img.php?types=$types");
		$smarty->display('showmsg.tpl');
		return;
}
$smarty->assign("types",$types);
$smarty->assign("name",$name);
$smarty->assign("subject",$subject);
$smarty->assign("content",$content);
$smarty->assign("czyear",$czyear);
$smarty->assign("userarray",$userarray);
$smarty->assign("id",$id);
$smarty->assign("pid",$pid);
$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
$smarty->display('img_upd.tpl');
?>