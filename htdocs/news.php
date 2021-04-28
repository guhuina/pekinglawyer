<?php require_once('include/wzclass.php'); ?>
<?php require_once('include/searchpage.php'); ?>

<?php
if(isset($_GET['page'])){
   $page=$_GET['page'];
}else{
    $page=1;
}
if(isset($_GET['cid'])){
$cid=$_GET['cid'];
}else{
$aa=mysql_query("select * from n_class where b_id=5 order by  sortnum asc limit 0,1");
$aar=mysql_fetch_array($aa);
$cid=$aar['cid'];
}
 $xl=mysql_query("select * from n_class where cid='$cid'");
 $xlr=mysql_fetch_array($xl);
 $bid=$xlr['b_id'] ;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>刑事辩护网_<?php echo $xlr['class_title2'];?></title>
<link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php require_once('top.php'); ?>
<div class="cont">
<?php require_once('left.php'); ?>
  <div class="fl_r">
     <div class="title4">
     <div class="title_word fl_l"><?php echo $xlr['class_title2'];?></div>
        <div class="more fl_r">当前位置：<a href="index.php">首页</a> > <?php echo $xlr['class_title2'];?></div>
        <div class="fl_cls"></div>
    </div>
    <div class="bg7">
       <div class="news">
        <ul>
    <?php
	$sql="select * from n_article where cid='$cid' order by sortnum desc";
	genpage($sql,20);
	$query=mysql_query($sql);
	while($rs=mysql_fetch_array($query)){
	?>
          <li><span class="fl_l"><a href="article.php?id=<?php echo $rs['a_id'];?>">·<?php echo $rs['a_title2'];?></a></span><span class="fl_r"><?php echo substr($rs['createtime'],0,10);?></span></li>
    <?php 
	} 
	?>
        </ul>  
        </div>
        <div class="ym"><?php $string="cid=$cid"; showpage($string);?></div>
    </div>
    <div class="bg8"></div>
  </div>
   <div class="fl_cls"></div>
</div>

<?php require_once('bq.php'); ?>
</body>
</html>
