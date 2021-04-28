<?php /* Smarty version 2.6.10, created on 2009-08-04 10:10:46
         compiled from admin_header.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE></TITLE>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<STYLE type=text/css>TABLE {
	BORDER-TOP: 0px; BORDER-LEFT: 0px; BORDER-BOTTOM: 2px
}
SELECT {
	FONT-SIZE: 12px; COLOR: #000000; BACKGROUND-COLOR: #e0e2f1
}
A {
	COLOR: #000000; TEXT-DECORATION: none
}
A:hover {
	TEXT-DECORATION: underline
}
BODY {
	FONT-SIZE: 12px; BACKGROUND: #f7f7f7; MARGIN: 0px; COLOR: #000000; FONT-FAMILY: Verdana
}
TEXTAREA {
	FONT-SIZE: 12px
}
INPUT {
	FONT-SIZE: 12px
}
OBJECT {
	FONT-SIZE: 12px
}
TD {
	BORDER-RIGHT: 1px; BORDER-TOP: 0px; FONT-SIZE: 12px; COLOR: #000000
}
.b {
	BACKGROUND: #f7f7f7
}
.head {
	FONT-WEIGHT: bold; BACKGROUND: #739ace; COLOR: #ffffff
}
.head TD {
	COLOR: #ffffff
}
.head A {
	COLOR: #ffffff
}
.head_2 {
	BACKGROUND: #ced4e8
}
.head_2 TD {
	COLOR: #000000
}
.left_padding {
	BACKGROUND: #f7f7f7
}
.hr {
	BORDER-RIGHT: 0px; BORDER-TOP: #739ace 1px solid; BORDER-LEFT: 0px; BORDER-BOTTOM: 0px
}
.bold {
	FONT-WEIGHT: bold
}
.smalltxt {
	FONT-SIZE: 12px; COLOR: #000000; FONT-FAMILY: Tahoma, Verdana
}
.i_table {
	BORDER-RIGHT: #739ace 1px solid; BORDER-TOP: #739ace 1px solid; BACKGROUND: #dee3ef; BORDER-LEFT: #739ace 1px solid; BORDER-BOTTOM: #739ace 1px solid
}
</STYLE>
<SCRIPT language=JavaScript>
ifcheck = true;
function CheckAll(form)
{
	for (var i=0;i<form.elements.length-2;i++)
	{
		var e = form.elements[i];
		e.checked = ifcheck;
	}
	ifcheck = ifcheck == true ? false : true;
}
function atccheck()
{
	if(document.FORM.atc_title.value==''){
		alert('标题为空');
		document.FORM.atc_title.focus();
		return false;
	} else if(document.FORM.fid.value==''){
		alert('没有选择文章所属分类');
		document.FORM.fid.focus();
		return false;
	}
	_submit();
}
function checkhackset(chars)
{
	if(!confirm("确定要卸载此插件吗? 如果您卸载了此插件,程序将自动删除插件相关文件，请确认!"))
		return false;
	location.href=chars;
}
function checkgroupset(chars)
{
	if(!confirm("确定删除吗? 如果您删除了此用户组,请到论坛缓存数据管理更新用户头衔缓冲!"))
		return false;
	location.href=chars;
}
function report_jump(admin_file){
	var URL=document.form1.type.options[document.form1.type.selectedIndex].value;
	location.href=admin_file+"?adminjob=report&type="+URL;
}
function level_jump(admin_file)
{
	var URL=document.mod.selectfid.options[document.mod.selectfid.selectedIndex].value;
	location.href=admin_file+"?adminjob=level&action=editgroup&gid="+URL;
}
function ip_jump(name)
{
	URL = eval('document.form1.' + name + '.options[document.form1.' + name + '.selectedIndex].value');
	location.href=URL;
}
</SCRIPT>
<!---->
<META content="MSHTML 6.00.2900.2769" name=GENERATOR></HEAD>
<BODY leftMargin=5 topMargin=5>
<TABLE cellSpacing=1 cellPadding=3 width="100%" align=center class=i_table>
  <TBODY>
  <TR class=head>
    <TD align=middle><div align="left">登陆名：<?php echo $this->_tpl_vars['session_admin_userid']; ?>
&nbsp;&nbsp;</div></TD>
    </TR></TBODY></TABLE>