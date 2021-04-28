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
E_D("replace into `dept` values('1','北京游骑兵科技发展有限公司|游骑兵科技|北京游骑兵|北京游骑兵公司','北京游骑兵科技发展有限公司','北京游骑兵科技发展有限公司','游骑兵 游骑兵科技 北京游骑兵公司 北京游骑兵科技 北京游骑兵科技发展有限公司','北京市朝阳区立清路7号3-2-1201室','销售社会公共安全设备及器材、安全检查防爆器材、计算机、软件及辅助设备、照相器材、通讯设备、仪器仪表、机械设备、五金交电、电子产品。 ','100107','010-57036338','010-85753979','侯先生','中华人民共和国工业和信息化备案许可证:浙ICP备11000880号-1');");

require("../../inc/footer.php");
?>