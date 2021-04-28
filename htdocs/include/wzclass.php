<?php
 class qtclass{
     private $host;
	 private $username;
	 private $password;
	 private $database;
	 private $sqlpg;
	 private $website;
	 
	function __construct(){
		$this->hostname="hdm-018.hichina.com";
		$this->username="hdm0180597";
		$this->password="hyu1349780001";
		$this->database="hdm0180597_db";
		$this->website="http://".$_SERVER['SERVER_NAME']."/";
		$this->connect();
		$this->selectdb();
	}
	
	//以下是和数据库服务建立连接
	function connect(){
		$this->conn=mysql_connect($this->hostname,$this->username,$this->password)or die("和服务器连接不通");
	}
	//选择数据库的方法
	function selectdb(){
		mysql_select_db($this->database)or die(mysql_error());
		mysql_query("set names 'gbk'"); 
	}
  function s_class($sqlstr){
    $query=mysql_query($sqlstr);
	return $query;
  }
   function s_sclass($where,$order,$limit){
   $sqlstr="select 
   n_class.class_title2
   ,n_class.webpage as webpage
   ,b_class.class_title2 as b_title2
   ,b_class.webpage as b_webpage
   ,bb_class.class_title2 as bb_title2
   ,bb_class.webpage as bb_webpage
   ,n_class.class_title
   ,n_class.cid,n_class.b_id
   ,b_class.b_id as bb_id
    from n_class left join n_class as b_class on n_class.b_id=b_class.cid   left join n_class as bb_class on b_class.b_id=bb_class.cid    $where $order $limit";
  //echo $sqlstr;
  //exit();
    $query=mysql_query($sqlstr);
	return $query;
   }
   //文章普通查询
   function myselect($where="",$order="",$limit="",$flag=""){
    if($flag==""){
	  $sqlstr="select `n_article`.`a_id` AS `a_id`,`n_article`.`a_url` AS `a_url`,`n_article`.`big_pic` AS `big_pic`,`n_article`.`a_title` AS `a_title`,`n_article`.`a_title2` AS `a_title2`,
`a_content2` AS `a_content2`,`n_article`.`a_pic` AS `a_pic`,`n_article`.`createtime` AS `createtime`,`n_article`.`cid` AS `cid`,
`n_class`.`class_title2` AS `c_title`,`n_class`.`webpage` AS `c_webpage`,`bbclass`.`webpage` AS `bb_webpage` 
from (((`n_article` left join `n_class` on((`n_article`.`cid` = `n_class`.`cid`))) left join `n_class` `bclass` on((`n_class`.`b_id` = `bclass`.`cid`))) left join `n_class` `bbclass` on(((`bclass`.`b_id` = `bbclass`.`cid`) ))) 
where n_article.a_state=1 ".$where. $order.$limit;
		}else{
			  $sqlstr="select `n_article`.`a_id` AS `a_id`,`n_article`.`a_url` AS `a_url`,`n_article`.`big_pic` AS `big_pic`,`n_article`.`a_title` AS `a_title`,`n_article`.`a_title2` AS `a_title2`,
		`a_content2` AS `a_content2`,`n_article`.`a_pic` AS `a_pic`,`n_article`.`createtime` AS `createtime`,`n_article`.`cid` AS `cid`,
		`n_class`.`class_title2` AS `c_title`,`n_class`.`webpage` AS `c_webpage`,`bbclass`.`webpage` AS `bb_webpage` 
		from (((`n_article` left join `n_class` on((`n_article`.`cid` = `n_class`.`cid`))) left join `n_class` `bclass` on((`n_class`.`b_id` = `bclass`.`cid`))) left join `n_class` `bbclass` on(((`bclass`.`b_id` = `bbclass`.`cid`) ))) 
		where  `n_article`.`cid`!=1 ".$where. $order.$limit;
		}
 //echo $sqlstr;
 //exit();
	  $query=mysql_query($sqlstr);
	  return $query;
   }
   
   //下面是列出的一级文章循环并输出
 	 function select_about($where="",$class,$order="",$limit="",$liclass=""){
	  $sqlstr="select `n_article`.`a_id` AS `a_id`,`n_article`.`a_url` AS `a_url`,`n_article`.`a_title` AS `a_title`,`n_article`.`a_title2` AS `a_title2`,`bclass`.`webpage` AS `bb_webpage`,
`n_article`.`createtime` AS `createtime` from `n_article` left join `n_class` on `n_article`.`cid` = `n_class`.`cid` left join `n_class` `bclass` on `n_class`.`b_id` = `bclass`.`cid`   where n_article.a_state=1 $where $order $limit";
	  $query=mysql_query($sqlstr);
	   $str="";
		  while($rs=mysql_fetch_array($query)){
		  
		   $str=$str."<li ".$liclass."><a href=\"".$this->website."/html/".$rs['a_id'].".html\" ".$class." title=\"".$rs['a_title']."\">".$rs['a_title2']."</a></li> ";
		  }
		return $str;
	   }
 
   //查询并循环列出
	 function select_aa($where="",$class,$order="",$limit="",$liclass=""){
	  $sqlstr="select `n_article`.`a_id` AS `a_id`,`n_article`.`a_url` AS `a_url`,`n_article`.`a_title` AS `a_title`,`n_article`.`a_title2` AS `a_title2`,
`n_article`.`createtime` AS `createtime`,`bbclass`.`webpage` AS `bb_webpage`from (((`n_article` left join `n_class` on((`n_article`.`cid` = `n_class`.`cid`))) left join `n_class` `bclass` on((`n_class`.`b_id` = `bclass`.`cid`))) left join `n_class` `bbclass` on(((`bclass`.`b_id` = `bbclass`.`cid`) ))) where n_article.a_state=1 $where $order $limit";
	  $website="http://".$_SERVER['SERVER_NAME']."/";
	  $query=mysql_query($sqlstr);
	   $str="";
		  while($rs=mysql_fetch_array($query)){
		  
		   $str=$str."<li ".$liclass."><a href=\"".$this->website."/html/".$rs['a_id'].".html\" ".$class." title=\"".$rs['a_title']."\">".$rs['a_title2']."</a></li> ";
		  }
		return $str;
	   }
	//下面的一个方法是查询并且列出,同时也把所属类别名称列出来
	  function select_ca($where="",$order="",$limit="",$class="",$classli=""){
	  $sqlstr="select `n_article`.`a_id` AS `a_id`,`n_article`.`big_pic` AS `big_pic`,`n_article`.`a_url` AS `a_url`,`n_article`.`a_title` AS `a_title`,`n_article`.`a_title2` AS `a_title2`,
`a_content2` AS `a_content2`,`n_article`.`a_pic` AS `a_pic`,`n_article`.`createtime` AS `createtime`,`n_article`.`cid` AS `cid`,
`n_class`.`class_title2` AS `c_title`,`n_class`.`class_title` AS `class_title`,`n_class`.`webpage` AS `c_webpage`,`bbclass`.`webpage` AS `bb_webpage` 
from (((`n_article` left join `n_class` on((`n_article`.`cid` = `n_class`.`cid`))) left join `n_class` `bclass` on((`n_class`.`b_id` = `bclass`.`cid`))) left join `n_class` `bbclass` on(((`bclass`.`b_id` = `bbclass`.`cid`) )))  where n_article.a_state=1 ".$where. $order.$limit;
 //echo $sqlstr;
 //exit();
	  $website="http://".$_SERVER['SERVER_NAME']."/";
	  $query=mysql_query($sqlstr);
	   $str="";
		  while($rs=mysql_fetch_array($query)){
		  
		   $str=$str."<li ".$classli."><a href=\"".$this->website."news_display.php?a_id=".$rs['a_id'].$class."\">".$rs['a_title2']."</a></li>
	 	   ";
		  // echo $str;
		  }
		return $str;
	  }
	   function display($where){
	   $sqlstr="select `n_article`.`a_id` AS `a_id`,`n_article`.`a_title` AS `a_title`,`n_article`.`a_title2` AS `a_title2`,
`n_article`.`keywords` AS `keywords`,`n_article`.`flag` AS `flag`,`n_article`.`a_url` AS `a_url`,`n_article`.`a_content2` AS `a_content2`,`n_article`.`big_pic` AS `big_pic`,`n_article`.`a_content` AS `a_content`,`n_article`.`createtime` AS `createtime`,
`n_article`.`cid` AS `cid`,`n_class`.`class_title2` AS `c_title`,`n_class`.`webpage` AS `c_webpage`,`n_class`.`b_id` AS `b_id`,`bclass`.`class_title2` AS `b_title`,`bclass`.
`webpage` AS `b_webpage`,`bclass`.`b_id` AS `bb_id`,`bbclass`.`class_title2` AS `bb_title`,`bbclass`.`webpage` AS `bb_webpage` 
from (((`n_article` left join `n_class` on((`n_article`.`cid` = `n_class`.`cid`))) left join `n_class` `bclass` on((`n_class`.`b_id` = `bclass`.`cid`))) left join `n_class` `bbclass` on(((`bclass`.`b_id` = `bbclass`.`cid`) ))) ".$where;
	   $query=mysql_query($sqlstr);
	   return $query;
	   }
	 function bbclass($bbid){
	 $sqlstr="select * from n_class where cid=$bbid";
	 //echo $sqlstr;
//exit();

	 $query=mysql_query($sqlstr);
	 $rsbbclass=mysql_fetch_array($query);
	 return $rsbbclass;
	 }  
	
	//关闭数据库的链接
function myclose(){
	mysql_close();
} 
function mysubstr($str,$start,$len) {   //截取gb2312中文字符函数
  $tmpstr="";
  $strlen=$start+$len;
  for($i=0;$i<$strlen;$i++) {
  if(ord(substr($str,$i,1))>0xa0) {
  $tmpstr.=substr($str,$i,2);
  $i++;
  } else
  $tmpstr.=substr($str,$i,1);
  }
  return $tmpstr;
}

  }
   $wz=new qtclass();
   //echo $wz->select_aa("and n_article.cid=4 ","a14");
   $website="http://".$_SERVER['SERVER_NAME']."/";
   
  ?>