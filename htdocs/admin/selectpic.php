<?php
if(isset($_GET['id'])){
$id=$_GET['id'];

?>
<script language="javascript">
   function abc(aa){
   window.opener.document.form1.<?php echo $id;?>.value=aa;
   window.close();
   }
</script>
<?php
}
echo "<html><head><title>ͼƬ</title></head><body bgcolor=000000><center><font size=2 color=red>";//���html��ش���
if(isset($_GET['page'])){
$page=$_GET['page'];//��ȡ��ǰҳ��
}else{
$page=0;
}
$max=16;//����ÿҳ��ʾͼƬ�������
$path="up";
$fotpath="../".$path;
$handle = opendir($fotpath); //��ǰĿ¼
$i=0;
    while (false !== ($file = readdir($handle))) { //������php�ļ�����Ŀ¼
      list($filesname,$kzm)=split("\.",$file);//��ȡ��չ��
        if($kzm=="gif" or $kzm=="jpg" or $kzm=="JPG") { //�ļ�����
          if (!is_dir('./'.$file)) { //�ļ��й���
            $array[]=$file;//�ѷ����������ļ�����������
            $i++;//��¼ͼƬ������
           }
          }
    }
	echo "<table width=\"100%\" border=\"1\">";
for ($j=$max*$page;$j<($max*$page+$max)&&$j<$i;++$j){//ѭ������������ʾͼƬ����
	if($j%4==0){
	echo"<tr>";
	}
    echo "<td valign=middle><table align=center><tr><td valign=middle onclick=\"return abc('/".$path."/".$array[$j]."');\"><img src=\"/$path/$array[$j]\" width=150 ></td></tr><tr><td><font color=#ffffff>".$array[$j]."</font></td></tr></table></td>";//���ͼƬ����
	if($j%4==3){
	echo"</tr>";
	}
}
echo "</table>";
$Previous_page=$page-1;
$next_page=$page+1;
if ($Previous_page<0){
    echo "��ҳ";
    echo "<a href=?id=$id&page=$next_page>��ҳ</a>";
}
    else if ($page<=$i/$max){
      echo "<a href=?id=$id&page=$Previous_page>��ҳ</a>";
      echo "<a href=?id=$id&page=$next_page>��ҳ</a>";}
        else{
          echo " <a href=?id=$id&page=$Previous_page>��ҳ</a>";
          echo "��ҳ";
        }
echo "</center></body></html>";
?>
