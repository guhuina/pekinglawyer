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
E_D("replace into `dept` values('1','��������_�����������Ĺ���ƽ̨,����Ѷ��ͨ�ź�������ƽ̨','����Ѷ��ͨ�ź�������','����Ѷ��ͨ�ź�������','����PHP��ѵ,������ҳ�����ѵ,������վ��ѵ,��վ��ѵ,PHP��ѵ,��ҳ�����ѵ,SEO��ѵ,����SEO��ѵ,��վ������ѵ,������վ������ѵ,��վ������ѵ,��վ�����ѵ,��վ��̨������ѵ,��վ������ѵ,��ѵѧУ,��ѵ����','�����з�̨��������·�н�������д��¥B��421��','����Ѷ��ͨ�ź�������\r\n:4006-010-850','100078','400-601-0850','400-601-0850','����ʦ','�л����񹲺͹���ҵ����Ϣ���������֤:��ICP��09053801��');");

require("../../inc/footer.php");
?>