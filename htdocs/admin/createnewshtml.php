<?php require_once('adminqx.php'); ?>
<?php require_once('../include/conn.php'); ?>

<?php
  $website="http://".$_SERVER['SERVER_NAME']."/";
	$sqlstr="select * from n_article order by a_id desc ";
	$query=mysql_query($sqlstr);
	while($rs=mysql_fetch_array($query)){
	  if($rs['webhtml']!=""){
	  $url=$website."ny/".$rs['webhtml']."_display.php?id=";
	  }else{
	  $url=$website."ny/"."ad.php?id=";
	  }
		$urlstr=$url.$rs['a_id'];
		//echo $urlstr;
		//exit();
		$f="../html/".$rs['a_id'].".html";
			if(file_exists($f)){
				   unlink($f);  //ɾ���ļ�
			}
		$fp=fopen($urlstr,"r");
		$str=file_get_contents($urlstr);
		fclose($fp);
		$createpage=fopen($f,"w");
		fwrite($createpage,$str);
		fclose($createpage);
		
	 echo "<script languaet=javascript>";
	 echo "document.write('�ļ���<a href=".$website."/html/".$rs['a_id'].".html target=\"_blank\">".$rs['a_title']."����ҳ��".$f."<br>');";
	 echo "</script>";
	}
  $website="http://".$_SERVER['SERVER_NAME']."/";

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
	 echo "alert('ҳ���������');";
	 echo "</script>";

?>
<?php require_once('../include/close.php'); ?>

