<?php require_once('../include/wzclass.php'); ?>
<?php
$website="http://".$_SERVER['SERVER_NAME']."/";
$temfile=$website."moban/article.php";
$stra=file_get_contents($temfile);
$sqlstr="select *  from `n_article` where cid=1 or cid=57 or cid=56 or cid=62 order by a_id desc";
$query=mysql_query($sqlstr);
while($rs=mysql_fetch_array($query)){
	
	$str=str_replace("{title2}",$rs['a_title2'],$stra);
	$str=str_replace("{content}",$rs['a_content'],$str);
	$str=str_replace("{pic}",$rs['a_pic'],$str);
	$str=str_replace("{title}",$rs['a_title'],$str);
	$str=str_replace("{keywords}",$rs['keywords'],$str);
	$str=str_replace("{id}",$rs['a_id'],$str);
	$str=str_replace("{content2}",$rs['a_content2'],$str);
	if(!file_exists("../about")){
	  mkdir("../about/");	
	}
	$fp=fopen("../about/".$rs['a_id'].".html","w");
	fwrite($fp,$str);
	fclose($fp);
//	echo "document.write(\"<a href='../html/".$rs['id'].".html' target='_blank'> ".$rs['title']."</a>---文件生成成功<br>\");";
}
$sqlstra="select *  from `n_article` where cid=2 order by a_id desc";
$querya=mysql_query($sqlstra);
while($rs=mysql_fetch_array($querya)){
	
	$str=str_replace("{title2}",$rs['a_title2'],$stra);
	$str=str_replace("{content}",$rs['a_content'],$str);
	$str=str_replace("{pic}",$rs['a_pic'],$str);
	$str=str_replace("{title}",$rs['a_title'],$str);
	$str=str_replace("{keywords}",$rs['keywords'],$str);
	$str=str_replace("{id}",$rs['a_id'],$str);
	$str=str_replace("{content2}",$rs['a_content2'],$str);
	if(!file_exists("../wzjs")){
	  mkdir("../wzjs/");	
	}
	$fp=fopen("../wzjs/".$rs['a_id'].".html","w");
	fwrite($fp,$str);
	fclose($fp);
//	echo "document.write(\"<a href='../html/".$rs['id'].".html' target='_blank'> ".$rs['title']."</a>---文件生成成功<br>\");";
}

$sqlstrb="select *  from `n_article` where cid=4 order by a_id desc";
$queryb=mysql_query($sqlstrb);
while($rs=mysql_fetch_array($queryb)){
	
	$str=str_replace("{title2}",$rs['a_title2'],$stra);
	$str=str_replace("{content}",$rs['a_content'],$str);
	$str=str_replace("{pic}",$rs['a_pic'],$str);
	$str=str_replace("{title}",$rs['a_title'],$str);
	$str=str_replace("{keywords}",$rs['keywords'],$str);
	$str=str_replace("{id}",$rs['a_id'],$str);
	$str=str_replace("{content2}",$rs['a_content2'],$str);
	if(!file_exists("../pmsj")){
	  mkdir("../pmsj/");	
	}
	$fp=fopen("../pmsj/".$rs['a_id'].".html","w");
	fwrite($fp,$str);
	fclose($fp);
//	echo "document.write(\"<a href='../html/".$rs['id'].".html' target='_blank'> ".$rs['title']."</a>---文件生成成功<br>\");";
}

