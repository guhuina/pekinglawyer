<?php require_once('../include/wzclass.php'); ?>
<?php require_once('../inc/config.php'); ?>
<?php
if(isset($_GET['bbid'])){
$bbid=$_GET['bbid'];
}else{
$bbid=1;
}
$bb=$wz->bbclass($bbid);
$filepath=$bb['webpage'];
if($bbid==1){
  $dhpath=$website;
}else{
	  $dhpath=$website.$bb['webpage'];
}
$sqlstr="select webpage,cid from n_class where b_id=1";
$querybb=mysql_query($sqlstr);
while($rsbb=mysql_fetch_array($querybb)){
	if(file_exists("../moban/".$rsbb['webpage']."_display.php")){
		$url=$website."moban/".$rsbb['webpage']."_display.php?bbid=".$rsbb['cid'];
	}else{
		$url=$website."moban/index_display.php";
	}
	$fp=fopen($url,"r");
	$straa=file_get_contents($url);
	fclose($fp);

	$queryaa=$wz->display("where n_article.a_state=1 and  `n_article`.`cid`=".$rsbb['cid']);//��ѯһ��Ŀ¼�µ�����
	while($rs=mysql_fetch_array($queryaa)){
	  //���������ҳ��Ĵ���
		$dhstr="<a href='$dhpath'>��ҳ</a>  >> <a href='".$website.$rs['c_webpage']."'>".$rs['c_title']."</a>  >> ".$rs['a_title2'];
//		echo $dhstr;
//		exit();
		 	 $aa=strlen($rs['big_pic']);
					if($aa>3){
						$straa=str_replace("{%big_pic%}","<div align=center><img src=\"".$rs['big_pic']."\" class=img_n5 /></div>",$straa);
					}else{
						$straa=str_replace("{%big_pic%}"," ",$straa);
					}
					$str=str_replace("{%title%}",$rs['a_title'],$straa);
					$str=str_replace("{%dhstr%}",$dhstr,$str);
					$str=str_replace("{%keyword%}",$rs['keywords'],$str);
					$str=str_replace("{%content2%}",$rs['a_content2'],$str);
					$a_content=$rs['a_content'];
					include('../include/replace2.php');
					$str=str_replace("{%content%}",$a_content,$str);
					$str=str_replace("{%title2%}",$rs['a_title2'],$str);
					$str=str_replace("{%a_id%}",$rs['a_id'],$str);
					  $createtime=substr($rs['createtime'],0,4)."��".substr($rs['createtime'],5,2)."��".substr($rs['createtime'],8,2)."��";
					$str=str_replace("{%date%}",$createtime,$str);
					$cttime=substr($rs['createtime'],0,4).substr($rs['createtime'],5,2);
					  $path="../".$filepath."/html/";
					 //echo $path;
					 //exit();
							if(!file_exists($path)){
							mkdir($path);
							}
					   $f=$path.$rs['a_id'].".html";
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
		$query=$wz->display("where n_article.a_state=1 and  `n_class`.`b_id`=".$rsbb['cid']);//��ѯ����Ŀ¼�µ�����
		while($rs=mysql_fetch_array($query)){
				$dhstr="<a href='$dhpath'>��ҳ</a>  &gt; &gt; <a href='".$website.$rs['b_webpage']."'>".$rs['b_title']."</a>  &gt; &gt; <a href='".$website.$rs['c_webpage']."'>".$rs['c_title']."</a>  &gt;&gt; ".$rs['a_title2'];
				 $aa=strlen($rs['big_pic']);
						if($aa>3){
							$straa=str_replace("{%big_pic%}","<div align=center><img src=\"".$rs['big_pic']."\" class=img_n5 /></div>",$straa);
						}else{
							$straa=str_replace("{%big_pic%}"," ",$straa);
						}
						$str=str_replace("{%title%}",$rs['a_title'],$straa);
						$str=str_replace("{%dhstr%}",$dhstr,$str);
						$str=str_replace("{%keyword%}",$rs['keywords'],$str);
						$str=str_replace("{%content2%}",$rs['a_content2'],$str);
						$a_content=$rs['a_content'];
						include('../include/replace2.php');
						$str=str_replace("{%content%}",$a_content,$str);
						$str=str_replace("{%title2%}",$rs['a_title2'],$str);
						$str=str_replace("{%a_id%}",$rs['a_id'],$str);
						  $createtime=substr($rs['createtime'],0,4)."��".substr($rs['createtime'],5,2)."��".substr($rs['createtime'],8,2)."��";
						$str=str_replace("{%date%}",$createtime,$str);
						$cttime=substr($rs['createtime'],0,4).substr($rs['createtime'],5,2);
						  $path="../".$filepath."/html/";
						 //echo $path;
						 //exit();
								if(!file_exists($path)){
								mkdir($path);
								}
						   $f=$path.$rs['a_id'].".html";
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
    $query=$wz->display("where n_article.a_state=1 and  `bclass`.`b_id`=".$rsbb['cid']);//��ѯ����Ŀ¼�µ�����
	while($rs=mysql_fetch_array($query)){
			$dhstr="<a href='$dhpath'>��ҳ</a>  &gt; &gt; <a href='".$website.$rs['bb_webpage']."'>".$rs['bb_title']."</a>  &gt; &gt;<a href='".$website.$rs['b_webpage']."'>".$rs['b_title']."</a>  &gt; &gt; <a href='".$website.$rs['c_webpage']."'>".$rs['c_title']."</a>  &gt;&gt; ".$rs['a_title2'];
//  				echo $dhstr;
//				exit();
				 $aa=strlen($rs['big_pic']);
						if($aa>3){
							$straa=str_replace("{%big_pic%}","<div align=center><img src=\"".$rs['big_pic']."\" class=img_n5 /></div>",$straa);
						}else{
							$straa=str_replace("{%big_pic%}"," ",$straa);
						}
						$str=str_replace("{%title%}",$rs['a_title'],$straa);
						$str=str_replace("{%dhstr%}",$dhstr,$str);
						$str=str_replace("{%keyword%}",$rs['keywords'],$str);
						$str=str_replace("{%content2%}",$rs['a_content2'],$str);
						$a_content=$rs['a_content'];
						include('../include/replace2.php');
						$str=str_replace("{%content%}",$a_content,$str);
						$str=str_replace("{%title2%}",$rs['a_title2'],$str);
						$str=str_replace("{%a_id%}",$rs['a_id'],$str);
						  $createtime=substr($rs['createtime'],0,4)."��".substr($rs['createtime'],5,2)."��".substr($rs['createtime'],8,2)."��";
						$str=str_replace("{%date%}",$createtime,$str);
						$cttime=substr($rs['createtime'],0,4).substr($rs['createtime'],5,2);
						  $path="../".$filepath."/html/";
						 //echo $path;
						 //exit();
								if(!file_exists($path)){
								mkdir($path);
								}
						   $f=$path.$rs['a_id'].".html";
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
}
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

?>