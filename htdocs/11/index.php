<?
include "include.php";
//��������
$sql="select * from news where types=1 order by pid desc limit 17";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$userarray[$i]['id']=$row['Id'];
	$userarray[$i]['subject']=$row['subject'];
	$str=$row['subject'];
	if(strlen($str) > 50){
		$userarray[$i]['subject']=wordscut($str,50)."��";
	}else{
		$userarray[$i]['subject']=$row['subject'];	
	}
	$i++;
}
$smarty->assign("userarray",$userarray);
//����ȵ�
$sql="select * from news where types=2 order by Id desc limit 17";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$userarray1[$i]['id']=$row['Id'];
	$userarray1[$i]['subject']=$row['subject'];
	$str=$row['subject'];
	if(strlen($str) > 26){
		$userarray1[$i]['subject']=wordscut($str,50)."��";
	}else{
		$userarray1[$i]['subject']=$row['subject'];	
	}
	$i++;
}
$smarty->assign("userarray1",$userarray1);
//���ɷ���
$sql="select * from news where types=5 order by Id desc limit 14";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$userarray2[$i]['id']=$row['Id'];
	$userarray2[$i]['type']=$row['type'];
	$userarray2[$i]['subject']=$row['subject'];
	$str=$row['subject'];
	if(strlen($str) > 24){
		$userarray2[$i]['subject']=wordscut($str,24)."��";
	}else{
		$userarray2[$i]['subject']=$row['subject'];	
	}
	$i++;
}
$smarty->assign("userarray2",$userarray2);
//���ϳ�ʶ
$sql="select * from news where types=7 order by Id desc limit 14";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$userarray3[$i]['id']=$row['Id'];
	$userarray3[$i]['subject']=$row['subject'];
	$str=$row['subject'];
	if(strlen($str) > 50){
		$userarray3[$i]['subject']=wordscut($str,50)."��";
	}else{
		$userarray3[$i]['subject']=$row['subject'];	
	}
	$i++;
}
$smarty->assign("userarray3",$userarray3);
//���䰸��
$sql="select * from news where types=3 order by Id desc limit 6";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$userarray4[$i]['id']=$row['Id'];
	$userarray4[$i]['subject']=$row['subject'];
	$str=$row['subject'];
	if(strlen($str) > 50){
		$userarray4[$i]['subject']=wordscut($str,50)."��";
	}else{
		$userarray4[$i]['subject']=$row['subject'];	
	}
	$i++;
}
$smarty->assign("userarray4",$userarray4);
//��ʼ���
$sql="select * from news where types=4 order by Id desc limit 6";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$userarray5[$i]['id']=$row['Id'];
	$userarray5[$i]['subject']=$row['subject'];
	$str=$row['subject'];
	if(strlen($str) > 50){
		$userarray5[$i]['subject']=wordscut($str,50)."��";
	}else{
		$userarray5[$i]['subject']=$row['subject'];	
	}
	$i++;
}
$smarty->assign("userarray5",$userarray5);
//��ʦ�Ŷ�
$sql="select * from img where types=1 order by pid";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$array[$i]['id']=$row['Id'];
	$array[$i]['czyear']=$row['czyear'];
	$i++;
}
$smarty->assign("array",$array);
//��������ͼƬ
$sql="select * from news where types=1 and pic <> '' order by pid limit 2";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$array1[$i]['id']=$row['Id'];
	$array1[$i]['pic']=$row['pic'];
	$i++;
}
$smarty->assign("array1",$array1);
//����ȵ�
$sql="select * from news where types=2 and pic <> '' order by pid limit 3";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$array2[$i]['id']=$row['Id'];
	$array2[$i]['pic']=$row['pic'];
	$i++;
}
$smarty->assign("array2",$array2);
//���ɷ���
$sql="select * from news where types=5 and pic <> '' order by pid limit 2";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$array3[$i]['id']=$row['Id'];
	$array3[$i]['pic']=$row['pic'];
	$array3[$i]['type']=$row['type'];
	$i++;
}
$smarty->assign("array3",$array3);
//���䰸��
$sql="select * from news where types=3 and pic <> '' order by pid limit 2";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$array4[$i]['id']=$row['Id'];
	$array4[$i]['pic']=$row['pic'];
	$str=$row['subject'];
	if(strlen($str) > 18){
		$array4[$i]['subject']=wordscut($str,18)."��";
	}else{
		$array4[$i]['subject']=$row['subject'];	
	}
	$i++;
}
$smarty->assign("array4",$array4);
//��ʼ���ͼƬ
$sql="select * from news where types=4 and pic <> '' order by pid limit 2";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$array5[$i]['id']=$row['Id'];
	$array5[$i]['pic']=$row['pic'];
	$array5[$i]['subject']=$row['subject'];
	$str=$row['subject'];
	if(strlen($str) > 18){
		$array5[$i]['subject']=wordscut($str,18)."��";
	}else{
		$array5[$i]['subject']=$row['subject'];	
	}
	$i++;
}
$smarty->assign("array5",$array5);
$smarty->display("index.tpl");
?>