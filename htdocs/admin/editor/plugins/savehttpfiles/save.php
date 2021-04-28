<?php
/**
 * FCKeditor保存远程图片插件
 * @author slime09(slime09@gmail.com)
 * @license LGPL
 * @version 1.02 2009.4.18
 * @copyright  Copyright (c) 2009,  LinJiong (http://www.cn09.com)
 * 
 */
//说明：在luojiannx@gmail.com提供的版本基本上进行大量修改,修改代码量超过2/3
require_once './ServerXMLHTTP.php';
require_once './config.php';
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
<!--
body {
font-size:10pt;
}
-->
</style>
<body bgcolor="#E3E3C7" leftmargin="0" rightmargin="0">
<SCRIPT LANGUAGE="JavaScript">
  var dialog = window.parent;
  var oEditor = dialog.InnerDialogLoaded();
  var FCKLang = oEditor.FCKLang;
  var xEditor = oEditor.FCK;
  var a = xEditor.GetXHTML();
  dialog.SetOkButton(true);
  function Ok(){return true;}
<?php
	set_time_limit(0);
	$files=$_POST['files'];
	$fileNum=count($files);
	$realFileNum=0;
	$imgArray=array('.gif','.jpg','.png','.jpeg','.bmp','.GIF','.JPG','.PNG','.JPEG','.BMP');

	$typeArray=array();
	ob_start();
	for($i=0;$i<$fileNum;$i++)
	{
		$type=strrchr(trim($files[$i]),".");
		if($files[$i]!='' && in_array($type,$imgArray))
		{
			$now=time();
			$filename=$now.strrchr(trim($files[$i]),".");
			//$filename=md5_file(trim($files[$i])).strrchr(trim($files[$i]),".");
			$savetime=SaveHTTPFile(trim($files[$i]),$saveFilePath,$filename);
?>
			a=a.replace("<?=trim($files[$i])?>","<?=$displayUrl.'/'.$filename?>");
<?php
		}
	}
	ob_end_flush();
?>
xEditor.SetHTML(a);
</script>
<font clor=red>文件已经保存成功<br/>
<br/>

</font>
</body>