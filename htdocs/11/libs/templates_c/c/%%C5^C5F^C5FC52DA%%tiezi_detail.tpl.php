<?php /* Smarty version 2.6.10, created on 2009-07-23 15:17:00
         compiled from tiezi_detail.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE><?php echo $this->_tpl_vars['titles']; ?>
</TITLE>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<meta name="keywords" content="<?php echo $this->_tpl_vars['titles']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['titles']; ?>
" />
<SCRIPT language=javascript src="../../images/client/Pic.js" 
type=text/javascript></SCRIPT>
<LINK href="../../images/client/DefaultSkin.css" type=text/css 
rel=stylesheet>
<SCRIPT language=JavaScript src="../../images/client/menu.js" 
type=text/JavaScript></SCRIPT>
</HEAD>
<BODY leftMargin=0 topMargin=0>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
  </tr>
 <tr>
    <td background="../../images/client/top_path.gif"><TABLE 
width=960 border=0 align=center cellPadding=0 cellSpacing=0 class=top_Path style="WORD-BREAK: break-all">
  <TBODY>
  <TR>
    <TD align=right width="4%"><IMG height=11 
      src="../../images/client/arrow3.gif" width=29></TD>
    <TD height="30">您现在的位置：&nbsp;<A class=LinkPath 
      href="index.php">北京律师维权网</A>&nbsp;&gt;&gt;&nbsp;<a href="index.php">首页</a> &gt;&gt; 在线交流</TD>
    <TD align=left width="20%"><FONT color=#ff6600>今天是：
      <SCRIPT language=JavaScript 
      src="../../images/client/date.js" 
      type=text/JavaScript></SCRIPT>
    </FONT></TD></TR></TBODY></TABLE></td>
  </tr>
  <tr>
    <td height="5" valign="top"></td>
  </tr>
  <tr>
    <td valign="top"><table width="950" border="0" align="center" cellpadding="0" cellspacing="0" class="channel_border">
      <tr>
        <td height="41" valign="middle" bgcolor="#FFFFFF"><TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
          <TBODY>
        
            <TR>
              <TD width="50%"><a href="tiezi.php"><IMG alt=查看所有留言 
            src="../../images/client/bbs/Guest_all.gif" 
            align=absMiddle border=0></a>&nbsp;<a href="theme.php"><IMG 
            alt=签写新的留言 
            src="../../images/client/bbs/Guest_write.gif" 
            align=absMiddle border=0></a> </TD>
              <TD align=right width="50%">　发表模式：<FONT 
            color=#0089f7>审核发表 &nbsp;&nbsp;有<?php echo $this->_tpl_vars['num']; ?>
条待审核&nbsp;&nbsp; </FONT></TD>
            </TR>
          </TBODY>
        </TABLE></td>
      </tr>
    </table></td>
  </tr>
   <tr>
    <td height="5" valign="top"></td>
  </tr>
  <tr>
    <td valign="top"><table width="950" border="0" align="center" cellpadding="0" cellspacing="0" class="channel_border">
      <tr>
        <td height="100" valign="top" bgcolor="#FFFFFF"><TABLE cellSpacing=0 cellPadding=0 width="948" 
            align=center border=0>
            <TR >
              <TD width="802" background="../../images/client/top_path.gif"><strong>&nbsp;&nbsp;主题：</strong><?php echo $this->_tpl_vars['title']; ?>
</TD>
              <TD width="146" background="../../images/client/top_path.gif"><img src="../../images/client/posttime.gif" width="11" height="11">&nbsp;<?php echo $this->_tpl_vars['instime']; ?>
</TD>
            </TR>
		
            <TR class=Guest_tdbg>
              <TD colspan="2" align=middle><table width="901" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="901"><table width="856" border="0" align="center" cellpadding="0" cellspacing="0">
                    <?php if ($this->_tpl_vars['isprivate'] == 'no'): ?>
					<tr>
                      <td width="856"><?php echo $this->_tpl_vars['content']; ?>
</td>
                    </tr>
					<?php endif; ?>
					   <?php if ($this->_tpl_vars['isprivate'] == 'yes'): ?>
					<tr>
                      <td width="856" class="channel_font">[隐藏]</td>
                    </tr>
					<?php endif; ?>
                  </table></td>
                </tr><?php if ($this->_tpl_vars['re_content'] <> ''): ?>
                <tr>
                  <td class="channel_font">管理员回复：</td>
                </tr>
                <tr>
                  <td><table width="856" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="856"><?php echo $this->_tpl_vars['re_content']; ?>
</td>
                    </tr>
                    <tr>
                      <td>回复时间: <?php echo $this->_tpl_vars['re_time']; ?>
</td>
                    </tr>
                  </table></td>
                </tr><?php endif; ?>
				<?php if ($this->_tpl_vars['re_content'] == ''): ?> <tr>
                  <td class="channel_font">暂无回复</td>
                </tr><?php endif; ?>
                <tr>
                  <td height="100" valign="bottom"><table width="145" border="0" cellspacing="0" cellpadding="0">
                    <tr align="center">
                      <td width="47"><?php if ($this->_tpl_vars['homepage'] <> ''): ?><a href="<?php echo $this->_tpl_vars['homepage']; ?>
" target="_blank"><img src="../../images/client/bbs/home.gif" width="16" height="16" border="0"></a><?php endif;  if ($this->_tpl_vars['homepage'] == ''): ?><img src="../../images/client/bbs/nourl.gif" width="45" height="16"><?php endif; ?></td>
                      <td width="48"><?php if ($this->_tpl_vars['qq'] <> ''): ?><a class='a' href='tencent://message/?uin=<?php echo $this->_tpl_vars['qq']; ?>
&Site=在线客服&Menu=yes'><img src="../../images/client/bbs/oicq.gif" width="16" height="16" border="0"></a><?php endif;  if ($this->_tpl_vars['qq'] == ''): ?><img src="../../images/client/bbs/nooicq.gif" width="45" height="16"><?php endif; ?></td>
                      <td width="50"><?php if ($this->_tpl_vars['email'] <> ''): ?><a href="mailto:<?php echo $this->_tpl_vars['email']; ?>
"><img src="../../images/client/bbs/email.gif" width="45" height="16" border="0"></a><?php endif;  if ($this->_tpl_vars['email'] == ''): ?><img src="../../images/client/bbs/noemail.gif" width="45" height="16"><?php endif; ?></td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height="10"></td>
                </tr>
              </table></TD>
              </TR>
		
        </TABLE></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
  </tr>
</table>
</BODY></HTML>