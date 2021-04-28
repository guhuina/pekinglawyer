<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gb2312');
E_D("DROP TABLE IF EXISTS `admin_user`;");
E_C("CREATE TABLE `admin_user` (
  `u_id` int(11) NOT NULL auto_increment,
  `u_name` varchar(100) default '',
  `u_xinming` varchar(100) default '',
  `u_pwd` varchar(100) default '',
  `u_qx` tinyint(4) default '0',
  `u_lasttime` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `u_lastip` varchar(100) default '',
  `u_count` int(11) default '0',
  PRIMARY KEY  (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gb2312");
E_D("replace into `admin_user` values('1','admin','wbitadmin','admin','9','2011-02-14 15:29:09','123.151.32.200','211');");

require("../../inc/footer.php");
?>