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
		window.location="/p/a/quit.php";
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
				  <td colspan=5 class=head><strong>^$name^&nbsp;&nbsp;&nbsp;<a href="img_ins.php?types=^$types^">添加</a></strong></td>
				</tr>
				<tr align=center class=head_2><td width="14%">序号</td>
				<td width="49%" class="altbg2">标题</td>
				<td width="12%" class="altbg2">图片展示</td>
				<td width="25%" class="altbg2">编辑</td>
				</tr>
				^foreach from=$userarray item=userid^
				<tr align=center>
				  <td class=b>^$userid.pid^</td>
				  <td class=b>^$userid.subject^</td>
				  <td class=b><img src="/uploads/^$userid.czyear^" height="35" width="35"/></td>
			    <td class=b><a href="img_upd.php?id=^$userid.id^&amp;types=^$types^&amp;page_now=^$page_now^">修改</a>&nbsp;&nbsp;<a href="confirm.php?&url=^$userid.url^">删除</a>&nbsp;&nbsp;<a href="img_detail.php?id=^$userid.id^">详细信息</a></td>
				</tr>
			  ^/foreach^
			</table>
		</td>
	</tr>
</table>
<br>
<table cellspacing=0 cellpadding=0 width='100%' align=center>
<tr><td align=left><div align="center"><a href="?page_now=1&types=^$types^"><font face="webdings">9</font></a> <a href="?page_now=^$before_page^&types=^$types^"><font face="webdings">7</font></a>&nbsp;跳转:
      <input type='text' size='2' style='height: 16px; border:1px solid #E7E3E7' onkeydown="javascript: if(event.keyCode==13) location='?page_now='+this.value;"> 
        <a href="?page_now=^$after_page^&types=^$types^"><font face="webdings">8</font></a> <a href="?page_now=^$pages^&types=^$types^"><font face="webdings">:</font></a> &nbsp;页码: ( ^$page_now^/^$pages^ 总页数 )&nbsp;&nbsp;^$page_recs^/页&nbsp;共^$total_user^条记录</div></td>
<td align=right>
</td></tr>
</table>
^include file="admin_footer.tpl"^