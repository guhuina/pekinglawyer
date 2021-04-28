<?php
function delhtml($document){
$search = array ("'<script[^>]*?>.*?</script>'si", // 去掉 javascript
"'<style[^>]*?>.*?</style>'si", // 去掉 css
"'<[/!]*?[^<>]*?>'si", // 去掉 HTML 标记
"'<!--[/!]*?[^<>]*?>'si", // 去掉 注释标记
"'([rn])[s] '", // 去掉空白字符
"'&(quot|#34);'i", // 替换 HTML 实体
"'&(amp|#38);'i",
"'&(lt|#60);'i",
"'&(gt|#62);'i",
"'&(nbsp|#160);'i",
"'&(iexcl|#161);'i",
"'&(cent|#162);'i",
"'&(pound|#163);'i",
"'&(copy|#169);'i",
"'&#(d );'e"); // 作为 PHP 代码运行

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
//$document为需要处理字符串，如果来源为文件可以$document = file_get_contents('http://www.sina.com.cn');
$out = preg_replace($search, $replace, $document);
return $out;
}
?> 
