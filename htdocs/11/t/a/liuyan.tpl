^include file="admin_header.tpl"^
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
		window.location="/programes/admin/quit.php";
	}	
}
writeCookie("times",0,1);
mytimer=window.setInterval('hidden()',mytimer);

</script>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<table width=100% align=center cellspacing=0 cellpadding=0 class=i_table>
	<tr>
		<td>
			<table width=100% cellspacing=1 cellpadding=6>
				<tr>
				  <td colspan=6 class=head><strong>?ͻ????Թ???&nbsp;&nbsp;&nbsp;</strong></td>
				</tr>
				<tr align=center class=head_2><td width="11%">????</td>
				<td width="18%" class="altbg2">????</td>
			
				<td width="17%" class="altbg2">?Ƿ?????</td>
				<td width="22%" class="altbg2">????ʱ??</td>
				<td width="21%" class="altbg2">?༭</td>
				</tr>
				^foreach from=$userarray item=userid^
				<tr align=center>
				  <td class=b>^$userid.id1^</td>
				 
				   <td class=b>^$userid.name^</td>
				    <td class=b><a href="ifpass.php?id=^$userid.id^">^$userid.ifpass^</a></td>
				    <td class=b>^$userid.instime^</td>
				<td class=b><a href="confirm.php?url=^$userid.url^">ɾ??</a>&nbsp;&nbsp;<a href="liuyan_detail.php?id=^$userid.id^">??ϸ????</a>&nbsp;&nbsp;<a href="review.php?id=^$userid.id^">?ظ?</a></td>
				</tr>
			  ^/foreach^
		  </table>
		</td>
	</tr>
</table>
<br>
<table cellspacing=0 cellpadding=0 width='100%' align=center>
<tr><td align=left><div align="center"><a href="?page_now=1"><font face="webdings">9</font></a> <a href="?page_now=^$before_page^"><font face="webdings">7</font></a>&nbsp;??ת:
      <input type='text' size='2' style='height: 16px; border:1px solid #E7E3E7' onkeydown="javascript: if(event.keyCode==13) location='?page_now='+this.value;"> 
        <a href="?page_now=^$after_page^"><font face="webdings">8</font></a> <a href="?page_now=^$pages^"><font face="webdings">:</font></a> &nbsp;ҳ??: ( ^$page_now^/^$pages^ ??ҳ?? )&nbsp;&nbsp;^$page_recs^/ҳ&nbsp;??^$total_user^????¼</div></td>
<td align=right>
</td></tr>
</table>
^include file=admin_footer.tpl^