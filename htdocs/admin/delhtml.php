<?php require_once('../include/conn.php'); ?>
<?php

unlink("../html/*.html");
	$sqlstr="select * from n_article ";
	$query=mysql_query($sqlstr);
	while($rs=mysql_fetch_array($query)){
		$urlstr="../html/".$rs['a_id'].".html";
		unlink($urlstr);
 echo "<script languaet=javascript>";
 echo "document.write('�ļ�".$urlstr."ɾ���ɹ�<br>');";
 echo "</script>";
	}
?>
<?php require_once('../include/close.php'); ?>
