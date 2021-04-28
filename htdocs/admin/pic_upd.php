<?php require_once('../include/wzclass.php'); ?>
<?php require_once('adminqx.php'); ?>
<?php 
//echo $id;
//exit();
if(isset($_GET['upd'])){
$id=$_GET['upd'];
$cid=$_GET['cid'];
$sqlstr=mysql_query("select * from tuku where id=$id");
$rs=mysql_fetch_array($sqlstr);
 }
if(isset($_POST['Submit'])){
$cid=$_POST['cid'];
$id=$_POST['id'];
$title=$_POST['title'];
$pic=$_POST['a_pic'];
$sql=mysql_query("update tuku set title='$title',pic='$pic' where id=$id");
echo"<script language='javascript'>";
echo"alert('修改成功');";
echo"location='pic.php?cid=$cid';";
echo"</script>";
}
 ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	color: #000000;
	text-decoration: none;
}
a:hover {
	color: #000000;
	text-decoration: underline;
}
-->
</style>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table width="90%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#E1F8FF">
  <tr>
    <td width="18%" height="36" bgcolor="#E1F8FF">修改信息</td>
    <td align="center" bgcolor="#E1F8FF"><a href="pic.php?cid=<?php echo $cid;?>">返回</a></td>
  </tr>
  <tr>
    <td align="right" valign="middle" bgcolor="#FFFFFF">标题:</td>
    <td valign="middle" bgcolor="#FFFFFF"><input name="title" type="text" id="title" value="<?php echo $rs['title'];?>" size="60" />
      <label>
      <input name="cid" type="hidden" value="<?php echo $cid;?>" />
      <input name="id" type="hidden" value="<?php echo $id;?>" />
      </label></td>
  </tr>
  <tr>
    <td align="right" valign="middle" bgcolor="#FFFFFF">图片:</td>
    <td valign="middle" bgcolor="#FFFFFF"><input name="a_pic" type="text" id="a_pic" value="<?php echo $rs['pic'];?>" size="42" />
      <input type="button" onclick="window.open('upfile.php?id=a_pic','mywin','toolbar=no,location=no,scrollbars=yes,width=550,height=200,left=120,top=70')" name="Submit2" value="上传图片" />
      <input type="button" onclick="window.open('selectpic.php?id=a_pic','mywin','toolbar=no,location=no,scrollbars=yes,width=750,height=600,left=120,top=70')" name="Submit22" value="浏览图片" /></td>
  </tr>
  <tr>
    <td align="right" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
    <td valign="middle" bgcolor="#FFFFFF"><label>
      <input name="Submit" type="submit" id="Submit" value="提交" />
      </label></td>
  </tr>
</table>
</form>
</body>
</html>
