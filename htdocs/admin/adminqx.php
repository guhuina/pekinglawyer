<?php
session_start();
if(isset($_SESSION['u_name'])){
	$u_name=$_SESSION['u_name'];
	$u_qx=$_SESSION['u_qx'];
}else{
?>

<script language="javascript">
//alert("�Ƿ�����");
location='login.php';
</script>
<?php
}
?>
<!--
������������������������������������
��                                                                  ��
�� ���뱣���˴���Ȩ��Ϣ����Щ���ݲ������������վ�������κ�Ӱ�죩   ��
��                                                                  ��
��               �žž���������                                     ��
��                                                                  ��
��  ��Ȩ����: www.idc999.com                                        ��
��                                                                  ��
��  ��������: idc999�����Ŷ�                                        ��
��            email:xc_huang5849@sina.com                           ��
��            QQ:59125994 ��ͬ�绰��                                ��
��                                                                  ��
��  �����ַ: http://www.idc999.com                                 ��
��                                                                  ��
������������������������������������
-->