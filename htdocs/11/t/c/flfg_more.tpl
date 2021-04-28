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
      href="index.php">北京律师维权网</A>&nbsp;&gt;&gt;&nbsp;<a href="index.php">首页</a> &gt;&gt; <a href="flfg.php">法律法规</a> &gt;&gt; ^$name^ </TD>
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
            <td width="590"><TABLE class=tdbg_top_right style="WORD-BREAK: break-all" height=250 
      cellSpacing=0 cellPadding=0 width="100%" align=center bgColor=#ffffff>
        <TBODY>
        <TR>
          <TD class=border vAlign=top align=left><!--中部中间590显示/隐藏层文章栏目一、文章栏目二、文章栏目三、文章栏目四代码开始-->
            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
              <TR>
                <TD width=378 height=20><IMG height=9 
                  src="../../images/client/left_title2.gif" 
                  width=15 align=absMiddle 
                border=0>&nbsp;^$name^信息列表</TD>
                <TD align=right width=4 height=20></TD>
                <TD align=right width=378 height=20></TD></TR>
              <TR>
                <TD width=378 bgColor=#a4813a colSpan=3 height=2></TD></TR>
              <TR align=middle>
                <TD width=760 height="10" colSpan=3 align=left vAlign=top></TD>
              </TR>
            
			  <TR>
                <TD colSpan=3><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    ^foreach from=$userarray item=aa^<tr>
                    <td width="4%" align="center" valign="top"><IMG alt=普通信息 
                        src="../../images/client\Article_common.gif"></td>
                    <td width="80%"><a href="">[^$name^]</a>&nbsp;<a href="flfg_detail.php?id=^$aa.id^&type=^$type^">^$aa.subject^</a></td>
                    <td width="16%">^$aa.instime^</td>
                    </tr>^/foreach^
                </table></TD></TR>
				 <TR>
                <TD colSpan=3><div align="center"><a href="?page_now=1&type=^$type^">首页</a> <a href="?page_now=^$before_page^&type=^$type^">上一页</a>&nbsp;<a href="?page_now=^$after_page^&type=^$type^">下一页</a> <a href="?page_now=^$pages^&type=^$type^">尾页</a> &nbsp;页码: ( ^$page_now^/^$pages^ 总页数 )&nbsp;&nbsp;^$page_recs^/页&nbsp;共^$total_user^条记录</div></TD></TR>
				</TABLE></TD></TR></TBODY></TABLE></td>
            <td valign="top" bgcolor="#FFFFFF"><TABLE cellSpacing=5 cellPadding=0 width="60%" align=center 
            border=0>
              <TBODY>
              <TR vAlign=top>
			  ^foreach from=$array item=aa^
                <TD align=middle><a href="news_detail.php?id=^$aa.id^&type=^$type^"><IMG class=pic1 height=90 
                  src="../../uploads/^$aa.pic^" 
                  width=130 border=0></a><BR>
                  <A class="" title=^$aa.subject^ 
                  href="flfg_detail.php?id=^$aa.id^&type=^$type^" 
                  target=_blank>^$aa.subject^</A></TD>
				  ^/foreach^
			    </TR></TBODY></TABLE></td>
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
