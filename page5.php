<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-angle-right"></i> จัดการข้อมูลคณะกรรมการ
    </div>
    <div class="panel-body">
    	<div class="form-group">
        <!-- <a class="btn btn-default" href="#" role="button">Link</a> -->   
        <!-- <button class="btn btn-default" type="submit"><i class="fa fa-clone" aria-hidden="true"></i> เพิ่ม</button> -->
       <!-- <button class="btn btn-default" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> บันทึก</button>
        <button class="btn btn-default" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
        <button class="btn btn-default" type="submit"><i class="fa fa-undo" aria-hidden="true"></i> ย้อนกลับ</button>
        <button class="btn btn-default" type="submit"><i class="fa fa-print" aria-hidden="true"></i> ปริ้น</button> -->
        <!--    <input class="btn btn-default" type="button" value="Input">
            <input class="btn btn-default" type="submit" value="Submit"> -->
      </div>     
      <form class="form-horizontal" enctype="multipart/form-data" action="insert_news.php" method="post">
    	 <!-- <div class="form-group">
        	<label class="control-label col-sm-3" for="id">รหัสคณะกรรมการ:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control input-sm" name="id_" placeholder="รหัสคณะกรรมการ" required>
            </div>   -->         
        <div class="form-group">
            <label class="control-label col-sm-1" for="file-upload">รูปภาพ:</label>
            <div class="col-sm-4">
              <input type="file" name="pic" >
            </div>
        </div>
       <!-- </div> -->
            
        <div class="form-group">
            <label class="control-label col-sm-2" for="prefix">คำนำหน้า :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control input-sm" name="prefix_" placeholder="คำนำหน้า" required >
            </div>
            <label class="control-label col-sm-2" for="status">ตำแหน่ง :</label>
            <div class="col-sm-4">
            <!--  <input type="text" class="form-control" name="name" required > -->
              <input type="text" class="form-control input-sm" name="status_" placeholder="ตำแหน่ง" required >
            <!--  <input class="form-control input-sm" type="text" placeholder=".input-sm"> -->
     		</div>
        </div>
                
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">ชื่อ :</label>
            <div class="col-sm-4">
            <!--  <input type="text" class="form-control" name="name" required > -->
              <input type="text" class="form-control input-sm" name="name_" placeholder="ชื่อ" required >
            <!--  <input class="form-control input-sm" type="text" placeholder=".input-sm"> -->
     		</div>
            <label class="control-label col-sm-2" for="lname">สกุล :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control input-sm" name="lname_" placeholder="สกุล" required >
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="card">บัตรประชาชน :</label>
            <div class="col-sm-4">
            <!--  <input type="text" class="form-control" name="name" required > -->
              <input type="text" class="form-control input-sm" name="card_" placeholder="บัตรประชาชน" required >
            <!--  <input class="form-control input-sm" type="text" placeholder=".input-sm"> -->
     		</div>
            <label class="control-label col-sm-2" for="number">เบอร์มือถือ :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control input-sm" name="number_" placeholder="เบอร์มือถือ " required >
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="no">เลขที่ :</label>
            <div class="col-sm-4">
            <!--  <input type="text" class="form-control" name="name" required > -->
              <input type="text" class="form-control input-sm" name="no_" placeholder="เลขที่" required >
            <!--  <input class="form-control input-sm" type="text" placeholder=".input-sm"> -->
     		</div>
            <label class="control-label col-sm-2" for="street">ถนน :</label>
            <div class="col-sm-4">
            <!--  <input type="text" class="form-control" name="name" required > -->
              <input type="text" class="form-control input-sm" name="street_" placeholder="ถนน" required >
            <!--  <input class="form-control input-sm" type="text" placeholder=".input-sm"> -->
     	</div>
          <!--  <label class="control-label col-sm-2" for="status">ตำแหน่ง :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control input-sm" name="status_" placeholder="ตำแหน่ง" required >
            </div>  -->
        </div> 
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="village">หมู่บ้าน :</label>
            <div class="col-sm-4">
            <!--  <input type="text" class="form-control" name="name" required > -->
              <input type="text" class="form-control input-sm" name="village_" placeholder="หมู่บ้าน" required >
            <!--  <input class="form-control input-sm" type="text" placeholder=".input-sm"> -->
     		</div>
            <label class="control-label col-sm-2" for="district">แขวน / ตำบล :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control input-sm" name="district_" placeholder="แขวน / ตำบล" required >
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="prefecture">เขต / อำเภอ :</label>
            <div class="col-sm-4">
            <!--  <input type="text" class="form-control" name="name" required > -->
              <input type="text" class="form-control input-sm" name="prefecture_" placeholder="เขต / อำเภอ" required >
            <!--  <input class="form-control input-sm" type="text" placeholder=".input-sm"> -->
     		</div>
            <label class="control-label col-sm-2" for="country">จังหวัด :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control input-sm" name="country_" placeholder="จังหวัด" required >
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="post">รหัสไปรษณีย์ :</label>
            <div class="col-sm-4">
            <!--  <input type="text" class="form-control" name="name" required > -->
              <input type="text" class="form-control input-sm" name="post_" placeholder="รหัสไปรษณีย์" required >
            <!--  <input class="form-control input-sm" type="text" placeholder=".input-sm"> -->
     		</div>
            <label class="control-label col-sm-2" for="tel">โทร :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control input-sm" name="tel_" placeholder="โทร" required >
            </div>
        </div>
                
        <div class="form-group">
            <label class="control-label col-sm-2" for="username">ชื่อผู้ใช้ :</label>
            <div class="col-sm-4">
            <!--  <input type="text" class="form-control" name="name" required > -->
              <input type="text" class="form-control input-sm" name="username_" placeholder="ชื่อผู้ใช้" required >
            <!--  <input class="form-control input-sm" type="text" placeholder=".input-sm"> -->
            </div>
            <label class="control-label col-sm-2" for="password">รหัสผ่าน :</label>
            <div class="col-sm-4">
              <input type="text" class="form-control input-sm" name="password_" placeholder="รหัสผ่าน" required >
            </div>
        </div>
            
            <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">บันทึก</button>
                </div>
              </div>
            <!-- <button class="btn btn-default" type="submit"><i class="fa fa-clone" aria-hidden="true"></i> เพิ่ม</button> -->
       </form> 
    </div>
  </div>   
</div>