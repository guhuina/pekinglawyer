<?php require_once('adminqx.php'); ?>
<?php require_once('../include/mysqlclass.php'); ?>
<?php
 if(isset($_POST['Submit'])){
     $id=$_POST['id'];
	$page=$_GET['page'];
	 foreach($id as $a_id){
	$wz->delete("book_yy","where id=$a_id");
	}
}
  if(isset($_GET['page'])){
  	$page=$_GET['page'];
  }else{
  	$page=1;
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
body,td,th {
	font-size: 12px;
}
-->
</style>
</head>

<body>
<script language=javascript>
	function checkall()
	{
	   var a = document.getElementsByTagName("input");//getElementsByTagName传回指定名称的元素集合,是一种方法
	   //alert(document.getElementsByName("checkALL").checked);
	   if(form1.check1.checked)
	   {
		   for (var i=0; i<a.length; i++)
		   if (a[i].type == "checkbox") a[i].checked = true;
	   }
	   else
	   {
		  for (var i=0; i<a.length; i++)
		   if (a[i].type == "checkbox") a[i].checked = false;
	   }
	}
	</script>

<table width="90%" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#BDDFDB">
    <form name="form1" method="post" action="book.php?page=<?php echo $page;?>">

  <tr>
    <td width="11%" height="32" align="center" bgcolor="#009999"><span class="STYLE1">
      <input type="checkbox" name="check1" value="checkbox" onclick="return checkall();"/>全选</span></td>
    <td width="14%" align="center" bgcolor="#009999"><span class="STYLE1">称呼</span></td>
    <td width="11%" align="center" bgcolor="#009999" class="STYLE1">联系电话</td>
    <td width="11%" align="center" bgcolor="#009999" class="STYLE1">留言时间</td>
    <td width="8%" align="center" bgcolor="#009999"><span class="STYLE1">操作</span></td>
  </tr>
  <?php
 $query=$wz->selectpg("book_yy"," id desc ",15,$page);
 while($rs=mysql_fetch_array($query)){
  ?>
  <tr >
    <td align="center"><input name="id[]" type="checkbox" id="id[]" value="<?PHP echo $rs['id'];?>" /></td>
    <td align="center"><?PHP echo $rs['chenghu'];?></td>
    <td align="center"><?PHP echo $rs['tel'];?></td>
    <td align="center"><?PHP echo substr($rs['createtime'],0,10);?></td>
    <td align="center"><a href="book_yy_edit.php?id=<?PHP echo $rs['id'];?>">查看详细</a></td>
  </tr>
  <?php
  }
  ?>
  <tr>
    <td align="center"><input type="submit" name="Submit" value="删除所选" /></td>
    <td colspan="6" align="center">&nbsp;</td>
    </tr>
  </form>
</table>
<table width="90%" border="0" align="center" cellpadding="8" cellspacing="0">
  <tr>
    <td align="center">
   <?php echo $wz->pagenext($url="book.php?");?></td>
  </tr>
</table>
</body>
</html>
<?php
$wz->close();
?>
