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
        <td height="40" valign="middle" bgcolor="#FFFFFF"><TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
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
              <TD colSpan=3 background="../../images/client/top_path.gif"><DIV align=center><B>发言主题</B></DIV></TD>
              <TD width="89" background="../../images/client/top_path.gif"><DIV align=center><B>留言人</B></DIV></TD>
              <TD width="122" align="center" background="../../images/client/top_path.gif"><strong>留言时间</strong></TD>
              <TD width="121" background="../../images/client/top_path.gif"><DIV align=center><B>阅读</B></DIV></TD>
            </TR>
			^foreach from=$userarray item=aa^
            <TR class=Guest_tdbg>
              <TD align=middle width="60">&nbsp;</TD>
              <TD align=center width="50"><img src="../../images/client/bbs/replay.gif" width="16" height="16"></TD>
              <TD title=点击查看记录具体信息 align=left width="506"><a href="tiezi_detail.php?id=^$aa.id^">^$aa.title^</a></TD>
              <TD width="89" align=middle>^$aa.name^</TD>
              <TD width="122" align=middle>^$aa.instime^</TD>
              <TD align=middle width="121">^$aa.read_num^</TD>
            </TR>
			^/foreach^
        </TABLE></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top"><table cellspacing=0 cellpadding=0 width='100%' align=center>
<tr><td align=left><div align="center"><a href="?page_now=1">首页</a> <a href="?page_now=^$before_page^">上一页</a>&nbsp;跳转:
      <input type='text' size='2' style='height: 16px; border:1px solid #E7E3E7' onkeydown="javascript: if(event.keyCode==13) location='?page_now='+this.value;"> 
        <a href="?page_now=^$after_page^">下一页</a> <a href="?page_now=^$pages^">尾页</a> &nbsp;页码: ( ^$page_now^/^$pages^ 总页数 )&nbsp;&nbsp;^$page_recs^/页&nbsp;共^$total_user^条记录</div></td>
<td align=right>
</td></tr>
</table></td>
  </tr>
  <tr>
    <td>^include file="footer.tpl"^</td>
  </tr>
</table>
</BODY></HTML>
