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
E_D("replace into `dept` values('1','����������Ƽ���չ���޹�˾|������Ƽ�|���������|�����������˾','����������Ƽ���չ���޹�˾','����������Ƽ���չ���޹�˾','����� ������Ƽ� �����������˾ ����������Ƽ� ����������Ƽ���չ���޹�˾','�����г���������·7��3-2-1201��','������ṫ����ȫ�豸�����ġ���ȫ���������ġ������������������豸���������ġ�ͨѶ�豸�������Ǳ���е�豸����𽻵硢���Ӳ�Ʒ�� ','100107','010-57036338','010-85753979','������','�л����񹲺͹���ҵ����Ϣ���������֤:��ICP��11000880��-1');");

require("../../inc/footer.php");
?>