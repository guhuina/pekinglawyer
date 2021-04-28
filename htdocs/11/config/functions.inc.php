<?
function func_auth_2($page_power){
	if($_SESSION['SESSION_ADMIN_USERID']=="admin"){
		return "y";
	}
	if(ereg($page_power,$_SESSION['SESSION_ADMIN_POWER'])){
		return "y";
	}
	return "n";	
}
function getnum_pic($x,$y,$num)		//生成验证图片xy为图片尺寸
{
$im=imagecreate($x,$y);
$white = ImageColorAllocate($im, 255,255,255);
$black = ImageColorAllocate($im, 0,0,0);
imagecolortransparent($im,$white);
//$str=FUNCTION_GET_RAND();
imagestring($im, 5, 5, 5, $num, $black);
ImageGif($im,"num.gif");
ImageDestroy($im);
}


function func_auth($power) 
{ 
	$userid=$_SESSION['SESSION_ADMIN_USERID'];
	$power2=$_SESSION['SESSION_ADMIN_POWER'];
	//echo $userid.":".$power2;
	if($userid=="admin"){
		return "y";
	}
	if(strlen($power2)<1){
		return "n";
	}	
	if (ereg ($power,$power2)) {
    return "y";
	} else {
    return "n";
	}
}  
function check($num) 
{ 
	$userid=$_SESSION['SESSION_ADMIN_USERID'];
	$power=$_SESSION['SESSION_ADMIN_POWER'];
	//echo $userid.":".$power2;
	if($userid=="admin"){
		return "y";
	}
	if(strstr($power,$num)){
		return "y";
	}	
 else {
    return "n";
	}

}  

function ChgTitle($title,$length) 
{ 
 //$length我们允许字符串显示的最大长度
if (strlen($title)>$length) { 
$temp = 0; 
for($i=0; $i<$length; $i++) 
if (ord($title[$i])> 128) $temp++; 
if ($temp%2 == 0) 
$title = substr($title,0,$length); 
else 
$title = substr($title,0,$length+1); 
} 
return $title; 
}  

function FUNCTION_GET_RAND()
  {
  	//return chr(rand(94,122)).chr(rand(94,122)).chr(rand(94,122)).chr(rand(94,122));  	
  	//echo "救命。。。。。。。。。。。。。";  
  	return rand(0,9).rand(0,9).rand(0,9).rand(0,9);  	  
  }
function func_read_file($f){//读文件内容  比如：d:/atmp/a.txt
	$filename = $f;
	$handle = fopen($filename, "r");
	$contents = fread($handle, filesize ($filename));
	fclose($handle);
  return $contents;
}
function func_write_file($f,$content){//写文件内容  比如：d:/atmp/a.txt
	$filename = $f;
	$somecontent = $content;
	    if (!$handle = fopen($filename, 'w+')) {
	         echo "不能打开文件 $filename".mysql_error();
	         exit;
	    }	
	    // 将$somecontent写入到我们打开的文件中。
	    if (fwrite($handle, $somecontent) === FALSE) {
	        echo "不能写入到文件 $filename";
	        exit;
	    }
	    //echo "成功地将 $somecontent 写入到文件$filename";
	    fclose($handle);	

}

function func_write_file2($f,$content){//写文件内容  比如：d:/atmp/a.txt
	$filename = $f;
	$somecontent = $content;
	    if (!$handle = fopen($filename, 'a')) {
	         echo "不能打开文件 $filename";
	         exit;
	    }	
	    // 将$somecontent写入到我们打开的文件中。
	    if (fwrite($handle, $somecontent) === FALSE) {
	        echo "不能写入到文件 $filename";
	        exit;
	    }
	    //echo "成功地将 $somecontent 写入到文件$filename";
	    fclose($handle);	

}

function func_syslog($conn,$userid,$content){//记录日志
   $instime=time();	
   $sql="insert into logs values ('','$userid',$instime,'$content')";
   $rec=mysql_query($sql,$conn);
   if(!$rec){
     echo mysql_error();
   }
}
function wordscut($string, $length) {
    if(strlen($string) > $length) {
		for($i = 0; $i < $length; $i++) {
			if(ord($string[$i]) > 127) {
				$wordscut .= $string[$i].$string[$i + 1];
				$i++;
			} else {
				$wordscut .= $string[$i];
			}
		}
		return $wordscut.$addstr;
	}
	return $string;
}
?>