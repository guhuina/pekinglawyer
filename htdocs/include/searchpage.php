<?php 
 function genpage(&$sql,$page_size=10) 
 { 
      global $prepage,$nextpage,$pages,$sums;  //out param 
      $page = $_GET["page"]; 
      $eachpage = $page_size; 
      $pagesql = strstr($sql," from "); 
      $pagesql = "select count(*) as ids ".$pagesql; 
      $result = mysql_query($pagesql); 
      if($rs = mysql_fetch_array($result)) $sums = $rs[0]; 
      $pages = ceil(($sums-0.5)/$eachpage)-1; 
      $pages = $pages>=0?$pages:0; 
      $prepage = ($page>0)?$page-1:0; 
      $nextpage = ($page<$pages)?$page+1:$pages;   
      $startpos = $page*$eachpage; 
      $sql .=" limit $startpos,$eachpage "; 
 } 
function showpages() 
{ 
    global $page,$pages,$prepage,$nextpage,$sums,$queryString; //param from genpage function 
    $shownum =4/2; 
	$page=$_GET["page"];//������������յ����ҳ��
    $startpage = ($page>=$shownum)?$page-$shownum:0; 
    $endpage = ($page+$shownum<=$pages)?$page+$shownum:$pages; 
    
    
    if($page>0){$page_str.="<a href=$PHP_SELF?page=0>��ҳ</a> <a href=$PHP_SELF?page=".($page-1).$queryString.">��һҳ</a>";} 
    if($startpage>0){$page_str.= "<b><a href=$PHP_SELF?page=".($page-$shownum*2).$queryString." title='����ҳ'>&laquo;</a></b>";} 
    for($i=$startpage;$i<=$endpage;$i++) 
    { 
        if($i==$page){
		$page_str.= "&nbsp;<b>[".($i+1)."]</b>&nbsp;";
		}else{
		$page_str.= "&nbsp;<a href=$PHP_SELF?page=$i>".($i+1)."</a>&nbsp;";
		} 
    } 
    if($endpage<$pages){$page_str.="<b><a href=$PHP_SELF?page=".($page+$shownum*2).$queryString." title='����ҳ'>&raquo;</a></b>";} 
    if($page<$pages){$page_str.="<a href=$PHP_SELF?page=".($page+1).$queryString.">��һҳ</a> <a href=$PHP_SELF?page=$pages>βҳ</a>";} 
		
	//������ת�б�ѭ���г�����ҳ�룺
	$page_str.= "���� <select name='topage' size='1' onchange='window.location=\"$PHP_SELF?&page=\"+this.value'>\n";
	for ($i = 0; $i <= $pages; $i++){
		if ($i == $page){
			$page_str.=  "<option value='$i' selected>".($i+1)."</option>\n";
		}else{
			$page_str.= "<option value='$i'>".($i+1)."</option>\n";
		}
	}
	$page_str.= "</select> ҳ���� ".($pages+1). "ҳ&nbsp;�ۼ�".$sums."����Ϣ";
	return $page_str;
}

function showpage($string) 
{ 
    global $page,$pages,$prepage,$nextpage,$sums,$queryString; //param from genpage function 
    $shownum =4/2; 
	$page=$_GET["page"];//������������յ����ҳ��
    $startpage = ($page>=$shownum)?$page-$shownum:0;
	$queryString= $string;
    $endpage = ($page+$shownum<=$pages)?$page+$shownum:$pages; 
    
    
    if($page>0)echo "<a href=$PHP_SELF?$queryString>��ҳ</a> <a href=$PHP_SELF?page=".($page-1)."&$queryString>��һҳ</a>"; 
    if($startpage>0) 
        echo "<b><a href=$PHP_SELF?$queryString&page=".($page-$shownum*2)."  title='����ҳ'>&laquo;</a></b>"; 
    for($i=$startpage;$i<=$endpage;$i++) 
    { 
        if($i==$page)    echo "&nbsp;<b>[".($i+1)."]</b>&nbsp;"; 
        else        echo "&nbsp;<a href=$PHP_SELF?$queryString&page=$i>".($i+1)."</a>&nbsp;"; 
    } 
    if($endpage<$pages) 
        echo "<b><a href=$PHP_SELF?$queryString&page=".($page+$shownum*2)." title='����ҳ'>&raquo;</a></b>"; 
    if($page<$pages) 
        echo "<a href=$PHP_SELF?page=".($page+1)."&$queryString>��һҳ</a> <a href=$PHP_SELF?$queryString&page=$pages>βҳ</a>"; 
		
	//������ת�б�ѭ���г�����ҳ�룺
		echo "���� <select name='topage' size='1' onchange='window.location=\"$PHP_SELF?".$queryString."&page=\"+this.value'>\n";
		for ($i = 0; $i <= $pages; $i++) {
			if ($i == $page)
				echo  "<option value='$i' selected>".($i+1)."</option>\n";
			else
				echo "<option value='$i'>".($i+1)."</option>\n";
		}
		echo "</select> ҳ���� ".($pages+1). "ҳ&nbsp;��".$sums."����Ϣ";

}    
//��ҳ��������ʾ����
//	$sql="select * from haidong_info";
//	genpage($sql,6);//��ҳЧ����ֻ����sql����±ߵ��ô˺�������
	
	
//	$queryString="name=chenhaidong&huaidan=duanyi";//�������
//	showpage();//��ʾҳ��
?>