$sqlstrc="select *  from `n_article` where cid=5 order by a_id desc";
$queryc=mysql_query($sqlstrc);
while($rs=mysql_fetch_array($queryc)){
	
	$str=str_replace("{title2}",$rs['a_title2'],$stra);
	$str=str_replace("{content}",$rs['a_content'],$str);
	$str=str_replace("{pic}",$rs['a_pic'],$str);
	$str=str_replace("{title}",$rs['a_title'],$str);
	$str=str_replace("{keywords}",$rs['keywords'],$str);
	$str=str_replace("{id}",$rs['a_id'],$str);
	$str=str_replace("{content2}",$rs['a_content2'],$str);
	if(!file_exists("../wlcp")){
	  mkdir("../wlcp/");	
	}
	$fp=fopen("../wlcp/".$rs['a_id'].".html","w");
	fwrite($fp,$str);
	fclose($fp);
//	echo "document.write(\"<a href='../html/".$rs['id'].".html' target='_blank'> ".$rs['title']."</a>---文件生成成功<br>\");";
}
$sqlstrb="select *  from `n_article` where cid=4 order by a_id desc";
$queryb=mysql_query($sqlstrb);
while($rs=mysql_fetch_array($queryb)){
	
	$str=str_replace("{title2}",$rs['a_title2'],$stra);
	$str=str_replace("{content}",$rs['a_content'],$str);
	$str=str_replace("{pic}",$rs['a_pic'],$str);
	$str=str_replace("{title}",$rs['a_title'],$str);
	$str=str_replace("{keywords}",$rs['keywords'],$str);
	$str=str_replace("{id}",$rs['a_id'],$str);
	$str=str_replace("{content2}",$rs['a_content2'],$str);
	if(!file_exists("../pmsj")){
	  mkdir("../pmsj/");	
	}
	$fp=fopen("../pmsj/".$rs['a_id'].".html","w");
	fwrite($fp,$str);
	fclose($fp);
//	echo "document.write(\"<a href='../html/".$rs['id'].".html' target='_blank'> ".$rs['title']."</a>---文件生成成功<br>\");";
}

$sqlstrd="select *  from `n_article` where cid=48 order by a_id desc";
$queryd=mysql_query($sqlstrd);
while($rs=mysql_fetch_array($queryd)){
	
	$str=str_replace("{title2}",$rs['a_title2'],$stra);
	$str=str_replace("{content}",$rs['a_content'],$str);
	$str=str_replace("{pic}",$rs['a_pic'],$str);
	$str=str_replace("{title}",$rs['a_title'],$str);
	$str=str_replace("{keywords}",$rs['keywords'],$str);
	$str=str_replace("{id}",$rs['a_id'],$str);
	$str=str_replace("{content2}",$rs['a_content2'],$str);
	if(!file_exists("../fwzq")){
	  mkdir("../fwzq/");	
	}
	$fp=fopen("../fwzq/".$rs['a_id'].".html","w");
	fwrite($fp,$str);
	fclose($fp);
//	echo "document.write(\"<a href='../html/".$rs['id'].".html' target='_blank'> ".$rs['title']."</a>---文件生成成功<br>\");";
}

