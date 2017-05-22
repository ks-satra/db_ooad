<?php
include "connect.php";
$id=$_REQUEST['id_edit'];
//echo $id;
$pic = $_FILES["pic"]["name"];
$prefix = $_REQUEST['prefix'];
$name = $_REQUEST['name'];
$lname = $_REQUEST['lname'];
$card = $_REQUEST['card'];
$number = $_REQUEST['number'];
$no = $_REQUEST['no'];
$street = $_REQUEST['street'];
$village = $_REQUEST['village'];
$district = $_REQUEST['district'];
$prefecture = $_REQUEST['prefecture'];
$country = $_REQUEST['country'];
$post = $_REQUEST['post'];
$tel = $_REQUEST['tel'];
$status = $_REQUEST['status'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

move_uploaded_file($_FILES["pic"]["tmp_name"],"pic_folder/".$_FILES["pic"]["name"]);


$edit = "update commit set pic='$pic',prefix='$prefix',name='$name',lname='$lname',prefix='$prefix',name='$name',lname='$lname',card='$card',number='$number',no='$no',street='$street',village='$village',district='$district',prefecture='$prefecture',country='$country',post='$post',tel='$tel',status='$status',username='$username',password='$password' where id = '$id' ";
$result=mysql_db_query("db_ooad", $edit);
if(!$result){

	echo "แก้ไขข้อมูลไม่สำเร็จ";
}else {
	echo "แก้ไขข้อมูลสำเร็จ";
}

?>