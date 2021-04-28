<?php require_once('adminqx.php'); ?>
<?php require_once('../include/mysqlclass.php'); ?>
<?php require_once('fckeditor.php'); ?>

<?php

if(isset($_GET['cid'])){
$articleadd=new mysql();
$classid=$_GET['cid'];
 $sqlstr="select max(sortnum) from n_article where cid=$classid";
 $query_num=mysql_query($sqlstr);
 $rsnum=mysql_fetch_array($query_num);
	if($rsnum[0]==0){
	   $sortnum=1;
	}else{
	$sortnum=$rsnum[0]+1;
	}

$query=$articleadd->selectedit("n_class"," where cid=$classid");
$rs_class=mysql_fetch_array($query);
$class_title2=$rs_class['class_title2'];
$b_id=$rs_class['b_id'];
$bwebpage=$rs_class['webpage'];
//echo $webhtml;
}else{
echo"<script language=\"javascript\">";
echo "alert(\"非法操作\");";
echo "location='index.php';";
echo "</script>";
}

if(isset($_POST['Submit'])){
$cid=$_POST['cid'];
$a_state=$_POST['a_state'];
$sortnum=$_POST['sortnum'];
$flag=$_POST['flag'];
$remen=$_POST['remen'];
$sy=$_POST['sy'];
$a_title=$_POST['a_title'];
$a_title=str_replace("\"","“",$a_title);
$a_title2=$_POST['a_title2'];
$a_title2=str_replace("\"","“",$a_title2);
$b_id=$_POST['b_id'];
$cols="cid,a_title,a_title2,`a_state`,`flag`,`remen`,`sy`,`createtime`,sortnum";
$values="$cid,'$a_title','$a_title2',$a_state,$flag,$remen,$sy,now(),$sortnum";
if(isset($_POST['a_content'])){
	$a_content=$_POST['a_content'];
    $a_content=str_replace("'","\'",$a_content);
	//echo $a_content;
	//exit();
	$cols.=",a_content";
	$values.=",'$a_content'";
}
if(isset($_POST['keywords'])){
	$keywords=$_POST['keywords'];
	$cols.=",keywords";
	$values.=",'$keywords'";
}
if(isset($_POST['a_content2'])){
	$a_content2=$_POST['a_content2'];
	$cols.=",a_content2";
	$values.=",'$a_content2'";
}
if(isset($_POST['a_url'])){
	$a_url=$_POST['a_url'];
	$cols.=",a_url";
	$values.=",'$a_url'";
}
if(isset($_POST['a_pic'])){
	$a_pic=$_POST['a_pic'];
	$cols.=",a_pic";
	$values.=",'$a_pic'";
}
//echo $cols."<br>".$values;
//exit();
$bb="insert into n_article ($cols)values($values)";
$cc=mysql_query($bb);
//$articleadd->insert("n_article",$cols,$values);

	$a_id=mysql_insert_id();

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
.STYLE1 {color: #FF0000}
-->
</style>
</head>

<body>
<script language="javascript">
	function ckfrm(){
	  if(document.form1.a_title2.value.length<2){
	  alert("标题简写不能为空");
	  document.form1.a_title2.focus();
	  return false;
	  }
	}
</script>
<form id="form1" name="form1" method="post" action="" onsubmit="return ckfrm();">
  <table width="100%" border="1" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td width="95" align="right" bgcolor="#ACDEFF">所属类别:</td>
      <td width="865"><label>
      <input name="cid" type="hidden" id="cid" value="<?php echo $_GET['cid']; ?>" />
      <?php
	   echo $class_title2;
	  ?>
      <input name="webhtml" type="hidden" id="webhtml" value="<?php echo $webhtml;?>" />
      <input name="b_id" type="hidden" id="b_id" value="<?php echo $b_id; ?>" />
      </label></td>
    </tr>
    <tr>
      <td height="30" align="right" bgcolor="#ACDEFF">编&nbsp;&nbsp;&nbsp; 号:</td>
      <td><input name="sortnum" type="text" id="sortnum" value="<?php echo $sortnum;?>" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">页面显示标题:</td>
      <td><input name="a_title2" type="text" id="a_title2" size="60" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">是否显示:</td>
      <td><input name="a_state" type="radio" value="1" <?php
if($rs_class['is_neirong']==0){
?> checked="checked" <?php } ?>/>
      显示
        <input type="radio" name="a_state" value="0"  <?php
if($rs_class['is_neirong']==1){
?> checked="checked" <?php } ?>/>
        不显示</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">是否推荐:</td>
      <td><input name="flag" type="radio" value="0" checked="checked" /> 
  不推荐
    <input name="flag" type="radio" value="1" checked="checked" />
推荐


  <input name="flag" type="radio" value="2" /> 
  重点推荐</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">热门推荐:</td>
      <td><input name="remen" type="radio" value="0" checked="checked" />
不推荐
  <input name="remen" type="radio" value="1" />
推荐</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#ACDEFF">推荐到首页:</td>
      <td><input name="sy" type="radio" value="0" checked="checked" />
不推荐
  <input name="sy" type="radio" value="1" />
推荐</td>
    </tr>
<?php
if($rs_class['is_link']==0){
?>
	
    <tr>
      <td align="right" bgcolor="#ACDEFF">链接网址:</td>
      <td><input name="a_url" type="text" id="a_url" size="80" /></td>
    </tr>
<?php
}
?>
 <?php
if($rs_class['is_pic']==0){
?>   
	<tr>
      <td align="right" bgcolor="#ACDEFF">图&nbsp;&nbsp;&nbsp;&nbsp;片:</td>
      <td><input name="a_pic" type="text" id="a_pic" size="42" />
        <label>
        <input type="button" onclick="window.open('upfile.php?id=a_pic','mywin','toolbar=no,location=no,scrollbars=yes,width=550,height=200,left=120,top=70')" name="Submit2" value="上传图片" />
        <input type="button" onclick="window.open('selectpic.php?id=a_pic','mywin','toolbar=no,location=no,scrollbars=yes,width=750,height=600,left=120,top=70')" name="Submit22" value="浏览图片" />
        </label></td>
    </tr>
<?php
}
?>
	<?php 
	if($rs_class['is_jian']==0){
	?>
    <tr>
      <td align="right" bgcolor="#ACDEFF">推广关键词:</td>
      <td><input name="keywords" type="text" id="keywords" size="47" />
        (多个关键词请用<span class="STYLE1">空格</span>隔开 网络工程师 北京网络工程培训)</td>
    </tr>
		

    <tr>
      <td align="right" bgcolor="#ACDEFF">简单介绍:</td>
      <td><textarea name="a_content2" cols="100" rows="3" id="a_content2"></textarea></td>
    </tr>
	<?php
	}
	?>
	<?php 
	if($rs_class['is_neirong']==0){
	?>
    <tr>
      <td align="right" bgcolor="#ACDEFF">详细内容:</td>
      <td><?php
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
		?></td>
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
</body>
</html>
<?php
$articleadd->close();
?>