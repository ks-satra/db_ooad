<?php
include "connect.php";
?>
<html>
<body>
<?php
			$prefix_ = $_REQUEST['prefix_'];
			$name_ = $_REQUEST['name_'];
			$lname_ = $_REQUEST['lname_'];
			$card_ = $_REQUEST['card_'];
			$number_ = $_REQUEST['number_'];
			$no_ = $_REQUEST['no_'];
			$street_ = $_REQUEST['street_'];
			$village_ = $_REQUEST['village_'];
			$district_ = $_REQUEST['district_'];
			$prefecture_ = $_REQUEST['prefecture_'];
			$country_ = $_REQUEST['country_'];
			$post_ = $_REQUEST['post_'];
			$tel_ = $_REQUEST['tel_'];
			$status_ = $_REQUEST['status_'];
			$username_ = $_REQUEST['username_'];
			$password_ = $_REQUEST['password_'];
			$pic = $_FILES["pic"]["name"];
			
			move_uploaded_file($_FILES["pic"]["tmp_name"],"pic_folder/".$_FILES["pic"]["name"]);
			
			//$insert = "insert into commit (id,prefix) values('','$prefix_')";
			$insert = "insert into commit (id,prefix,name,lname,card,number,no,street,village,district,prefecture,country,post,tel,status,username,password,pic) values('','$prefix_','$name_','$lname_','$card_','$number_','$no_','$street_','$village_','$district_','$prefecture_','$country_','$post_','$tel_','$status_','$username_','$password_','$pic')";
			$result = mysql_db_query("db_ooad", $insert);
			//$row=mysql_fetch_array($result);
			?>
</body>
</html>
