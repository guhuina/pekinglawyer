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
  $website="http://".$_SERVER['SERVER_NAME']."/";

if(isset($_GET['cid'])){

$cid=$_GET['cid'];
}else{
$cid=1;
}
$leftmenu=new mysql();

$sqsaa="select * from n_class where cid=".$cid;
$query_index=mysql_query($sqsaa);
$rs_index=mysql_fetch_array($query_index);
$webindex=$website.$rs_index['webpage'];
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
	font-family:宋体;
	line-height:16px;
}

A.parent:link {font:13px;text-decoration:none;color: #000000}
A.parent:visited {font-size:13px;text-decoration:none;color: #FF0000}
A.parent:hover {font-size:13px;text-decoration:underline;color: #ff6600}

A:link {color:  #000066}
A:visited {color: #000066}
A:hover {color: #ff3300}
body {
	background-color: #CCCCFF;
}
</style>
<script language="javascript">

	function expand(el)
	{
	  
		for(i=1;i<=20;i++){
			childObj = document.getElementById("child" + i);
			imgObj = document.getElementById("img" + i);
			  if(i==el){
					if (childObj.style.display == 'none'){
						childObj.style.display = 'block';
						imgObj.src = "images/open.gif";
					}else{
						childObj.style.display = 'none';
						imgObj.src ="images/close.gif";
					}
			  }else{
						childObj.style.display = 'none';
						imgObj.src ="images/close.gif";
			  }
		  }
	}
</script>
</head>
<body topmargin="0" leftmargin="0" left bottom no-repeat;">

<table width="170" border="1" cellspacing="0" cellpadding="0" align="center">
	<tr>
	  <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="17" align="center" background="images/admin_bg_1.gif"><a href="/index.php" target="_blank">返回首页</a> | <a href="loginout.php" target="_top">退出登录</a> </td>
        </tr>
      </table></td>
  </tr>				
  <?php
		$class_small=$leftmenu->selectall("n_class","sortnum asc,cid desc"," where b_id=$cid and flag=2 ");
		while($rs_a=mysql_fetch_array($class_small)){
  ?>
  <tr>
		<td valign="top">
				<div id="parent<?PHP echo $i;?>">
					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="images/admin_left_2.gif">
						<tr height="20">
							<td width="21" height="25" align="center"><a href="#" onClick="expand(<?PHP echo $i;?>)"><img src="images/close.gif" name="img<?PHP echo $i;?>" width="9" height="16" border="0" id="img<?PHP echo $i;?>"></a></td>
							<td width="158" height="25"><a href="#" class="parent" onClick="expand(<?PHP echo $i;?>)"><?PHP echo $rs_a['class_title2'];?></a>							</td>
						</tr>
				  </table>
				</div>

				<div id="child<?php echo $i;?>" style="display:none;">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
					<?php
					$query=$leftmenu->selectall("n_article"," sortnum asc "," where cid=".$rs_a['cid']);
					while($rs_ar=mysql_fetch_array($query)){
					?>
							<tr>
								<td width="20"></td>
								<td><a href="article_edit.php?cid=<?php echo $rs_a['cid'];?>&id=<?php echo $rs_ar['a_id'];?>"  target="main"><?PHP echo $rs_ar['a_title2'];?></a></td>
							</tr>
					 <?php
					 }
					 ?>
					<?php
					$smallclass=$leftmenu->selectall("n_class","sortnum asc,cid desc"," where b_id=".$rs_a['cid']);
					while($rs_small=mysql_fetch_array($smallclass)){
					 if($rs_small['flag']==0){ 
					?>
							<tr>
								<td width="20"></td>
								<td><a href="article.php?cid=<?PHP echo $rs_small['cid'];?>"  target="main"><?PHP echo $rs_small['class_title2'];?></a></td>
							</tr>
					 <?php
					 }else{
					 ?>
							<tr>
								<td width="20"></td>
								<td><a href="class_ssmall.php?cid=<?PHP echo $rs_small['cid'];?>"  target="main"><?PHP echo $rs_small['class_title2'];?></a></td>
							</tr>
					<?php
					}
					  
				}
					?>		
					 <tr>
						<td width="40"></td>
						<td><a href="article.php?cid=<?php echo $rs_a['cid'];?>"  target="main">本类文章</a>  <a href="class_small.php?cid=<?php echo $rs_a['cid'];?>"  target="main">下级类别</a> </td>
					 </tr>
					</table>
				</div>
	</td>
  </tr>
			 <?php
			 $i=$i+1;

				 }
			?>
  <?php
		$class_small=$leftmenu->selectall("n_class","sortnum asc,cid desc"," where b_id=$cid and flag=0 ");
		while($rs_a=mysql_fetch_array($class_small)){
  ?>
  <tr>
		<td valign="top">
				<div id="parent<?PHP echo $i;?>">
					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="images/admin_left_2.gif">
						<tr height="20">
							<td width="21" height="25" align="center"><a href="#" onClick="expand(<?PHP echo $i;?>)"><img src="images/close.gif" name="img<?PHP echo $i;?>" width="9" height="16" border="0" id="img<?PHP echo $i;?>"></a></td>
							<td width="158" height="25"><a href="#" class="parent" onClick="expand(<?PHP echo $i;?>)"><?PHP echo $rs_a['class_title2'];?></a>							</td>
						</tr>
				  </table>
				</div>

				<div id="child<?php echo $i;?>" style="display:none;">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
					 <tr>
						<td width="20"></td>
						<td><a href="article.php?cid=<?php echo $rs_a['cid'];?>"  target="main">内容管理</a>   </td>
					 </tr>
					</table>
				</div>
	</td>
  </tr>
			 <?php
			 $i=$i+1;

				 }
			?>
<?php
$query=$leftmenu->selectall("n_class","sortnum asc,cid desc"," where flag=1 and b_id=".$cid);
while($rsleft=mysql_fetch_array($query)){
 ?>	
 <tr>
		<td valign="top">
				<div id="parent<?PHP echo $i;?>">
					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="images/admin_left_2.gif">
						<tr height="20">
							<td width="21" height="25" align="center"><a href="#" onClick="expand(<?PHP echo $i;?>)"><img src="images/close.gif" name="img<?PHP echo $i;?>" width="9" height="16" border="0" id="img<?PHP echo $i;?>"></a></td>
							<td width="158" height="25"><a href="#" class="parent" onClick="expand(<?PHP echo $i;?>)"><?PHP echo $rsleft['class_title2'];?></a>							</td>
						</tr>
				  </table>
				</div>
				<div id="child<?PHP echo $i;?>" style="display:none;">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
					<?php
					$smallclass=$leftmenu->selectall("n_class","sortnum asc,cid desc"," where b_id=".$rsleft['cid']);
					while($rs_small=mysql_fetch_array($smallclass)){
					 if($rs_small['flag']==0){ 
					?>
							<tr>
								<td width="20"></td>
								<td><a href="article.php?cid=<?PHP echo $rs_small['cid'];?>"  target="main"><?PHP echo $rs_small['class_title2'];?></a></td>
							</tr>
					 <?php
					 }else{
					 ?>
							<tr>
								<td width="20" bgcolor="#8EBBFF"></td>
								<td bgcolor="#8EBBFF"><a href="class_ssmall.php?cid=<?PHP echo $rs_small['cid'];?>"  target="main"><?PHP echo $rs_small['class_title2'];?></a></td>
							</tr>
						<tr>
						
					<td  colspan="2">
						<table width="90%" border="0" cellspacing="0" cellpadding="0">
						<?php
							$sqlbb="select * from n_class where b_id= ".$rs_small['cid']." order by sortnum,cid desc";							$querybb=mysql_query($sqlbb);
							while($rsbb=mysql_fetch_array($querybb)){
						?>
					       <tr>  
								<td width="40"></td>
								<td><a href="article.php?cid=<?PHP echo $rsbb['cid'];?>"  target="main"><?PHP echo $rsbb['class_title2'];?></a></td>
</tr>
					<?php
					}
					?>
                    </table>
					</td>
					</tr>
					<?php
					}
				}
					?>		
					         <tr>
								<td width="20"></td>
								<td><a href="class_small.php?cid=<?PHP echo $rsleft['cid'];?>"  target="main">分类管理</a></td>
							</tr>
					</table>
				</div>
	</td>
  </tr>
	
<?php
  $i=$i+1;

}
?>
 <tr>
		<td valign="top">
				<div id="parent<?PHP echo $i;?>">
				<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="images/admin_left_2.gif">
					
						<tr height="20">
							<td width="21" height="25" align="center"><a href="#" onClick="expand(<?PHP echo $i;?>)"><img src="images/close.gif" name="img<?PHP echo $i;?>" width="9" height="16" border="0" id="img<?PHP echo $i;?>"></a></td>
							<td width="158" height="25"><a href="#" class="parent" onClick="expand(<?PHP echo $i;?>)">类别管理</a>							</td>
						</tr>
				  </table>

				</div>
				<div id="child<?PHP echo $i;?>" style="display:none;">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
					<?php
					$smallclass=$leftmenu->selectall("n_class","sortnum asc,cid desc"," where b_id=$cid");
					while($rs_small=mysql_fetch_array($smallclass)){
					?>
							<tr>
								<td width="40"></td>
								<td><?php
					if ($rs_small['flag']==0){
					echo "<a href=article.php?cid=".$rs_small['cid']." target=\"main\">".$rs_small['class_title2']."</a>";
					}else{
					echo "<a href='class_small.php?cid=".$rs_small['cid']."' target=\"main\">".$rs_small['class_title2']."</a>";
					}
					?></td>
							</tr>
					 <?php
					 }
					 ?>
							<tr>
								<td width="40"></td>
								<td><a href="class_bsmall.php?cid=<?PHP echo $cid;?>"  target="main">分类管理</a></td>
							</tr>
					</table>
				</div>
	</td>
  </tr>
<?php $i=$i+1;?>
 <tr>
		<td valign="top">

				<div id="parent<?PHP echo $i;?>">
					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="images/admin_left_2.gif">
						<tr height="20">
							<td width="21" height="25" align="center"><a href="#" onClick="expand(<?PHP echo $i;?>)"><img src="images/close.gif" name="img<?PHP echo $i;?>" width="9" height="16" border="0" id="img<?PHP echo $i;?>"></a></td>
							<td width="158" height="25"><a href="#" class="parent" onClick="expand(<?PHP echo $i;?>)">系统管理</a>							</td>
						</tr>
						<tr>
							<td height="1" colspan="2" align="center" bgcolor="#F6F8FE"></td>
						</tr>
				  </table>
				</div>
				<div id="child<?PHP echo $i;?>" style="display:none;">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
							<tr>
								<td width="40"></td>
								<td><a href="admin_user.php"  target="main">操作人员管理</a></td>
							</tr>
					
							<tr>
								<td width="40"></td>
								<td><a href="dept.php"  target="main">网站系统管理</a></td>
							</tr>
						<?PHP
							if($u_name=="xc_huang"&&$u_qx==10){
						
							echo "<tr>";
								echo "<td width=\"40\"></td>";
								echo "<td><a href=\"class_big.php\"  target=\"main\">栏目管理</a></td>";
						 echo "</tr>";
						   }
						 ?>
					</table>
				</div>
	</td>
  </tr>
<?php $i=$i+1;?>
 <tr>
		<td valign="top">

				<div id="parent<?PHP echo $i;?>">
					<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="images/admin_left_2.gif">
						<tr height="20">
							<td width="21" height="25" align="center"><a href="#" onClick="expand(<?PHP echo $i;?>)"><img src="images/close.gif" name="img<?PHP echo $i;?>" width="9" height="16" border="0" id="img<?PHP echo $i;?>"></a></td>
								<td width="158" height="25"><a href="#" class="parent" onClick="expand(<?PHP echo $i;?>)">在线试用</a>							</td>
						</tr>
				  </table>
				</div>
				<div id="child<?PHP echo $i;?>" style="display:none;">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
							<tr>
								<td width="40"></td>
								<td><a href="book.php"  target="main">留言反馈管理</a></td>
							</tr>
							<tr>
								<td width="40"></td>
								<td><a href="book_yd.php"  target="main">在线预定管理</a></td>
							</tr>
							<tr>
								<td width="40"></td>
								<td><a href="book_yy.php"  target="main">在线预约管理</a></td>
							</tr>
							
					</table>
				</div>
</td>
</tr>
</table>

</body>
</html>
<?php
$leftmenu->close();
?>