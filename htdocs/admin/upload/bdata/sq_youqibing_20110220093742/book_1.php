<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gb2312');
E_D("DROP TABLE IF EXISTS `book`;");
E_C("CREATE TABLE `book` (
  `book_id` int(11) NOT NULL auto_increment,
  `UserName` varchar(50) default NULL,
  `UserMail` varchar(100) default NULL,
  `url` varchar(100) default NULL,
  `QQ` varchar(20) default NULL,
  `Comments` varchar(600) default NULL,
  `face` varchar(4) default NULL,
  `pic` varchar(4) default NULL,
  `createtime` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `IP` varchar(100) default '',
  `is_state` tinyint(4) default '0',
  `Replay` varchar(2000) default NULL,
  PRIMARY KEY  (`book_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gb2312");

require("../../inc/footer.php");
?>