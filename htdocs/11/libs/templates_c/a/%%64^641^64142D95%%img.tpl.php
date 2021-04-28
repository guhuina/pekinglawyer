<?php /* Smarty version 2.6.10, created on 2009-10-03 12:26:05
         compiled from img.tpl */ ?>
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
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<table width=100% align=center cellspacing=0 cellpadding=0 class=i_table>
	<tr>
		<td>
			<table width=100% cellspacing=1 cellpadding=6>
				<tr>
				  <td colspan=5 class=head><strong><?php echo $this->_tpl_vars['name']; ?>
&nbsp;&nbsp;&nbsp;<a href="img_ins.php?types=<?php echo $this->_tpl_vars['types']; ?>
">添加</a></strong></td>
				</tr>
				<tr align=center class=head_2><td width="14%">序号</td>
				<td width="49%" class="altbg2">标题</td>
				<td width="12%" class="altbg2">图片展示</td>
				<td width="25%" class="altbg2">编辑</td>
				</tr>
				<?php $_from = $this->_tpl_vars['userarray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['userid']):
?>
				<tr align=center>
				  <td class=b><?php echo $this->_tpl_vars['userid']['pid']; ?>
</td>
				  <td class=b><?php echo $this->_tpl_vars['userid']['subject']; ?>
</td>
				  <td class=b><img src="/uploads/<?php echo $this->_tpl_vars['userid']['czyear']; ?>
" height="35" width="35"/></td>
			    <td class=b><a href="img_upd.php?id=<?php echo $this->_tpl_vars['userid']['id']; ?>
&amp;types=<?php echo $this->_tpl_vars['types']; ?>
&amp;page_now=<?php echo $this->_tpl_vars['page_now']; ?>
">修改</a>&nbsp;&nbsp;<a href="confirm.php?&url=<?php echo $this->_tpl_vars['userid']['url']; ?>
">删除</a>&nbsp;&nbsp;<a href="img_detail.php?id=<?php echo $this->_tpl_vars['userid']['id']; ?>
">详细信息</a></td>
				</tr>
			  <?php endforeach; endif; unset($_from); ?>
			</table>
		</td>
	</tr>
</table>
<br>
<table cellspacing=0 cellpadding=0 width='100%' align=center>
<tr><td align=left><div align="center"><a href="?page_now=1&types=<?php echo $this->_tpl_vars['types']; ?>
"><font face="webdings">9</font></a> <a href="?page_now=<?php echo $this->_tpl_vars['before_page']; ?>
&types=<?php echo $this->_tpl_vars['types']; ?>
"><font face="webdings">7</font></a>&nbsp;跳转:
      <input type='text' size='2' style='height: 16px; border:1px solid #E7E3E7' onkeydown="javascript: if(event.keyCode==13) location='?page_now='+this.value;"> 
        <a href="?page_now=<?php echo $this->_tpl_vars['after_page']; ?>
&types=<?php echo $this->_tpl_vars['types']; ?>
"><font face="webdings">8</font></a> <a href="?page_now=<?php echo $this->_tpl_vars['pages']; ?>
&types=<?php echo $this->_tpl_vars['types']; ?>
"><font face="webdings">:</font></a> &nbsp;页码: ( <?php echo $this->_tpl_vars['page_now']; ?>
/<?php echo $this->_tpl_vars['pages']; ?>
 总页数 )&nbsp;&nbsp;<?php echo $this->_tpl_vars['page_recs']; ?>
/页&nbsp;共<?php echo $this->_tpl_vars['total_user']; ?>
条记录</div></td>
<td align=right>
</td></tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>