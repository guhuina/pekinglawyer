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
<style type="text/css">
<!--
.STYLE1 {
	font-size: 14pt;
	font-weight: bold;
}
-->
</style>
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
      href="index.php">北京律师维权网</A>&nbsp;&gt;&gt;&nbsp;<a href="index.php">首页</a> &gt;&gt; 律师团队</TD>
    <TD align=left width="20%"><FONT color=#ff6600>今天是：
      <SCRIPT language=JavaScript 
      src="../../images/client/date.js" 
      type=text/JavaScript></SCRIPT>
    </FONT></TD></TR></TBODY></TABLE></td>
  </tr>
  <tr>
    <td><table width="960" border="0" cellspacing="0" cellpadding="0">
	
      <tr>
        <td width="200" valign="top">^include file="left1.tpl"^</td>
        <td valign="top"><table width="755" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="1074" valign="top"><table width="751" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="channel_border">
               <TR>
                <TD width=378 height=30><IMG height=9 
                  src="../../images/client/left_title2.gif" 
                  width=15 align=absMiddle 
                border=0>&nbsp;<STRONG>律师团队</STRONG></TD>
                <TD align=right width=4 height=30></TD>
                <TD align=right width=378 height=30></TD>
               </TR>
              <TR>
                <TD width=378 bgColor=#a4813a colSpan=3 height=2></TD></TR>
			  <tr>
                <td width="725" colSpan=3 align="center" >&nbsp;</td>
              </tr>
			  <tr>
			    <td height="960" colSpan=3 valign="top" ><TABLE cellSpacing=5 cellPadding=0 width="751" align=center 
            border=0>
              <TBODY>
              <TR vAlign=top>
			  ^foreach from=$userarray item=aa^
                <TD width="741" align=middle><A class="" title=^$aa.subject^
                  href="img_detail.php?id=^$aa.id^" 
                  target=_blank><IMG class=pic1 height=145 
                  src="../../uploads/^$aa.czyear^" 
                  width=115 border=0></A><br>
                 <a href="img_detail.php?id=^$aa.id^">^$aa.subject^</a>
				 </TD>
				  ^$aa.tr^
				 ^/foreach^
              </TR></TBODY></TABLE><br>
<div align="center"><a href="?page_now=1&types=^$types^">首页</a> <a href="?page_now=^$before_page^&types=^$types^">上一页</a>&nbsp;<a href="?page_now=^$after_page^&types=^$types^">下一页</a> <a href="?page_now=^$pages^&types=^$types^">尾页</a> &nbsp;页码: ( ^$page_now^/^$pages^ 总页数 )&nbsp;&nbsp;^$page_recs^/页&nbsp;共^$total_user^条记录</div></td>
			  </tr>
            </table></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>^include file="footer.tpl"^</td>
  </tr>
</table>
</BODY></HTML>
