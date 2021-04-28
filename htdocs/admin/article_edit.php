<?php require_once('adminqx.php'); ?>
<?php require_once('../include/mysqlclass.php'); ?>
<?php require_once('fckeditor.php'); ?>

<?php
$article_edit=new mysql();
if(isset($_GET['id'])){
	$a_id=$_GET['id'];
	//$classid=$_GET['classid'];
	$query=$article_edit->selectedit("n_article","where a_id=$a_id");
	$row=mysql_fetch_array($query);
	$classid=$row['cid'];
	$classqx=$article_edit->selectedit("n_class","where cid=".$classid);
	$rs_class=mysql_fetch_array($classqx);

}else{
$article_edit->jscript("index.php","参数不对");
}
if(isset($_POST['Submit'])){
	$a_id=$_POST['a_id'];
	$cid=$_POST['cid'];
	$a_title=$_POST['a_title'];
	$a_title2=$_POST['a_title2'];
	$flag=$_POST['flag'];
	$remen=$_POST['remen'];
	$sy=$_POST['sy'];
	$a_state=$_POST['a_state'];
	$sortnum=$_POST['sortnum'];
	$sqlstr="a_title='$a_title',a_title2='$a_title2',cid=$cid,flag=$flag,remen=$remen,sy=$sy,a_state=$a_state,uptime=now(),sortnum=$sortnum";
	if(isset($_POST['a_url'])){
		$a_url=$_POST['a_url'];
		$sqlstr.=",a_url='$a_url'";
	}
	if(isset($_POST['a_pic'])){
		$a_pic=$_POST['a_pic'];
		$sqlstr.=",a_pic='$a_pic'";
	}
	if(isset($_POST['keywords'])){
		$keywords=$_POST['keywords'];
		$sqlstr.=",keywords='$keywords'";
	}
	if(isset($_POST['a_content2'])){
		$a_content2=$_POST['a_content2'];
		$sqlstr.=",a_content2='$a_content2'";
	}
	if(isset($_POST['a_content'])){
	$a_content=$_POST['a_content'];
	$a_content=str_replace("'","\'",$a_content);
	$sqlstr.=",a_content='$a_content'";
	}
	//echo $sqlstr;
	//exit();
	$article_edit->update("n_article",$sqlstr,"where a_id=$a_id");
	echo"<script language='javascript'>";
echo"location='article.php?cid=$cid';";
	echo"</script>";
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
<script language="javascript">
	function ckfrm(){
	  if(document.form1.a_title.value.length<2){
	  alert("标题不能为空");
	  document.form1.a_title.focus();
	  return false;
	  }
	  if(document.form1.a_title2.value.length<2){
	  alert("标题简写不能为空");
	  document.form1.a_title2.focus();
	  return false;
	  }
	}
</script>
<form id="form1" name="form1" method="post" action="" onSubmit="return ckfrm();">
  <table width="100%" border="1" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td width="124" align="right" bgcolor="#ACDEFF">所属类别:</td>
      <td width="702"><label>

  <input name="cid" type="hidden" id="cid" value="<?php echo $classid;?>" /><?php echo $rs_class['class_title'];?>


      <input name="a_id" type="hidden" id="a_id" value="<?php echo $a_id;?>" />
      </label></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">排&nbsp;&nbsp;&nbsp;&nbsp;序:</td>
      <td><input name="sortnum" type="text" id="sortnum" value="<?php echo $row['sortnum'];?>" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">页面显示标题:</td>
      <td><input name="a_title2" type="text" id="a_title2" value="<?php echo $row['a_title2'];?>" size="47" /></td>
    </tr>
	<tr>
      <td align="right" bgcolor="#ACDEFF">是否推荐:</td>
      <td><input type="radio" name="flag" value="0" <?php if($row['flag']==0){
		echo "checked=checked";} 
		?> /> 
		  不推荐	  
		    <input type="radio" name="flag" value="1" <?php if($row['flag']==1){
		echo "checked=checked";} 
		?>/>
推荐

<input type="radio" name="flag" value="2" <?php if($row['flag']==2){
		echo "checked=checked";} 
		?>/> 
重点推荐</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">热门推荐:</td>
      <td><input name="remen" type="radio" value="0"  <?php if($row['remen']==0){
		echo "checked=checked";} 
		?>  />
        不推荐
        <input name="remen" type="radio" value="1"  <?php if($row['remen']==1){
		echo "checked=checked";} 
		?> />
        推荐</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">推荐到首页:</td>
      <td><input name="sy" type="radio" value="0"  <?php if($row['sy']==0){
		echo "checked=checked";} 
		?> />
        不推荐
        <input name="sy" type="radio" value="1"  <?php if($row['sy']==1){
		echo "checked=checked";} 
		?> />
        推荐</td>
    </tr>
    
    <tr>
      <td align="right" bgcolor="#ACDEFF">是否显示:</td>
      <td><input type="radio" name="a_state" value="1" <?php if($row['a_state']==1){
		echo "checked=checked";} 
		?> />
        显示
          <input type="radio" name="a_state" value="0"  <?php if($row['a_state']==0){
		echo "checked=checked";} 
		?>/>        
        不显示</td>
    </tr>
	<?php 
	if($rs_class['is_link']==0){
	?>
    <tr>
      <td align="right" bgcolor="#ACDEFF">链接网址:</td>
      <td><input name="a_url" type="text" id="a_url" value="<?php echo $row['a_url'];?>" size="70" /></td>
    </tr>
 	<?php 
	}
	?>
	<?php 
	if($rs_class['is_jian']==0){
	?>
    <tr>
      <td align="right" bgcolor="#ACDEFF">推广关键词：</td>
      <td><input name="keywords" type="text" id="keywords" value="<?php echo $row['keywords'];?>" size="70" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">简单介绍:</td>
      <td><textarea name="a_content2" cols="100" rows="3" id="a_content2"><?php echo $row['a_content2'];?></textarea>
      <input type="submit" name="Submit2" value="提交" /></td>
    </tr>
  	<?php 
	}
	?>
	<?php 
	if($rs_class['is_neirong']==0){
	?>
   <tr>
      <td align="right" bgcolor="#ACDEFF">详细内容:</td>
      <td> 
		<?php
		// Automatically calculates the editor base path based on the _samples directory.
		// This is usefull only for these samples. A real application should use something like this:
		// $oFCKeditor->BasePath = '/fckeditor/' ;	// '/fckeditor/' is the default value.
		$sBasePath = $_SERVER['PHP_SELF'] ;
		$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;
		
		$oFCKeditor = new FCKeditor('a_content') ;
		$oFCKeditor->BasePath = $sBasePath ;
		
		if ( isset($_GET['Toolbar']) )
			$oFCKeditor->ToolbarSet = preg_replace("/[^a-z]/i", "", $_GET['Toolbar']);
		
		$oFCKeditor->Value = $row['a_content'] ;
		$oFCKeditor->Create() ;
		?>	  </td>
    </tr>
  	<?php 
	}
	?>
<?php
if($rs_class['is_pic']==0){
?>
    <tr>
      <td align="right" bgcolor="#ACDEFF">文章图片:</td>
      <td><input name="a_pic" type="text" id="a_pic" value="<?php echo $row['a_pic'];?>" size="42" />
        <input type="button" onclick="window.open('../include/upfile.php?id=a_pic','mywin','toolbar=no,location=no,scrollbars=yes,width=550,height=200,left=120,top=70')" name="Submit2" value="上传图片" />
        <input type="button" onclick="window.open('../include/selectpic.php?id=a_pic','mywin','toolbar=no,location=no,scrollbars=yes,width=750,height=600,left=120,top=70')" name="Submit22" value="浏览图片" /></td>
    </tr>
<?php
}
?>
    <tr>
      <td align="right" bgcolor="#ACDEFF">&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="提交" />
      </label></td>
    </tr>
  </table>
</form>
<script language="javascript">
  function abc(){
  aaa.innerHTML="<img src="+document.form1.a_pic.value+" width=100>";
  }
</script>
</body>
</html>
<?php
$article_edit->close();
?>