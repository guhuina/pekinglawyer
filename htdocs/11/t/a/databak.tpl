^include file="admin_header.tpl"^

<form name="form1" method="post" action="">
<input type=hidden name=action value="submit">
  <table width="100%"  cellpadding='0' class="db">
    <tr align="center" ><td height="30" colspan="2" class="head"><strong class="dd">数据备份</strong></td>
    </tr>
    <tr>
      <td height="20" colspan="2">&nbsp;</td>
    </tr>
    <tr><td height="20" colspan="2" class="ff">&nbsp;备份方式</td>
    </tr>
    
    <tr><td height="20" colspan="2" valign="middle" class="ff"><input type="radio" name="weizhi" value="server" checked>
    备份到服务器</td>
    </tr><tr><td height="20" colspan='2' valign="middle" class="ff"> <input type="radio" name="weizhi" value="localpc">
        备份到本地</td>
    </tr>
    <tr><td colspan="2"  align='center'><div class="option"><div class="submitbutton"><input type="submit" name="act" value="备&nbsp;份" class="ff">
    </div></div></td></tr>
  </table>
</form>
