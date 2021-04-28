<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>^$titles^</TITLE>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<meta name="keywords" content="^$titles^" />
<meta name="description" content="^$titles^" />
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
    <td>^include file="header.tpl"^</td>
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
            color=#0089f7>审核发表 &nbsp;&nbsp;有^$num^条待审核&nbsp;&nbsp; </FONT></TD>
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
              <TD width="802" background="../../images/client/top_path.gif"><strong>&nbsp;&nbsp;主题：</strong>^$title^</TD>
              <TD width="146" background="../../images/client/top_path.gif"><img src="../../images/client/posttime.gif" width="11" height="11">&nbsp;^$instime^</TD>
            </TR>
		
            <TR class=Guest_tdbg>
              <TD colspan="2" align=middle><table width="901" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="901"><table width="856" border="0" align="center" cellpadding="0" cellspacing="0">
                    ^if $isprivate eq 'no'^
					<tr>
                      <td width="856">^$content^</td>
                    </tr>
					^/if^
					   ^if $isprivate eq 'yes'^
					<tr>
                      <td width="856" class="channel_font">[隐藏]</td>
                    </tr>
					^/if^
                  </table></td>
                </tr>^if $re_content <> ''^
                <tr>
                  <td class="channel_font">管理员回复：</td>
                </tr>
                <tr>
                  <td><table width="856" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="856">^$re_content^</td>
                    </tr>
                    <tr>
                      <td>回复时间: ^$re_time^</td>
                    </tr>
                  </table></td>
                </tr>^/if^
				^if $re_content eq ''^ <tr>
                  <td class="channel_font">暂无回复</td>
                </tr>^/if^
                <tr>
                  <td height="100" valign="bottom"><table width="145" border="0" cellspacing="0" cellpadding="0">
                    <tr align="center">
                      <td width="47">^if $homepage <> ''^<a href="^$homepage^" target="_blank"><img src="../../images/client/bbs/home.gif" width="16" height="16" border="0"></a>^/if^^if $homepage eq ''^<img src="../../images/client/bbs/nourl.gif" width="45" height="16">^/if^</td>
                      <td width="48">^if $qq <> ''^<a class='a' href='tencent://message/?uin=^$qq^&Site=在线客服&Menu=yes'><img src="../../images/client/bbs/oicq.gif" width="16" height="16" border="0"></a>^/if^^if $qq eq ''^<img src="../../images/client/bbs/nooicq.gif" width="45" height="16">^/if^</td>
                      <td width="50">^if $email <> ''^<a href="mailto:^$email^"><img src="../../images/client/bbs/email.gif" width="45" height="16" border="0"></a>^/if^^if $email eq ''^<img src="../../images/client/bbs/noemail.gif" width="45" height="16">^/if^</td>
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
    <td>^include file="footer.tpl"^</td>
  </tr>
</table>
</BODY></HTML>
