<?php
function delhtml($document){
$search = array ("'<script[^>]*?>.*?</script>'si", // ȥ�� javascript
"'<style[^>]*?>.*?</style>'si", // ȥ�� css
"'<[/!]*?[^<>]*?>'si", // ȥ�� HTML ���
"'<!--[/!]*?[^<>]*?>'si", // ȥ�� ע�ͱ��
"'([rn])[s] '", // ȥ���հ��ַ�
"'&(quot|#34);'i", // �滻 HTML ʵ��
"'&(amp|#38);'i",
"'&(lt|#60);'i",
"'&(gt|#62);'i",
"'&(nbsp|#160);'i",
"'&(iexcl|#161);'i",
"'&(cent|#162);'i",
"'&(pound|#163);'i",
"'&(copy|#169);'i",
"'&#(d );'e"); // ��Ϊ PHP ��������

$replace = array ("",
"",
"",
"",
"[code]",
"\"",
"&",
"<",
">",
" ",
chr(161),
chr(162),
chr(163),
chr(169),
"chr([code])");
//$documentΪ��Ҫ�����ַ����������ԴΪ�ļ�����$document = file_get_contents('http://www.sina.com.cn');
$out = preg_replace($search, $replace, $document);
return $out;
}
?> 
