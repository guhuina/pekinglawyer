<?php /* Smarty version 2.6.10, created on 2009-07-23 14:28:27
         compiled from theme.tpl */ ?>
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
<script language="javascript">
function CheckForm()
{
    if(document.myform.name.value==''){
      alert('姓名不能为空！');
      document.myform.name.focus();
      return(false) ;
    }
  if(document.myform.title.value==''){
    alert('主题不能为空！');
    document.myform.title.focus();
    return(false);
  }
  if(document.myform.title.value.length>30){
    alert('主题不能超过30字符！');
    document.myform.title.focus();
    return(false);
  }
  if(document.myform.content.value==''){
    alert('内容不能为空！');
    document.myform.content.focus();
    return(false);
  }
}
</script>

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
        <td height="40" valign="middle" bgcolor="#FFFFFF"><TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
          <TBODY>
            
            <TR>
              <TD width="50%"><A 
            href="tiezi.php"><IMG alt=查看所有留言 
            src="../../images/client/bbs/Guest_all.gif" 
            align=absMiddle border=0></A>&nbsp;<A 
            href=""><IMG 
            alt=签写新的留言 
            src="../../images/client/bbs/Guest_write.gif" 
            align=absMiddle border=0></A> </TD>
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
        <td height="100" valign="top" bgcolor="#FFFFFF"><table width="823" align="center" cellpadding="0" cellspacing="0">
          <form name=myform action="" method="post" onSubmit="return CheckForm();">
		  <input type="hidden" name="action" value="submit">
		  <TR>
            <TD align="middle" width="14%">姓　　名：</TD>
            <TD width="59%"><INPUT maxLength="14" size="37" name="name">
              <span class="channel_font">*</span></TD>
            <TD width="27%"></TD>
          </TR>
          <TR>
            <TD align="middle">性　　别：</TD>
            <TD><INPUT type="radio" CHECKED value="男" name="sex">
              男
              <INPUT type="radio" value="女" name="sex">
              女 </TD>
            <TD>&nbsp;</TD>
          </TR>
          <TR>
            <TD align="middle">E-mail ：</TD>
            <TD><INPUT maxLength="30" size="37" name="email">            </TD>
            <TD rowSpan="4"></TD>
          </TR>
          <TR>
            <TD align="middle">　QQ ：</TD>
            <TD><INPUT name="qq" id="qq" size="37" maxLength="15">            </TD>
          </TR>
          
          <TR>
            <TD align="middle">　Msn　：</TD>
            <TD><INPUT maxLength="40" size="37" name="msn">            </TD>
          </TR>
          <TR>
            <TD align="middle">个人主页：</TD>
            <TD colSpan="2"><INPUT maxLength="80" size="37" value="http://" name="homepage">            </TD>
          </TR>
          <TR>
            <TD align="middle">留言主题：</TD>
            <TD colSpan="2"><INPUT maxLength="21" size="37" name="title">
              <span class="channel_font">*</span> </TD>
          </TR>
		  <TR>
            <TD align="middle">留言内容：</TD>
            <TD colSpan="2"> <textarea name="content" id="content" style="display:none"></textarea>
	     <iframe src="../../libs/sinaEditor/Edit/editor.htm?id=content&ReadCookie=0" frameBorder="0" marginHeight="0" marginWidth="0" scrolling="No" width="650" height="460"></iframe>
              <span class="channel_font">*</span> </TD>
          </TR>
		   <TR>
               <TD vAlign="center" align="middle">是否隐藏：</TD>
                  <TD vAlign="top" colSpan="2"><INPUT type="radio" CHECKED value="no" name="isprivate">
                    正常
                    <INPUT type="radio" value="yes" name="isprivate">
                    隐藏 <span class="channel_font">*</span> <span class="guest_font">选择隐藏后，此留言只有管理员和留言者才可以看到。</span></TD>
                </TR>
				<TR>
                  <TD align="center" colSpan="3" height="40"><INPUT type="hidden" value="0" name="saveedit">
                      <INPUT type="hidden" name="saveeditid">
                      <INPUT type="hidden" name="ReplyId">
                      <INPUT type="submit" value=" 发 表" name="Submit1">
                      &nbsp;
                      <INPUT type="reset" value=" 重 填 " name="Submit3">                  </TD>
                </TR>
		  </form>
        </table>
        </td>
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