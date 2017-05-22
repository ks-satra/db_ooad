<?php
include "connect.php";

$id=$_REQUEST['id_del'];

//echo $id;
$delete = "delete from commit where id='$id' ";
$result = mysql_db_query('db_ooad', $delete);
if(!$result){

	echo "ลบไม่ข้อมูลไม่สำเร็จ";
}else {
	echo "ลบข้อมูลสำเร็จ";
}


?>