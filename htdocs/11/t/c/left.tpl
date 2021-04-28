<table width="190" height="1218" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
            <td height="168" valign="top"><TABLE class=tdbg_top_left_right style="WORD-BREAK: break-all" height=144 
      cellSpacing=0 cellPadding=0 width="204" align=center bgColor=#ffffff>
        <TBODY>
        <TR>
          <TD width="196" height="166" align=left vAlign=top class=border><script type=text/javascript>
var pic_width=183; //图片宽度
var pic_height=153; //图片高度
var button_pos=4; //按扭位置 1左 2右 3上 4下
var stop_time=5000; //图片停留时间(1000为1秒钟)
var show_text=0; //是否显示文字标签 1显示 0不显示
var txtcolor="000000"; //文字色
var bgcolor="E8D997"; //背景色
var imag=new Array();
var link=new Array();
var text=new Array();
^foreach from=$array7 item=user^
imag[^$user.a^]="../../uploads/^$user.pic^";
link[^$user.a^]="^$user.linkweb^";
text[^$user.a^]=" ";
^/foreach^

//可编辑内容结束
var swf_height=show_text==1?pic_height+20:pic_height;
var pics="", links="", texts="";
for(var i=1; i<imag.length; i++){
	pics=pics+("|"+imag[i]);
	links=links+("|"+link[i]);
	texts=texts+("|"+text[i]);
}
pics=pics.substring(1);
links=links.substring(1);
texts=texts.substring(1);
document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cabversion=6,0,0,0" width="'+ pic_width +'" height="'+ swf_height +'">');
document.write('<param name="movie" value="../../images/focus.swf">');
document.write('<param name="quality" value="high"><param name="wmode" value="opaque">');
document.write('<param name="FlashVars" value="pics='+pics+'&links='+links+'&texts='+texts+'&pic_width='+pic_width+'&pic_height='+pic_height+'&show_text='+show_text+'&txtcolor='+txtcolor+'&bgcolor='+bgcolor+'&button_pos='+button_pos+'&stop_time='+stop_time+'">');
document.write('<embed src="../../images/focus.swf" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&pic_width='+pic_width+'&pic_height='+pic_height+'&show_text='+show_text+'&txtcolor='+txtcolor+'&bgcolor='+bgcolor+'&button_pos='+button_pos+'&stop_time='+stop_time+'" quality="high" width="'+ pic_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
document.write('</object>');
</script> </TD>
        </TR></TBODY></TABLE></td>
  </tr>
          <tr>
            <td height="492" valign="top" bgcolor="#F4F4F4"><TABLE style="WORD-BREAK: break-all" borderColor=#f4f4f4 height=492 
      cellSpacing=0 cellPadding=0 width=205 align=center bgColor=#ffffff 
      border=5>
        <TBODY>
        <TR>
          <TD width=193 height="482" align=left vAlign=top class=border>
            <TABLE width="183" height="534" border=0 
            cellPadding=0 cellSpacing=0 style="WIDTH: 100%; HEIGHT: 445px">
              <TBODY>
              <TR>
                <TD colSpan=2 height=13><IMG height=9 
                  src="../../images/client/left_title2.gif" 
                  width=15 align=absMiddle border=0>&nbsp;<B><FONT 
                  color=#000000><a href="news.php?types=9">业务范围</a></FONT></B></TD>
              </TR>
              <TR>
                <TD width="73" bgColor=#a4813a height=2></TD>
                <TD width="110" bgColor=#ecc981 height=2></TD>
              </TR>
              <TR>
                <TD height=465 colSpan=2 align=left vAlign=top 
                  aling="center"><table cellspacing=0 cellpadding=0 width="98%" align=center 
                  border=0>
					  ^foreach from=$userarray7 item=aa^ 

                        <tr>
                          <td colspan=2 align=left valign="top"><IMG alt=普通信息 
                        src="../../images/client/Article_common6.gif"></td>
                          <td width="90%" height="20" align=left valign="top"><a href="news_detail.php?id=^$aa.id^&amp;types=9">^$aa.subject^</a></td>
                        </tr>^/foreach^
                      
            </table></TD>
            </TR></TBODY></TABLE></TD></TR></TBODY></TABLE></td>
          </tr>
        
          <tr>
            <td height="279" valign="top"><TABLE class=tdbg_left_right style="WORD-BREAK: break-all" height=250 
      cellSpacing=0 cellPadding=0 width="203" align=center>
        <TBODY>
        <TR>
          <TD width="193" align=left vAlign=top class=border>
            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
              <TR>
                <TD colSpan=2 height=20><IMG height=13 
                  src="../../images/client/left_title1.gif" width=4 
                  align=absMiddle border=0>&nbsp;<B><FONT 
                  color=#000000><a href="news.php?types=8">诉讼流程</a></FONT></B></TD>
              </TR>
              <TR>
                <TD width="40%" bgColor=#a4813a height=2></TD>
                <TD width="60%" bgColor=#ecc981 height=2></TD></TR>
              <TR>
            <TD vAlign=top align=left colSpan=2 height=255 
                  aling="center"><table cellspacing=0 cellpadding=0 width="98%" align=center 
                  border=0>
					  ^foreach from=$userarray6 item=aa^ 

                        <tr>
                          <td colspan=2 align=left valign="top"><IMG alt=普通信息 
                        src="../../images/client/Article_common6.gif"></td>
                          <td width="90%" height="20" align=left valign="top"><a href="news_detail.php?id=^$aa.id^&amp;types=8">^$aa.subject^</a></td>
                        </tr>^/foreach^
                      
            </table></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></td>
          </tr>
		  <tr>
            <td height="5" valign="top" bgcolor="#F4F4F4"></td>
          </tr>
		   <tr>
            <td height="279"><TABLE class=tdbg_left_right style="WORD-BREAK: break-all" height=250 
      cellSpacing=0 cellPadding=0 width="203" align=center>
        <TBODY>
        <TR>
          <TD width="193" align=left vAlign=top class=border>
            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
              <TR>
                <TD colSpan=2 height=20><IMG height=13 
                  src="../../images/client/left_title1.gif" width=4 
                  align=absMiddle border=0>&nbsp;<B><FONT 
                  color=#000000><a href="news.php?types=10">快速帮助</a></FONT></B></TD>
              </TR>
              <TR>
                <TD width="40%" bgColor=#a4813a height=2></TD>
                <TD width="60%" bgColor=#ecc981 height=2></TD></TR>
              <TR>
            <TD vAlign=top align=left colSpan=2 height=285 
                  aling="center"><table cellspacing=0 cellpadding=0 width="98%" align=center 
                  border=0>
					  ^foreach from=$userarray8 item=aa^ 

                        <tr>
                          <td colspan=2 align=left valign="top"><IMG alt=普通信息 
                        src="../../images/client/Article_common6.gif"></td>
                          <td width="90%" height="20" align=left valign="top"><a href="news_detail.php?id=^$aa.id^&amp;types=10">^$aa.subject^</a></td>
                        </tr>^/foreach^
                      
            </table></TD>
              </TR></TBODY></TABLE></TD></TR></TBODY></TABLE></td>
          </tr>
        </table>
