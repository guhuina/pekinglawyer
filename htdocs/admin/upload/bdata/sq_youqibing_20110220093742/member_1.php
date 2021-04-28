<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gb2312');
E_D("DROP TABLE IF EXISTS `member`;");
E_C("CREATE TABLE `member` (
  `id` int(11) NOT NULL auto_increment,
  `user_name` varchar(200) default NULL,
  `user_pwd` varchar(50) default NULL,
  `question` varchar(200) default NULL,
  `answer` varchar(200) default NULL,
  `realname` varchar(200) default NULL,
  `u_sex` varchar(4) default NULL,
  `user_mail` varchar(200) default NULL,
  `user_qx` tinyint(4) default NULL,
  `reg_time` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gb2312");

require("../../inc/footer.php");
?>