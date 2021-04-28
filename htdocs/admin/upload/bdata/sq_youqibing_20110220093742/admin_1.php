<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gb2312');
E_D("DROP TABLE IF EXISTS `admin`;");
E_C("CREATE TABLE `admin` (
  `uid` int(11) NOT NULL auto_increment,
  `uname` varchar(20) default NULL,
  `upwd` varchar(20) default NULL,
  `uflag` int(11) default NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gb2312");
E_D("replace into `admin` values('1','maomao','mao123','1');");
E_D("replace into `admin` values('2','yunyun','yun123','1');");

require("../../inc/footer.php");
?>