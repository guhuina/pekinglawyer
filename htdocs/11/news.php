<?
include "include.php";
$types=$_GET['types'];
if($types==1){
 	$name="婚姻维权";	
 }
 if($types==2){
 	$name="房产维权";	
 }
 if($types==3){
 	$name="经典案例";	
 }
 if($types==4){
 	$name="辩词鉴赏";	
 }
 if($types==5){
 	$name="交通事故维权";	
 }
 if($types==6){
 	$name="法理探讨";	
 }
 if($types==7){
 	$name="合同纠纷";	
 }
  if($types==8){
 	$name="诉讼流程";	
 }
 if($types==9){
 	$name="业务范围";	
 }
  if($types==10){
 	$name="快速帮助";	
 }
 $smarty->assign("name",$name);
$sql="select * from news where types=$types order by Id desc";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$userarray[$i]['id']=$row['Id'];
	$userarray[$i]['subject']=$row['subject'];
	$i++;
}
$smarty->assign("userarray",$userarray);
$sql="select * from news where types=$types and pic <> '' order by pid";
$rec=mysql_query($sql,$conn);
$i=0;
while($row=mysql_fetch_array($rec)){
	$array[$i]['id']=$row['Id'];
	$array[$i]['pic']=$row['pic'];
	$array[$i]['subject']=$row['subject'];
	$str=$row['subject'];
	if(strlen($str) > 18){
		$array[$i]['subject']=wordscut($str,18)."…";
	}else{
		$array[$i]['subject']=$row['subject'];	
	}
	$i++;
}
$smarty->assign("array",$array);
$smarty->assign("types",$types);
$smarty->display("news.tpl");
?>