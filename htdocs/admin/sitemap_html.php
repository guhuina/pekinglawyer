<?php
########################################
#
# PHP版的Google Sitemap 生成器 ver 0.1
# 注意：必须对当前目录有写的权限
#
########################################

#网站根域名
$WebRoot = "http://localhost/";//这里改成你的网址
#XML文件名称
$XMLFile = "sitemaps.xml";
#要建虑的目录[区分大小写]，注意：前面加号是因为0在PHP中表示假，这样取子串位置时就不会返回假
#以本程序所在的目录为当前目录，即扫描的根目录，所以目录前面不用加上"/"
$FilterDir = "+";
#要索引的文件扩展名[小写]
$IndexFileExt = "+|php|html|";
#XML头部
$XMLText = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<urlset xmlns=\"http://www.google.com/schemas/sitemap/0.84\">\n";
#XML尾部
$XMLEndText = "</urlset>";

echo "开始构建文件XML索引...";
DealFP(".");
$XMLText .= $XMLEndText;
makeFile($XMLFile,$XMLText);
echo "ok!<br><br>";
$url = $WebRoot.$XMLFile;
echo "<a href=".$url.">打开</a>:".$url;

#公用函数库：

#新建文件
function makeFile($fileName, $text){
  $fp = fopen($fileName, "w+");
  fwrite($fp, $text);
  fclose($fp);
}

/**
* 将指定内容添加到XML中
* $f 含相对路径的文件名称
* $dt 日期时间型
*/
function addToXML($f, $dt){
  $s = "<url><loc>".$GLOBALS["WebRoot"].$f."</loc><lastmod>".$dt."</lastmod></url>\n";
  
  $GLOBALS["XMLText"] .= $s;
}

/**
* 遍历指定的目录以及子目录，将符合条件的文件加入XML
* $p 指定的目录
*/
function DealFP($p){
  $FilterDir = $GLOBALS["FilterDir"];
  $IndexFileExt = $GLOBALS["IndexFileExt"];
  
  $handle=opendir($p);
  if ($p==".") $path = "";
  else $path = $p."/";
  while ($file = readdir($handle))
  {
    $d = filetype($path.$file);
    if ((($d=='file')||($d=='dir'))&&($file!='.')&&($file!='..'))
    {
        $pf = $path.$file;
        //echo "[".$d."]".$pf."<br>";
        if ($d=='dir')
        {
          if (!(strpos($FilterDir, "|".$pf."|")))
          {
            DealFP($pf);
          }
        }else{
          $ext = "|".strtolower(substr($file, strrpos($file, ".")+1))."|";
          
          if (strpos($IndexFileExt, $ext))
          {
            $d = filemtime($pf);
            $dt = date("Y-m-d",$d)."T".date("H:i:s",$d)."+00:00";
            addToXML($pf, $dt);
          }
        }
    }
  }
  closedir($handle); 
}
?>
