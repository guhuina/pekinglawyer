<script>
//2000=2seconds
var mytimer=5000;
function writeCookie(name, value, hours)
{
  var expire = "";
  if(hours != null)
  {
    expire = new Date((new Date()).getTime() + hours * 3600000);
    expire = "; expires=" + expire.toGMTString();
  }
  document.cookie = name + "=" + escape(value) + expire;
}
function readCookie(name)
{
  var cookieValue = "";
  var search = name + "=";
  if(document.cookie.length > 0)
  { 
    offset = document.cookie.indexOf(search);
    if (offset != -1)
    { 
      offset += search.length;
      end = document.cookie.indexOf(";", offset);
      if (end == -1) end = document.cookie.length;
      cookieValue = unescape(document.cookie.substring(offset, end))
    }
  }
  return cookieValue;
}
function hidden()
{
  var cookv=readCookie("times");  
  //alert(cookv);
  cookv=(cookv*1)+1;
  writeCookie("times",cookv,1);
  if(cookv>=120){
  	writeCookie("times",0,1);
		window.location="/p/a/quit.php";
	}	
}
writeCookie("times",0,1);
mytimer=window.setInterval('hidden()',mytimer);

</script>
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
    <td colspan=6 class=head><strong>^$name^</strong></td>
  </tr>
 ^if $types <> 3^
  <tr align=center>
  <td width="11%" class=b><div align="right">详细内容：<br>
  </div></td>
<td width="89%" class=b >
	     <textarea name="content" id="content" style="display:none">^$content^</textarea>
	     <iframe src="../../libs/sinaEditor/Edit/editor.htm?id=content&ReadCookie=0" frameBorder="0" marginHeight="0" marginWidth="0" scrolling="No" width="650" height="460"></iframe></td></tr>
 ^/if^
 ^if $types eq 3^
 <tr align=center>
  <td width="11%" class=b><div align="right">关键字内容：<br>
  </div></td>
<td width="89%" align="left" class=b ><label>
  <input name="content" type="text"  value="^$content^" size="80"/>
</label>	     </td>
 </tr>
^/if^
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