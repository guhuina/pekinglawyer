<?php require_once('adminqx.php'); ?>

<?php require_once('../include/mysqlclass.php'); ?>
<?php

$webtxt=$_SERVER['PHP_SELF']."?";
$bigclass=new mysql();
if(isset($_GET['cid'])){
	$b_id=$_GET['cid'];
}elseif(isset($_POST['cid'])){
	$b_id=$_POST['b_id'];
}else{
	$bigclass->jscript("index.php","������Ч");
}
	$bsqlstr="select n_class.webpage from n_class,n_class as b_class  where n_class.b_id=b_class.cid and  n_class.cid=".$b_id;
	$bquery=mysql_query($bsqlstr);
	$brs=mysql_fetch_array($bquery);
	$webtxt.="cid=$b_id";

if(isset($_POST['Submit'])){
   $maxidsql="select max(cid) from n_class";
   $maxquery=mysql_query($maxidsql);
   $maxrs=@mysql_fetch_array($maxquery);
   $maxcid=$maxrs[0]+1;
	$sortnum=$_POST['sortnum'];
    $class_title=$_POST['class_title'];
    $class_title2=$_POST['class_title2'];
	$keywords=$_POST['keywords'];
	$author=$_POST['author'];
	$flag=$_POST['flag'];
	$tuijian=$_POST['tuijian'];
	$content=$_POST['content'];
	$content2=$_POST['content2'];
	if(isset($_POST['gn01'])){
		$is_add=1;
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
	//echo "insert into n_class(cid,sortnum,class_title,class_title2,flag,keywords,author,content2,content,webpage,b_id,is_add,is_jian,is_link,is_pic,is_neirong)values($cid,$sortnum,'$class_title','$class_title2',$flag,'$keywords','$author','$content2','$content','$webpage',$b_id,$is_add,$is_jian,$is_link,$is_pic,$is_neirong)";
	//exit();
	$bigclass->insert("n_class","sortnum,class_title,class_title2,flag,tuijian,keywords,author,content2,content,webpage,b_id,is_add,is_jian,is_link,is_pic,is_neirong","$sortnum,'$class_title','$class_title2',$flag,$tuijian,'$keywords','$author','$content2','$content','$webpage',$b_id,$is_add,$is_jian,$is_link,$is_pic,$is_neirong");
	$bigclass-> update("n_class","where cid=$bcid");
	$bigclass->jscript($webtxt);

}

if(isset($_GET['del'])){
		$del=$_GET['del'];
		$classdel1=$bigclass->selectedit("n_class"," where b_id=$del");
		$classdel2=$bigclass->selectedit("n_article"," where cid=$del");
		$classnum1=mysql_num_rows($classdel1);
		$classnum2=mysql_num_rows($classdel2);
	if($classnum1!=0||$classnum2!=0){
		$bigclass->jscript($webtxt,"�����»���\����,��ɾ���¼����ݺ�����");
	}else{
		$bigclass->delete("n_class"," where cid=$del");
		$bigclass->jscript($webtxt,"ɾ���ɹ�");
	}
}

if(isset($_POST['cid'])){
	$cid=$_POST['cid'];
	$sortnum=$_POST['sortnum'];
	$keywords=$_POST['keywords'];
	$author=$_POST['author'];
	$b_id=$_POST['b_id'];
	$class_title=$_POST['class_title'];
	$class_title2=$_POST['class_title2'];
	$tuijian=$_POST['tuijian'];
	$content=$_POST['content'];
	$content2=$_POST['content2'];
		if(isset($_POST['gn01'])){
			$is_add=1;
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
	$bigclass-> update("n_class","b_id=$b_id,sortnum=$sortnum,class_title='$class_title',class_title2='$class_title2',tuijian=$tuijian,keywords='$keywords',author='$author',content2='$content2',content='$content',is_add=$is_add,is_jian=$is_jian,is_link=$is_link,is_pic=$is_pic,is_neirong=$is_neirong","where cid=$cid");
	$bigclass->jscript($webtxt,"�޸ĳɹ�");
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
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td>��ǰλ��:С����� <a href="<?php echo $webtxt; ?>&add=1">[�����Ϣ]</a></td>
  </tr>
  <tr>
    <td><hr></td>
  </tr>
</table>
<table width="100%" border="1" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td align="center" bgcolor="#3399FF"><span class="STYLE1">����</span></td>
    <td align="center" bgcolor="#3399FF"><span class="STYLE1">�����</span></td>
    <td align="center" bgcolor="#3399FF"><span class="STYLE1">�������</span></td>
    <td align="center" bgcolor="#3399FF"><span class="STYLE1">�¼�����</span></td>
    <td align="center" bgcolor="#3399FF" class="STYLE1">�������ͼ</td>
    <td align="center" bgcolor="#3399FF"><span class="STYLE1">����</span></td>
  </tr>
  <?php
  if(isset($_GET['page'])){
  	$page=$_GET['page'];
  }else{
  	$page=1;
  }
   $query=$bigclass->selectpg("n_class"," tuijian desc,sortnum desc,cid desc ",10,$page,"where b_id=$b_id");
     $rscount=mysql_num_rows($query);
     if ($rscount==0){

  ?>
  <tr>
    <td colspan="6" align="center">û�м�¼</td>
  </tr>
	  <?php
	   }else{
		while($row=mysql_fetch_array($query)){
	  ?>
		  <tr>
			<td align="center"><?php echo $row['sortnum'];?></td>
			<td align="center"><?php echo $row['cid'];?></td>
			<td align="center"><?php echo $row['class_title2'];?></td>
			<td align="center">
					<?php
					echo "<a href=article.php?cid=".$row['cid'].">���¹���</a>";
					?>			</td>
			<td align="center">
			 <a href="class_pic.php?id=<?php echo $row['cid'];?>" onclick=window.open('','new','width=500,scrollbars=yes') target=new>
					<?php 
					if($row['a_pic']==''){
					?>
						û��ͼƬ
			        <?php
						}else{
					?>
						<img  src="<?php echo $row['a_pic'];?>" width="46"border="0" />
					<?php
						}
					?>
				  </a>
			</td>
			<td align="center"><a href="<?php echo $webtxt."&del=".$row['cid'];?>">ɾ��</a> | <a href="<?php echo $webtxt."&edit=".$row['cid'];?>">�޸�</a> </td>
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
	 $pagestr=$bigclass->pagenext($webtxt);
	 echo $pagestr;
	?>	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<?php
if(isset($_GET['add'])){
$sqlstr="select max(cid) from n_class where b_id=$b_id or cid=$b_id";
$query=@mysql_query($sqlstr);
$rs_max=@mysql_fetch_array($query);
$maxsort=$rs_max[0]+1;
$sqlstr="select * from n_class where cid=$b_id";
$query=@mysql_query($sqlstr);
$rspage=mysql_fetch_array($query);
$webpage=$rspage['webpage'];
?>
<script language="javascript">
 function ckfrm(){
   if(document.form1.cid.value.length<1){
     alert('����Ų���Ϊ��');
	 document.form1.cid.focus();
	 return false;
   }
   if(document.form1.class_title.value.length<1){
     alert('����Ų���Ϊ��');
	 document.form1.class_title.focus();
	 return false;
   }
   if(document.form1.class_title2.value.length<1){
     alert('������д����Ϊ��');
	 document.form1.class_title2.focus();
	 return false;
   }
   if(document.form1.webpage.value=='<?php echo $bwebpage;?>'){
     alert('����ҳ�治��Ϊ��');
	 document.form1.webpage.focus();
	 return false;
   }
 }
</script>

<form id="form1" name="form1" method="post" action="" onSubmit="return ckfrm();">
  <table width="605" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td align="right">��ţ�</td>
      <td><input name="sortnum" type="text" id="sortnum" value="<?php echo $maxsort;?>" size="4" />      </td>
    </tr>
    <tr>
      <td align="right">�ƹ����ƣ�</td>
      <td width="390"><input name="class_title" type="text" id="class_title" size="62" />
           
        <input name="b_id" type="hidden" id="b_id" value="<?php echo $b_id;?>" /></td>
    </tr>

    <tr>
      <td align="right">�Ƽ���ʽ��</td>
      <td><input type="radio" name="tuijian" value="0" />
        ���Ƽ� 
          <input name="tuijian" type="radio" value="1" checked="checked" />
�Ƽ� 
<input type="radio" name="tuijian" value="2" />
���Ƽ�
        <input name="flag" type="hidden" value="0" checked="checked" /></td>
    </tr>
    <tr>
      <td align="right">ҳ����ʾ���ƣ�</td>
      <td><input name="class_title2" type="text" id="class_title2" size="62" /></td>
    </tr>
    <tr>
      <td align="right">�ؼ��֣�</td>
      <td><textarea name="keywords" cols="62" id="keywords"></textarea></td>
    </tr>
    <tr>
      <td align="right">��&nbsp;&nbsp; �ߣ�</td>
      <td><input name="author" type="text" id="author" size="62" /></td>
    </tr>
    <tr>
      <td align="right">�ƹ��飺</td>
      <td><textarea name="content2" cols="60" rows="5" id="content2"></textarea>
      <input name="content3" type="hidden" id="content3" value="" size="60" /></td>
    </tr>
    <tr>
      <td align="right">�����ã�</td>
      <td><input name="gn01" type="checkbox" id="gn01" value="1">
        ��ֹ��ɾ 
        <input name="gn02" type="checkbox" id="gn02" value="1">
        ��ֹ���ݼ�� 
        <input name="gn03" type="checkbox" id="gn03" value="1" checked="checked">
��ֹ�������� 
<input name="gn04" type="checkbox" id="gn04" value="1">
��ֹͼƬ
<input name="gn05" type="checkbox" id="gn05" value="1">
��ֹ��ϸ����</td>
    </tr>
    <tr>
      <td align="right">&nbsp;</td>
      <td><label>
        <input type="submit" name="Submit" value="�ύ" />
        &nbsp;&nbsp;&nbsp;
        <input type="reset" name="Submit2" value="����" />
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
     alert('����Ų���Ϊ��');
	 document.form1.cid.focus();
	 return false;
   }
   if(document.form1.class_title.value.length<1){
     alert('����Ų���Ϊ��');
	 document.form1.class_title.focus();
	 return false;
   }
   if(document.form1.class_title2.value.length<1){
     alert('������д����Ϊ��');
	 document.form1.class_title2.focus();
	 return false;
   }
   if(document.form1.webpage.value.length<1){
     alert('����ҳ�治��Ϊ��');
	 document.form1.webpage.focus();
	 return false;
   }
 }
</script>

<form id="form1" name="form1" method="post" action="" onSubmit="return ckfrm();">
  <table width="677" border="1" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td width="149" align="right">�������</td>
      <td><input name="sortnum" type="text" id="sortnum" value="<?php echo $rsedit['sortnum'];?>" size="4" /></td>
    </tr>
    <tr>
      <td align="right">������ƣ�</td>
      <td width="502"><input name="class_title" type="text" id="class_title" value="<?php echo $rsedit['class_title'];?>" size="62" />
        <input name="b_id" type="hidden" id="b_id" value="<?php echo $b_id;?>" />
        <input name="cid" type="hidden" id="cid" value="<?php echo $rsedit['cid'];?>" /></td>
    </tr>

    <tr>
      <td align="right">�Ƽ���ʽ��</td>
      <td><input type="radio" name="tuijian" value="0" <?php if($rsedit['tuijian']==0){
		echo "checked=checked";} 
		?>/>
���Ƽ�
  <input name="tuijian" type="radio" value="1" <?php if($rsedit['tuijian']==1){
		echo "checked=checked";} 
		?> />
�Ƽ� <input name="tuijian" type="radio" value="2" <?php if($rsedit['tuijian']==2){
		echo "checked=checked";} 
		?> />
�ص��Ƽ� </td>
    </tr>
    <tr>
      <td align="right">������д��</td>
      <td><input name="class_title2" type="text" id="class_title2" value="<?php echo $rsedit['class_title2'];?>" size="62" /></td>
    </tr>
    <tr>
      <td align="right">�� �� �֣�</td>
      <td><textarea name="keywords" cols="62" id="keywords"><?php echo $rsedit['keywords'];?></textarea></td>
    </tr>
    <tr>
      <td align="right">��&nbsp;&nbsp;&nbsp; �ߣ�</td>
      <td><input name="author" type="text" id="author" value="<?php echo $rsedit['author'];?>" size="62" /></td>
    </tr>
    <tr>
      <td align="right">�ƹ��飺</td>
      <td><textarea name="content2" cols="60" rows="5" id="textarea"><?php echo $rsedit['content2'];?></textarea>
      <input name="content" type="hidden" id="content" value="<?php echo $rsedit['content'];?>" size="60" /></td>
    </tr>
    <tr>
      <td align="right">�¼����ã�</td>
      <td><input name="gn01" type="checkbox" id="gn01" value="1"<?php if($rsedit['is_add']==1){
	  echo "checked=\"checked\"";}
	  ?>
	  } >
        ��ֹ��ɾ 
        <input name="gn02" type="checkbox" id="gn02" value="1" <?php if($rsedit['is_jian']==1){
	  echo "checked=\"checked\"";}
	  ?>>
        ��ֹ���ݼ�� 
        <input name="gn03" type="checkbox" id="gn03" value="1" <?php if($rsedit['is_link']==1){
	  echo "checked=\"checked\"";}
	  ?>>
��ֹ�������� 
<input name="gn04" type="checkbox" id="gn04" value="1" <?php if($rsedit['is_pic']==1){
	  echo "checked=\"checked\"";}
	  ?>>
��ֹͼƬ
<input name="gn05" type="checkbox" id="gn05" value="1" <?php if($rsedit['is_neirong']==1){
	  echo "checked=\"checked\"";}
	  ?>>
��ֹ��ϸ����</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="aaa" value="�ύ" />
        &nbsp;&nbsp;&nbsp;
        <input type="reset" name="Submit2" value="����" />
      </label></td>
    </tr>
  </table>
</form>
<?php
}
?>
</body>
</html>
