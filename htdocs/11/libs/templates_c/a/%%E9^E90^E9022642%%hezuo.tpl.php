<?php /* Smarty version 2.6.10, created on 2009-11-10 22:03:10
         compiled from hezuo.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
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
function checkall(){
	if(form1.checkbox.checked==true){
		for (var i=0;i<form1.elements.length;i++){   
		  var e = form1.elements[i];   
	    		e.checked = true;   
	 	}   
	}else{
		for (var i=0;i<form1.elements.length;i++){   
		  var e = form1.elements[i];   
	    		e.checked = false;   
	 	}   	
	}
}
function checkall1(){

		for (var i=0;i<form1.elements.length;i++){   
		  var e = form1.elements[i];   
	    		e.checked = true;   
	 	}
}
function checkno(){

		for (var i=0;i<form1.elements.length;i++){   
		  var e = form1.elements[i];   
	    		e.checked = false;   
	 	}
}
function confirmit(){
	var selnum=0;
	for (var i=0;i<form1.elements.length;i++){   
		  var e = form1.elements[i];   
	    		if(e.checked == true)
					selnum++;
	 }
	 if(selnum==0){
	 	alert("����ѡ������");
		return;
	 }   
	if(!confirm("ȷʵҪɾ����")){
		return;
	}
	var seldata="";
	for (var i=0;i<form1.elements.length;i++){   
		  var e = form1.elements[i];   
	    		if(e.checked == true){
					seldata=seldata+e.value+",";
				}	
	 }
	 form1.seldata.value=seldata;
	 form1.submit();
}

function del(ok){
if(confirm("ȷ��Ҫɾ����")){
}else{
herf="#";}
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<table width=100% align=center cellspacing=0 cellpadding=0 class=i_table>
<form name=form1 method="post" action="">
<input type=hidden name=seldata>
	<tr>
		<td>
			<table width=100% cellspacing=1 cellpadding=6>
				<tr>
				  <td colspan=4 class=head><strong><?php echo $this->_tpl_vars['name']; ?>
&nbsp;&nbsp;<a href="hezuo_ins.php?types=<?php echo $this->_tpl_vars['types']; ?>
">���</a></strong></td>
				</tr>
				<tr align=center class=head_2><td width="17%">���<input type="checkbox" name="checkbox" value="0" onClick="javascript:checkall();"/></td>
				<td width="59%" class="altbg2">������ַ</td>
				<td width="24%" class="altbg2">�༭</td>
				</tr>
				<?php $_from = $this->_tpl_vars['userarray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['userid']):
?>
				<tr align=center>
				 <td class=b><p><?php echo $this->_tpl_vars['userid']['pid']; ?>

			        <input type="checkbox" name="checkbox<?php echo $this->_tpl_vars['userid']['id']; ?>
" value="<?php echo $this->_tpl_vars['userid']['id']; ?>
" />
		            </p>			      </td>
				  <td class=b><?php echo $this->_tpl_vars['userid']['linkweb']; ?>
</td>
			      <td class=b><a href="hezuo_upd.php?id=<?php echo $this->_tpl_vars['userid']['id']; ?>
&amp;types=<?php echo $this->_tpl_vars['types']; ?>
">�޸�</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="confirm.php?&url=<?php echo $this->_tpl_vars['userid']['url']; ?>
">ɾ��</a>&nbsp;</td>
				</tr>
			  <?php endforeach; endif; unset($_from); ?>
			</table>
		</td>
	</tr>
	</form>
</table>
<br>
<table cellspacing=0 cellpadding=0 width='100%' align=center>
<tr><td align=left><div align="center"><a href="?page_now=1&types=<?php echo $this->_tpl_vars['types']; ?>
"><font face="webdings">9</font></a> <a href="?page_now=<?php echo $this->_tpl_vars['before_page']; ?>
&types=<?php echo $this->_tpl_vars['types']; ?>
"><font face="webdings">7</font></a>&nbsp;��ת:
      <input type='text' size='2' style='height: 16px; border:1px solid #E7E3E7' onkeydown="javascript: if(event.keyCode==13) location='?page_now='+this.value;"> 
        <a href="?page_now=<?php echo $this->_tpl_vars['after_page']; ?>
&types=<?php echo $this->_tpl_vars['types']; ?>
"><font face="webdings">8</font></a> <a href="?page_now=<?php echo $this->_tpl_vars['pages']; ?>
&types=<?php echo $this->_tpl_vars['types']; ?>
"><font face="webdings">:</font></a> &nbsp;ҳ��: ( <?php echo $this->_tpl_vars['page_now']; ?>
/<?php echo $this->_tpl_vars['pages']; ?>
 ��ҳ�� )&nbsp;&nbsp;<?php echo $this->_tpl_vars['page_recs']; ?>
/ҳ&nbsp;��<?php echo $this->_tpl_vars['total_user']; ?>
����¼&nbsp;&nbsp;<a href="javascript:confirmit();">ɾ��ѡ������</a></div></td>
<td align=right>
</td></tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "admin_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>