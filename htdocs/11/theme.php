<?
include "bbs.php";
$action=$_POST['action'];
if($action=='submit'){
	$name=$_POST['name'];	
	$sex=$_POST['sex'];
	$email=$_POST['email'];
	$qq=$_POST['qq'];
	$msn=$_POST['msn'];
	$homepage=$_POST['homepage'];
	$title=$_POST['title'];
	$content=$_POST['content'];
	$isprivate=$_POST['isprivate'];
	$time=time();
	$sql="insert into liuyan set name='$name',sex='$sex',email='$email',qq='$qq',msn='$msn',homepage='$homepage',title='$title',content='$content',isprivate='$isprivate',ifpass=0,read_num=0,instime=$time";
	//echo $sql;
	$rec=mysql_query($sql,$conn);
	if($rec){
		echo "<script>
		alert('留言成功,将在审核后发表');
		location.href('theme.php');
		</script>";	
	}
}
$smarty->display("theme.tpl");
?>