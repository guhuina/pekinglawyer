<?php /* Smarty version 2.6.10, created on 2009-08-04 10:10:46
         compiled from admin_right.tpl */ ?>
<script>
//2000=2seconds
var mytimer=5000;
function writeCookie(name, value, hours)
{
  var expire = "";
  if(hours != null)
  {
    expire = new Date((new Date()).getTime() + hours * 3600000);
    expire = "; expires=" + expire.toGMTString();
  }
  document.cookie = name + "=" + escape(value) + expire;
}
function readCookie(name)
{
  var cookieValue = "";
  var search = name + "=";
  if(document.cookie.length > 0)
  { 
    offset = document.cookie.indexOf(search);
    if (offset != -1)
    { 
      offset += search.length;
      end = document.cookie.indexOf(";", offset);
      if (end == -1) end = document.cookie.length;
      cookieValue = unescape(document.cookie.substring(offset, end))
    }
  }
  return cookieValue;
}
function hidden()
{
  var cookv=readCookie("times");  
  //alert(cookv);
  cookv=(cookv*1)+1;
  writeCookie("times",cookv,1);
  if(cookv>=120){
  	writeCookie("times",0,1);
		window.location="/p/a/quit.php";
	}	
}
writeCookie("times",0,1);
mytimer=window.setInterval('hidden()',mytimer);

</script>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<TABLE class=i_table cellSpacing=1 cellPadding=3 width="100%" align=center>
  <TBODY>
  <TR>
    <TD class=head>系 统 信 息</TD></TR>
  <TR>
    <TD class=b>PHP 版本：&nbsp; &nbsp; 
	<FONT color=#000066><?php echo $this->_tpl_vars['phpinfo']; ?>
</FONT><BR>MYSQL 版本：&nbsp; &nbsp;&nbsp; 
	<FONT color=#000066><?php echo $this->_tpl_vars['mysqlinfo']; ?>
</FONT><BR>服务器端信息： &nbsp; 
	<FONT color=#000066><?php echo $this->_tpl_vars['osinfo']; ?>
</FONT><BR>最大上传限制： &nbsp; 
	<FONT color=#000066><?php echo $this->_tpl_vars['max_upload']; ?>
</FONT><BR>最大执行时间： &nbsp; 
	<FONT color=#000066><?php echo $this->_tpl_vars['max_ex_time']; ?>
 seconds</FONT><BR>邮件支持模式： &nbsp; 
	<FONT color=#000066><?php echo $this->_tpl_vars['sys_mail']; ?>
</FONT><BR>Cookie 测试：&nbsp; &nbsp; 
	<FONT color=#000066><?php echo $this->_tpl_vars['ifcookie']; ?>
</FONT><BR>服务器所在时间：&nbsp;
	<FONT color=#000066><?php echo $this->_tpl_vars['systemtime']; ?>
</FONT><BR> </TD></TR></TBODY></TABLE><BR>
<CENTER>
<BLOCKQUOTE><BR><BR>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>