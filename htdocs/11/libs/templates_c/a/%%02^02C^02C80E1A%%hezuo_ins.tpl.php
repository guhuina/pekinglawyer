<?php /* Smarty version 2.6.10, created on 2010-04-12 09:45:20
         compiled from hezuo_ins.tpl */ ?>
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
.STYLE1 {color: #FF0000}
-->
</style><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<table width=100% align=center cellspacing=0 cellpadding=0 class=i_table>
<tr><td><table width=100% cellspacing=1 cellpadding=6>
<form name="form1" method="post" action="" enctype="multipart/form-data">
 <input type=hidden name='action' value='submit'>
  <tr>
    <td class=head colspan=6><p><strong><a href="hezuo.php?types=<?php echo $this->_tpl_vars['types']; ?>
"><?php echo $this->_tpl_vars['name']; ?>
</a></strong>>><b>����</b><b>��Ϣ</b></p>      </td>
  </tr>
   <tr align=center>
    <td width="23%" class=b ><div align="right">����</div></td>
    <td colspan="2" class=b width="77%"><div align="left">
      <input name="pid" type="text" id="s_company" size="10" >
    </div></td>
  </tr>
  <tr align=center>
    <td width="23%" class=b ><div align="right">����ͼƬ��</div></td>
    <td colspan="2" class=b width="77%"><div align="left">
      <input name="upfile" type="file" id="s_company" size="40" >
      <span class="STYLE1">�������<?php if ($this->_tpl_vars['types'] == 1): ?>88*30<?php endif;  if ($this->_tpl_vars['types'] == 2): ?>183*153<?php endif; ?></span></div></td>
  </tr>
  <tr align=left>
  <td class=b><div align="right">������ַ��<br>
  </div></td>
<td class=b ><input name="linkweb" type="text" id="linkweb" value="http://" size="40"></td></tr>
   <tr align=center>  </tr>
  <tr align=center>
    <td colspan="3" class=b><div align="right"></div>      
        <div align="center">
          <input type="submit" name="Submit" value="����" size=45>
        </div></td>
    </tr>
	</form>
</table></td>
</tr></table>


<table width=100% align=center cellspacing=0 cellpadding=4>


</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>