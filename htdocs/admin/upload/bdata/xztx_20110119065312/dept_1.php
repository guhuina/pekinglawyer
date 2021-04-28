<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gb2312');
E_D("DROP TABLE IF EXISTS `dept`;");
E_C("CREATE TABLE `dept` (
  `id` int(11) NOT NULL auto_increment,
  `webtitle` varchar(50) default '',
  `author` varchar(50) default '',
  `gsname` varchar(50) default '',
  `keywd` varchar(250) default '',
  `address` varchar(50) default '',
  `d_content` varchar(200) default '',
  `zip` varchar(50) default '',
  `tel` varchar(50) default '',
  `fax` varchar(50) default '',
  `lxr` varchar(50) default '',
  `icp` varchar(50) default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gb2312");
E_D("replace into `dept` values('1','呼叫中心_北京呼叫中心管理平台,北京讯众通信呼叫中心平台','北京讯众通信呼叫中心','北京讯众通信呼叫中心','北京PHP培训,北京网页设计培训,北京网站培训,网站培训,PHP培训,网页设计培训,SEO培训,北京SEO培训,网站建设培训,北京网站建设培训,网站开发培训,网站设计培训,网站后台开发培训,网站美工培训,培训学校,培训机构','北京市丰台区成寿寺路中街明丹利写字楼B座421室','北京讯众通信呼叫中心\r\n:4006-010-850','100078','400-601-0850','400-601-0850','黄老师','中华人民共和国工业和信息化备案许可证:京ICP备09053801号');");

require("../../inc/footer.php");
?>