//新闻动态开始
$website="http://".$_SERVER['SERVER_NAME']."/";
$temfile=$website."moban/newn.php";
$stra=file_get_contents($temfile);
$sqlstr="select *  from `n_article` where cid=51 order by a_id desc";
$query=mysql_query($sqlstr);
while($rs=mysql_fetch_array($query)){
	$sqls=mysql_query("select * from n_class where cid=51");
	$rows=mysql_fetch_array($sqls);
	$str=str_replace("{title2}",$rs['a_title2'],$stra);
	$str=str_replace("{pic}",$rows['a_pic'],$str);
	$str=str_replace("{ctitle2}",$rows['class_title2'],$str);
	$str=str_replace("{content}",$rs['a_content'],$str);
	$str=str_replace("{title}",$rs['a_title'],$str);
	$str=str_replace("{time}",substr($rs['createtime'],0,10),$str);
	$str=str_replace("{keywords}",$rs['keywords'],$str);
	$str=str_replace("{id}",$rs['a_id'],$str);
	$str=str_replace("{content2}",$rs['a_content2'],$str);
	
	if(!file_exists("../news")){
	  mkdir("../news/");	
	}
	$fp=fopen("../news/".$rs['a_id'].".html","w");
	fwrite($fp,$str);
	fclose($fp);
//	echo "document.write(\"<a href='../html/".$rs['id'].".html' target='_blank'> ".$rs['title']."</a>---文件生成成功<br>\");";
}
$sqlstrv="select *  from `n_article` where cid=53 order by a_id desc";
$queryv=mysql_query($sqlstrv);
while($rs=mysql_fetch_array($queryv)){
	$sqls=mysql_query("select * from n_class where cid=53");
	$rows=mysql_fetch_array($sqls);
	$str=str_replace("{title2}",$rs['a_title2'],$stra);
	$str=str_replace("{pic}",$rows['a_pic'],$str);
	$str=str_replace("{ctitle2}",$rows['class_title2'],$str);
	$str=str_replace("{content}",$rs['a_content'],$str);
	$str=str_replace("{title}",$rs['a_title'],$str);
	$str=str_replace("{time}",substr($rs['createtime'],0,10),$str);
	$str=str_replace("{keywords}",$rs['keywords'],$str);
	$str=str_replace("{id}",$rs['a_id'],$str);
	$str=str_replace("{content2}",$rs['a_content2'],$str);
	
	if(!file_exists("../news")){
	  mkdir("../news/");	
	}
	$fp=fopen("../news/".$rs['a_id'].".html","w");
	fwrite($fp,$str);
	fclose($fp);
//	echo "document.write(\"<a href='../html/".$rs['id'].".html' target='_blank'> ".$rs['title']."</a>---文件生成成功<br>\");";
}
$sqlstrv="select *  from `n_article` where cid=54 order by a_id desc";
$queryv=mysql_query($sqlstrv);
while($rs=mysql_fetch_array($queryv)){
	$sqls=mysql_query("select * from n_class where cid=54");
	$rows=mysql_fetch_array($sqls);
	$str=str_replace("{title2}",$rs['a_title2'],$stra);
	$str=str_replace("{pic}",$rows['a_pic'],$str);
	$str=str_replace("{ctitle2}",$rows['class_title2'],$str);
	$str=str_replace("{content}",$rs['a_content'],$str);
	$str=str_replace("{title}",$rs['a_title'],$str);
	$str=str_replace("{time}",substr($rs['createtime'],0,10),$str);
	$str=str_replace("{keywords}",$rs['keywords'],$str);
	$str=str_replace("{id}",$rs['a_id'],$str);
	$str=str_replace("{content2}",$rs['a_content2'],$str);
	
	if(!file_exists("../news")){
	  mkdir("../news/");	
	}
	$fp=fopen("../news/".$rs['a_id'].".html","w");
	fwrite($fp,$str);
	fclose($fp);
//	echo "document.write(\"<a href='../html/".$rs['id'].".html' target='_blank'> ".$rs['title']."</a>---文件生成成功<br>\");";
}
$sqlstrv="select *  from `n_article` where cid=55 order by a_id desc";
$queryv=mysql_query($sqlstrv);
while($rs=mysql_fetch_array($queryv)){
	$sqls=mysql_query("select * from n_class where cid=55");
	$rows=mysql_fetch_array($sqls);
	$str=str_replace("{title2}",$rs['a_title2'],$stra);
	$str=str_replace("{pic}",$rows['a_pic'],$str);
	$str=str_replace("{ctitle2}",$rows['class_title2'],$str);
	$str=str_replace("{content}",$rs['a_content'],$str);
	$str=str_replace("{title}",$rs['a_title'],$str);
	$str=str_replace("{time}",substr($rs['createtime'],0,10),$str);
	$str=str_replace("{keywords}",$rs['keywords'],$str);
	$str=str_replace("{id}",$rs['a_id'],$str);
	$str=str_replace("{content2}",$rs['a_content2'],$str);
	
	if(!file_exists("../news")){
	  mkdir("../news/");	
	}
	$fp=fopen("../news/".$rs['a_id'].".html","w");
	fwrite($fp,$str);
	fclose($fp);
//	echo "document.write(\"<a href='../html/".$rs['id'].".html' target='_blank'> ".$rs['title']."</a>---文件生成成功<br>\");";
}

