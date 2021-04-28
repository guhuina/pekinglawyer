<?php 
$str=file_get_contents("http://127.0.0.19/index.php");
$fp=fopen("../index.html","w");
fwrite($fp,$str);
fclose($fp);
?>