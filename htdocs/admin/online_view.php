<?php require_once('adminqx.php'); ?>
<?php require_once('../include/mysqlclass.php'); ?>
<?php
$article_edit=new mysql();
if(isset($_GET['id'])){
$id=$_GET['id'];
	$article_edit->update("n_zxreg","flag=1","where id=$id");
	echo "<script language=javascript>";
	echo "window.opener.location.reload(true);";
	echo "</script>";
}else{
	echo "<script language=javascript>";
	echo "alert('�Ƿ�����');";
	echo "window.close();";
	echo "</script>";
}

$query=$article_edit->selectedit("n_zxreg","where id=$id");
$rs=mysql_fetch_array($query);
$gsname=$rs['gsname'];
$createtime=$rs['createtime'];
$lxr=$rs['lxr'];
$tel=$rs['tel'];
$mail=$rs['mail'];
$address=$rs['address'];
$gstel=$rs['xueli'];
$sheng=$rs['sheng'];
$hangye=$rs['hangye'];
$gzfw=$rs['gzfw'];
$state=$rs['state'];
$content=$rs['content'];
if(isset($_POST['edit'])){
 $id=$_POST['id'];
 $state=$_POST['state'];
	$article_edit->update("n_zxreg","state='$state'","where id=$id");
	echo "<script language=javascript>";
	echo "window.opener.location.reload(true);";
	echo "window.close();";
	echo "</script>";
}
if(isset($_GET['del'])){
  $del=$_GET['id'];
  $sqlstr="delete from n_zxreg where id=".$del;
  //echo $sqlstr;
  //exit();
  mysql_query($sqlstr);
	echo "<script language=javascript>";
	echo "window.opener.location.reload(true);";
	echo "window.close();";
	echo "</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���߿�ͨ����ҳ��</title>
<style type="text/css">
<!--
.STYLE2 {
	font-size: 18px;
	font-weight: bold;
}
body,td,th {
	font-size: 12px;
}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="500" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td height="50" colspan="4" align="center" bgcolor="#CCCCCC"><span class="STYLE2"><?php echo $gsname;?>:</span>(<?php echo $createtime;?>)
    <input name="id" type="hidden" id="id" value="<?php echo $id;?>" />
    </tr>
    <tr>
      <td width="91" align="center">�� &nbsp;&nbsp;&nbsp;��: </td>
      <td width="171"><?php echo $lxr;?></td>
      <td width="61" align="center">��˾�绰:</td>
      <td width="144"><?php echo $gstel;?></td>
    </tr>
    <tr>
      <td align="center" nowrap="nowrap">�� &nbsp;&nbsp;&nbsp;��:</td>
      <td><?php echo $mail;?></td>
      <td align="center" nowrap="nowrap">�ֻ�����:</td>
      <td><?php echo $tel;?></td>
    </tr>
    <tr>
      <td align="center">����ʡ��:</td>
      <td><?php echo $sheng;?> &nbsp;</td>
      <td align="center">������ҵ:</td>
      <td><?php echo $hangye;?>&nbsp;</td>
    </tr>
    <tr>
      <td align="center">��˾��ַ:</td>
      <td colspan="3"><?php echo $address;?></td>
    </tr>
    <tr>
      <td align="center">��ע����:</td>
      <td colspan="3"><?php echo $gzfw;?></td>
    </tr>
    <tr>
      <td align="center" valign="top">��&nbsp;&nbsp;&nbsp;&nbsp;ע:</td>
      <td colspan="3" align="left" valign="top"><label><?php echo $content;?></label></td>
    </tr>
    <tr>
      <td align="center">��������:</td>
      <td colspan="3" align="left"><p>
        <label>
          <input name="state" type="radio" value="0"<?php if($state==0){ ?> checked="checked"<?php } ?> />
          δ��ͨ</label>
        <label>
          <input type="radio" name="state" value="1" <?php if($state==1){ ?> checked="checked"<?php } ?> />
          ��ͨ����</label>
        <label>
          <input type="radio" name="state" value="2" <?php if($state==2){ ?> checked="checked"<?php } ?> />
          תΪ��ʽ</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td colspan="4" align="center">
        <input name="edit" type="submit" id="edit" value="�ύ" />
      &nbsp;
<input type="button" onclick="location='online_view.php?id=<?php echo $id;?>&del=1';" name="Submit2" value="ɾ������" />    </td>
    </tr>
  </table>
</form>
</body>
</html>
