
  <style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>^include file="admin_header.tpl"^

<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<table width=100% align=center cellspacing=0 cellpadding=0 class=i_table>
<tr><td><table width=100% cellspacing=1 cellpadding=6>
<form name="form1" method="post" action="" enctype="multipart/form-data">
 <input type=hidden name='action' value='submit'>
  
  <tr>
    <td class=head colspan=6><b><a href="news.php?types=^$types^"><b><strong>^$name^</strong></b></a>&gt;&gt;修改信息</b></td>
  </tr>
  <tr align=center>
    <td class=b ><div align="right">排序：</div></td>
    <td colspan="2" class=b width="90%"><div align="left">
      <input name="pid" type="text" id="s_company" size="10" value="^$pid^">
    </div></td>
  </tr>
  <tr align=center>
    <td class=b ><div align="right">标题：</div></td>
    <td colspan="2" class=b width="90%"><div align="left">
      <input name="biaoti" type="text" id="s_company" value="^$subject^" size="60">
    </div></td>
  </tr>
   ^if $types eq 5^
   <tr align=center>
    <td width="11%" class=b ><div align="right">法律类型：</div></td>
    <td colspan="2" class=b width="89%"><div align="left">
      <input type="radio" name="type" value="1" ^if $type eq 1^ checked="checked" ^/if^/>
	     民事法律法规
	  <input type="radio" name="type" value="2" ^if $type eq 2^ checked="checked" ^/if^/>
	   金融法律法规
	    <input type="radio" name="type" value="3" ^if $type eq 3^ checked="checked" ^/if^/>
	  公司法律法规
	    <input type="radio" name="type" value="4" ^if $type eq 4^ checked="checked" ^/if^/>
	   知识产权法律法规
    </div></td></tr>^/if^
	 <tr align=center>
    <td class=b><div align="right">上传图片：</div></td>
    <td colspan="2" class=b><div align="left">
      <input name="upfile" type="file" style="width:500px" size="40" />
      <font color="#FF0000">*&nbsp;最佳图片像素130*90</font> </div></td>
  </tr>
  <tr align=center>
  <td class=b><div align="right">详细内容：<br>
  </div></td>
<td class=b ><textarea name="content" id="content" style="display:none">^$content^</textarea>
	     <iframe src="../../libs/sinaEditor/Edit/editor.htm?id=content&ReadCookie=0" frameBorder="0" marginHeight="0" marginWidth="0" scrolling="No" width="650" height="460"></iframe></td></tr>
   <tr align=center>
  </tr>
  <tr align=center>
    <td colspan="3" class=b><div align="right"></div>      
        <div align="center">
          <input type="submit" name="Submit" value="修改" size=45>
        </div></td>
    </tr>
	</form>
</table></td>
</tr></table>
^include file="admin_footer.tpl"^