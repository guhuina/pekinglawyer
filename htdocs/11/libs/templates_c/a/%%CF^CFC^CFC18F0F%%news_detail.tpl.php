<?php /* Smarty version 2.6.10, created on 2009-12-10 14:31:08
         compiled from news_detail.tpl */ ?>
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
<table width=100% align=center cellspacing=0 cellpadding=0 class=i_table>
	<tr>
		<td>
			<table width=100% cellspacing=1 cellpadding=6>
				<tr>
				  <td colspan=2 class="head"><strong>详细内容显示</strong></td>
				</tr>
				<tr align=center><td width="11%" class=b><div align="right">序号</div></td>
				  <td width="89%" class=b><div align="left"><?php echo $this->_tpl_vars['pid']; ?>
</div></td>
			    </tr>
				<tr align=center>
				  <td class=b><div align="right">标题</div></td>
				  <td class=b><div align="left"><?php echo $this->_tpl_vars['subject']; ?>
</div></td>
			    </tr>
				<tr align=center>
				  <td class=b><div align="right">详细内容</div></td>
				  <td class=b><div align="left"><?php echo $this->_tpl_vars['content']; ?>
</div></td>
			  </tr>
				<tr align=center>
				  <td class=b><div align="right">最后更新日期</div></td>
				  <td class=b><div align="left"><?php echo $this->_tpl_vars['instime']; ?>
</div></td>
			  </tr>
				<tr align=center>
				  <td colspan="2" class=b><a href="javascript:history.back();">返回</a></td>
			  </tr>
			</table>
		</td>
	</tr>
</table>
<br>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>