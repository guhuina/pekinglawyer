<?php
########################################
#
# PHP���Google Sitemap ������ ver 0.1
# ע�⣺����Ե�ǰĿ¼��д��Ȩ��
#
########################################

#��վ������
$WebRoot = "http://localhost/";//����ĳ������ַ
#XML�ļ�����
$XMLFile = "sitemaps.xml";
#Ҫ���ǵ�Ŀ¼[���ִ�Сд]��ע�⣺ǰ��Ӻ�����Ϊ0��PHP�б�ʾ�٣�����ȡ�Ӵ�λ��ʱ�Ͳ��᷵�ؼ�
#�Ա��������ڵ�Ŀ¼Ϊ��ǰĿ¼����ɨ��ĸ�Ŀ¼������Ŀ¼ǰ�治�ü���"/"
$FilterDir = "+";
#Ҫ�������ļ���չ��[Сд]
$IndexFileExt = "+|php|html|";
#XMLͷ��
$XMLText = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<urlset xmlns=\"http://www.google.com/schemas/sitemap/0.84\">\n";
#XMLβ��
$XMLEndText = "</urlset>";

echo "��ʼ�����ļ�XML����...";
DealFP(".");
$XMLText .= $XMLEndText;
makeFile($XMLFile,$XMLText);
echo "ok!<br><br>";
$url = $WebRoot.$XMLFile;
echo "<a href=".$url.">��</a>:".$url;

#���ú����⣺

#�½��ļ�
function makeFile($fileName, $text){
  $fp = fopen($fileName, "w+");
  fwrite($fp, $text);
  fclose($fp);
}

/**
* ��ָ��������ӵ�XML��
* $f �����·�����ļ�����
* $dt ����ʱ����
*/
function addToXML($f, $dt){
  $s = "<url><loc>".$GLOBALS["WebRoot"].$f."</loc><lastmod>".$dt."</lastmod></url>\n";
  
  $GLOBALS["XMLText"] .= $s;
}

/**
* ����ָ����Ŀ¼�Լ���Ŀ¼���������������ļ�����XML
* $p ָ����Ŀ¼
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
