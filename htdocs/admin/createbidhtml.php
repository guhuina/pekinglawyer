<?php require_once('../include/wzclass.php'); ?>
<?php
$url=$website."index.php";
//echo $url;
//exit();
$fp=fopen($url,"r");//��ֻ����ʽ����Զ��ҳ��
$str=file_get_contents($url);//��ȡҳ�����ݲ��Ҹ�ֵ������$str;
fclose($fp);

//echo $str;
//exit();
$abc=fopen("../index.html","w");//�ÿ�д��ķ�ʽ��һ���ļ�(����ļ�����,���һ�����ļ�)
fwrite($abc,$str);//�ѸղŶ�ȡ��������д���ļ�
fclose($abc);
	 echo "<script languaet=javascript>";
	 echo "alert('���ɳɹ�');";
	 echo "</script>";

$bbid=$_GET['bbid'];
$bb=$wz->bbclass($bbid);

$filepath=$bb['webpage'];


if($bbid==1){
  $dhpath=$website;
}else{
	  $dhpath=$website.$bb['webpage'];
}

$url=$website."moban/".$bb['webpage']."_display.php?bbid=".$bbid;
$fp=fopen($url,"r");
$straa=file_get_contents($url);
fclose($fp);
//echo $str;
$query=$wz->display("where `bclass`.`b_id`=".$bbid);
while($rs=mysql_fetch_array($query)){
 $dhstr="<a href='$dhpath'>ר����ҳ</a>  >>  <a href='".$website.$rs['b_webpage']."'>".$rs['b_title']."</a> >> <a href='".$website.$rs['c_webpage']."'>".$rs['c_title']."</a> >> ��������";
 

$str=str_replace("{%title%}",$rs['a_title'],$straa);
$str=str_replace("{%dhstr%}",$dhstr,$str);
$str=str_replace("{%keyword%}",$rs['keywords'],$str);
$str=str_replace("{%content2%}",$rs['a_content2'],$str);

	$a_content=$rs['a_content'];
	require_once('../include/replace.php');
	$str=str_replace("{%content%}",$a_content,$str);
	
$str=str_replace("{%title2%}",$rs['a_title2'],$str);
$str=str_replace("{%a_id%}",$rs['a_id'],$str);
  $createtime=substr($rs['createtime'],0,4)."��".substr($rs['createtime'],5,2)."��".substr($rs['createtime'],8,2)."��";
$str=str_replace("{%date%}",$createtime,$str);
$cttime=substr($rs['createtime'],0,4).substr($rs['createtime'],5,2);
  $path="../".$filepath."/".$cttime."/";
 //echo $path;
 //exit();
		if(!file_exists($path)){
		mkdir($path);
		}
   $f=$path.substr($rs['createtime'],8,2).$rs['a_id'].".html";
		if(file_exists($f)){
			   unlink($f);  //ɾ���ļ�
		}
	$createpage=fopen($f,"w");
	fwrite($createpage,$str);
	fclose($createpage);
	echo "<script language='javascript'>";
	echo "document.write('<a href=".$f." target=_blank>".$rs['a_title2']."</a>����������<br>');";
	echo "</script>";

}
$query=$wz->display("where `n_class`.`b_id`=".$bbid);
while($rs=mysql_fetch_array($query)){
 $dhstr="<a href='$dhpath'>ר����ҳ</a>  >>  <a href='".$website.$rs['c_webpage']."'>".$rs['c_title']."</a> >> ����";
$str=str_replace("{%title%}",$rs['a_title'],$straa);
 $str=str_replace("{%dhstr%}",$dhstr,$str);

$str=str_replace("{%keyword%}",$rs['keyword'],$str);
$str=str_replace("{%content2%}",$rs['a_content2'],$str);
$str=str_replace("{%content%}",$rs['a_content'],$str);
$str=str_replace("{%title2%}",$rs['a_title2'],$str);
$str=str_replace("{%a_id%}",$rs['a_id'],$str);
  $createtime=substr($rs['createtime'],0,4)."��".substr($rs['createtime'],5,2)."��".substr($rs['createtime'],8,2)."��";
$str=str_replace("{%date%}",$createtime,$str);
$cttime=substr($rs['createtime'],0,4).substr($rs['createtime'],5,2);
  $path="../".$filepath."/".$cttime."/";
  //echo $path;
 //exit();
		if(!file_exists($path)){
		mkdir($path);
		}
   $f=$path.substr($rs['createtime'],8,2).$rs['a_id'].".html";
		if(file_exists($f)){
			   unlink($f);  //ɾ���ļ�
		}
	$createpage=fopen($f,"w");
	fwrite($createpage,$str);
	fclose($createpage);
	echo "<script language='javascript'>";
	echo "document.write('<a href=".$f." target=_blank>".$rs['a_title2']."</a>����������<br>');";
	echo "</script>";

}


?>