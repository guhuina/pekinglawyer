<?php require_once('include/wzclass.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>刑事辩护网</title>
<link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php require_once('top.php'); ?>
<!--hot banner-->
<div class="cont">
   <div class="fl_l width">
<div class="bg1 height">
         <div class="hot">
		<?php
		$sql=mysql_query("select * from (select `n_article`.`a_id` AS `a_id`,`n_article`.`sortnum` AS `sortnum`,`n_article`.`remen` AS `remen`,`n_article`.`a_content2` AS `a_content2`,`n_article`.`a_title2` AS `a_title2`,`n_article`.`hitcount` AS `hitcount`,`n_article`.`cid` AS `cid`,`n_class`.`class_title2` AS `ctitle`,`n_class`.`b_id` AS `bid`
 from `n_article` left join `n_class` on `n_article`.`cid` = `n_class`.`cid`) as aa where bid=5 and remen=1 order by sortnum limit 0,1");
        while($rs=mysql_fetch_array($sql)){
		?>
            <span><a class="blue" href="article.php?id=<?php echo $rs['a_id'];?>"><?php echo $rs['a_title2'];?></a></span> 
       <p><?php echo $rs['a_content2'];?></p>
	   <?php
	   }
	   ?>
        </div>
        <div class="hot2">
          <ul>
		<?php
		$sql=mysql_query("select * from (select `n_article`.`a_id` AS `a_id`,`n_article`.`sortnum` AS `sortnum`,`n_article`.`remen` AS `remen`,`n_article`.`a_content2` AS `a_content2`,`n_article`.`a_title2` AS `a_title2`,`n_article`.`hitcount` AS `hitcount`,`n_article`.`cid` AS `cid`,`n_class`.`class_title2` AS `ctitle`,`n_class`.`b_id` AS `bid`
 from `n_article` left join `n_class` on `n_article`.`cid` = `n_class`.`cid`) as aa where bid=5 and remen=1 order by sortnum limit 1,6");
        while($rs=mysql_fetch_array($sql)){
		?>
          <li><a href="article.php?id=<?php echo $rs['a_id'];?>"><?php echo $rs['a_title2'];?></a></li>
       <?php
	   }
	   ?>
          </ul>
        </div>
     </div>
      <div class="bg2"></div>
 </div>
   <div class="fl_l padding3">
     <div class="bg3 banner"><!--<img src="img/banner1.jpg" width="350" height="235" /> -->
	 
<script language="javascript" src="js/jquery-1.4a2.min.js"></script>
<script language="javascript" src="js/jquery.KinSlideshow-1.1.js"></script>
<SCRIPT type=text/javascript>
$(function(){
	$("#KinSlideshow").KinSlideshow({
			moveStyle:"right",
			titleBar:{titleBar_height:30,titleBar_bgColor:"#08355c",titleBar_alpha:0.5},
			titleFont:{TitleFont_size:12,TitleFont_color:"#FFFFFF",TitleFont_weight:"normal"},
			btn:{btn_bgColor:"#FFFFFF",btn_bgHoverColor:"#1072aa",btn_fontColor:"#000000",btn_fontHoverColor:"#FFFFFF",btn_borderColor:"#cccccc",btn_borderHoverColor:"#1188c0",btn_borderWidth:1}
	});
})
</SCRIPT>
<div id="KinSlideshow" style="visibility:hidden;">
      <?php
     $sqlstr=mysql_query("select * from n_article where cid=2 order by sortnum asc limit 0,7");
     while($rs=mysql_fetch_array($sqlstr)){
     ?>
      <a href="<?php echo $rs['a_url'];?>" target="_blank"><img src="<?php echo $rs['a_pic'];?>" width="350" height="235" alt="" /></a>
      <?php
     }
     ?>
    </div>  
	 
	 </div>
     <div class="bg4"></div>
  </div>
   <div class="fl_l">
      <div class="bg1 hot3">
        <ul>
		<?php
		$sql=mysql_query("select * from (select `n_article`.`a_id` AS `a_id`,`n_article`.`sortnum` AS `sortnum`,`n_article`.`sy` AS `sy`,`n_article`.`a_content2` AS `a_content2`,`n_article`.`a_title2` AS `a_title2`,`n_article`.`hitcount` AS `hitcount`,`n_article`.`cid` AS `cid`,`n_class`.`class_title2` AS `ctitle`,`n_class`.`b_id` AS `bid`
 from `n_article` left join `n_class` on `n_article`.`cid` = `n_class`.`cid`) as aa where bid=5 and sy=1 order by sortnum limit 0,8");
        while($rs=mysql_fetch_array($sql)){
		?>
          <li><a href="article.php?id=<?php echo $rs['a_id'];?>"><?php echo $rs['a_title2'];?></a></li>
       <?php
	   }
	   ?>
        </ul>
      </div>
      <div class="bg2"></div>
   </div>
   <div class="fl_cls"></div>
</div>

<!--公告-->
<div class="gonggao cont">
<span class="blue2 lf">最新动态：</span><marquee direction="left" width="860" scrollamount=3 onmouseover="this.stop()" onmouseout="this.start()"  align="left">
      <?php
     $sqlstr=mysql_query("select * from n_article where cid=3 order by sortnum asc limit 0,10");
     while($rs=mysql_fetch_array($sqlstr)){
     ?>
<a href="article.php?id=<?php echo $rs['a_id'];?>"><?php echo $rs['a_title2'];?></a>&nbsp;&nbsp;
<?php
}
?>
</marquee></div>

<!--财产分割 经典案例 房产分割-->
<div class="cont">
  <div class="fl_l width">
    <div class="title1">
     <div class="title_word fl_l"><!--<a href="news.php?cid=6" class="bai"> -->故意伤害罪</div>
        <div class="more fl_r"><a href="news.php?cid=6"><img src="img/more.jpg" width="34" height="7" /></a></div>
        <div class="fl_cls"></div>
    </div>
     <div class="bg1 main_ul">
        <ul>
		<?php
		  $sqlstr=mysql_query("select * from n_article where cid=6 order by  sortnum desc limit 0,10");
		  while($rs=mysql_fetch_array($sqlstr)){
		 ?>
          <li><a href="article.php?id=<?php echo $rs['a_id'];?>"><?php echo $rs['a_title2'];?></a></li>
         <?php
		 }
		 ?>
		 
        </ul>
     </div>
     <div class="bg2"></div>
  </div>
  <div class="fl_l padding3">
     <div class="title2">
     <div class="title_word fl_l">交通肇事罪</div>
        <div class="more fl_r"><a href="news.php?cid=12"><img src="img/more.jpg" width="34" height="7" /></a></div>
        <div class="fl_cls"></div>
    </div>
     <div class="bg3 main_ul2">
        <ul>
		<?php
		  $sqlstr=mysql_query("select * from n_article where cid=12 order by  sortnum desc limit 0,10");
		  while($rs=mysql_fetch_array($sqlstr)){
		 ?>
          <li><a href="article.php?id=<?php echo $rs['a_id'];?>"><?php echo $rs['a_title2'];?></a></li>
         <?php
		 }
		 ?>
        </ul>
     </div>
     <div class="bg4"></div>
  </div>
  <div class="fl_l width">
    <div class="title1">
        <div class="title_word fl_l">诈骗罪 </div>
        <div class="more fl_r"><a href="news.php?cid=16"><img src="img/more.jpg" width="34" height="7" /></a></div>
        <div class="fl_cls"></div>
    </div>
     <div class="bg1 main_ul">
        <ul>
		<?php
		  $sqlstr=mysql_query("select * from n_article where cid=16 order by  sortnum desc limit 0,10");
		  while($rs=mysql_fetch_array($sqlstr)){
		 ?>
          <li><a href="article.php?id=<?php echo $rs['a_id'];?>"><?php echo $rs['a_title2'];?></a></li>
         <?php
		 }
		 ?>
        </ul>
     </div>
     <div class="bg2"></div>
  </div>
  <div class="fl_cls"></div>
</div>

<div class="cont">
  <div class="title3">
    <div class="title_word fl_l">知名律师</div>
      <div class="more fl_r"><a href="news.php?cid=4"><img src="img/more.jpg" width="34" height="7" /></a></div>
      <div class="fl_cls"></div>
  </div>
  <div class="bg5">
<!--     <div class="lvshi">
        <img src="img/lvshi1.jpg" width="138" height="170" />
        <span class="span"><a href="#">某某律师</a></span>
     </div> -->
	 
	 
        <div id="div" style="overflow:hidden;height:210px;width:950px;border:0">
          <table border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td><div id="div1">
                  <table width="950" height="210" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><table width="950" height="210"  border="0" cellpadding="0" cellspacing="0">
                          <tr>
				 <?php
				  $sqlstr=mysql_query("select * from n_article where cid=4 order by sortnum asc");
				  while($rs=mysql_fetch_array($sqlstr)){
				 ?>
                            <td align="center"><div class="lvshi">
        <a href="article.php?id=<?php echo $rs['a_id'];?>"><img src="<?php echo $rs['a_pic'];?>" width="138" height="170" /></a>
        <span class="span"><a href="article.php?id=<?php echo $rs['a_id'];?>"><?php echo $rs['a_title2'];?></a></span>
     </div></td>
			<?php
			 }
			 ?>                  
                          </tr>
                      </table></td>
                    </tr>
                  </table>
              </div></td>
              <td id="div2" width="0"></td>
            </tr>
          </table>
        </div>
        <script>
      var speeda=9//速度数值越大速度越慢
      div2.innerHTML=div1.innerHTML
      function Marqueea(){
      if(div2.offsetWidth-div.scrollLeft<=0)
      div.scrollLeft-=div1.offsetWidth
      else{
      div.scrollLeft++
      }
      }
      var MyMara=setInterval(Marqueea,speeda)
      div.onmouseover=function() {clearInterval(MyMara)}
      div.onmouseout=function() {MyMara=setInterval(Marqueea,speeda)}
      </script>
     <div class="fl_cls"></div>
  </div>
  <div class="bg6"></div>
</div>

<!--协议离婚 未婚同居 离婚诉讼-->
<div class="cont">
  <div class="fl_l width">
    <div class="title1">
     <div class="title_word fl_l">渎职罪</div>
        <div class="more fl_r"><a href="news.php?cid=15"><img src="img/more.jpg" width="34" height="7" /></a></div>
        <div class="fl_cls"></div>
    </div>
     <div class="bg1 main_ul">
        <ul>
		<?php
		  $sqlstr=mysql_query("select * from n_article where cid=15 order by  sortnum desc limit 0,10");
		  while($rs=mysql_fetch_array($sqlstr)){
		 ?>
          <li><a href="article.php?id=<?php echo $rs['a_id'];?>"><?php echo $rs['a_title2'];?></a></li>
         <?php
		 }
		 ?>
        </ul>
     </div>
     <div class="bg2"></div>
  </div>
  <div class="fl_l padding3">
     <div class="title2">
     <div class="title_word fl_l">贪污贿赂罪</div>
        <div class="more fl_r"><a href="news.php?cid=20"><img src="img/more.jpg" width="34" height="7" /></a></div>
        <div class="fl_cls"></div>
    </div>
     <div class="bg3 main_ul2">
        <ul>
		<?php
		  $sqlstr=mysql_query("select * from n_article where cid=20 order by  sortnum desc limit 0,10");
		  while($rs=mysql_fetch_array($sqlstr)){
		 ?>
          <li><a href="article.php?id=<?php echo $rs['a_id'];?>"><?php echo $rs['a_title2'];?></a></li>
         <?php
		 }
		 ?>
        </ul>
     </div>
     <div class="bg4"></div>
  </div>
  <div class="fl_l width">
    <div class="title1">
      <div class="title_word fl_l">抢劫罪</div>
        <div class="more fl_r"><a href="news.php?cid=8"><img src="img/more.jpg" width="34" height="7" /></a></div>
        <div class="fl_cls"></div>
    </div>
     <div class="bg1 main_ul">
        <ul>
		<?php
		  $sqlstr=mysql_query("select * from n_article where cid=8 order by  sortnum desc limit 0,10");
		  while($rs=mysql_fetch_array($sqlstr)){
		 ?>
          <li><a href="article.php?id=<?php echo $rs['a_id'];?>"><?php echo $rs['a_title2'];?></a></li>
         <?php
		 }
		 ?>
        </ul>
     </div>
     <div class="bg2"></div>
  </div>
  <div class="fl_cls"></div>
</div>
<!--子女抚养-->
<div class="cont">
  <div class="title3">
    <div class="title_word fl_l">法律讲座</div>
      <div class="more fl_r"><a href="news.php?cid=28"><img src="img/more.jpg" width="34" height="7" /></a></div>
      <div class="fl_cls"></div>
  </div>
  <div class="bg5">
<!--<div class="zinv">
        <img src="img/zinv1.jpg" width="200" height="150" />
        <span class="span"><a class="blue" href="#">新婚姻法解释：父亲怀疑...</a></span>
     </div> -->
	 
			<div id="demo" style="overflow:hidden;height:180px;width:950px;border:0">
              <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div id="demo1">
                      <table width="950" height="180" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td><table width="950" height="180"  border="0" cellpadding="0" cellspacing="0">
                    <tr>
 <?php
  $sqlstr=mysql_query("select * from n_article where cid=28  order by sortnum desc limit 0,20");
  while($rs=mysql_fetch_array($sqlstr)){
 ?>
                      <td align="center"><div class="zinv">
        <a class="blue" href="article.php?id=<?php echo $rs['a_id'];?>"><img src="<?php echo $rs['a_pic'];?>" width="200" height="150" /></a>
        <span class="span"><a class="blue" href="article.php?id=<?php echo $rs['a_id'];?>"><?php echo $rs['a_title2'];?></a></span>
     </div></td>
<?php
 }
 ?>           
 
                   </tr>
                </table></td>
				        </tr>
                      </table>
                  </div></td>
                  <td id=demo2 width="0"></td>
                </tr>
              </table>
            </div>
     <script>
      var speed=9//速度数值越大速度越慢
      demo2.innerHTML=demo1.innerHTML
      function Marquee(){
      if(demo2.offsetWidth-demo.scrollLeft<=0)
      demo.scrollLeft-=demo1.offsetWidth
      else{
      demo.scrollLeft++
      }
      }
      var MyMar=setInterval(Marquee,speed)
      demo.onmouseover=function() {clearInterval(MyMar)}
      demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)}
      </script>
	 
     <div class="fl_cls"></div>
  </div>
  <div class="bg6"></div>