$sqlstrv="select *  from `n_article` where cid=46 order by a_id desc";
$queryv=mysql_query($sqlstrv);
while($rs=mysql_fetch_array($queryv)){
	$sqls=mysql_query("select * from n_class where cid=46");
	$rows=mysql_fetch_array($sqls);
	$str=str_replace("{title2}",$rs['a_title2'],$stra);
	$str=str_replace("{pic}",$rows['a_pic'],$str);
	$str=str_replace("{ctitle2}",$rows['class_title2'],$str);
	$str=str_replace("{content}",$rs['a_content'],$str);
	$str=str_replace("{title}",$rs['a_title'],$str);
	$str=str_replace("{time}",substr($rs['createtime'],0,10),$str);
	$str=str_replace("{keywords}",$rs['keywords'],$str);
	$str=str_replace("{id}",$rs['a_id'],$str);
	$str=str_replace("{content2}",$rs['a_content2'],$str);
	
	if(!file_exists("../news")){
	  mkdir("../news/");	
	}
	$fp=fopen("../news/".$rs['a_id'].".html","w");
	fwrite($fp,$str);
	fclose($fp);
//	echo "document.write(\"<a href='../html/".$rs['id'].".html' target='_blank'> ".$rs['title']."</a>---文件生成成功<br>\");";
}
$sqlstrv="select *  from `n_article` where cid=47 order by a_id desc";
$queryv=mysql_query($sqlstrv);
while($rs=mysql_fetch_array($queryv)){
	$sqls=mysql_query("select * from n_class where cid=47");
	$rows=mysql_fetch_array($sqls);
	$str=str_replace("{title2}",$rs['a_title2'],$stra);
	$str=str_replace("{pic}",$rows['a_pic'],$str);
	$str=str_replace("{ctitle2}",$rows['class_title2'],$str);
	$str=str_replace("{content}",$rs['a_content'],$str);
	$str=str_replace("{title}",$rs['a_title'],$str);
	$str=str_replace("{time}",substr($rs['createtime'],0,10),$str);
	$str=str_replace("{keywords}",$rs['keywords'],$str);
	$str=str_replace("{id}",$rs['a_id'],$str);
	$str=str_replace("{content2}",$rs['a_content2'],$str);
	
	if(!file_exists("../news")){
	  mkdir("../news/");	
	}
	$fp=fopen("../news/".$rs['a_id'].".html","w");
	fwrite($fp,$str);
	fclose($fp);
//	echo "document.write(\"<a href='../html/".$rs['id'].".html' target='_blank'> ".$rs['title']."</a>---文件生成成功<br>\");";
}
$sqlstrv="select *  from `n_article` where cid=49 order by a_id desc";
$queryv=mysql_query($sqlstrv);
while($rs=mysql_fetch_array($queryv)){
	$sqls=mysql_query("select * from n_class where cid=49");
	$rows=mysql_fetch_array($sqls);
	$str=str_replace("{title2}",$rs['a_title2'],$stra);
	$str=str_replace("{pic}",$rows['a_pic'],$str);
	$str=str_replace("{ctitle2}",$rows['class_title2'],$str);
	$str=str_replace("{content}",$rs['a_content'],$str);
	$str=str_replace("{title}",$rs['a_title'],$str);
	$str=str_replace("{time}",substr($rs['createtime'],0,10),$str);
	$str=str_replace("{keywords}",$rs['keywords'],$str);
	$str=str_replace("{id}",$rs['a_id'],$str);
	$str=str_replace("{content2}",$rs['a_content2'],$str);
	
	if(!file_exists("../news")){
	  mkdir("../news/");	
	}
	$fp=fopen("../news/".$rs['a_id'].".html","w");
	fwrite($fp,$str);
	fclose($fp);
//	echo "document.write(\"<a href='../html/".$rs['id'].".html' target='_blank'> ".$rs['title']."</a>---文件生成成功<br>\");";
}

