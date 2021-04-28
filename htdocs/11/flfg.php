<?
include "include.php";
$types=$_GET['types'];
$sql="select * from news where types=5 and type=1 order by Id desc limit 18";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$userarray1[$i]['id']=$row['Id'];
	$userarray1[$i]['subject']=$row['subject'];
	$str=$row['subject'];
	if(strlen($str) > 50){
		$userarray1[$i]['subject']=wordscut($str,50)."бн";
	}else{
		$userarray1[$i]['subject']=$row['subject'];	
	}
	$i++;
}
$smarty->assign("userarray1",$userarray1);
$sql="select * from news where types=5 and type=2 order by Id desc limit 18";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$userarray2[$i]['id']=$row['Id'];
	$userarray2[$i]['subject']=$row['subject'];
	$str=$row['subject'];
	if(strlen($str) > 50){
		$userarray2[$i]['subject']=wordscut($str,50)."бн";
	}else{
		$userarray2[$i]['subject']=$row['subject'];	
	}
	$i++;
}
$smarty->assign("userarray2",$userarray2);
$sql="select * from news where types=5 and type=3 order by Id desc limit 18";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$userarray3[$i]['id']=$row['Id'];
	$userarray3[$i]['subject']=$row['subject'];
	$str=$row['subject'];
	if(strlen($str) > 50){
		$userarray3[$i]['subject']=wordscut($str,50)."бн";
	}else{
		$userarray3[$i]['subject']=$row['subject'];	
	}
	$i++;
}
$smarty->assign("userarray3",$userarray3);
$sql="select * from news where types=4 and type=1 order by Id desc limit 18";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$userarray4[$i]['id']=$row['Id'];
	$userarray4[$i]['subject']=$row['subject'];
	$str=$row['subject'];
	if(strlen($str) > 50){
		$userarray4[$i]['subject']=wordscut($str,50)."бн";
	}else{
		$userarray4[$i]['subject']=$row['subject'];	
	}
	$i++;
}
$smarty->assign("userarray4",$userarray4);
$sql="select * from news where types=5 and pic <> '' order by pid";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$array[$i]['id']=$row['Id'];
	$array[$i]['pic']=$row['pic'];
	$array[$i]['subject']=$row['subject'];
	$str=$row['subject'];
	if(strlen($str) > 18){
		$array[$i]['subject']=wordscut($str,18)."бн";
	}else{
		$array[$i]['subject']=$row['subject'];	
	}
	$i++;
}
$smarty->assign("array",$array);
$smarty->assign("types",$types);
$smarty->display("flfg.tpl");
?>