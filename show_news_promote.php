<?php include "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>My first website by Bootstrap</title>
   <!--step1 -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--step2 -->
	<!--step2.1 defind stylsheet -->
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/css/bootstrap.min.css">

	<!--step2.2 setup jquery donwload www.jquery.com/download -->
	<script type="text/javascript" src="bootstrap-3.3.7/js/jquery-3.1.1.min.js"></script>

	<!--step2.3 defind js -->
	<script type="text/javascript" src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

  </head>
  <body>
   <!--step4 Test Grid system -->
 
<div class="container-fluid">
	<!--Main menu -->
		<div class="row">
		<!--step4.1 set col-md-12 row1 -->
			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading">

						<ul class="nav nav-tabs">
						  <li class="active"><a href="index.php">Home</a></li>
						  <li><a href="add_news_promote.php">Add news promote</a></li>
						  <li><a href="show_news_promote.php">Show news promote</a></li>
						  <li><a href="#">Menu 3</a></li>
						</ul>


					</div>
				</div>
			</div>
		</div>
  	<!--end menu -->
</div>
  	<!--body -->
		<div class="row">
		<!--step4.1 set col-md-12 row1 -->
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<table class="table table-hover">
    <thead>
      <tr>
      	<th>รหัสคณะกรรมการ</th>
        <th>ชื่อ</th>
        <th>สกุล</th>
        <th>แสดงข้อมูล</th>
        <th>ลบข้อมูล</th>
        <th>แก้ไข</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    $i=0;
    $select = "select id,name,lname from commit";
    $result = mysql_db_query("db_ooad", $select);
    while($row=mysql_fetch_array($result)){
    	$i++;
     ?>
      <tr>
      	<td><?php echo $i; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['lname']; ?></td>
        <td><a href="show_news.php?id=<?php echo $row['id'];?>">แสดงข้อมูล</a></td>
        <td><a href="delete_news.php?id_del=<?php echo $row['id'];?>">ลบข้อมูล</a></td>
      	<td><a href="form_edit_news_promote.php?id_edit=<?php echo $row['id']; ?>">แก้ไขข้อมูล</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>	
			</div>
			<div class="col-md-2">
			</div>
		</div>
</div>
  	<!--end body -->
<div class="container-fluid">
  	<!--row footer -->
		<div class="row">
		<!--step4.1 set col-md-12 row1 -->
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>footer</h3>
					</div>
				</div>
			</div>
		</div>
  	<!--end footer -->
</div><!--end container -->

  </body>
</html>