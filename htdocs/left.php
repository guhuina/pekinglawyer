<div class="fl_l width">
    <div class="cont">
    <div class="title1">
     <div class="title_word">点击最多</div>
    </div>
     <div class="bg1 main_ul">
        <ul>
		<?php
		$sql=mysql_query("select * from (select `n_article`.`a_id` AS `a_id`,`n_article`.`a_title2` AS `a_title2`,`n_article`.`hitcount` AS `hitcount`,`n_article`.`cid` AS `cid`,`n_class`.`class_title2` AS `ctitle`,`n_class`.`b_id` AS `bid`
 from `n_article` left join `n_class` on `n_article`.`cid` = `n_class`.`cid`) as aa where bid=5 order by hitcount desc limit 0,10");
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
  <div>
    <div class="title1">
     <div class="title_word">随机推荐</div>
    </div>
     <div class="bg1 main_ul">
        <ul>
		<?php
		$sql=mysql_query("select * from (select `n_article`.`a_id` AS `a_id`,`n_article`.`a_title2` AS `a_title2`,`n_article`.`hitcount` AS `hitcount`,`n_article`.`cid` AS `cid`,`n_class`.`class_title2` AS `ctitle`,`n_class`.`b_id` AS `bid`
 from `n_article` left join `n_class` on `n_article`.`cid` = `n_class`.`cid`) as aa where bid=5 order by rand() limit 0,10");
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
  </div>