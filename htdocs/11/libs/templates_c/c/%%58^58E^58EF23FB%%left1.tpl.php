<?php /* Smarty version 2.6.10, created on 2009-12-07 16:02:03
         compiled from left1.tpl */ ?>
<table width="190" height="995" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
            <td height="168" valign="top"><TABLE class=tdbg_top_left_right style="WORD-BREAK: break-all" height=144 
      cellSpacing=0 cellPadding=0 width="204" align=center bgColor=#ffffff>
        <TBODY>
        <TR>
          <TD width="196" height="166" align=left vAlign=top class=border><script type=text/javascript>
var pic_width=183; //ͼƬ���
var pic_height=153; //ͼƬ�߶�
var button_pos=4; //��Ťλ�� 1�� 2�� 3�� 4��
var stop_time=5000; //ͼƬͣ��ʱ��(1000Ϊ1����)
var show_text=0; //�Ƿ���ʾ���ֱ�ǩ 1��ʾ 0����ʾ
var txtcolor="000000"; //����ɫ
var bgcolor="E8D997"; //����ɫ
var imag=new Array();
var link=new Array();
var text=new Array();
<?php $_from = $this->_tpl_vars['array7']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
imag[<?php echo $this->_tpl_vars['user']['a']; ?>
]="../../uploads/<?php echo $this->_tpl_vars['user']['pic']; ?>
";
link[<?php echo $this->_tpl_vars['user']['a']; ?>
]="<?php echo $this->_tpl_vars['user']['linkweb']; ?>
";
text[<?php echo $this->_tpl_vars['user']['a']; ?>
]=" ";
<?php endforeach; endif; unset($_from); ?>

//�ɱ༭���ݽ���
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
            <td height="547" valign="top" bgcolor="#F4F4F4"><TABLE style="WORD-BREAK: break-all" borderColor=#f4f4f4 height=547 
      cellSpacing=0 cellPadding=0 width=205 align=center bgColor=#ffffff 
      border=5>
        <TBODY>
        <TR>
          <TD width=193 height="537" align=left vAlign=top class=border>
            <TABLE width="183" height="592" border=0 
            cellPadding=0 cellSpacing=0 style="WIDTH: 100%; HEIGHT: 445px">
              <TBODY>
              <TR>
                <TD colSpan=2 height=13><IMG height=9 
                  src="../../images/client/left_title2.gif" 
                  width=15 align=absMiddle border=0>&nbsp;<B><FONT 
                  color=#000000><a href="news.php?types=9">ҵ��Χ</a></FONT></B></TD>
              </TR>
              <TR>
                <TD width="73" bgColor=#a4813a height=2></TD>
                <TD width="110" bgColor=#ecc981 height=2></TD>
              </TR>
              <TR>
                <TD height=520 colSpan=2 align=left vAlign=top 
                  aling="center"><table cellspacing=0 cellpadding=0 width="98%" align=center 
                  border=0>
					  <?php $_from = $this->_tpl_vars['userarray7']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?> 

                        <tr>
                          <td colspan=2 align=left valign="top"><IMG alt=��ͨ��Ϣ 
                        src="../../images/client/Article_common6.gif"></td>
                          <td width="90%" height="20" align=left valign="top"><a href="news_detail.php?id=<?php echo $this->_tpl_vars['aa']['id']; ?>
&amp;types=9"><?php echo $this->_tpl_vars['aa']['subject']; ?>
</a></td>
                        </tr><?php endforeach; endif; unset($_from); ?>
                      
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
                  color=#000000><a href="news.php?types=8">��������</a></FONT></B></TD>
              </TR>
              <TR>
                <TD width="40%" bgColor=#a4813a height=2></TD>
                <TD width="60%" bgColor=#ecc981 height=2></TD></TR>
              <TR>
            <TD vAlign=top align=left colSpan=2 height=255 
                  aling="center"><table cellspacing=0 cellpadding=0 width="98%" align=center 
                  border=0>
					  <?php $_from = $this->_tpl_vars['userarray6']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?> 

                        <tr>
                          <td colspan=2 align=left valign="top"><IMG alt=��ͨ��Ϣ 
                        src="../../images/client/Article_common6.gif"></td>
                          <td width="90%" height="20" align=left valign="top"><a href="news_detail.php?id=<?php echo $this->_tpl_vars['aa']['id']; ?>
&amp;types=8"><?php echo $this->_tpl_vars['aa']['subject']; ?>
</a></td>
                        </tr><?php endforeach; endif; unset($_from); ?>
                      
            </table></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></td>
          </tr>
        </table>