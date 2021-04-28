<style type="text/css">
<!--
.STYLE1 {color: #FF0000}
-->
</style>
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
				  <td colspan=2  class="head"><strong>留言内容回复</strong></td>
				</tr>
				<tr align=center><td colspan="2" class=b><form id="form1" name="form1" method="post" action=""  onsubmit="return checkform();">
   <input type="hidden" name="action" value="submit" />
   <table width="100%" height="118" border="0" cellpadding="0" cellspacing="0">
   
   <tr align="center">
     <td width="117" height="29" align="left" class=b>留言内容</td>
     <td height="29" colspan="2" align="left" class=b>^$content^</td>
   </tr>
    <tr align="center">
     <td width="117" height="29" align="left" class=b>添加回复内容:</td>
     <td width="446" height="29" valign="middle" class=b><label>
       <textarea name="re_content" cols="60" rows="10" id="re_content">^$re_content^</textarea>
     </label></td>
     <td width="394" align="left" valign="middle" class=b><span class=" STYLE3 STYLE1">[^$mess^]</span></td>
    </tr>
 </table>
 <p align=center><input type="submit" name="Submit" value="回复" class="button"/>
 </p>
</form></td>
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
