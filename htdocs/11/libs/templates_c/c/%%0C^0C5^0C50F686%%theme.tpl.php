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
      alert('��������Ϊ�գ�');
      document.myform.name.focus();
      return(false) ;
    }
  if(document.myform.title.value==''){
    alert('���ⲻ��Ϊ�գ�');
    document.myform.title.focus();
    return(false);
  }
  if(document.myform.title.value.length>30){
    alert('���ⲻ�ܳ���30�ַ���');
    document.myform.title.focus();
    return(false);
  }
  if(document.myform.content.value==''){
    alert('���ݲ���Ϊ�գ�');
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
    <TD height="30">�����ڵ�λ�ã�&nbsp;<A class=LinkPath 
      href="index.php">������ʦάȨ��</A>&nbsp;&gt;&gt;&nbsp;<a href="index.php">��ҳ</a> &gt;&gt; ���߽���</TD>
    <TD align=left width="20%"><FONT color=#ff6600>�����ǣ�
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
            href="tiezi.php"><IMG alt=�鿴�������� 
            src="../../images/client/bbs/Guest_all.gif" 
            align=absMiddle border=0></A>&nbsp;<A 
            href=""><IMG 
            alt=ǩд�µ����� 
            src="../../images/client/bbs/Guest_write.gif" 
            align=absMiddle border=0></A> </TD>
              <TD align=right width="50%">������ģʽ��<FONT 
            color=#0089f7>��˷��� &nbsp;&nbsp;��<?php echo $this->_tpl_vars['num']; ?>
�������&nbsp;&nbsp; </FONT></TD>
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
            <TD align="middle" width="14%">�ա�������</TD>
            <TD width="59%"><INPUT maxLength="14" size="37" name="name">
              <span class="channel_font">*</span></TD>
            <TD width="27%"></TD>
          </TR>
          <TR>
            <TD align="middle">�ԡ�����</TD>
            <TD><INPUT type="radio" CHECKED value="��" name="sex">
              ��
              <INPUT type="radio" value="Ů" name="sex">
              Ů </TD>
            <TD>&nbsp;</TD>
          </TR>
          <TR>
            <TD align="middle">E-mail ��</TD>
            <TD><INPUT maxLength="30" size="37" name="email">            </TD>
            <TD rowSpan="4"></TD>
          </TR>
          <TR>
            <TD align="middle">��QQ ��</TD>
            <TD><INPUT name="qq" id="qq" size="37" maxLength="15">            </TD>
          </TR>
          
          <TR>
            <TD align="middle">��Msn����</TD>
            <TD><INPUT maxLength="40" size="37" name="msn">            </TD>
          </TR>
          <TR>
            <TD align="middle">������ҳ��</TD>
            <TD colSpan="2"><INPUT maxLength="80" size="37" value="http://" name="homepage">            </TD>
          </TR>
          <TR>
            <TD align="middle">�������⣺</TD>
            <TD colSpan="2"><INPUT maxLength="21" size="37" name="title">
              <span class="channel_font">*</span> </TD>
          </TR>
		  <TR>
            <TD align="middle">�������ݣ�</TD>
            <TD colSpan="2"> <textarea name="content" id="content" style="display:none"></textarea>
	     <iframe src="../../libs/sinaEditor/Edit/editor.htm?id=content&ReadCookie=0" frameBorder="0" marginHeight="0" marginWidth="0" scrolling="No" width="650" height="460"></iframe>
              <span class="channel_font">*</span> </TD>
          </TR>
		   <TR>
               <TD vAlign="center" align="middle">�Ƿ����أ�</TD>
                  <TD vAlign="top" colSpan="2"><INPUT type="radio" CHECKED value="no" name="isprivate">
                    ����
                    <INPUT type="radio" value="yes" name="isprivate">
                    ���� <span class="channel_font">*</span> <span class="guest_font">ѡ�����غ󣬴�����ֻ�й���Ա�������߲ſ��Կ�����</span></TD>
                </TR>
				<TR>
                  <TD align="center" colSpan="3" height="40"><INPUT type="hidden" value="0" name="saveedit">
                      <INPUT type="hidden" name="saveeditid">
                      <INPUT type="hidden" name="ReplyId">
                      <INPUT type="submit" value=" �� ��" name="Submit1">
                      &nbsp;
                      <INPUT type="reset" value=" �� �� " name="Submit3">                  </TD>
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