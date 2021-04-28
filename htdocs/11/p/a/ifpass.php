<?
 include "../../config/config.php";
 include "../../config/db_function.php";
 include "../../config/admin_public_include.php";
 $conn=Connect_DB($DB_VARS_ARRAY);
 $id=$_GET['id'];
 $sql0="select ifpass from liuyan where id=$id";
 $rec0=mysql_query($sql0,$conn);
 $row=mysql_fetch_array($rec0);
 $ifpass=$row['ifpass'];
 if($ifpass=='0'){
	 $sql="update liuyan set ifpass='1' where id=$id";
 }
 if($ifpass=='1'){
 	 $sql="update liuyan set ifpass='0' where id=$id";
 }
 $rec=mysql_query($sql,$conn);
 if($rec){
 header("location:liuyan.php");
}
?>