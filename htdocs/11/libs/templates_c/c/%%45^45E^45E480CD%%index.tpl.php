<?php /* Smarty version 2.6.10, created on 2011-08-22 11:39:20
         compiled from index.tpl */ ?>
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
      href="index.php">北京律师维权网</A>&nbsp;&gt;&gt;&nbsp;首页</TD>
    <TD align=left width="20%"><FONT color=#ff6600>今天是：
      <SCRIPT language=JavaScript 
      src="../../images/client/date.js" 
      type=text/JavaScript></SCRIPT>
    </FONT></TD></TR></TBODY></TABLE></td>
  </tr>
  <tr>
    <td><table width="960" border="0" cellspacing="0" cellpadding="0">
	
      <tr>
        <td width="200" valign="top" ><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
        <td valign="top"><table width="747" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="175"><TABLE width=736 height="171" border=1 cellPadding=0 
      cellSpacing=0 bgColor=#ffffff 
      style="WIDTH: 736px; BORDER-TOP-STYLE: double; BORDER-RIGHT-STYLE: double; BORDER-LEFT-STYLE: double; HEIGHT: 163px; BORDER-BOTTOM-STYLE: double">
        <TBODY>
        <TR>
          <TD 
          style="BORDER-TOP-STYLE: double; BORDER-RIGHT-STYLE: double; BORDER-LEFT-STYLE: double; BORDER-BOTTOM-STYLE: double" 
          vAlign=center align=middle width=18 
          bgColor=#660000 height=163><FONT 
            style="BACKGROUND-COLOR: #ffffff"><SPAN 
            style="BACKGROUND-COLOR: #660000"><SPAN 
            style="BACKGROUND-COLOR: #660000"><FONT color=#ffffff>维权律师</FONT> 
            </SPAN></SPAN></FONT></TD>
          <TD align=middle vAlign=center bordercolor="#FFFFFF">
          <!--  <TABLE width="706" height="161" 
            border=0 align=center cellPadding=0 cellSpacing=5>
              <TBODY>
              <TR vAlign=top>
			  <?php $_from = $this->_tpl_vars['array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?>
                <TD width="696" height="156" align=middle><a href="img_detail.php?id=<?php echo $this->_tpl_vars['aa']['id']; ?>
&types=1"><IMG class=pic1 height=145 
                  src="../../uploads/<?php echo $this->_tpl_vars['aa']['czyear']; ?>
" 
                  width=115 border=0></a> </TD>
				 <?php endforeach; endif; unset($_from); ?>
              </TR></TBODY></TABLE>--><div align="center" id=other style="OVERFLOW: hidden; WIDTH: 706px; COLOR: #000000; HEIGHT: 161px; letter-padding:5px;">
              <table width="100%" height="110" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td id=other1><table width="706" height="161" border="0" cellpadding="0" cellspacing="0" id="demo1">
                      <tr> <?php $_from = $this->_tpl_vars['array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?>
                        <td><table width="157" height="121" border="0" align="left" cellpadding="0" cellspacing="0">
                              <tr>
                                <td height="110"><a href="img_detail.php?id=<?php echo $this->_tpl_vars['aa']['id']; ?>
&types=1"><IMG class=pic1 height=145 
                  src="../../uploads/<?php echo $this->_tpl_vars['aa']['czyear']; ?>
" 
                  width=115 border=0></a></td>
                                <td>&nbsp;</td>
                              </tr>
                          </table></td>
                        <?php endforeach; endif; unset($_from); ?> </tr>
                  </table></td>
                  <td id=other2 valign=top width="1"></td>
                </tr>
              </table>
            </div> <script> 
var speed2=20 
other2.innerHTML=other1.innerHTML 
function t1(){ 
if(other2.offsetWidth-other.scrollLeft<=0) 
other.scrollLeft-=other1.offsetWidth 
else{ 
other.scrollLeft++ 
} 
} 
var MyMar4=setInterval(t1,speed2) 
other.onmouseover=function() {clearInterval(MyMar4)} 
other.onmouseout=function() {MyMar4=setInterval(t1,speed2)} 
</script></TD></TR></TBODY></TABLE></td>
          </tr>
          <tr>
            <td><TABLE style="WIDTH: 736px" borderColor=#dddddd cellSpacing=4 
      cellPadding=0 width=739 bgColor=#ffffff border=1>
        <TBODY>
        <TR>
          <TD vAlign=top align=left width="49%" height=280><TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
            <TBODY>
              <TR>
                <TD width="20%" height=20><IMG height=9 
                  src="../../images/client/left_title2.gif" 
                  width=15 align=absMiddle border=0><B><FONT 
                  color=#000000><a href="news.php?types=1">婚姻维权</a></FONT></B></TD>
                <TD align=right width="80%" height=20><a href="news.php?types=1"><IMG height=5 
                  src="../../images/client/icn_more.gif" width=29 
                  align=middle border=0></a><A 
                  href="http://www.bjmslawyer.com/ystx/"></A></TD>
              </TR>
              <TR>
                <TD width="20%" bgColor=#a4813a height=2></TD>
                <TD width="80%" bgColor=#ecc981 height=2></TD>
              </TR>
              <TR>
                <TD vAlign=top align=middle colSpan=2 height=255><TABLE cellSpacing=0 cellPadding=0 width="98%" align=center 
border=0>
              <TBODY>
             
              
              <TR>
                <TD>
				<table cellspacing=0 cellpadding=0 width="339" align=center 
                  border=0>
					  <?php $_from = $this->_tpl_vars['userarray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?> 
                        <tr>
                          <td colspan=2 align=left valign="top"><IMG alt=普通信息 
                        src="../../images/client\Article_common7(2).gif"></td>
                          <td width="321" align=left valign="top"><a href="news_detail.php?id=<?php echo $this->_tpl_vars['aa']['id']; ?>
&types=1"><?php echo $this->_tpl_vars['aa']['subject']; ?>
</a></td>
                        </tr><?php endforeach; endif; unset($_from); ?>
                      
                  </table></TD></TR></TBODY></TABLE></TD>
              </TR>
            </TBODY>
          </TABLE></TD>
          <TD vAlign=top align=left width="51%">
            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
              <TR>
                <TD width="20%" height=20><IMG height=9 
                  src="../../images/client/left_title2.gif" 
                  width=15 align=absMiddle border=0><B><FONT 
                  color=#000000><a href="news.php?types=2">房产维权</a></FONT></B></TD>
                <TD align=right width="80%" height=20><a href="news.php?types=2"><IMG height=5 
                  src="../../images/client/icn_more.gif" width=29 
                  align=middle border=0></a><A 
                  href="http://www.bjmslawyer.com/ystx/"></A></TD>
              </TR>
              <TR>
                <TD width="20%" bgColor=#a4813a height=2></TD>
                <TD width="80%" bgColor=#ecc981 height=2></TD></TR>
              <TR>
                <TD vAlign=top align=middle colSpan=2 height=255>
                  <TABLE cellSpacing=0 cellPadding=0 width="98%" align=center 
                  border=0>
                    <TBODY>
                    <TR>
                     
                    <TD vAlign=top><table cellspacing=0 cellpadding=0 width="360" align=center 
                  border=0>
					  <?php $_from = $this->_tpl_vars['userarray1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?> 

                        <tr>
                          <td colspan=2 align=left valign="top"><IMG alt=普通信息 
                        src="../../images/client\Article_common7(2).gif"></td>
                          <td width="329" align=left valign="top"><a href="news_detail.php?id=<?php echo $this->_tpl_vars['aa']['id']; ?>
&types=2"><?php echo $this->_tpl_vars['aa']['subject']; ?>
</a></td>
                        </tr><?php endforeach; endif; unset($_from); ?>
                      
                  </table></TD>
                    </TR></TABLE></TD></TR></TABLE></TD></TR></TBODY></TABLE></td>
          </tr>
          <tr>
            <td><TABLE style="WIDTH: 736px" borderColor=#dddddd cellSpacing=3 
      cellPadding=0 width=736 bgColor=#ffffff border=1>
              <TBODY>
                <TR>
                  <TD width="353" height=330 align=left vAlign=top bordercolor="#FFFFFF"><TABLE width="353" height=260 border="0" align=left cellPadding=0 
      cellSpacing=0 bgColor=#ffffff style="WORD-BREAK: break-all">
                      <TBODY>
                        <TR>
                          <TD width="353" height="260" align=left vAlign=top class=border><table cellspacing=0 cellpadding=0 width="98%" border=0>
              <tbody>
                <tr>
                  <td width="30%" height=27><img height=9 
                  src="../../images/client/left_title2.gif" 
                  width=15 align=absMiddle border=0><b><font 
                  color=#000000><a href="news.php?types=6">交通事故维权</a></font></b></td>
                  <td align=right width="70%" height=27><a href="news.php?types=5"><img height=5 
                  src="../../images/client/icn_more.gif" width=29 
                  align=middle border=0></a><a 
                  href="http://www.bjmslawyer.com/ystx/"></a></td>
                </tr>
                <tr>
                  <td width="22%" bgcolor=#a4813a height=2></td>
                  <td width="78%" bgcolor=#ecc981 height=2></td>
                </tr>
                <tr>
                  <td valign=top align=middle colspan=2 height=305><table cellspacing=0 cellpadding=0 width="100%" align=center 
                  border=0>
					  <?php $_from = $this->_tpl_vars['userarray2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?> 

                        <tr>
                          <td colspan=2 align=left valign="top"><IMG alt=普通信息 
                        src="../../images/client\Article_common7(2).gif"></td>
                          <td width="334" align=left valign="top"><a href="news_detail.php?id=<?php echo $this->_tpl_vars['aa']['id']; ?>
&types=5"><?php echo $this->_tpl_vars['aa']['subject']; ?>
</a></td>
                        </tr><?php endforeach; endif; unset($_from); ?>
                      
                  </table></td>
                </tr>
              </tbody>
          </table></TD>
                        </TR>
                      </TBODY>
                  </TABLE></TD>
                  <TD width="368" height="330" align=left vAlign=top bordercolor="#FFFFFF"><TABLE width="369" height=260 border="0" align=left cellPadding=0 
      cellSpacing=0 bgColor=#ffffff style="WORD-BREAK: break-all">
                    <TBODY>
                      <TR>
                        <TD width="353" height="260" align=left vAlign=top class=border><table cellspacing=0 cellpadding=0 width="98%" border=0>
                            <tbody>
                              <tr>
                                <td width="22%" height=27><img height=9 
                  src="../../images/client/left_title2.gif" 
                  width=15 align=absMiddle border=0><b><font 
                  color=#000000><a href="news.php?types=7">合同纠纷</a></font></b></td>
                                <td align=right width="78%" height=27><a href="news.php?types=7"><img height=5 
                  src="../../images/client/icn_more.gif" width=29 
                  align=middle border=0></a><a 
                  href="http://www.bjmslawyer.com/ystx/"></a></td>
                              </tr>
                              <tr>
                                <td width="22%" bgcolor=#a4813a height=2></td>
                                <td width="78%" bgcolor=#ecc981 height=2></td>
                              </tr>
                              <tr>
                                <td valign=top align=middle colspan=2 height=305><table cellspacing=0 cellpadding=0 width="100%" align=center 
                  border=0>
                                  <?php $_from = $this->_tpl_vars['userarray3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?>
                                  <tr>
                        <td colspan=2 align=left valign="top"><IMG alt=普通信息 
                        src="../../images/client\Article_common7(2).gif"></td>
                                    <td width="334" align=left valign="top"><a href="news_detail.php?id=<?php echo $this->_tpl_vars['aa']['id']; ?>
&types=7"><?php echo $this->_tpl_vars['aa']['subject']; ?>
</a></td>
                                  </tr>
                                  <?php endforeach; endif; unset($_from); ?>
                                </table></td>
                              </tr>
                            </tbody>
                        </table></TD>
                      </TR>
                    </TBODY>
                  </TABLE></TD>
                </TR>
              </TBODY>
            </TABLE></td>
          </tr>
          <tr>
            <td valign="top"><TABLE style="WIDTH: 736px" borderColor=#dddddd cellSpacing=3 
      cellPadding=0 width=739 bgColor=#ffffff border=1>
              <TBODY>
                <TR>
                  <TD width="353" height=330 align=left vAlign=top bordercolor="#FFFFFF"><TABLE width="353" height=260 border="0" align=left cellPadding=0 
      cellSpacing=0 bgColor=#ffffff style="WORD-BREAK: break-all">
                      <TBODY>
                        <TR>
                          <TD width="353" height="260" align=left vAlign=top class=border><TABLE cellSpacing=0 cellPadding=0 width="97%" border=0>
              <TBODY>
                <TR>
                  <TD width="24%" height=20><IMG height=9 
                  src="../../images/client/left_title2.gif" 
                  width=15 align=absMiddle border=0>&nbsp;<B><FONT 
                  color=#000000><a href="news.php?types=3">经典案例</a></FONT></B></TD>
                  <TD align=right width="76%" height=20><a href="news.php?types=3"><IMG height=5 
                  src="../../images/client/icn_more.gif" width=29 
                  align=middle border=0></a><A 
                  href="http://www.bjmslawyer.com/wytx/"></A></TD>
                </TR>
                <TR>
                  <TD width="24%" bgColor=#a4813a height=2></TD>
                  <TD width="76%" bgColor=#ecc981 height=2></TD>
                </TR>
                <TR>
                  <TD height="290" colSpan=2 align=middle valign="top"><TABLE width="97%">
                      <TBODY>
                        <TR>
                          <TD height="88" valign="top"><table cellspacing=0 cellpadding=0 width="98%" align=center 
                  border=0>
					  <?php $_from = $this->_tpl_vars['userarray4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?> 
                        <tr>
                          <td colspan=2 align=left valign="top"><IMG alt=普通信息 
                        src="../../images/client\Article_common7(2).gif"></td>
                          <td width="95%" align=left valign="top"><a href="news_detail.php?id=<?php echo $this->_tpl_vars['aa']['id']; ?>
&types=3"><?php echo $this->_tpl_vars['aa']['subject']; ?>
</a></td>
                        </tr><?php endforeach; endif; unset($_from); ?>
                      
                  </table></TD>
                        </TR>
                        <TR>
                          <TD><TABLE cellSpacing=5 cellPadding=0 width="100%" 
                        align=center border=0>
                              <TBODY>
                                <TR vAlign=top>
								<?php $_from = $this->_tpl_vars['array4']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?>
                                  <TD align=middle valign="bottom"><A class="" title=<?php echo $this->_tpl_vars['aa']['subject']; ?>
 
                              href="news_detail.php?id=<?php echo $this->_tpl_vars['aa']['id']; ?>
&types=3" 
                              target=_blank><IMG class=pic1 height=90 
                              src="../../uploads/<?php echo $this->_tpl_vars['aa']['pic']; ?>
" 
                              width=130 border=0></A><BR>
                                    <A class="" 
                               title=<?php echo $this->_tpl_vars['aa']['subject']; ?>

                              href="news_detail.php?id=<?php echo $this->_tpl_vars['aa']['id']; ?>
&types=3" 
                              target=_blank><?php echo $this->_tpl_vars['aa']['subject']; ?>
</A></TD>
							  <?php endforeach; endif; unset($_from); ?>
                                </TR>
                              </TBODY>
                          </TABLE></TD>
                        </TR>
                      </TBODY>
                  </TABLE></TD>
                </TR>
              </TBODY>
          </TABLE></TD>
                        </TR>
                      </TBODY>
                  </TABLE></TD>
                  <TD width="368" height="330" align=left vAlign=top bordercolor="#FFFFFF"><TABLE width="368" height=326 border="0" align=left cellPadding=0 
      cellSpacing=0 bgColor=#ffffff style="WORD-BREAK: break-all">
                    <TBODY>
                      <TR>
                        <TD height="324" align=left vAlign=top class=border><TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
                <TR>
                  <TD width="22%" height=20><IMG height=9 
                  src="../../images/client/left_title2.gif" 
                  width=15 align=absMiddle border=0>&nbsp;<B><FONT 
                  color=#000000><a href="news.php?types=4">辩词鉴赏</a></FONT></B></TD>
                  <TD align=right width="78%" height=20><a href="news.php?types=4"><IMG height=5 
                  src="../../images/client/icn_more.gif" width=29 
                  align=middle border=0></a><A 
                  href="http://www.bjmslawyer.com/wytx/"></A></TD>
                </TR>
                <TR>
                  <TD width="22%" bgColor=#a4813a height=2></TD>
                  <TD width="78%" bgColor=#ecc981 height=2></TD>
                </TR>
                <TR>
                  <TD align=middle colSpan=2><TABLE width="100%">
                      <TBODY>
                        <TR>
                          <TD valign="top"><table cellspacing=0 cellpadding=0 width="98%" align=center 
                  border=0>
					  <?php $_from = $this->_tpl_vars['userarray5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?> 

                        <tr>
                          <td colspan=2 align=left valign="top"><IMG alt=普通信息 
                        src="../../images/client\Article_common7(2).gif"></td>
                          <td width="95%" align=left valign="top"><a href="news_detail.php?id=<?php echo $this->_tpl_vars['aa']['id']; ?>
&types=4"><?php echo $this->_tpl_vars['aa']['subject']; ?>
</a></td>
                        </tr><?php endforeach; endif; unset($_from); ?>
                      
                  </table></TD>
                        </TR>
                        <TR>
                          <TD><TABLE cellSpacing=5 cellPadding=0 width="100%" 
                        align=center border=0>
                              <TBODY>
                                <TR vAlign=top>
                                  <?php $_from = $this->_tpl_vars['array5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?>
								  <TD align=middle><A class="" 
                               title=<?php echo $this->_tpl_vars['aa']['subject']; ?>

                              href="news_detail.php?id=<?php echo $this->_tpl_vars['aa']['id']; ?>
&types=4" 
                              target=_blank><IMG class=pic1 height=90 
                              src="../../uploads/<?php echo $this->_tpl_vars['aa']['pic']; ?>
" 
                              width=130 border=0></A><BR>
                                    <A class="" 
                              title=<?php echo $this->_tpl_vars['aa']['subject']; ?>

                              href="news_detail.php?id=<?php echo $this->_tpl_vars['aa']['id']; ?>
&types=4" 
                              target=_blank><?php echo $this->_tpl_vars['aa']['subject']; ?>
</A></TD>
                           <?php endforeach; endif; unset($_from); ?>
                                </TR>
                              </TBODY>
                          </TABLE></TD>
                        </TR>
                      </TBODY>
                  </TABLE></TD>
                </TR>
              </TBODY>
          </TABLE></TD>
                      </TR>
                    </TBODY>
                  </TABLE></TD>
                </TR>
              </TBODY>
            </TABLE></td>
          </tr>
        </table></td>
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