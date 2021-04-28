<?
  function Connect_DB($DbVars)
  {
  	if(!$lnk = mysql_connect($DbVars['host'],$DbVars['user'],$DbVars['pass'])){
  		echo("error connect db");
  	}
  	if(!mysql_select_db($DbVars['dbname'],$lnk)){
  		echo("error select db");
  	}  	
  	return $lnk;
  }  
  function Select_DB($sql,$conn)
  {
  	return mysql_query($sql,$conn);
  }
  
  function Update_DB($sql,$conn)
  {
  	if(! mysql_query($sql,$conn))
  	  return mysql_error().$sql;   	
  }
  
  function Rec_num_rows($rec)
  {
  	return mysql_num_rows($rec);
  }
?>