<?php require_once('../include/mysqlclass.php'); ?>

<?php
session_start();
if(isset($_SESSION['u_name'])){
	$u_name=$_SESSION['u_name'];
	$u_qx=$_SESSION['u_qx'];
}else{
	$u_name='';
	$u_qx=0;
}
$leftmenu=new mysql();
$i=1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Expires" content="0">
<style>
body,table,tr
{
	font-size:12px;
	font-family:����;
	line-height:16px;
}

A.parent:link {font:13px;text-decoration:none;color: #000000}
A.parent:visited {font-size:13px;text-decoration:none;color: #000000}
A.parent:hover {font-size:13px;text-decoration:underline;color: #ff6600}

A:link {color: #000066}
A:visited {color: #000066}
A:hover {color: #ff3300}
body {
	background-color: #B7D3FC;
}
</style>

<script language="javascript">
	var imgOpen = new Image();
	var imgClose = new Image();
	imgOpen.src = "images/open.gif"
	imgClose.src = "images/close.gif"

	function expand(el)
	{
	  
		childObj = document.getElementById("child" + el);
		imgObj = document.getElementById("img" + el);

		if (childObj.style.display == 'none')
		{
			childObj.style.display = 'block';
			imgObj.src = imgOpen.src;
		}
		else
		{
			childObj.style.display = 'none';
			imgObj.src = imgClose.src;
		}
	}
</script>
</head>
<body topmargin="0" leftmargin="0" left bottom no-repeat;">

<table width="158" border="1" cellspacing="0" cellpadding="0" align="center">
	<tr>
	  <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="17" align="center" background="images/admin_bg_1.gif"><a href="/" target="_blank">��վ��ҳ</a> | <a href="loginout.php" target="_top">�˳���¼</a> </td>
        </tr>
      </table></td>
  </tr>
  <?php
  $i=$i+1;
  ?>

	<tr>
		<td valign="top">

			<div id="parent<?PHP echo $i;?>">
					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="images/admin_left_2.gif">
						<tr height="20">
							<td width="21" height="25" align="center"><a href="#" onClick="expand(<?PHP echo $i;?>)"><img src="images/close.gif" name="img<?PHP echo $i;?>" width="9" height="16" border="0" id="img<?PHP echo $i;?>"></a></td>
							<td width="158" height="25"><a href="#" class="parent" onClick="expand(<?PHP echo $i;?>)">���߱����鿴</a>							</td>
						</tr>
				  </table>
				</div>
				<div id="child<?PHP echo $i;?>" style="display:none;">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
							<tr>
								<td width="40"></td>
								<td><a href="online.php"  target="main">�鿴���߱���</a></td>
							</tr>
					</table>
				</div>
	</td>
	</tr>
<?php
  $i=$i+1;
  ?>

	<tr>
		<td valign="top">

				<div id="parent<?PHP echo $i;?>">
					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="images/admin_left_2.gif">
						<tr height="20">
							<td width="21" height="25" align="center"><a href="#" onClick="expand(<?PHP echo $i;?>)"><img src="images/close.gif" name="img<?PHP echo $i;?>" width="9" height="16" border="0" id="img<?PHP echo $i;?>"></a></td>
							<td width="158" height="25"><a href="#" class="parent" onClick="expand(<?PHP echo $i;?>)">���Է�������</a>							</td>
						</tr>
				  </table>
				</div>
				<div id="child<?PHP echo $i;?>" style="display:none;">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
							<tr>
								<td width="40"></td>
								<td><a href="book.php"  target="main">�û����Թ���</a></td>
							</tr>
					</table>
				</div>
	</td>
	</tr>
	
	<tr>
		<td valign="top">
		<?php $i=$i+1;?>
				<div id="parent<?PHP echo $i;?>">
					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="images/admin_left_2.gif">
						<tr height="20">
							<td width="21" height="25" align="center"><a href="#" onClick="expand(<?PHP echo $i;?>)"><img src="images/close.gif" name="img<?PHP echo $i;?>" width="9" height="16" border="0" id="img<?PHP echo $i;?>"></a></td>
							<td width="158" height="25"><a href="#" class="parent" onClick="expand(<?PHP echo $i;?>)">ϵͳ����</a>							</td>
						</tr>
						<tr>
							<td height="10" colspan="2" align="center" bgcolor="#F6F8FE">							</td>
						</tr>
				  </table>
				</div>
				<div id="child<?PHP echo $i;?>" style="display:none;">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
							<tr>
								<td width="40"></td>
								<td><a href="admin_user.php"  target="main">������Ա����</a></td>
							</tr>
					
							<tr>
								<td width="40"></td>
								<td><a href="dept.php"  target="main">��վϵͳ����</a></td>
							</tr>
						<?PHP
							if($u_name=="xc_huang"&&$u_qx=10){
						
							echo "<tr>";
								echo "<td width=\"40\"></td>";
								echo "<td><a href=\"class_big.php\"  target=\"main\">��Ŀ����</a></td>";
						 echo "</tr>";
						   }
						 ?>
					</table>
				</div>
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="5" align="center">&nbsp;</td>
        </tr>
        <tr>
		<?php
          echo "<td align=\"center\" bgcolor=\"#CCCCCC\"><p>������˹�����<br />����֧��QQ:59125994</p>";
		  ?>
          </td>
        </tr>
      </table>
	</td>
	</tr>
</table>

</body>
</html>
<?php
$leftmenu->close();
?>