<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>网站管理登录页面</title>
<style type="text/css">
<!--
body {
	background-image: url(images/login_04.jpg);
	background-position: 0 0px;
	background-color: #26619D;
	padding: 0px;
	margin: 0px;
}
.STYLE1 {
	color: #FFFFFF;
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<script language="javascript">
 function chklogin(){
	 if(document.form1.u_name.value.length<2){
		 alert("用户名不能为空");
		 document.form1.u_name.focus();
		 return false;
	 }
	 if(document.form1.u_pwd.value.length<2){
		 alert("密码不能为空");
		 document.form1.u_pwd.focus();
		 return false;
	 }
 }

</script>
<table width="927" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="800" height="141"><table width="800" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="230" rowspan="2">&nbsp;</td>
        <td height="77">&nbsp;</td>
        <td rowspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td><img src="images/login_06.jpg" width="512" height="168" alt="" /></td>
      </tr>
    </table>
      <table width="800" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="331" rowspan="2" align="right"><img src="images/login_08.jpg" width="330" height="407" alt="" /></td>
          <td width="346" height="214" background="images/login_09.jpg"><table width="90%" border="0" cellspacing="0" cellpadding="5">
            <form id="form1" name="form1" method="post" action="checklogin.php" onsubmit="return chklogin();">
              <tr>
                <td width="26%" align="right"><span class="STYLE1">用户名:</span></td>
                <td width="74%"><input name="u_name" type="text" id="u_name" /></td>
              </tr>
              <tr>
                <td align="right" class="STYLE1">密&nbsp;&nbsp;码:</td>
                <td><input name="u_pwd" type="password" id="u_pwd" /></td>
              </tr>
              <tr>
                <td align="right" class="STYLE1">验证码:</td>
                <td><input name="code" type="text" class="left" id="code" size="10" onclick="onclk(11)" onblur="onblr(11)" />
                    <span class="left">&nbsp;</span><a href="#" class="left" style="position:relative;top:2px;" onclick="document.getElementById('image').src = '../include/securimage/securimage_show.php?sid=' + Math.random(); return false"><img src="../include/securimage/securimage_show.php?sid=<?php echo md5(uniqid(time())); ?>" name="image" border="0" align="absmiddle" id="image" /></a></td>
              </tr>
              <tr>
                <td align="right">&nbsp;</td>
                <td><input type="submit" name="Submit" value=" 登 录 " />
                  &nbsp;
                  <input type="reset" name="Submit2" value="重置" /></td>
              </tr>
            </form>
          </table></td>
          <td rowspan="2"><img src="images/login_10.jpg" width="107" height="407" alt="" /></td>
        </tr>
        <tr>
          <td><img src="images/login_12.jpg" width="346" height="193" alt="" /></td>
        </tr>
      </table></td>
    <td width="127">&nbsp;</td>
  </tr>
</table>
</body>
</html>
