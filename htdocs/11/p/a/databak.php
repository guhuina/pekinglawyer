<?
include "../../config/admin_public_include.php";
include "../../config/admin_auth.php";
include "../../config/db_function.php"; 
$conn = Connect_DB($DB_VARS_ARRAY); 
$userid=$_SESSION['SESSION_ADMIN_USERID'];
include "../../config/functions.inc.php"; 
global $mysqlhost, $mysqluser, $mysqlpwd, $mysqldb;
include "../../config/config.php";
$mysqlhost=$DB_VARS_ARRAY['host']; //host name
$mysqluser=$DB_VARS_ARRAY['user'];              //login name
$mysqlpwd=$DB_VARS_ARRAY['pass'];              //password
$mysqldb=$DB_VARS_ARRAY['dbname'];              //password
include("mydb.php");
$d=new db($mysqlhost,$mysqluser,$mysqlpwd,$mysqldb);
$action=$_POST['action'];
if($_POST['weizhi']=="server"&&!writeable("./backup")){
		echo("备份文件存放目录'./backup'不可写，请修改目录属性");
}
if($action=="submit"){
	//$userid=$_SESSION['SESSION_USERID']; 
	//$subject='数据备份';
//	$content='';
	//func_syslog($conn,$userid,$subject,$content);
  //mysql_query($sql0,$d);	\
  //echo("11");
  //$d->query($sql0);
	if(!$tables=$d->query("show table status from $mysqldb")){
		$msgs[]="读数据库结构错误";
	}
	$sql="";
	while($d->nextrecord($tables)){
		$table=$d->f("Name");
		$sql.=make_header($table);
		$d->query("select * from $table");
		$num_fields=$d->nf();
		while($d->nextrecord()){
			$sql.=make_record($table,$num_fields);}
		}
		//echo($sql);
	$filename=date("Ymd",time())."_all.sql";
	if($_POST['weizhi']=="localpc"){
		down_file($sql,$filename);
	}elseif($_POST['weizhi']=="server"){
	   if(write_file($sql,$filename)){
	   		$smarty->assign("return_url","databak.php");
    		$smarty->display('showmsg.tpl');	
		    return;
	} 
	else echo("备份全部数据表失败");
	}
}	
function write_file($sql,$filename)
{
$re=true;
if(!@$fp=fopen("./backup/".$filename,"w+")) {$re=false; echo "failed to open target file";}
if(!@fwrite($fp,$sql)) {$re=false; echo "failed to write file";}
if(!@fclose($fp)) {$re=false; echo "failed to close target file";}
return $re;
}

function down_file($sql,$filename)
{
	ob_end_clean();
	header("Content-Encoding: none");
	header("Content-Type: ".(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') ? 'application/octetstream' : 'application/octet-stream'));			
	header("Content-Disposition: ".(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') ? 'inline; ' : 'attachment; ')."filename=".$filename);			
	header("Content-Length: ".strlen($sql));
	header("Pragma: no-cache");			
	header("Expires: 0");		
	echo $sql;
	$e=ob_get_contents();
	ob_end_flush();
	ob_end_clean();
}

function writeable($dir)
{
	
	if(!is_dir($dir)) {
	@mkdir($dir, 0777);
	}
	
	if(is_dir($dir)) 
	{
	
	if($fp = @fopen("$dir/test.test", 'w'))
		{
@fclose($fp);
	@unlink("$dir/test.test");
	$writeable = 1;
} 
	else {
$writeable = 0;
	}
	
}
	
	return $writeable;

}

function make_header($table)
{global $d;
$sql="DROP TABLE IF EXISTS ".$table."\n";
$d->query("show create table ".$table);
$d->nextrecord();
$tmp=preg_replace("/\n/","",$d->f("Create Table"));
$sql.=$tmp."\n";
return $sql;
}

function make_record($table,$num_fields)
{global $d;
$comma="";
$sql .= "INSERT INTO ".$table." VALUES(";
for($i = 0; $i < $num_fields; $i++) 
{$sql .= ($comma."'".mysql_escape_string($d->record[$i])."'"); $comma = ",";}
$sql .= ")\n";
return $sql;
}

$smarty->assign("session_admin_userid",$_SESSION['SESSION_ADMIN_USERID']);
$smarty->display('databak.tpl');
?>