</div>

<!--过失赔偿 婚姻法 子女抚养-->
<div class="cont">
  <div class="fl_l width">
    <div class="title1">
     <div class="title_word fl_l">聚众斗殴罪</div>
        <div class="more fl_r"><a href="news.php?cid=24"><img src="img/more.jpg" width="34" height="7" /></a></div>
        <div class="fl_cls"></div>
    </div>
     <div class="bg1 main_ul">
        <ul>
		<?php
		  $sqlstr=mysql_query("select * from n_article where cid=24 order by  sortnum desc limit 0,10");
		  while($rs=mysql_fetch_array($sqlstr)){
		 ?>
          <li><a href="article.php?id=<?php echo $rs['a_id'];?>"><?php echo $rs['a_title2'];?></a></li>
         <?php
		 }
		 ?>
        </ul>
     </div>
     <div class="bg2"></div>
  </div>
  <div class="fl_l padding3">
     <div class="title2">
     <div class="title_word fl_l">非法吸收公众存款<br />
     </div>
        <div class="more fl_r"><a href="news.php?cid=10"><img src="img/more.jpg" width="34" height="7" /></a></div>
        <div class="fl_cls"></div>
    </div>
     <div class="bg3 main_ul2">
        <ul>
		<?php
		  $sqlstr=mysql_query("select * from n_article where cid=10 order by  sortnum desc limit 0,10");
		  while($rs=mysql_fetch_array($sqlstr)){
		 ?>
          <li><a href="article.php?id=<?php echo $rs['a_id'];?>"><?php echo $rs['a_title2'];?></a></li>
         <?php
		 }
		 ?>
        </ul>
     </div>
     <div class="bg4"></div>
  </div>
  <div class="fl_l width">
    <div class="title1">
        <div class="title_word fl_l">绑架罪</div>
        <div class="more fl_r"><a href="news.php?cid=7"><img src="img/more.jpg" width="34" height="7" /></a></div>
        <div class="fl_cls"></div>
    </div>
     <div class="bg1 main_ul">
        <ul>
		<?php
		  $sqlstr=mysql_query("select * from n_article where cid=7 order by  sortnum desc limit 0,10");
		  while($rs=mysql_fetch_array($sqlstr)){
		 ?>
          <li><a href="article.php?id=<?php echo $rs['a_id'];?>"><?php echo $rs['a_title2'];?></a></li>
         <?php
		 }
		 ?>
        </ul>
     </div>
     <div class="bg2"></div>
  </div>
  <div class="fl_cls"></div>
