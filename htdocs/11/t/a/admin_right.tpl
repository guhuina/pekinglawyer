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
<TABLE class=i_table cellSpacing=1 cellPadding=3 width="100%" align=center>
  <TBODY>
  <TR>
    <TD class=head>ϵ ͳ �� Ϣ</TD></TR>
  <TR>
    <TD class=b>PHP �汾��&nbsp; &nbsp; 
	<FONT color=#000066>^$phpinfo^</FONT><BR>MYSQL �汾��&nbsp; &nbsp;&nbsp; 
	<FONT color=#000066>^$mysqlinfo^</FONT><BR>����������Ϣ�� &nbsp; 
	<FONT color=#000066>^$osinfo^</FONT><BR>����ϴ����ƣ� &nbsp; 
	<FONT color=#000066>^$max_upload^</FONT><BR>���ִ��ʱ�䣺 &nbsp; 
	<FONT color=#000066>^$max_ex_time^ seconds</FONT><BR>�ʼ�֧��ģʽ�� &nbsp; 
	<FONT color=#000066>^$sys_mail^</FONT><BR>Cookie ���ԣ�&nbsp; &nbsp; 
	<FONT color=#000066>^$ifcookie^</FONT><BR>����������ʱ�䣺&nbsp;
	<FONT color=#000066>^$systemtime^</FONT><BR> </TD></TR></TBODY></TABLE><BR>
<CENTER>
<BLOCKQUOTE><BR><BR>
^include file="admin_footer.tpl"^
