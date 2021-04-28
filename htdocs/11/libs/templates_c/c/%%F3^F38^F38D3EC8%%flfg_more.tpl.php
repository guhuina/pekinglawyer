<?php /* Smarty version 2.6.10, created on 2009-07-24 23:21:17
         compiled from flfg_more.tpl */ ?>
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
      href="index.php">北京律师维权网</A>&nbsp;&gt;&gt;&nbsp;<a href="index.php">首页</a> &gt;&gt; <a href="flfg.php">法律法规</a> &gt;&gt; <?php echo $this->_tpl_vars['name']; ?>
 </TD>
    <TD align=left width="20%"><FONT color=#ff6600>今天是：
      <SCRIPT language=JavaScript 
      src="../../images/client/date.js" 
      type=text/JavaScript></SCRIPT>
    </FONT></TD></TR></TBODY></TABLE></td>
  </tr>
  <tr>
    <td><table width="960" border="0" cellspacing="0" cellpadding="0">
	
      <tr>
        <td width="200" valign="top"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "left1.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
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
                border=0>&nbsp;<?php echo $this->_tpl_vars['name']; ?>
信息列表</TD>
                <TD align=right width=4 height=20></TD>
                <TD align=right width=378 height=20></TD></TR>
              <TR>
                <TD width=378 bgColor=#a4813a colSpan=3 height=2></TD></TR>
              <TR align=middle>
                <TD width=760 height="10" colSpan=3 align=left vAlign=top></TD>
              </TR>
            
			  <TR>
                <TD colSpan=3><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <?php $_from = $this->_tpl_vars['userarray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?><tr>
                    <td width="4%" align="center" valign="top"><IMG alt=普通信息 
                        src="../../images/client\Article_common.gif"></td>
                    <td width="80%"><a href="">[<?php echo $this->_tpl_vars['name']; ?>
]</a>&nbsp;<a href="flfg_detail.php?id=<?php echo $this->_tpl_vars['aa']['id']; ?>
&type=<?php echo $this->_tpl_vars['type']; ?>
"><?php echo $this->_tpl_vars['aa']['subject']; ?>
</a></td>
                    <td width="16%"><?php echo $this->_tpl_vars['aa']['instime']; ?>
</td>
                    </tr><?php endforeach; endif; unset($_from); ?>
                </table></TD></TR>
				 <TR>
                <TD colSpan=3><div align="center"><a href="?page_now=1&type=<?php echo $this->_tpl_vars['type']; ?>
">首页</a> <a href="?page_now=<?php echo $this->_tpl_vars['before_page']; ?>
&type=<?php echo $this->_tpl_vars['type']; ?>
">上一页</a>&nbsp;<a href="?page_now=<?php echo $this->_tpl_vars['after_page']; ?>
&type=<?php echo $this->_tpl_vars['type']; ?>
">下一页</a> <a href="?page_now=<?php echo $this->_tpl_vars['pages']; ?>
&type=<?php echo $this->_tpl_vars['type']; ?>
">尾页</a> &nbsp;页码: ( <?php echo $this->_tpl_vars['page_now']; ?>
/<?php echo $this->_tpl_vars['pages']; ?>
 总页数 )&nbsp;&nbsp;<?php echo $this->_tpl_vars['page_recs']; ?>
/页&nbsp;共<?php echo $this->_tpl_vars['total_user']; ?>
条记录</div></TD></TR>
				</TABLE></TD></TR></TBODY></TABLE></td>
            <td valign="top" bgcolor="#FFFFFF"><TABLE cellSpacing=5 cellPadding=0 width="60%" align=center 
            border=0>
              <TBODY>
              <TR vAlign=top>
			  <?php $_from = $this->_tpl_vars['array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['aa']):
?>
                <TD align=middle><a href="news_detail.php?id=<?php echo $this->_tpl_vars['aa']['id']; ?>
&type=<?php echo $this->_tpl_vars['type']; ?>
"><IMG class=pic1 height=90 
                  src="../../uploads/<?php echo $this->_tpl_vars['aa']['pic']; ?>
" 
                  width=130 border=0></a><BR>
                  <A class="" title=<?php echo $this->_tpl_vars['aa']['subject']; ?>
 
                  href="flfg_detail.php?id=<?php echo $this->_tpl_vars['aa']['id']; ?>
&type=<?php echo $this->_tpl_vars['type']; ?>
" 
                  target=_blank><?php echo $this->_tpl_vars['aa']['subject']; ?>
</A></TD>
				  <?php endforeach; endif; unset($_from); ?>
			    </TR></TBODY></TABLE></td>
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