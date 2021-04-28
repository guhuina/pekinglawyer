<?php /* Smarty version 2.6.10, created on 2010-04-07 16:08:51
         compiled from updpass.tpl */ ?>
<style type="text/css">
<!--
.STYLE1 {color: #FF0000}
-->
</style>
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
<script>
function checkall(){
	if(form1.checkbox.checked==true){
		for (var i=0;i<form1.elements.length;i++){   
		  var e = form1.elements[i];   
	    		e.checked = true;   
	 	}   
	}else{
		for (var i=0;i<form1.elements.length;i++){   
		  var e = form1.elements[i];   
	    		e.checked = false;   
	 	}   	
	}
}
</script>

<script language="javascript">
function check(){
if(form1.userid.value==""){
		alert("用户名不能为空！");
		return false;
	}
	if(form1.oldpass.value==""){
		alert("旧密码不能为空！");
		return false;
	}
	if(form1.newpass.value==""){
		alert("新密码不能为空！");
		return false;
	}
	if(form1.renewpass.value!=form1.newpass.value){
		alert("两次密码输入不一致！");
		return false;
	}
	return true;

}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<table width=100% align=center cellspacing=0 cellpadding=0 class=i_table>
<tr><td><table width=100% cellspacing=1 cellpadding=6>
<form name="form1" method="post" action="" enctype="multipart/form-data">
 <input type=hidden name='action' value='submit'>
  <tr>
    <td class=head colspan=6><b>修改密码</b></td>
  </tr>
  <tr align=center>
  <td width="8%" class=b><table width=100% border=0 align="center" cellspacing=1 >
  <tr class=b>
   <td width="46%" height="50"><div align="center">请输入新用户名:</div></td>
   <td width="54%"><div align="center">
     <input name="userid" type="text" size="30" value="<?php echo $this->_tpl_vars['userid']; ?>
">
   </div></td>
  </tr>
  <tr class=b>
   <td width="46%" height="50"><div align="center">请输入旧密码:</div></td>
   <td width="54%"><div align="center">
     <input name="oldpass" type="text" size="30">
   </div></td>
  </tr>
  <tr class=b>
   <td height="46"><div align="center">请输入新密码:</div></td>
   <td><div align="center">
     <input name="newpass" type="text" size="30" />
   </div></td>
  </tr>
  <tr class=b>
   <td height="52"><div align="center">请输入重复新密码:</div></td>
   <td><div align="center">
     <input name="renewpass" type="text" size="30">
   </div></td>
  </tr>
   <tr class=b align="center">
   <td colspan="2"><div align="center">
     <input name="submit" type="submit" value="提交">
   </div></td>
  </tr>
  </table>
	</form>
</table></td>
</tr></table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>