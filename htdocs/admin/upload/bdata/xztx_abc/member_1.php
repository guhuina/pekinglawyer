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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gb2312");
E_D("replace into `member` values('1','wwwww','123456','����˭','��֪��','���ϼ�','��','abc@con.com','0','2009-08-21 14:39:09');");
E_D("replace into `member` values('2','xc_huang','123456','�����һ�','�һ�����','�ϲ���','��','abcd@sina.com','1','2009-08-21 15:37:15');");
E_D("replace into `member` values('5','abcdefg','123456','�úú�','���ò���','��˵����','��','','0','2009-08-21 15:21:51');");
E_D("replace into `member` values('6','wwwnet','123456','��֪���ҽ�ʲô��','��֪��','���ʹ�','��','wwwnet@sina.com','0','2009-08-22 21:35:05');");

require("../../inc/footer.php");
?>