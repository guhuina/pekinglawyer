<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gb2312');
E_D("DROP TABLE IF EXISTS `n_zxreg`;");
E_C("CREATE TABLE `n_zxreg` (
  `id` int(11) NOT NULL auto_increment,
  `gsname` varchar(200) default '',
  `gsurl` varchar(200) default '',
  `lxr` varchar(100) default '',
  `tel` varchar(30) default '0',
  `gstel` varchar(30) default '0',
  `mail` varchar(200) default '',
  `sheng` varchar(50) default '',
  `address` varchar(200) default '',
  `hangye` varchar(100) default '',
  `gzfw` varchar(100) default '',
  `content` text,
  `flag` tinyint(2) default '0',
  `state` tinyint(2) default '0',
  `createtime` datetime default NULL,
  `uptime` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `cid` int(2) default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gb2312");

require("../../inc/footer.php");
?>