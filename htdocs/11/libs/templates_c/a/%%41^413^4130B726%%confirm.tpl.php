<?php /* Smarty version 2.6.10, created on 2009-08-30 17:17:43
         compiled from confirm.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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

<table width="100%" align=center cellspacing=1 cellpadding=3 class=i_table>
<form action="<?php echo $this->_tpl_vars['url']; ?>
" method="post">
<input type=hidden name="step" value="2">
<input type=hidden name="types" value="<?php echo $this->_tpl_vars['types']; ?>
">
<tr><td class=head colspan=2><b>提示信息</b></td></tr>
<tr><td class=b><br>
<font color="#FF0000">警告：你确认要删除此数据吗？删除完后，不能恢复，请确认！</font>
<br><br></td><td class=b align=center><br><input type=submit value="确认删除"><br><br></td></tr></table><br>
<br><br>
<center> <input type='button' value='返 回 继 续 操 作' onclick='javascript:history.go(-1);'></center><br>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>