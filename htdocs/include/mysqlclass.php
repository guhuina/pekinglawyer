<?php
class mysql{
	private $hostname;
	private $username;
	private $password;
	private $database;
	private $conn;
	private $table;
	private $whr;
	private $pagecounts;//��Բ�ѯ��ҳ����,������ҳ
	private $pagenum;//��ҳ����
	private $page;
	
	
	function __construct(){
		$this->hostname="hdm-018.hichina.com";
		$this->username="hdm0180597";
		$this->password="hyu1349780001";
		$this->database="hdm0180597_db";
		$this->connect();
		$this->selectdb();
		
	}
	
	//�����Ǻ����ݿ����������
	function connect(){
		$this->conn=mysql_connect($this->hostname,$this->username,$this->password)or die("�ͷ��������Ӳ�ͨ");
	}
	
	//ѡ�����ݿ�ķ���
	function selectdb(){
		mysql_select_db($this->database)or die(mysql_error());
		mysql_query("set names 'gbk'"); 
	}
	
	//�Ͽ������ݿ������
	
	function close(){
		mysql_close($this->conn);
	}
	
	//�������insert����
	function insert($table,$cols,$values){
		$sqlstr="insert into $table ($cols)values($values)";
		mysql_query($sqlstr,$this->conn);	
	}
	

	//�޸����ݿⷽ��
	function update($table,$str='',$whr=''){
		$sqlstr="update $table set $str $whr";
		//echo $sqlstr;
		//exit();
		mysql_query($sqlstr,$this->conn);	
	}

	//ɾ�����ݷ���
	function delete($table,$whr=''){
		$sqlstr="delete from $table $whr";
		mysql_query($sqlstr,$this->conn);	
	}
			
			
	    //����ҳ��ѯ���ݿⷽ��
		//$table���ݱ�����
		//$orderby="id desc" ����"id asc"
		//$whr��ѯ���� Ĭ��ֵΪ��,$whr=" where id>8 "
		//$start �ӵڼ�����ʼ
		//$numҪ��ʾ����������
		
	function select($table,$orderby,$whr='',$start=0,$num=10){
		$sqlstr="select * from  $table $whr order by $orderby limit $start,$num";
		$query=mysql_query($sqlstr,$this->conn);
		return $query;
	}
	
	//��ѯ��������
	function selectedit($table,$whr=''){
	$sqlstr="select * from  $table $whr";
	$query=mysql_query($sqlstr,$this->conn);
	return $query;
	}
	
	//��ѯ��������(����ҳ)
	
	function selectall($table,$orderby='',$whr=''){
	$sqlstr="select * from  $table $whr order by $orderby ";
	$query=mysql_query($sqlstr,$this->conn);
	return $query;
	}

	//��ҳ�ķ���
		function selectpg($table,$orderby,$pagenum=20,$page,$whr=''){
			$start=($page-1)*$pagenum;
			$sqlstr="select * from  $table $whr order by $orderby limit $start,$pagenum";
			$query=mysql_query($sqlstr,$this->conn);
			$this->table=$table;   //�Ѵ˷����õ��ı�����д�뵽����������
			$this->whr=$whr;       //�Ѵ˷�����ѯ����д�뵽����������
			$this->pagenum=$pagenum; //ÿҳ��ʾ��¼��д�뵽����������
			$this->pagecount();      //��������ļ�����ҳ��������
			$this->page=$page;
			return $query;
		}
		
	
	//ȡ�ü�¼������,��������ҳ����
	function pagecount(){
		$table=$this->table;
		$whr=$this->whr;
		$sqlstr="select * from  $table $whr ";
		$query=mysql_query($sqlstr,$this->conn);
		$countnum=mysql_num_rows($query);
		$pagenum=$this->pagenum;
		$this->pagecounts=ceil($countnum/$pagenum);
		return $countnum;
	}
	//��������ʾ��ҳ���� Ҫ�����һ������������ʹ��
	
	function pagenext($url="?"){
			$page=$this->page;
	
			$pagecounts=$this->pagecounts;

		if($page<=1){
			$strpage="��ҳ&nbsp;��һҳ&nbsp;";
		}else{
			$strpage="<a href='$url&page=1'>��ҳ</a>&nbsp;&nbsp;<a href='$url&page=".($page-1)."'>��һҳ</a>&nbsp;";
		}
		if($page>=$pagecounts){
			$strpage.="��һҳ&nbsp;���һҳ";
		}else{
			$strpage.="&nbsp;<a href='$url&page=".($page+1)."'>��һҳ</a>&nbsp;&nbsp;<a href='".$url."&page=$pagecounts'>���һҳ</a>";
		}
		$strpage.="&nbsp;��ǰΪ��".$page."ҳ&nbsp;��".$pagecounts."ҳ";
		//echo $strpage;
		return $strpage;
	}
	function jscript($url,$alertstr='�ɹ�'){
		echo"<script language=javascript>";
		echo"alert('$alertstr');";
		echo"location='$url';";
		echo"</script>";
	}
}
$wz=new mysql;
?>