<?php include "connect.php";
	$id=$_REQUEST['id'];
	$select = "select * from commit where id=$id;";
    $result = mysql_db_query("db_ooad", $select);
    $row=mysql_fetch_array($result);    	
 ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-angle-right"></i> จัดการข้อมูลคณะกรรมการ
    </div>
    <div class="panel-body">
       <form class="form-horizontal" enctype="multipart/form-data" action="show_news.php?id_del=<?php echo $id; ?>" method="post">
    		  <div class="form-group">
                <label class="control-label col-sm-4" for="file-upload"></label>
                <div class="col-sm-8">
                <img src="pic_folder/<?php echo $row['pic'];?>" heigh='200' width='200'>
                </div>
              </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2" for="prefix">คำนำหน้า :</label>
                <div class="col-sm-4">
                  	<input type="text" class="form-control input-sm" name="prefix" placeholder="คำนำหน้า" required value="<?php echo $row['prefix'];?>">
                </div>
                	<label class="control-label col-sm-2" for="status">ตำแหน่ง :</label>
                <div class="col-sm-4">
                  	<input type="text" class="form-control input-sm" name="status" placeholder="ตำแหน่ง" required value="<?php echo $row['status'];?>">
                </div>
            </div>
                
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">ชื่อ :</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control input-sm" name="name" placeholder="ชื่อ" required value="<?php echo $row['name'];?>">
                </div>
                <label class="control-label col-sm-2" for="lname">สกุล :</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control input-sm" name="lname" placeholder="สกุล" required value="<?php echo $row['lname'];?>">
                </div>
            </div>
        
            <div class="form-group">
                <label class="control-label col-sm-2" for="card">บัตรประชาชน :</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control input-sm" name="card" placeholder="บัตรประชาชน" required value="<?php echo $row['card'];?>">
                </div>
                <label class="control-label col-sm-2" for="number">เบอร์มือถือ :</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control input-sm" name="number" placeholder="เบอร์มือถือ " required value="<?php echo $row['number'];?>">
                </div>
            </div>
        
            <div class="form-group">
                <label class="control-label col-sm-2" for="no">เลขที่ :</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control input-sm" name="no" placeholder="เลขที่" required value="<?php echo $row['no'];?>">
                </div>
                <label class="control-label col-sm-2" for="street">ถนน :</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control input-sm" name="street" placeholder="ถนน" required value="<?php echo $row['street'];?>">
            	</div>
        	</div> 
        
            <div class="form-group">
                <label class="control-label col-sm-2" for="village">หมู่บ้าน :</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control input-sm" name="village" placeholder="หมู่บ้าน" required value="<?php echo $row['village'];?>">
                </div>
                <label class="control-label col-sm-2" for="district">แขวน / ตำบล :</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control input-sm" name="district" placeholder="แขวน / ตำบล" required value="<?php echo $row['district'];?>">
                </div>
            </div>
        
            <div class="form-group">
                <label class="control-label col-sm-2" for="prefecture">เขต / อำเภอ :</label>
                <div class="col-sm-4">
                  	<input type="text" class="form-control input-sm" name="prefecture" placeholder="เขต / อำเภอ" required value="<?php echo $row['prefecture'];?>">
                </div>
                	<label class="control-label col-sm-2" for="country">จังหวัด :</label>
                <div class="col-sm-4">
                  	<input type="text" class="form-control input-sm" name="country" placeholder="จังหวัด" required value="<?php echo $row['country'];?>">
                </div>
            </div>
        
            <div class="form-group">
                <label class="control-label col-sm-2" for="post">รหัสไปรษณีย์ :</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control input-sm" name="post" placeholder="รหัสไปรษณีย์" required value="<?php echo $row['post'];?>">
                </div>
                <label class="control-label col-sm-2" for="tel">โทร :</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control input-sm" name="tel" placeholder="โทร" required value="<?php echo $row['tel'];?>">
                </div>
            </div>
                    
            <div class="form-group">
                <label class="control-label col-sm-2" for="username">ชื่อผู้ใช้ :</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control input-sm" name="username" placeholder="ชื่อผู้ใช้" required value="<?php echo $row['username'];?>">
                </div>
                <label class="control-label col-sm-2" for="password">รหัสผ่าน :</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control input-sm" name="password" placeholder="รหัสผ่าน" required value="<?php echo $row['password'];?>">
                </div>
            </div>
            </div>
       </form> 
    </div>
</div>