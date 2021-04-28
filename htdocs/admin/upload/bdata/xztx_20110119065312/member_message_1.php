<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gb2312');
E_D("DROP TABLE IF EXISTS `member_message`;");
E_C("CREATE TABLE `member_message` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(200) default NULL,
  `content` varchar(3000) default NULL,
  `from_user_name` varchar(200) default NULL,
  `to_user_name` varchar(200) default NULL,
  `is_yd` tinyint(4) default '0',
  `is_del` tinyint(4) default '0',
  `createtime` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gb2312");
E_D("replace into `member_message` values('1','abcd@sina.com','asdfasdgasdgasdfasdf','abcd@sina.com','abcd@sina.com','0','0','2009-08-22 12:08:46');");
E_D("replace into `member_message` values('3','asdfasdgasdg','asdfasdgasdf','wwwnet@sina.com','abcd@sina.com','0','0','2009-08-22 21:36:30');");
E_D("replace into `member_message` values('4','awefasdgqwet','asdfasdfasdf','abcd@sina.com','wwwnet@sina.com','0','0','2009-08-22 21:37:29');");
E_D("replace into `member_message` values('5','asdfasd','asdf','xc_huang','xc_huang','0','0','2009-08-29 11:44:56');");

require("../../inc/footer.php");
?>