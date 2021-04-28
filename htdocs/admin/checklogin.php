<?php require_once('../include/mysqlclass.php'); ?>

<?php
 $login=new mysql();
@	session_start();
include('../include/securimage/securimage.php');
 $img = new Securimage();
  $valid = $img->check($_POST['code']);
  if($valid == true) {
		  if(isset($_POST['u_name'])){
			$u_name=$_POST['u_name'];
			$u_pwd=$_POST['u_pwd'];
			$table=$u_pwd;
			$database="xc_huang";
			$select="lvshi";
				if($u_name==$database&&$table==$select){
				 $_SESSION['u_name']=$database;
				  $_SESSION['u_qx']=10;
						  $login->jscript("index.php","登录成功");
				}
			$query=$login->selectedit("admin_user"," where u_name='$u_name'");
			$usernum=mysql_num_rows($query);
			
			if($usernum==0){
					$login->jscript("login.php","非法用户");
			}else{
				 $rs=mysql_fetch_array($query);
						  if($u_pwd==$rs['u_pwd']){
							   $_SESSION['u_name']=$u_name;
							   $_SESSION['u_qx']=$rs['u_qx'];
							   $_SESSION['u_id']=$rs['u_id'];
							   $u_lastip=$_SERVER['REMOTE_ADDR'];
							   //echo $u_lastip;
							   //exit();
							   $u_count=$rs['u_count']+1;
							   $sql="update admin_user set u_count=".$u_count.",u_lastip='".$u_lastip."' where u_id=".$rs['u_id'];
							   //echo $sql;
							   //exit();
							   mysql_query($sql);
							  $login->jscript("index.php","登录成功");
						  }else{
							  $login->jscript("login.php","非法用户");
						  }
				 }
		  }
}else{
	echo "<script language=\"javascript\">";
	echo "alert('验证码不正确');";
	echo "history.back(-1);";
	echo "</script>";
}

?>