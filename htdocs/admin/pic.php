<?php require_once('../include/wzclass.php'); ?>
<?php require_once('../include/searchpage.php'); ?>
<?php require_once('adminqx.php'); ?>
<?php
if(isset($_GET['page'])){
   $page=$_GET['page'];
}else{
    $page=1;
}
if(isset($_GET['cid'])){
   $cid=$_GET['cid'];
}
if(isset($_POST['Submit'])){
$cid=$_POST['id'];
$title=$_POST['title'];
$pic=$_POST['a_pic'];
$sql=mysql_query("insert into tuku(cid,title,pic)values($cid,'$title','$pic')");
echo"<script language='javascript'>";
echo"location='pic.php?cid=$cid';";
echo"</script>";
}
$cc=mysql_query("select * from n_article where cid=$cid");
$cr=mysql_fetch_array($cc);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
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
<script language="javascript">
	function ckfrm(){
	  if(document.form1.title.value.length<1){
	  alert("���ⲻ��Ϊ��");
	  document.form1.title.focus();
	  return false;
	  }
	}
</script>
</head>

<body>
<table width="90%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#E1F8FF">
  <tr>
    <td width="18%" height="24" bgcolor="#E1F8FF">���ͼƬ</td>
    <td colspan="2" align="center" bgcolor="#E1F8FF"><a href="class_bsmall?cid=1">����</a></td>
  </tr>
  
<form id="form1" name="form1" method="post" action="" onsubmit="return ckfrm();">
  <tr>
    <td align="right" valign="middle" bgcolor="#FFFFFF">����:</td>
    <td colspan="2" valign="middle" bgcolor="#FFFFFF"><input name="title" type="text" id="title" size="60" />
      <label>
      <input name="id" type="hidden" value="<?php echo $cid;?>" />
      </label></td>
  </tr>
  <tr>
    <td align="right" valign="middle" bgcolor="#FFFFFF">ͼƬ:</td>
    <td colspan="2" valign="middle" bgcolor="#FFFFFF"><input name="a_pic" type="text" id="a_pic" size="42" />
    <input type="button" onclick="window.open('upfile.php?id=a_pic','mywin','toolbar=no,location=no,scrollbars=yes,width=550,height=200,left=120,top=70')" name="Submit2" value="�ϴ�ͼƬ" />
        <input type="button" onclick="window.open('selectpic.php?id=a_pic','mywin','toolbar=no,location=no,scrollbars=yes,width=750,height=600,left=120,top=70')" name="Submit22" value="���ͼƬ" />    </td>
  </tr>
  <tr>
    <td align="right" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
    <td colspan="2" valign="middle" bgcolor="#FFFFFF"><label>
      <input type="submit" name="Submit" value="�ύ" />
      </label></td>
  </tr>
  </form>
  
  <tr>
    <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="60%" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="22%" align="center" bgcolor="#FFFFFF"><a href="pic_del.php?dall=<?php echo $cid;?>">ɾ������ͼƬ</a></td>
  </tr>
</table>
<table width="90%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#E1F8FF">
  <tr>
    <td width="17%" height="29" align="center" bgcolor="#E1F8FF">ID���</td>
    <td width="29%" align="center" bgcolor="#E1F8FF">��Ʒ����</td>
    <td width="34%" align="center" bgcolor="#E1F8FF">��ƷͼƬ</td>
    <td width="20%" align="center" bgcolor="#E1F8FF">����</td>
  </tr>
    <?php
    $sql="select * from tuku where cid=$cid order by id desc";
 	genpage($sql,8);
	$query=mysql_query($sql);
	while($rs=mysql_fetch_array($query)){
 ?>
  <tr>
    <td height="34" align="center" bgcolor="#FFFFFF"><?php echo $rs['id'];?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $rs['title'];?></td>
    <td align="center" bgcolor="#FFFFFF">					<?php 
					if($rs['pic']==''){
					?>
						û��ͼƬ
			        <?php
						}else{
					?>
						<img  src="<?php echo $rs['pic'];?>" width="46"border="0" />
					<?php
						}
					?>
</td>
    <td align="center" bgcolor="#FFFFFF"><a href="pic_del.php?del=<?php echo $rs['id'];?>&cid=<?php echo $cid;?>">ɾ��</a>&nbsp;&nbsp;<a href="pic_upd.php?upd=<?php echo $rs['id'];?>&cid=<?php echo $cid;?>">�޸�</a></td>
  </tr>
<?php 
} 
?>     
  <tr>
    <td height="30" colspan="4" align="center" bgcolor="#FFFFFF"><?php $string="cid=$cid"; showpage($string);?></td>
  </tr>
</table>
</body>
</html>
