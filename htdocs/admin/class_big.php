<?php require_once('adminqx.php'); ?>
<?php require_once('../include/mysqlclass.php'); ?>
<?php
$bigclass=new mysql();
$webtxt=$_SERVER['PHP_SELF']."?";
//echo $webtxt;
//exit();

if(isset($_POST['Submit'])){
    $class_title=$_POST['class_title'];
    $class_title2=$_POST['class_title2'];
	$keywords=$_POST['keywords'];
	$author=$_POST['author'];
	$flag=$_POST['flag'];
	$sortnum=$_POST['sortnum'];
	$content=$_POST['content'];
	$content2=$_POST['content2'];
	$webpage=$_POST['webpage'];
		if(isset($_POST['gn01'])){
			$is_add=$_POST['gn01'];
		}else{
			$is_add=0;
		}
		if(isset($_POST['gn02'])){
			$is_jian=$_POST['gn02'];
		}else{
			$is_jian=0;
		}
		if(isset($_POST['gn03'])){
			$is_link=$_POST['gn03'];
		}else{
			$is_link=0;
		}
	
		if(isset($_POST['gn04'])){
			$is_pic=$_POST['gn04'];
		}else{
			$is_pic=0;
		}
	
		if(isset($_POST['gn05'])){
			$is_neirong=$_POST['gn05'];
		}else{
			$is_neirong=0;
		}

	$bigclass->insert("n_class","sortnum,class_title,class_title2,flag,keywords,author,content2,content,is_add,is_jian,is_link,is_pic,is_neirong","$sortnum,'$class_title','$class_title2',$flag,'$keywords','$author','$content2','$content',$is_add,$is_jian,$is_link,$is_pic,$is_neirong");
	$bigclass->jscript($webtxt);
}
if(isset($_GET['del'])){
		$del=$_GET['del'];
		$classdel1=$bigclass->selectedit("n_class"," where b_id=$del");
		$classdel2=$bigclass->selectedit("n_article"," where cid=$del");
		$classnum1=mysql_num_rows($classdel1);
		$classnum2=mysql_num_rows($classdel2);
	if($classnum1!=0||$classnum2!=0){
		$bigclass->jscript($webtxt,"该类下还有小类或文章,请删除下级内容后再试");
	}else{
		$bigclass->delete("n_class"," where cid=$del");
		$bigclass->jscript($webtxt,"删除成功");
	}

}
if(isset($_POST['aaa'])){
	$cid=$_POST['cid'];
	$b_id=$_POST['b_id'];
	$sortnum=$_POST['sortnum'];
	$keywords=$_POST['keywords'];
	$author=$_POST['author'];
	$class_title=$_POST['class_title'];
	$class_title2=$_POST['class_title2'];
	$flag=$_POST['flag'];
	$content=$_POST['content'];
	$content2=$_POST['content2'];
	$webpage=$_POST['webpage'];
		if(isset($_POST['gn01'])){
			$is_add=$_POST['gn01'];
		}else{
			$is_add=0;
		}
		if(isset($_POST['gn02'])){
			$is_jian=1;
		}else{
			$is_jian=0;
		}
		if(isset($_POST['gn03'])){
			$is_link=1;
		}else{
			$is_link=0;
		}
	
		if(isset($_POST['gn04'])){
			$is_pic=1;
		}else{
			$is_pic=0;
		}
	
		if(isset($_POST['gn05'])){
			$is_neirong=1;
		}else{
			$is_neirong=0;
		}
		//echo "class_title='$class_title',class_title2='$class_title2',sortnum=$sortnum,flag=$flag,keywords='$keywords',author='$author',content2='$content2',content='$content',webpage='$webpage',is_add=$is_add,is_jian=$is_jian,is_link=$is_link,is_pic=$is_pic,is_neirong=$is_neirong";
		//exit();
	$bigclass-> update("n_class","class_title='$class_title',class_title2='$class_title2',sortnum=$sortnum,flag=$flag,keywords='$keywords',author='$author',content2='$content2',content='$content',is_add=$is_add,is_jian=$is_jian,is_link=$is_link,is_pic=$is_pic,is_neirong=$is_neirong","where cid=$cid");

	$bigclass->jscript($webtxt,"修改成功");
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
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td>当前位置:大类管理  <a href="<?php echo $webtxt; ?>&add=1">[添加类别]</a></td>
  </tr>
  <tr>
    <td><hr></td>
  </tr>
</table>
<table width="90%" border="1" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td align="center" bgcolor="#3399FF">类别编号</td>
    <td align="center" bgcolor="#3399FF">类别名称</td>
    <td align="center" bgcolor="#3399FF">下级管理</td>
    <td align="center" bgcolor="#3399FF"> 操作</td>
  </tr>
  <?php
  if(isset($_GET['page'])){
  	$page=$_GET['page'];
  }else{
  	$page=1;
  }
   $query=$bigclass->selectpg("n_class","sortnum asc,cid desc ",30,$page," where b_id=0 ");
     if (empty($query)){

  ?>
  <tr>
    <td colspan="4" align="center">没有记录</td>

  </tr>
	  <?php
	   }else{
		while($row=mysql_fetch_array($query)){
	  ?>
		  <tr>
			<td align="center"><?php echo $row['cid'];?></td>
			<td><a href="?edit=<?php echo $row['cid'];?>"><?php echo $row['class_title2'];?></a>	</td>
			<td align="center">
					<?php
					if ($row['flag']==0){
					echo "<a href=article.php?cid=".$row['cid'].">文章管理</a>";
					}else{
					echo "<a href='class_bsmall.php?cid=".$row['cid']."'>下级管理</a>";
					}
					?>		</td>
			<td align="center"><a href="?del=<?php echo $row['cid'];?>">删除</a> | <a href="?edit=<?php echo $row['cid'];?>">修改</a> </td>
		  </tr>
	  <?php
		  }
	  }
	  ?>
</table>
<table width="500" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td align="center">
	<?PHP
	 $pagestr=$bigclass->pagenext();
	 echo $pagestr;
	?>	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<?php
if(isset($_GET['add'])){
$sqlstr="select max(sortnum) from n_class where b_id=0";
$query=@mysql_query($sqlstr);
$rs_max=@mysql_fetch_array($query);
if($rs_max[0]==0){
   $maxsort=1;
}else{
$maxsort=$rs_max[0]+1;
}
?>
<script language="javascript">
 function ckfrm(){
   if(document.form1.cid.value.length<1){
     alert('类别编号不能为空');
	 document.form1.cid.focus();
	 return false;
   }
   if(document.form1.class_title.value.length<1){
     alert('类别名称不能为空');
	 document.form1.class_title.focus();
	 return false;
   }
   if(document.form1.class_title2.value.length<1){
     alert('类名简写不能为空');
	 document.form1.class_title2.focus();
	 return false;
   }
   if(document.form1.webpage.value.length<1){
     alert('所在目录不能为空');
	 document.form1.webpage.focus();
	 return false;
   }
 }
</script>
<form id="form1" name="form1" method="post" action="" onSubmit="return ckfrm();">
  <table width="669" border="1" align="center" cellpadding="5" cellspacing="0">

    <tr>
      <td align="right">类别排序：</td>
      <td><input name="sortnum" type="text" id="sortnum" value="<?php echo $maxsort;?>" size="4" /></td>
    </tr>
    <tr>
      <td width="101" align="right">类别名称：</td>
      <td width="542"><input name="class_title" type="text" id="class_title" size="62" /></td>
    </tr>
   <tr>
      <td align="right">类名缩写：</td>
      <td><input name="class_title2" type="text" id="class_title2" size="62" /></td>
    </tr>    <tr>
      <td align="right">关键字：</td>
      <td><textarea name="keywords" cols="62" id="keywords"></textarea></td>
    </tr>
    <tr>
      <td align="right">作&nbsp;&nbsp; 者：</td>
      <td><input name="author" type="text" id="author" size="62" /><input type="hidden" name="flag" value="1" /></td>
    </tr>
    <tr>
      <td align="right">文件目录：</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="right">推广简介：</td>
      <td><textarea name="content2" cols="60" rows="5" id="content2"></textarea></td>
    </tr>
    <tr>
      <td align="right">类别介绍:</td>
      <td><textarea name="content" cols="60" rows="8" id="content"></textarea></td>
    </tr>
	<tr>
		  <td align="right">栏目功能：</td>
		  <td><input name="gn01" type="checkbox" id="gn01" value="1">
			禁止增删 
			<input name="gn02" type="checkbox" id="gn02" value="1">
			禁止内容简介 
			<input name="gn03" type="checkbox" id="gn03" value="1">
			禁止友情链接 
			<input name="gn04" type="checkbox" id="gn04" value="1">
			禁止图片
			<input name="gn05" type="checkbox" id="gn05" value="1">
			禁止详细内容	</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="提交" />
        &nbsp;&nbsp;&nbsp;
        <input type="reset" name="Submit2" value="重置" />
      </label></td>
    </tr>
  </table>
</form>
<?php
}
if(isset($_GET['edit'])){
  $edit=$_GET['edit'];
 $queryedit=$bigclass->selectedit("n_class"," where cid=$edit");
 $rsedit=mysql_fetch_array($queryedit);
?>
<script language="javascript">
 function ckfrm(){
   if(document.form1.cid.value.length<1){
     alert('类别编号不能为空');
	 document.form1.cid.focus();
	 return false;
   }
   if(document.form1.class_title.value.length<1){
     alert('类别编号不能为空');
	 document.form1.class_title.focus();
	 return false;
   }
   if(document.form1.class_title2.value.length<1){
     alert('类名简写不能为空');
	 document.form1.class_title2.focus();
	 return false;
   }
   if(document.form1.webpage.value.length<1){
     alert('链接页面不能为空');
	 document.form1.webpage.focus();
	 return false;
   }
   
   
 }
</script>
<form id="form1" name="form1" method="post" action="" onSubmit="return ckfrm();">
  <table width="642" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td align="right">类别编号:</td>
      <td><?php echo $rsedit['cid'];?></td>
    </tr>
    <tr>
      <td align="right">排&nbsp;&nbsp;&nbsp;&nbsp;序:</td>
      <td><input name="sortnum" type="text" id="sortnum" value="<?php echo $rsedit['sortnum'];?>" /></td>
    </tr>
    <tr>
      <td width="91" align="right">类别名称:</td>
      <td width="525"><input name="class_title" type="text" id="class_title" value="<?php echo $rsedit['class_title'];?>" size="62" />
        <input name="b_id" type="hidden" id="b_id" value="<?php echo $b_id;?>" />
        <input name="cid" type="hidden" id="cid" value="<?php echo $rsedit['cid'];?>" /></td>
    </tr>

    <tr>
      <td align="right">类名缩写：</td>
      <td><input name="class_title2" type="text" id="class_title2" value="<?php echo $rsedit['class_title2'];?>" size="62" /></td>
    </tr>
    <tr>
      <td align="right">关键字：</td>
      <td><textarea name="keywords" cols="62" id="keywords"><?php echo $rsedit['keywords'];?></textarea></td>
    </tr>
    <tr>
      <td align="right">作&nbsp;&nbsp; 者：</td>
      <td><input name="author" type="text" id="author" value="<?php echo $rsedit['author'];?>" size="62" /></td>
    </tr>
    <tr>
      <td align="right">是否有小类:</td>
      <td><input type="radio" name="flag" value="1" <?php if($rsedit['flag']==1){
		echo "checked=checked";} 
		?>/>
有
  <input name="flag" type="radio" value="0" <?php if($rsedit['flag']==0){
		echo "checked=checked";} 
		?> />
无 </td>
    </tr>
	<tr>
      <td align="right">链接页面:</td>
      <td><input name="webpage" type="text" id="webpage" value="<?php echo $rsedit['webpage'];?>" size="62"></td>
    </tr>    
    <tr>
      <td align="right">推广简介：</td>
      <td><textarea name="content2" cols="60" rows="5" id="textarea"><?php echo $rsedit['content2'];?></textarea></td>
    </tr>
	<tr>
      <td align="right">类别介绍:</td>
      <td><textarea name="content" cols="60" rows="8" id="content"><?php echo $rsedit['content'];?></textarea></td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td><input name="gn01" type="checkbox" id="gn01" value="1"<?php if($rsedit['is_add']==1){
	  echo "checked=\"checked\"";}
	  ?>
	  } >
        禁止增删 
        <input name="gn02" type="checkbox" id="gn02" value="1" <?php if($rsedit['is_jian']==1){
	  echo "checked=\"checked\"";}
	  ?>>
        禁止内容简介 
        <input name="gn03" type="checkbox" id="gn03" value="1" <?php if($rsedit['is_link']==1){
	  echo "checked=\"checked\"";}
	  ?>>
禁止友情链接 
<input name="gn04" type="checkbox" id="gn04" value="1" <?php if($rsedit['is_pic']==1){
	  echo "checked=\"checked\"";}
	  ?>>
禁止图片
<input name="gn05" type="checkbox" id="gn05" value="1" <?php if($rsedit['is_neirong']==1){
	  echo "checked=\"checked\"";}
	  ?>>
禁止详细内容</td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td><label>
        <input type="submit" name="aaa" value="提交" />
        &nbsp;&nbsp;&nbsp;
        <input type="reset" name="Submit2" value="重置" />
      </label></td>
    </tr>
  </table>
</form>
<?php
}
?>

</body>
</html>