//案例2开始
$website="http://".$_SERVER['SERVER_NAME']."/";
$temfile=$website."moban/anli2_xx.php";
$stra=file_get_contents($temfile);
$sqlstr="select *  from `n_article` where cid=3 order by a_id desc";
$query=mysql_query($sqlstr);
while($rs=mysql_fetch_array($query)){
	$sqls=mysql_query("select * from n_class where cid=3");
	$rows=mysql_fetch_array($sqls);
	$str=str_replace("{title2}",$rs['a_title2'],$stra);
	$str=str_replace("{pic}",$rows['a_pic'],$str);
	$str=str_replace("{ctitle2}",$rows['class_title2'],$str);
	$str=str_replace("{ctitle}",$rows['class_title'],$str);
	$str=str_replace("{content}",$rs['a_content'],$str);
	$str=str_replace("{title}",$rs['a_title'],$str);
	$str=str_replace("{time}",substr($rs['createtime'],0,10),$str);
	$str=str_replace("{keywords}",$rs['keywords'],$str);
	$str=str_replace("{id}",$rs['a_id'],$str);
	$str=str_replace("{content2}",$rs['a_content2'],$str);
	
	if(!file_exists("../zpjs")){
	  mkdir("../zpjs/");	
	}
	$fp=fopen("../zpjs/".$rs['a_id'].".html","w");
	fwrite($fp,$str);
	fclose($fp);
//	echo "document.write(\"<a href='../html/".$rs['id'].".html' target='_blank'> ".$rs['title']."</a>---文件生成成功<br>\");";
}

//案例开始
$website="http://".$_SERVER['SERVER_NAME']."/";
$temfile=$website."moban/anli_xx.php";
$stra=file_get_contents($temfile);
$sqlstr="select * from (select `n_article`.`a_id` AS `a_id`,
`n_article`.`big_pic` AS `big_pic`,`n_article`.`a_title` AS `a_title`,
`n_article`.`a_title2` AS `a_title2`,
`a_content2` AS `a_content2`,`a_content` AS `a_content`,`n_article`.`a_pic` AS `a_pic`,
`n_article`.`createtime` AS `createtime`,`n_article`.`cid` AS `cid`,
`n_class`.`class_title2` AS `c_title2`,
`n_class`.`class_title` AS `c_title`,
`bclass`.`class_title2` AS `b_title2`,
`bclass`.`class_title` AS `b_title`,
`bclass`.`cid` AS `bid`,
`bclass`.`a_pic` AS `pic`,
`bbclass`.`class_title2` AS `bb_title`,
`bbclass`.`cid` AS `bbid`
from (((`n_article` left join `n_class` on((`n_article`.`cid` = `n_class`.`cid`))) left join `n_class` `bclass` on((`n_class`.`b_id` = `bclass`.`cid`))) left join `n_class` `bbclass` on(((`bclass`.`b_id` = `bbclass`.`cid`) )))) as aa where bbid=6";
$query=mysql_query($sqlstr);
while($rs=mysql_fetch_array($query)){
	$str=str_replace("{title2}",$rs['a_title2'],$stra);
	$str=str_replace("{pic}",$rs['a_pic'],$str);
	$str=str_replace("{content}",$rs['a_content'],$str);
	$str=str_replace("{title}",$rs['a_title'],$str);
	$str=str_replace("{time}",substr($rs['createtime'],0,10),$str);
	$str=str_replace("{keywords}",$rs['keywords'],$str);
	$str=str_replace("{id}",$rs['a_id'],$str);
	$str=str_replace("{content2}",$rs['a_content2'],$str);
	$str=str_replace("{ctitle2}",$rs['c_title2'],$str);
	$str=str_replace("{ctitle}",$rs['c_title'],$str);
	$str=str_replace("{btitle2}",$rs['b_title2'],$str);
	$str=str_replace("{btitle}",$rs['b_title'],$str);
	$str=str_replace("{cid}",$rs['cid'],$str);
	$str=str_replace("{bpic}",$rs['pic'],$str);
	$str=str_replace("{bbid}",$rs['bbid'],$str);
	
	if(!file_exists("../zpjs")){
	  mkdir("../zpjs/");	
	}
	$fp=fopen("../zpjs/".$rs['a_id'].".html","w");
	fwrite($fp,$str);
	fclose($fp);
//	echo "document.write(\"<a href='../html/".$rs['id'].".html' target='_blank'> ".$rs['title']."</a>---文件生成成功<br>\");";
}

