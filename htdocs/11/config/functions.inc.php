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
function getnum_pic($x,$y,$num)		//������֤ͼƬxyΪͼƬ�ߴ�
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
 //$length���������ַ�����ʾ����󳤶�
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
  	//echo "������������������������������";  
  	return rand(0,9).rand(0,9).rand(0,9).rand(0,9);  	  
  }
function func_read_file($f){//���ļ�����  ���磺d:/atmp/a.txt
	$filename = $f;
	$handle = fopen($filename, "r");
	$contents = fread($handle, filesize ($filename));
	fclose($handle);
  return $contents;
}
function func_write_file($f,$content){//д�ļ�����  ���磺d:/atmp/a.txt
	$filename = $f;
	$somecontent = $content;
	    if (!$handle = fopen($filename, 'w+')) {
	         echo "���ܴ��ļ� $filename".mysql_error();
	         exit;
	    }	
	    // ��$somecontentд�뵽���Ǵ򿪵��ļ��С�
	    if (fwrite($handle, $somecontent) === FALSE) {
	        echo "����д�뵽�ļ� $filename";
	        exit;
	    }
	    //echo "�ɹ��ؽ� $somecontent д�뵽�ļ�$filename";
	    fclose($handle);	

}

function func_write_file2($f,$content){//д�ļ�����  ���磺d:/atmp/a.txt
	$filename = $f;
	$somecontent = $content;
	    if (!$handle = fopen($filename, 'a')) {
	         echo "���ܴ��ļ� $filename";
	         exit;
	    }	
	    // ��$somecontentд�뵽���Ǵ򿪵��ļ��С�
	    if (fwrite($handle, $somecontent) === FALSE) {
	        echo "����д�뵽�ļ� $filename";
	        exit;
	    }
	    //echo "�ɹ��ؽ� $somecontent д�뵽�ļ�$filename";
	    fclose($handle);	

}

function func_syslog($conn,$userid,$content){//��¼��־
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