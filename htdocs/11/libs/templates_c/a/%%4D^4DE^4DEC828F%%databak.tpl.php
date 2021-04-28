<?php /* Smarty version 2.6.10, created on 2010-04-07 16:08:46
         compiled from databak.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form name="form1" method="post" action="">
<input type=hidden name=action value="submit">
  <table width="100%"  cellpadding='0' class="db">
    <tr align="center" ><td height="30" colspan="2" class="head"><strong class="dd">数据备份</strong></td>
    </tr>
    <tr>
      <td height="20" colspan="2">&nbsp;</td>
    </tr>
    <tr><td height="20" colspan="2" class="ff">&nbsp;备份方式</td>
    </tr>
    
    <tr><td height="20" colspan="2" valign="middle" class="ff"><input type="radio" name="weizhi" value="server" checked>
    备份到服务器</td>
    </tr><tr><td height="20" colspan='2' valign="middle" class="ff"> <input type="radio" name="weizhi" value="localpc">
        备份到本地</td>
    </tr>
    <tr><td colspan="2"  align='center'><div class="option"><div class="submitbutton"><input type="submit" name="act" value="备&nbsp;份" class="ff">
    </div></div></td></tr>
  </table>
</form>