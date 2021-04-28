<?php /* Smarty version 2.6.10, created on 2009-08-04 10:10:25
         compiled from login.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>北京律师维权网--后台管理</title>
<link rel="stylesheet" type="text/css" id="css" href="/images/style_1.css">

<script language="javascript">
<!--
function submit2(){
  if(document.form.username.value==""){
    alert("用户名不能为空!");
	form.username.focus();
	return false;
  }
  if(document.form.password.value==""){
    alert("密码不能为空!");
		form.password.focus();
	return false;
	  }
 
}
//-->
</script>
<style type="text/css">
<!--
.STYLE1 {color: #154BA0}
.STYLE2 {color: #CC0000}
.STYLE5 {
	font-size: 35px;
	font-family: "华文新魏";
	font-weight: bold;
	color: #000000;
}
.STYLE6 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 16px;
}
-->
</style>
</head>
<body>
<div class="maintable"><div style="width: 100%; height: 95px; text-align: left;">
<table width="100%" background="/images/xingxiang2.jpg" height="95">
  <tr>
    <td width="7%">&nbsp;</td>   
    <td width="85%" valign="bottom" class="STYLE5">北京律师维权网</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
    </tr>
</table>

</div>
</div>
<center>
</div>

<div class="maintable">
<form method="post" name="form" action="" onSubmit="return submit2();" >
<input type="hidden" name="Login_f" value="1">
<div class="spaceborder" style="width: 100%">
<table cellspacing="0" cellpadding="4" width="100%" align="center">
<tr class="header">
<td colspan="2"><span class="STYLE1">管理员登录&nbsp;&nbsp;<?php echo $this->_tpl_vars['alert']; ?>
 </span></td>
</tr>
<tr>
<td width="12%" class="altbg1">&nbsp;&nbsp;用户名：</td>
<td width="88%" class="altbg2"><span class="smalltxt">
<input type="text" name="username" size="25" maxlength="40" tabindex="2">
</span></td>
</tr>
<tr>
<td class="altbg1">&nbsp;&nbsp;密&nbsp;&nbsp;&nbsp;码：</span></td>
<td class="altbg2"><span class="smalltxt">
<input type="password" name="password" size="25" tabindex="3">
</span></td>
</tr>
<tr>
<td class="altbg1"> &nbsp;&nbsp;验证码：</span></td>
<td class="altbg2"><span class="smalltxt">
<INPUT name="lg_num" size="8">&nbsp;<?php echo $this->_tpl_vars['val_num']; ?>

</span></td>
</tr>
</table>
</div><br>
<div class="option"><div class="submitbutton"><input class="button" type="submit" value="提&nbsp;交"></div></div>
</form>
<br>
<div class="mainborder"></div>
<script language="javascript">
 form.username.focus();
</script>

</body></html>