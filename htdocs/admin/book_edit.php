<?php require_once('../include/mysqlclass.php'); ?>
<?php
if(isset($_GET['id'])){
$id=$_GET['id'];

$query=$wz->selectedit("book","where id=$id");
$rs=mysql_fetch_array($query);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
-->
</style></head>

<body>
<table width="90%" border="0" align="center" cellpadding="7" cellspacing="1">
  <tr>
    <td colspan="2" align="center" bgcolor="#E0ECFE">客户留言表</td>
  </tr>
  <tr>
    <td width="27%" align="right" valign="middle" bgcolor="#F2FDFC">留言人称呼:</td>
    <td width="73%" bgcolor="#F4E6FF"><?PHP echo $rs['chenghu'];?></td>
  </tr>
  <tr>
    <td align="right" valign="middle" bgcolor="#F2FDFC">电话:</td>
    <td bgcolor="#F4E6FF"><?PHP echo $rs['tel'];?></td>
  </tr>
  <tr>
    <td align="right" valign="top" bgcolor="#F2FDFC">留言标题:</td>
    <td bgcolor="#F4E6FF"><?PHP echo $rs['title'];?></td>
  </tr>
  <tr>
    <td align="right" valign="top" bgcolor="#F2FDFC">留言内容:</td>
    <td bgcolor="#F4E6FF"><label>
      <textarea name="textarea" cols="59" rows="10"><?PHP echo $rs['content'];?></textarea>
    </label></td>
  </tr>
  <tr>
    <td bgcolor="#F2FDFC">&nbsp;</td>
    <td bgcolor="#F4E6FF"><a href="book.php">返回上页</a></td>
  </tr>
</table>
</body>
</html>
