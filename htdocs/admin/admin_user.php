<?php require_once('adminqx.php'); ?>

<?php require_once('../include/mysqlclass.php'); ?>
<?php
$mycon=new mysql();
if(isset($_POST['Submit'])){
	$u_name=$_POST['u_name'];
	$u_xinming=$_POST['u_xinming'];
	$u_pwd=$_POST['u_pwd'];
	$sqlstr="insert into admin_user(u_name,u_xinming,u_pwd,u_qx)values('$u_name','$u_xinming','$u_pwd',9)";
	mysql_query($sqlstr);
   echo"<script language='javascript'>";
   echo"location='admin_user.php'";
   echo"</script>";
}
if(isset($_GET['edit'])){
	$u_id=$_GET['edit'];
	$query=$mycon->selectedit("admin_user","where u_id=$u_id");
	$rs_edit=mysql_fetch_array($query);
}
if(isset($_POST['u_id'])){
   $u_id=$_POST['u_id'];
   $u_xinming=$_POST['u_xinming'];
   $u_pwd=$_POST['u_pwd'];
   $sqlstr="update admin_user set u_name='$u_xinming',u_pwd='$u_pwd' where u_id=$u_id";
   mysql_query($sqlstr);
   echo"<script language='javascript'>";
   echo"location='admin_user.php'";
   echo"</script>";
}
if(isset($_GET['del'])){
	$del=$_GET['del'];
	mysql_query("delete from admin_user where u_id='$del'");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
.STYLE1 {color: #FFFFFF}
-->
</style></head>

<body>
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td>��ǰλ��:�û����� | <?php if($u_qx==10){?><a href="admin_user.php?add=1">[���]</a><?php }else{?>���<?php }?></td>
  </tr>
  <tr>
    <td><hr></td>
  </tr>
</table>
<table width="100%" border="1" cellspacing="0" cellpadding="5">
  <tr>
    <td width="13%" align="center" bgcolor="#6699FF"><span class="STYLE1">�û���</span></td>
    <td width="17%" align="center" bgcolor="#6699FF"><span class="STYLE1">�û�����</span></td>
    <td width="16%" align="center" bgcolor="#6699FF"><span class="STYLE1">����¼����</span></td>
    <td width="17%" align="center" bgcolor="#6699FF"><span class="STYLE1">����¼IP</span></td>
    <td width="16%" align="center" bgcolor="#6699FF"><span class="STYLE1">��¼����</span></td>
    <td width="9%" align="center" bgcolor="#6699FF"><span class="STYLE1">����</span></td>
  </tr>
  
  <?php
  $query=$mycon->selectedit("admin_user","order by u_id desc ");
  while($rs=mysql_fetch_array($query)){
  ?>
  <tr>
    <td align="center"><?php if($u_qx==10 || $u_name==$rs['u_name']){?><a href="admin_user.php?edit=<?php echo $rs['u_id'];?>"><?php echo $rs['u_name'];?></a><?php }else{?><?php echo $rs['u_name'];?><?php }?></td>
    <td align="center"><?php echo $rs['u_xinming'];?></td>
    
    <td align="center"><?php echo $rs['u_lasttime'];?></td>
    <td align="center"><?php echo $rs['u_lastip'];?></td>
    <td align="center"><?php echo $rs['u_count'];?></td>
    <td align="center"><?php if($u_qx==10){?><a href="admin_user.php?del=<?php echo $rs['u_id'];?>">ɾ��</a><?php }else{?>ɾ��<?php }?></td>
  </tr>
  <?php
  }
  ?>
</table>
<p>

</p>
<p>  <?php
if(isset($_GET['add'])){
?>
  <script language="javascript">
 function ckfrm(){
	 if(document.form1.u_name.value.length<4){
	 	alert("�û���¼������Ϊ��");
		document.form1.u_name.focus();
		return false;
	 }
	 if(document.form1.u_pwd.value.length<4){
	 	alert("�û����벻��Ϊ��");
		document.form1.u_pwd.focus();
		return false;
	 }
 	 if(document.form1.u_pwd.value!=document.form1.u_pwd2.value){
	 	alert("������������벻ͬ");
		document.form1.u_pwd.focus();
		return false;
	 }
}
  </script>
</p>
<form id="form1" name="form1" method="post" action="" onSubmit="return ckfrm();">
  <table width="90%" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td width="34%" align="right" bgcolor="#CADBFF">�� ����¼��:</td>
      <td width="66%"><input name="u_name" type="text" id="u_name" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CADBFF">�� �� �� ��:</td>
      <td><input name="u_xinming" type="text" id="u_xinming" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CADBFF">�� ¼ �� ��:</td>
      <td><input name="u_pwd" type="text" id="u_pwd" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CADBFF">ȷ �� �� ��:</td>
      <td><input name="u_pwd2" type="text" id="u_pwd2" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CADBFF">&nbsp;</td>
      <td><input type="submit" name="Submit" value="�ύ" /></td>
    </tr>
  </table>
</form>
<p>
  <?php
}
?>
</p>
<p>&nbsp;</p>
<?php
if(isset($_GET['edit'])){
?>
<form id="form2" name="form2" method="post" action="">
  <table width="90%" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td width="34%" align="right" bgcolor="#CADBFF">�� ����¼��:</td>
      <td width="66%"><input name="u_id" type="hidden" id="u_id" value="<?php echo $rs_edit['u_id'];?>" /><?php echo $rs_edit['u_name'];?></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CADBFF">�� �� �� ��:</td>
      <td><input name="u_xinming" type="text" id="u_xinming" value="<?php echo $rs_edit['u_name'];?>" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CADBFF">�� ¼ �� ��:</td>
      <td><input name="u_pwd" type="password" id="u_pwd" value="<?php echo $rs_edit['u_name'];?>" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CADBFF">ȷ �� �� ��:</td>
      <td><input name="u_pwd2" type="password" id="u_pwd2" value="<?php echo $rs_edit['u_name'];?>" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#CADBFF">&nbsp;</td>
      <td><input type="submit" name="Submit2" value="�ύ" /></td>
    </tr>
  </table>
</form>
<?php
}
?>
<p>&nbsp;</p>
</body>
</html>
