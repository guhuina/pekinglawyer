<?php require_once('adminqx.php'); ?>
<?php require_once('../include/mysqlclass.php'); ?>
<?php
  $mycon=new mysql();
  
  if(isset($_GET['edit'])){
	  $myquery=$mycon->selectedit("dept"," where id=1 ");
	  $rs=mysql_fetch_array($myquery);
  }
  if(isset($_POST['Submit'])){
    $webtitle=$_POST['webtitle'];
    $gsname=$_POST['gsname'];
    $author=$_POST['author'];
   $keywd=$_POST['keywd'];
    $d_content=$_POST['d_content'];
    $address=$_POST['address'];
    $zip=$_POST['zip'];
    $tel=$_POST['tel'];
    $fax=$_POST['fax'];
    $lxr=$_POST['lxr'];
    $icp=$_POST['icp'];
    $str="webtitle='$webtitle',gsname='$gsname',author='$author',keywd='$keywd',d_content='$d_content',address='$address',zip='$zip',tel='$tel',fax='$fax',lxr='$lxr',icp='$icp'";
	//echo $str;
	//exit();
	 $mycon->update("dept",$str," where id=1");
	 $mycon->jscript("dept.php","�޸ĳɹ�");
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
<table width="91%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td>��ǰλ��:��վ��Ϣ���� <a href="dept.php?edit=1">[�޸���Ϣ]</a></td>
  </tr>
  <tr>
    <td><hr /></td>
  </tr>
</table>
<table width="90%" border="1" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td width="20%" align="center" bgcolor="#3399FF"><span class="STYLE1">��վ����</span></td>
    <td width="30%" align="center" bgcolor="#3399FF"><span class="STYLE1">��˾����</span></td>
    <td width="17%" align="center" bgcolor="#3399FF"><span class="STYLE1">��ϵ�绰</span></td>
    <td width="17%" align="center" bgcolor="#3399FF"><span class="STYLE1">��ϵ��</span></td>
    <td width="16%" align="center" bgcolor="#3399FF"><span class="STYLE1">ICP������</span></td>
  </tr>
  <?php
  $query=$mycon->selectpg("dept","id ",20,1," where id=1");
  while($row=mysql_fetch_array($query)){
  ?>
  <tr>
    <td height="30" align="center"><?php echo $row['webtitle'];?></td>
    <td align="center"><?php echo $row['gsname'];?></td>
    <td align="center"><?php echo $row['tel'];?></td>
    <td align="center"><?php echo $row['lxr'];?></td>
    <td align="center"><?php echo $row['icp'];?></td>
  </tr>
  <?php
  }
  ?>
</table>
<?php
if(isset($_GET['edit'])){
?>
<table width="91%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
	<form id="form1" name="form1" method="post" action="">
      <table width="90%" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#BBDFE1">
        <tr>
          <td width="29%" align="right" bgcolor="#3366FF"><span class="STYLE1">��վ����:</span></td>
          <td width="71%"><label>
            <input name="webtitle" type="text" id="webtitle" value="<?php echo $rs['webtitle'];?>" size="50" />
          </label></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF"><span class="STYLE1">��˾����:</span></td>
          <td><input name="gsname" type="text" id="gsname" value="<?php echo $rs['gsname'];?>" size="50" /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF" class="STYLE1">��վ����:</td>
          <td><input name="author" type="text" id="author" value="<?php echo $rs['author'];?>" size="50" /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF"><span class="STYLE1">ͨ�ŵ�ַ:</span></td>
          <td><input name="address" type="text" id="address" value="<?php echo $rs['address'];?>" size="50" /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF"><span class="STYLE1">��������:</span></td>
          <td><input name="zip" type="text" id="zip" value="<?php echo $rs['zip'];?>" size="50" /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF"><span class="STYLE1">��ϵ�绰:</span></td>
          <td><input name="tel" type="text" id="tel" value="<?php echo $rs['tel'];?>" size="50" /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF"><span class="STYLE1">��&nbsp;&nbsp;&nbsp;&nbsp;��:</span></td>
          <td><input name="fax" type="text" id="fax" value="<?php echo $rs['fax'];?>" size="50" /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF"><span class="STYLE1">�� ϵ ��:</span></td>
          <td><input name="lxr" type="text" id="lxr" value="<?php echo $rs['lxr'];?>" size="50" /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF"><span class="STYLE1">ICP�� ��:</span></td>
          <td><input name="icp" type="text" id="icp" value="<?php echo $rs['icp'];?>" size="50" /></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF"><span class="STYLE1">�ƹ�ؼ���:</span></td>
          <td><textarea name="keywd" cols="48" rows="5" id="keywd"><?php echo $rs['keywd'];?></textarea></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF" class="STYLE1">���ݼ��:</td>
          <td><textarea name="d_content" cols="48" rows="5" id="d_content"><?php echo $rs['d_content'];?></textarea></td>
        </tr>
        <tr>
          <td align="right" bgcolor="#3366FF"><span class="STYLE1"></span></td>
          <td>&nbsp;&nbsp;
            <input type="submit" name="Submit" value="�ύ" /> &nbsp;&nbsp;
            <input type="reset" name="Submit2" value="����" /></td>
        </tr>
      </table>
      </form>
    </td>
  </tr>
</table>
  <?php
  }
  ?>

</body>
</html>
