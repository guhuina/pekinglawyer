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
				   unlink($f);  //删除文件
			}
		$fp=fopen($urlstr,"r");
		$str=file_get_contents($urlstr);
		fclose($fp);
		$createpage=fopen($f,"w");
		fwrite($createpage,$str);
		fclose($createpage);
//生成静态页面结束
	 unlink("../index.html");  //删除文件
	$url=$website."index.php";
	//echo $url;
	//exit();
	$fp=fopen($url,"r");//用只读方式来打开远程页面
	$str=file_get_contents($url);//读取页面内容并且赋值给变量$str;
	fclose($fp);

//echo $str;
//exit();
$abc=fopen("../index.html","w");//用可写入的方式打开一个文件(如果文件不存,则打开一个空文件)
fwrite($abc,$str);//把刚才读取到的内容写入文件
fclose($abc);

echo"<script language='javascript'>";
echo"location='article.php?cid=$cid';";
echo"</script>";

?>
<?php require_once('../include/close.php'); ?>
