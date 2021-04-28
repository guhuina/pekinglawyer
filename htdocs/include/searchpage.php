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
	$page=$_GET["page"];//这个是用来接收点击的页码
    $startpage = ($page>=$shownum)?$page-$shownum:0; 
    $endpage = ($page+$shownum<=$pages)?$page+$shownum:$pages; 
    
    
    if($page>0){$page_str.="<a href=$PHP_SELF?page=0>首页</a> <a href=$PHP_SELF?page=".($page-1).$queryString.">上一页</a>";} 
    if($startpage>0){$page_str.= "<b><a href=$PHP_SELF?page=".($page-$shownum*2).$queryString." title='上五页'>&laquo;</a></b>";} 
    for($i=$startpage;$i<=$endpage;$i++) 
    { 
        if($i==$page){
		$page_str.= "&nbsp;<b>[".($i+1)."]</b>&nbsp;";
		}else{
		$page_str.= "&nbsp;<a href=$PHP_SELF?page=$i>".($i+1)."</a>&nbsp;";
		} 
    } 
    if($endpage<$pages){$page_str.="<b><a href=$PHP_SELF?page=".($page+$shownum*2).$queryString." title='下五页'>&raquo;</a></b>";} 
    if($page<$pages){$page_str.="<a href=$PHP_SELF?page=".($page+1).$queryString.">下一页</a> <a href=$PHP_SELF?page=$pages>尾页</a>";} 
		
	//下拉跳转列表，循环列出所有页码：
	$page_str.= "　第 <select name='topage' size='1' onchange='window.location=\"$PHP_SELF?&page=\"+this.value'>\n";
	for ($i = 0; $i <= $pages; $i++){
		if ($i == $page){
			$page_str.=  "<option value='$i' selected>".($i+1)."</option>\n";
		}else{
			$page_str.= "<option value='$i'>".($i+1)."</option>\n";
		}
	}
	$page_str.= "</select> 页，共 ".($pages+1). "页&nbsp;累计".$sums."条信息";
	return $page_str;
}

function showpage($string) 
{ 
    global $page,$pages,$prepage,$nextpage,$sums,$queryString; //param from genpage function 
    $shownum =4/2; 
	$page=$_GET["page"];//这个是用来接收点击的页码
    $startpage = ($page>=$shownum)?$page-$shownum:0;
	$queryString= $string;
    $endpage = ($page+$shownum<=$pages)?$page+$shownum:$pages; 
    
    
    if($page>0)echo "<a href=$PHP_SELF?$queryString>首页</a> <a href=$PHP_SELF?page=".($page-1)."&$queryString>上一页</a>"; 
    if($startpage>0) 
        echo "<b><a href=$PHP_SELF?$queryString&page=".($page-$shownum*2)."  title='上五页'>&laquo;</a></b>"; 
    for($i=$startpage;$i<=$endpage;$i++) 
    { 
        if($i==$page)    echo "&nbsp;<b>[".($i+1)."]</b>&nbsp;"; 
        else        echo "&nbsp;<a href=$PHP_SELF?$queryString&page=$i>".($i+1)."</a>&nbsp;"; 
    } 
    if($endpage<$pages) 
        echo "<b><a href=$PHP_SELF?$queryString&page=".($page+$shownum*2)." title='下五页'>&raquo;</a></b>"; 
    if($page<$pages) 
        echo "<a href=$PHP_SELF?page=".($page+1)."&$queryString>下一页</a> <a href=$PHP_SELF?$queryString&page=$pages>尾页</a>"; 
		
	//下拉跳转列表，循环列出所有页码：
		echo "　第 <select name='topage' size='1' onchange='window.location=\"$PHP_SELF?".$queryString."&page=\"+this.value'>\n";
		for ($i = 0; $i <= $pages; $i++) {
			if ($i == $page)
				echo  "<option value='$i' selected>".($i+1)."</option>\n";
			else
				echo "<option value='$i'>".($i+1)."</option>\n";
		}
		echo "</select> 页，共 ".($pages+1). "页&nbsp;共".$sums."条信息";

}    
//分页函数调用示例：
//	$sql="select * from haidong_info";
//	genpage($sql,6);//分页效果，只需在sql语句下边调用此函数即可
	
	
//	$queryString="name=chenhaidong&huaidan=duanyi";//额外参数
//	showpage();//显示页码
?>