<?php require_once('adminqx.php'); ?>
<?php require_once('../include/mysqlclass.php'); ?>
<?php
  $article=new mysql();
if(isset($_POST['Submit'])){
     $id=$_POST['id'];
	 foreach($id as $a_id){
	 //echo $a_id;
	 //exit();
	$article->delete("n_zxreg"," where id=$a_id ");
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
body,td,th {
	font-size: 12px;
}
-->
</style></head>
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

<body>
<table width="95%" border="1" align="center" cellpadding="3" cellspacing="0">
  <form name="form1" method="post" action="">
    <tr>
      <td width="9%" align="center" bgcolor="#0099FF"><input type="checkbox" name="check1" value="checkbox" onClick="return checkall();"/>
      <input type="Submit" name="Submit" value="删除" /></td>
      <td width="21%" align="center" bgcolor="#0099FF">公司名称</td>
      <td width="9%" align="center" bgcolor="#0099FF">姓名</td>
      <td width="13%" align="center" bgcolor="#0099FF">公司电话</td>
      <td width="16%" align="center" bgcolor="#0099FF">手机</td>
      <td width="8%" align="center" bgcolor="#0099FF">状态</td>
      <td width="9%" align="center" bgcolor="#0099FF">处理结果</td>
      <td width="15%" align="center" bgcolor="#0099FF">申请时间</td>
    </tr>
    <?php
 $query=$article->selectpg("n_zxreg","createtime desc",5,$page,"");
 $num=mysql_num_rows($query);
 if($num==0){
 ?>
    <tr>
      <td colspan=11 align="center">没有内容</td>
    </tr>
    <?php
	 }else{
	 while($rs=mysql_fetch_array($query)){
	 ?>
    <tr >
      <td align="center"><input name="id[]" type="checkbox" id="id[]" value="<?PHP echo $rs['id'];?>" />      </td>
      <td align="center"><a href="online_view.php?id=<?PHP echo $rs['id'];?>" onclick="window.open('','new','width=500,scrollbars=yes')" target="new"><?php echo $rs['gsname'];?></a></td>
      <td align="center"><a href="online_view.php?id=<?PHP echo $rs['id'];?>" onclick=window.open('','new','width=500,scrollbars=yes') target=new><?php echo $rs['lxr'];?></a></td>
      <td align="center"><?php echo $rs['gstel'];?></td>
      <td align="center"><?php echo $rs['tel'];?></td>
      <td align="center"><?php if($rs['flag']==0){echo "<font color=#ff0000>未读</font>";}else{ echo "已读";}?></td>
      <td align="center">
		  &nbsp;
	       <?php if($rs['state']==0){echo "<font color=#ff0000>未处理</font>";}else if($rs['state']==1){ echo "开通试用";}else if($rs['state']==2){ echo "转为正式";}?>	  </td>
      <td align="center"><?php echo $rs['createtime'];?></td>
 </tr>
    <?php
	  }
	}
	  ?>
  </form>
  <tr>
    <td colspan=8 align="center">
	<?php
	$pagestr=$article->pagenext($webpage);
	echo $pagestr;
	?>	 </td>
  </tr>
</table>
</body>
</html>
