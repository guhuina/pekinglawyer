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

<script>
    function allsel(){
		
	}
</script>
<table width=100% align=center cellspacing=0 cellpadding=0 class=i_table>
	<tr>
		<td>
			<table width=100% cellspacing=1 cellpadding=6>
				<tr>
				  <td colspan=2 ><strong>详细内容显示</strong></td>
				</tr>
				<tr align=center><td width="11%" class=b><div align="right">序号</div></td>
				  <td width="89%" class=b><div align="left">^$pid^</div></td>
			    </tr>
				<tr align=center>
				  <td class=b><div align="right">标题</div></td>
				  <td class=b><div align="left">^$subject^</div></td>
			    </tr>
				<tr align=center>
				  <td class=b><div align="right">详细介绍</div></td>
				  <td class=b><div align="left">^$content^</div></td>
			   </tr>
			
			  	<tr align=center>
				  <td class=b><div align="right"><font color="#FF0000">点击查看图片</font></div></td>
				  <td class=b><div align="left"><a href="/uploads/^$czyear^">^$czyear^</a></div></td>
			  </tr>
				<tr align=center>
				  <td colspan="2" class=b><a href="javascript:history.back();">返回</a></td>
			  </tr>
			</table>
		</td>
	</tr>
</table>
<br>
 ^include file="admin_footer.tpl"^
