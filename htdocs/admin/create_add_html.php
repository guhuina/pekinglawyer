<?php require_once('../include/conn.php'); ?>
<?php
  $website="http://".$_SERVER['SERVER_NAME']."/";

   $a_id=$_GET['a_id'];
   $cid=$_GET['classid'];
   $webhtml=$_GET['webhtml'];
 
	  if($webhtml!=""){
	  $url=$website."ny/".$rs['webhtml']."_display.php?id=";
	  }else{
	  $url=$website."ny/"."ad_display.php?id=";
	  }
		$urlstr=$url.$a_id;
		//echo $urlstr;
		//exit();
		$f="../html/".$a_id.".html";
			if(file_exists($f)){
				   unlink($f);  //ɾ���ļ�
			}
		$fp=fopen($urlstr,"r");
		$str=file_get_contents($urlstr);
		fclose($fp);
		$createpage=fopen($f,"w");
		fwrite($createpage,$str);
		fclose($createpage);
//���ɾ�̬ҳ�����
	 unlink("../index.html");  //ɾ���ļ�
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

echo"<script language='javascript'>";
echo"location='article.php?cid=$cid';";
echo"</script>";

?>
<?php require_once('../include/close.php'); ?>