</div>

<!--涉外离婚 家庭暴力 法律文书-->
<div class="cont">
  <div class="fl_l width">
    <div class="title1">
     <div class="title_word fl_l">贩卖运输毒品罪</div>
        <div class="more fl_r"><a href="news.php?cid=19"><img src="img/more.jpg" width="34" height="7" /></a></div>
        <div class="fl_cls"></div>
    </div>
     <div class="bg1 main_ul">
        <ul>
		<?php
		  $sqlstr=mysql_query("select * from n_article where cid=19 order by  sortnum desc limit 0,10");
		  while($rs=mysql_fetch_array($sqlstr)){
		 ?>
          <li><a href="article.php?id=<?php echo $rs['a_id'];?>"><?php echo $rs['a_title2'];?></a></li>
         <?php
		 }
		 ?>
        </ul>
     </div>
     <div class="bg2"></div>
  </div>
  <div class="fl_l padding3">
     <div class="title2">
     <div class="title_word fl_l">盗窃罪</div>
        <div class="more fl_r"><a href="news.php?cid=18"><img src="img/more.jpg" width="34" height="7" /></a></div>
        <div class="fl_cls"></div>
    </div>
     <div class="bg3 main_ul2">
        <ul>
		<?php
		  $sqlstr=mysql_query("select * from n_article where cid=18 order by  sortnum desc limit 0,10");
		  while($rs=mysql_fetch_array($sqlstr)){
		 ?>
          <li><a href="article.php?id=<?php echo $rs['a_id'];?>"><?php echo $rs['a_title2'];?></a></li>
         <?php
		 }
		 ?>
        </ul>
     </div>
     <div class="bg4"></div>
  </div>
  <div class="fl_l width">
    <div class="title1">
        <div class="title_word fl_l">走私罪</div>
        <div class="more fl_r"><a href="news.php?cid=11"><img src="img/more.jpg" width="34" height="7" /></a></div>
        <div class="fl_cls"></div>
    </div>
     <div class="bg1 main_ul">
        <ul>
		<?php
		  $sqlstr=mysql_query("select * from n_article where cid=11 order by  sortnum desc limit 0,10");
		  while($rs=mysql_fetch_array($sqlstr)){
		 ?>
          <li><a href="article.php?id=<?php echo $rs['a_id'];?>"><?php echo $rs['a_title2'];?></a></li>
         <?php
		 }
		 ?>
        </ul>
     </div>
     <div class="bg2"></div>
  </div>
  <div class="fl_cls"></div>
</div>
<?php require_once('bq.php'); ?>
</body>
</html>
