<?
session_start();
include "config/config.php";
include "config/client_public_include.php";
include "config/db_function.php";
include "config/functions.inc.php"; 
$conn = Connect_DB($DB_VARS_ARRAY);
//关于本站
$sql="select * from infos where types=1";
$rec=mysql_query($sql,$conn);
$row=mysql_fetch_array($rec);
$content=$row['content'];
$smarty->assign("content",$content);  
//网站关键字
$sql="select * from infos where types=3";
$rec=mysql_query($sql,$conn);
$row=mysql_fetch_array($rec);
$titles=$row['content'];
$smarty->assign("titles",$titles);  
//诉讼流程
$sql="select * from news where types=8 order by Id limit 11";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$userarray6[$i]['id']=$row['Id'];
	$userarray6[$i]['subject']=$row['subject'];
	$str=$row['subject'];
	if(strlen($str) > 24){
		$userarray6[$i]['subject']=wordscut($str,24)."…";
	}else{
		$userarray6[$i]['subject']=$row['subject'];	
	}
	$i++;
}
$smarty->assign("userarray6",$userarray6);
//业务范围
$sql="select * from news where types=9 order by Id desc limit 20";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$userarray7[$i]['id']=$row['Id'];
	$userarray7[$i]['subject']=$row['subject'];
	$str=$row['subject'];
	if(strlen($str) > 24){
		$userarray7[$i]['subject']=wordscut($str,24)."…";
	}else{
		$userarray7[$i]['subject']=$row['subject'];	
	}
	$i++;
}
$smarty->assign("userarray7",$userarray7);
//快速帮助
$sql="select * from news where types=10 order by Id desc limit 20";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$userarray8[$i]['id']=$row['Id'];
	$userarray8[$i]['subject']=$row['subject'];
	$str=$row['subject'];
	if(strlen($str) > 24){
		$userarray8[$i]['subject']=wordscut($str,24)."…";
	}else{
		$userarray8[$i]['subject']=$row['subject'];	
	}
	$i++;
}
$smarty->assign("userarray8",$userarray8);
//友情链接
$sql="select * from link where types=1 order by pid limit 9";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$array6[$i]['id']=$row['Id'];
	$array6[$i]['pic']=$row['pic'];
	$array6[$i]['linkweb']=$row['linkweb'];
	$i++;
}
$smarty->assign("array6",$array6);
//切换图片
$sql="select * from link where types=2 order by pid";
$rec=mysql_query($sql,$conn);
$i=0;
$a=1;
while($row=mysql_fetch_array($rec)){
	$array7[$i]['id']=$row['Id'];
	$array7[$i]['pic']=$row['pic'];
	$array7[$i]['linkweb']=$row['linkweb'];
	$array7[$i]['a']=$a++;
	$i++;
}
$smarty->assign("array7",$array7);
?>