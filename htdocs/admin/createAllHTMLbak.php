<?php require_once('../include/wzclass.php'); ?>
<?php

$sqlbb="select * from n_class where b_id=0";
$querybb=mysql_query($sqlbb);
while($rsbb=mysql_fetch_array($querybb)){
	$bbid=$rsbb['cid'];
	$bb=$wz->bbclass($bbid);
	
	$filepath=$bb['webpage'];
	
	
	if($bbid==1){
	  $dhpath=$website;
	}else{
		  $dhpath=$website.$bb['webpage'];
	}
	if(file_exists("../moban/".$bb['webpage']."_display.php")){
		$url=$website."moban/".$bb['webpage']."_display.php?bbid=".$bbid;
	}else{
		$url=$website."moban/index_display.php";
	}
	$fp=fopen($url,"r");
	$straa=file_get_contents($url);
	fclose($fp);
	//echo $str;
	$query=$wz->display("where   n_article.a_state=1  and `bclass`.`b_id`=".$bbid);
	while($rs=mysql_fetch_array($query)){
	 $dhstr="<a href='$dhpath'>专题首页</a>  >>  <a href='".$website.$rs['b_webpage']."'>".$rs['b_title']."</a> >> <a href='".$website.$rs['c_webpage']."'>".$rs['c_title']."</a> >> 文章内容";
	// echo strlen($rs['big_pic']);
	// exit();
	 $aa=strlen($rs['big_pic']);
	if($aa>10){
		$str=str_replace("{%big_pic%}","<div align=center><img src=\"".$rs['big_pic']."\" class=img_n5 /></div>",$straa);
	}else{
		$str=str_replace("{%big_pic%}"," ",$straa);
	}
	$str=str_replace("{%title%}",$rs['a_title'],$str);
	$str=str_replace("{%dhstr%}",$dhstr,$str);
	
	$str=str_replace("{%keyword%}",$rs['keywords'],$str);
	$str=str_replace("{%content2%}",$rs['a_content2'],$str);
	
		$a_content=$rs['a_content'];
			$a_content=str_replace("网页设计","<a href=\"".$website."html/1017.html\"  title=\"网页设计培训_北京网页设计培训_专业网页设计培训_网页设计师培训\">网页设计</a>",$a_content);
			$a_content=str_replace("php培训","<a href=\"http://www.cycf.org.cn/html/921.html\" title=\"php培训 北京php培训,专业php培训_php培训班\">php培训</a>",$a_content);
			$a_content=str_replace("PHP培训","<a href=\"http://www.cycf.org.cn/html/921.html\" title=\"PHP培训 北京PHP培训,专业PHP培训_PHP培训班\">PHP培训</a>",$a_content);
			$a_content=str_replace("网站制作","<a href=\"".$website."html/1017.html\"  title=\"网站制作培训_北京网站制作培训\">网站制作</a>",$a_content);
			$a_content=str_replace("网页制作","<a href=\"".$website."html/1017.html\"  title=\"网页制作培训,北京网页制作培训\">网页制作</a>",$a_content);
			$a_content=str_replace("网站培训","<a href=\"".$website."wangzanpeixun/139/\"  title=\"网站培训_北京网站培训\">网站培训</a>",$a_content);
			$a_content=str_replace("网站工程师","<a href=\"".$website."wangzanpeixun/139/\"  title=\"网站工程师培训_北京网站工程师培训\">网站工程师</a>",$a_content);
			$a_content=str_replace("网站建设","<a href=\"".$website."wangzhanjianshe\"  title=\"网站建设_北京网站建设\">网站建设</a>",$a_content);
			$a_content=str_replace("网站开发","<a href=\"http://www.cycf.org.cn/html/1018.html\"  title=\"网站开发培训_北京网站开发培训,网站后台开发培训\">网站开发</a>",$a_content);
			$a_content=str_replace("网站编程","<a href=\"http://www.cycf.org.cn/html/1018.html\"  title=\"网站开发培训_北京网站开发培训,网站后台开发培训\">网站编程</a>",$a_content);
			$a_content=str_replace("计算机培训","<a href=\"http://www.cycf.org.cn/html/1016.html\"  title=\"计算机培训,北京计算机培训,计算机技术培训,计算机技能培训\">计算机培训</a>",$a_content);
			$a_content=str_replace("电脑培训","<a href=\"".$website."html/1016.html\"  title=\"电脑培训,北京电脑培训,计算机技术培训\">电脑培训</a>",$a_content);
			$a_content=str_replace("培训学校","<a href=\"".$website."html/1016.html\"  title=\"培训学校,北京培训学校,技能培训学校\">培训学校</a>",$a_content);

			$a_content=str_replace("培训机构","<a href=\"".$website."html/1016.html\"  title=\"wangzhanpeixun\">培训机构</a>",$a_content);

			$a_content=str_replace("网络","<a href=\"".$website."html/1016.html\"  title=\"网络工程师培训,网络培训,网络工程培训,北京网络培训\">网络</a>",$a_content);
			$a_content=str_replace("网站优化","<a href=\"".$website."youhua/\"  title=\"网站优化_北京网站优化_网站排名优化_北京网站排名优化_培训\">网站优化</a>",$a_content);
			$a_content=str_replace("关键词优化","<a href=\"".$website."youhua/\" >关键词优化</a>",$a_content);
			$a_content=str_replace("SEO培训","<a href=\"".$website."youhua/\"  title=\"SEO培训_北京SEO培训_专业SEO培训\">SEO优化</a>",$a_content);
			$a_content=str_replace("seo培训","<a href=\"".$website."youhua/\"  title=\"SEO培训_北京SEO培训_专业SEO培训\">seo培训</a>",$a_content);

	$str=str_replace("{%content%}",$a_content,$str);
	//echo $str;
	//exit();
	$str=str_replace("{%title2%}",$rs['a_title2'],$str);
	
	$str=str_replace("{%a_id%}",$rs['a_id'],$str);
	  $createtime=substr($rs['createtime'],0,4)."年".substr($rs['createtime'],5,2)."月".substr($rs['createtime'],8,2)."日";
	$str=str_replace("{%date%}",$createtime,$str);
	$cttime=substr($rs['createtime'],0,4).substr($rs['createtime'],5,2);
	  $path="../html/";
	 //echo $path;
	 //exit();
			if(!file_exists($path)){
			mkdir($path);
			}
	   $f=$path.$rs['a_id'].".html";

		$createpage=fopen($f,"w");
		fwrite($createpage,$str);
		fclose($createpage);
		echo "<script language='javascript'>";
		echo "document.write('<a href=".$f." target=_blank>".$rs['a_title2']."</a>——已生成<br>');";
		echo "</script>";
	
	}
	$query=$wz->display("where  n_article.a_state=1 and  `n_class`.`b_id`=".$bbid);
	while($rs=mysql_fetch_array($query)){
	 $dhstr="<a href='$dhpath'>专题首页</a>  >>  <a href='".$website.$rs['c_webpage']."'>".$rs['c_title']."</a> >> 内容";
	 $aa=strlen($rs['big_pic']);
	if($aa>10){
		$str=str_replace("{%big_pic%}","<div align=center><img src=\"".$rs['big_pic']."\" class=img_n5 /></div>",$straa);
	}else{
		$str=str_replace("{%big_pic%}"," ",$straa);
	}
	$str=str_replace("{%title%}",$rs['a_title'],$str);
	 $str=str_replace("{%dhstr%}",$dhstr,$str);
	
	$str=str_replace("{%keyword%}",$rs['keyword'],$str);
	$str=str_replace("{%content2%}",$rs['a_content2'],$str);
		$a_content=$rs['a_content'];
			$a_content=str_replace("网页设计","<a href=\"".$website."html/1017.html\"  title=\"网页设计培训_北京网页设计培训_专业网页设计培训_网页设计师培训\">网页设计</a>",$a_content);
			$a_content=str_replace("php培训","<a href=\"http://www.cycf.org.cn/html/921.html\" title=\"php培训 北京php培训,专业php培训_php培训班\">php培训</a>",$a_content);
			$a_content=str_replace("PHP培训","<a href=\"http://www.cycf.org.cn/html/921.html\" title=\"PHP培训 北京PHP培训,专业PHP培训_PHP培训班\">PHP培训</a>",$a_content);
			$a_content=str_replace("网站制作","<a href=\"".$website."html/1017.html\"  title=\"网站制作培训_北京网站制作培训\">网站制作</a>",$a_content);
			$a_content=str_replace("网页制作","<a href=\"".$website."html/1017.html\"  title=\"网页制作培训,北京网页制作培训\">网页制作</a>",$a_content);
			$a_content=str_replace("网站培训","<a href=\"".$website."wangzanpeixun/139/\"  title=\"网站培训_北京网站培训\">网站培训</a>",$a_content);
			$a_content=str_replace("网站工程师","<a href=\"".$website."wangzanpeixun/139/\"  title=\"网站工程师培训_北京网站工程师培训\">网站工程师</a>",$a_content);
			$a_content=str_replace("网站建设","<a href=\"".$website."wangzhanjianshe\"  title=\"网站建设_北京网站建设\">网站建设</a>",$a_content);
			$a_content=str_replace("网站开发","<a href=\"http://www.cycf.org.cn/html/1018.html\"  title=\"网站开发培训_北京网站开发培训,网站后台开发培训\">网站开发</a>",$a_content);
			$a_content=str_replace("网站编程","<a href=\"http://www.cycf.org.cn/html/1018.html\"  title=\"网站开发培训_北京网站开发培训,网站后台开发培训\">网站编程</a>",$a_content);
			$a_content=str_replace("计算机培训","<a href=\"http://www.cycf.org.cn/html/1016.html\"  title=\"计算机培训,北京计算机培训,计算机技术培训,计算机技能培训\">计算机培训</a>",$a_content);
			$a_content=str_replace("电脑培训","<a href=\"".$website."html/1016.html\"  title=\"电脑培训,北京电脑培训,计算机技术培训\">电脑培训</a>",$a_content);
			$a_content=str_replace("培训学校","<a href=\"".$website."html/1016.html\"  title=\"培训学校,北京培训学校,技能培训学校\">培训学校</a>",$a_content);

			$a_content=str_replace("培训机构","<a href=\"".$website."html/1016.html\"  title=\"wangzhanpeixun\">培训机构</a>",$a_content);

			$a_content=str_replace("网络","<a href=\"".$website."html/1016.html\"  title=\"网络工程师培训,网络培训,网络工程培训,北京网络培训\">网络</a>",$a_content);
			$a_content=str_replace("网站优化","<a href=\"".$website."youhua/\"  title=\"网站优化_北京网站优化_网站排名优化_北京网站排名优化_培训\">网站优化</a>",$a_content);
			$a_content=str_replace("关键词优化","<a href=\"".$website."youhua/\" >关键词优化</a>",$a_content);
			$a_content=str_replace("SEO培训","<a href=\"".$website."youhua/\"  title=\"SEO培训_北京SEO培训_专业SEO培训\">SEO优化</a>",$a_content);
			$a_content=str_replace("seo培训","<a href=\"".$website."youhua/\"  title=\"SEO培训_北京SEO培训_专业SEO培训\">seo培训</a>",$a_content);


	if($rs['big_pic']!=""){
		$str=str_replace("{%big_pic%}","<div align=center><img src=".$rs['big_pic']." class=img_n5 /></div>",$str);
	}else{
		$str=str_replace("{%big_pic%}","&nbsp;",$str);
	}
	$str=str_replace("{%content%}",$a_content,$str);
	//echo $str;
	//exit();
	$str=str_replace("{%title2%}",$rs['a_title2'],$str);

	$str=str_replace("{%title2%}",$rs['a_title2'],$str);
	$str=str_replace("{%a_id%}",$rs['a_id'],$str);
	  $createtime=substr($rs['createtime'],0,4)."年".substr($rs['createtime'],5,2)."月".substr($rs['createtime'],8,2)."日";
	$str=str_replace("{%date%}",$createtime,$str);
	$cttime=substr($rs['createtime'],0,4).substr($rs['createtime'],5,2);
	  $path="../html/";
	  //echo $path;
	 //exit();
			if(!file_exists($path)){
			mkdir($path);
			}
	   $f=$path.$rs['a_id'].".html";
			if(file_exists($f)){
				   unlink($f);  //删除文件
			}
		$createpage=fopen($f,"w");
		fwrite($createpage,$str);
		fclose($createpage);
		echo "<script language='javascript'>";
		echo "document.write('<a href=".$f." target=_blank>".$rs['a_title2']."</a>——已生成<br>');";
		echo "</script>";
	
	}
}

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
	 echo "alert('生成成功');";
	 echo "</script>";

?>
<?php
mysql_close();
?>