//酷站欣赏开始
$website="http://".$_SERVER['SERVER_NAME']."/";
$temfile=$website."moban/anli_xx.php";
$stra=file_get_contents($temfile);
$sqlstr="select * from (select `n_article`.`a_id` AS `a_id`,
`n_article`.`big_pic` AS `big_pic`,`n_article`.`a_title` AS `a_title`,
`n_article`.`a_title2` AS `a_title2`,
`a_content2` AS `a_content2`,`a_content` AS `a_content`,`n_article`.`a_pic` AS `a_pic`,
`n_article`.`createtime` AS `createtime`,`n_article`.`cid` AS `cid`,
`n_class`.`class_title2` AS `c_title`,
`bclass`.`class_title2` AS `b_title2`,
`bclass`.`class_title` AS `b_title`,
`bclass`.`cid` AS `bid`,
`bclass`.`a_pic` AS `pic`
from (((`n_article` left join `n_class` on((`n_article`.`cid` = `n_class`.`cid`))) left join `n_class` `bclass` on((`n_class`.`b_id` = `bclass`.`cid`))) left join `n_class` `bbclass` on(((`bclass`.`b_id` = `bbclass`.`cid`) )))) as aa where bid=44";
$query=mysql_query($sqlstr);
while($rs=mysql_fetch_array($query)){
	$str=str_replace("{title2}",$rs['a_title2'],$stra);
	$str=str_replace("{pic}",$rs['a_pic'],$str);
	$str=str_replace("{content}",$rs['a_content'],$str);
	$str=str_replace("{title}",$rs['a_title'],$str);
	$str=str_replace("{time}",substr($rs['createtime'],0,10),$str);
	$str=str_replace("{keywords}",$rs['keywords'],$str);
	$str=str_replace("{id}",$rs['a_id'],$str);
	$str=str_replace("{content2}",$rs['a_content2'],$str);
	$str=str_replace("{ctitle2}",$rs['c_title2'],$str);
	$str=str_replace("{ctitle}",$rs['c_title'],$str);
	$str=str_replace("{btitle2}",$rs['b_title2'],$str);
	$str=str_replace("{btitle}",$rs['b_title'],$str);
	$str=str_replace("{cid}",$rs['cid'],$str);
	$str=str_replace("{bpic}",$rs['pic'],$str);
	
	if(!file_exists("../zpjs")){
	  mkdir("../zpjs/");	
	}
	$fp=fopen("../zpjs/".$rs['a_id'].".html","w");
	fwrite($fp,$str);
	fclose($fp);
//	echo "document.write(\"<a href='../html/".$rs['id'].".html' target='_blank'> ".$rs['title']."</a>---文件生成成功<br>\");";
}

$url="http://".$_SERVER['SERVER_NAME']."/index.php";
$str=file_get_contents($url);
$fp=fopen("../index.html","w");
fwrite($fp,$str);
fclose($fp);

$url="http://".$_SERVER['SERVER_NAME']."/lxwm.php";
$str=file_get_contents($url);
$fp=fopen("../lxwm.html","w");
fwrite($fp,$str);
fclose($fp);
 echo "<script language='javascript'>";
 echo "alert('静态生成成功');";
 echo "location='http://".$_SERVER['SERVER_NAME']."/';";
 echo "</script>";
?>