<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��վ�����¼ҳ��</title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
</head>
<script language="javascript">
 function chklogin(){
	 if(document.form1.u_name.value.length<2){
		 alert("�û�������Ϊ��");
		 document.form1.u_name.focus();
		 return false;
	 }
	 if(document.form1.u_pwd.value.length<2){
		 alert("���벻��Ϊ��");
		 document.form1.u_pwd.focus();
		 return false;
	 }
 }

</script>
<body>
<div class="body">
  <div class="body_bj"></div>
  <div class="body_a">��Ѷΰҵ��̨����ϵͳ-��¼���</div>
  <div class="body_b">
    <div class="body_b1"></div>
    <div class="body_b2">
      <form id="form1" name="form1" method="post" action="checklogin.php" onsubmit="return chklogin();">
        <table width="100%" height="138" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="100">&nbsp;</td>
            <td width="303" height="100" align="center"><table width="283" cellpadding="0" cellspacing="0" class="bk">
              <tr>
                <td width="243" height="98"><table width="100%" height="120" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="70" height="20" align="right">�û�����</td>
                    <td height="20" align="left"><label for="textfield"></label>
                      <input name="u_name" type="text" class="shurukys" id="u_name" /></td>
                  </tr>
                  <tr>
                    <td width="70" height="20" align="right">�� &nbsp;�룺</td>
                    <td height="20" align="left"><label for="textfield2"></label>
                      <input name="u_pwd" type="password" class="shurukys" id="u_pwd" /></td>
                  </tr>
                  <tr>
                    <td height="20" align="right">��֤�룺</td>
                    <td height="20" align="left"><input name="code" type="text" id="code" size="7"  onclick="onclk(11)" onblur="onblr(11)" /><span class="left">&nbsp;</span><a href="#" class="left" style="position:relative;top:2px;" onclick="document.getElementById('image').src = '../include/securimage/securimage_show.php?sid=' + Math.random(); return false"><img src="../include/securimage/securimage_show.php?sid=<?php echo md5(uniqid(time())); ?>" name="image" border="0" align="absmiddle" id="image" /></a></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="40">&nbsp;</td>
            <td height="40" align="center"><label for="imageField"></label>
            <label for="button"></label>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="67" height="35" valign="bottom">&nbsp;</td>
                <td width="55" height="35" valign="bottom"><input name="button" type="submit" class="anniu" id="button" value="��¼" /></td>
                <td width="57" height="35" align="right" valign="bottom"><input name="button2" type="reset" class="anniu" id="button2" value="ȡ��" /></td>
                <td width="30" height="35" valign="bottom">&nbsp;</td>
              </tr>
            </table>
            &nbsp;&nbsp;&nbsp;&nbsp;</td>
          </tr>
        </table>
      </form>
    </div>
  </div>
  <div class="bq"> ����<a href="http://bjgangxun.com" target="_blank">��Ѷΰҵ</a>�Ƽ����޹�˾ Copyright 2007 by bjgangxun All rights reserved. <br />
  �ֻ�:13261757986 �����ʼ�:gangxun@163.com ����:010-67606096 �绰��010-67606096 67661822 �ʱ�:100075</div>
</div>
</body>
</html>
