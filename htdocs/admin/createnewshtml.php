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
				   unlink($f);  //删除文件
			}
		$fp=fopen($urlstr,"r");
		$str=file_get_contents($urlstr);
		fclose($fp);
		$createpage=fopen($f,"w");
		fwrite($createpage,$str);
		fclose($createpage);
		
	 echo "<script languaet=javascript>";
	 echo "document.write('文件：<a href=".$website."/html/".$rs['a_id'].".html target=\"_blank\">".$rs['a_title']."生成页面".$f."<br>');";
	 echo "</script>";
	}
  $website="http://".$_SERVER['SERVER_NAME']."/";

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
	 echo "<script languaet=javascript>";
	 echo "alert('页面生成完成');";
	 echo "</script>";

?>
<?php require_once('../include/close.php'); ?>

