<?php /* Smarty version 2.6.10, created on 2009-08-04 10:11:20
         compiled from news_ins.tpl */ ?>

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

<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<table width=100% align=center cellspacing=0 cellpadding=0 class=i_table>
<tr><td><table width=100% cellspacing=1 cellpadding=6>
<form name="form1" method="post" action="" enctype="multipart/form-data">
<input type=hidden name=action value='submit'>
  <tr>
    <td class=head colspan=6><a href="news.php?types=<?php echo $this->_tpl_vars['types']; ?>
"><b><strong><?php echo $this->_tpl_vars['name']; ?>
</strong></b></a>&gt;&gt;添加信息</b></td>
  </tr>
  <tr align=center>
    <td class=b ><div align="right">排序：</div></td>
    <td colspan="2" class=b width="90%"><div align="left">
      <input name="pid" type="text" id="s_company" size="10">
    </div></td>
  </tr>
  <tr align=center>
    <td class=b ><div align="right">标题：</div></td>
    <td colspan="2" class=b width="90%"><div align="left">
      <input name="biaoti" type="text" id="s_company" size="60">
    </div></td>
  </tr>
   <?php if ($this->_tpl_vars['types'] == 5): ?>
   <tr align=center>
    <td width="11%" class=b ><div align="right">法律类型：</div></td>
    <td colspan="2" class=b width="89%"><div align="left">
      <input type="radio" name="type" value="1" checked="checked"/>
	     民事法律法规
	  <input type="radio" name="type" value="2"/>
	   金融法律法规
	    <input type="radio" name="type" value="3"/>
	  公司法律法规
	    <input type="radio" name="type" value="4"/>
	   知识产权法律法规
    </div></td></tr><?php endif; ?>
	 <tr align=center>
    <td class=b><div align="right">上传图片：</div></td>
    <td colspan="2" class=b><div align="left">
      <input name="upfile" type="file" style="width:500px" size="40" />
      <font color="#FF0000">*&nbsp;最佳图片像素130*90</font> </div></td>
  </tr>
  <tr align=center>
  <td class=b><div align="right">详细内容：<br>
  </div></td>
<td class=b ><textarea name="content" id="content" style="display:none"></textarea>
	     <iframe src="../../libs/sinaEditor/Edit/editor.htm?id=content&ReadCookie=0" frameBorder="0" marginHeight="0" marginWidth="0" scrolling="No" width="650" height="460"></iframe></td></tr>
   <tr align=center>
  
  </tr>
  <tr align=center>
    <td colspan="3" class=b><div align="right"></div>      
        <div align="center">
          <input type="submit" name="Submit" value="添加" size=45>
        </div></td>
    </tr>
	</form>
</table></td>
</tr></table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>