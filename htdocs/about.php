<?php require_once('include/wzclass.php'); ?>
<?php
if(isset($_GET['page'])){
   $page=$_GET['page'];
}else{
    $page=1;
}
if(isset($_GET['id'])){
$id=$_GET['id'];
}
 $tts=mysql_query("select * from n_article where a_id='$id'");
 $tt=mysql_fetch_array($tts);
 $sor=$tt['sortnum'];
 $ci=$tt['hitcount']+1;
 mysql_query("update  n_article set hitcount='$ci' where a_id='$id'");
 $cid=$tt['cid'];
 $xl=mysql_query("select * from n_class where cid='$cid'");
 $xlr=mysql_fetch_array($xl);
 $bid=$xlr['b_id'] ;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>婚姻律师网_<?php echo $tt['a_title2'];?></title>
<link href="css.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php require_once('top.php'); ?>
<div class="cont">
<?php require_once('left.php'); ?>
  <div class="fl_r">
     <div class="title4">
     <div class="title_word fl_l"><?php echo $xlr['class_title2'];?></div>
        <div class="more fl_r">当前位置：<a href="index.php">首页</a> > 文章内容</div>
        <div class="fl_cls"></div>
    </div>
    <div class="bg7">
       <div class="news_title">
        <?php echo $tt['a_title2'];?>
       </div>
       <div class="news_fb">发表于 <?php echo $tt['createtime'];?> | 来源：北京婚姻家庭律师网 </div>
       <div class="news_nr">
      <?php echo $tt['a_content'];?>
       </div>
    </div>
    <div class="bg8"></div>
  </div>
   <div class="fl_cls"></div>
</div>

<?php require_once('bq.php'); ?>
</body>
</html>
