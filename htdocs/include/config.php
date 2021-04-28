<?php
$nowtime=strtotime(date("Y-m-d"));
    $sqldept="select * from dept where id=1";
	$query=mysql_query($sqldept);
	$rs_dept=mysql_fetch_array($query);
?>