<?php
	$content = isset($_GET["content"])?$_GET["content"]:"page8.php";
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My first website by boostrap</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap 3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
<style>
	html{
			position: relative;
    		min-height: 100%;
		}
		body{
		}
		#header{
			background-color: #1790ab;
			padding: 34px;
			height: 135px;
			margin-bottom: 15px;
			font-size: 14px;
		}
		#footer{
			background-color: #1790ab;
			height:45px;
			padding-top: 12px;
    		padding-left: 20px;
			position: absolute;
			width: 100%;
			bottom: 0;
		}
</style>
    <script src="assets/jquery/jquery.js"></script>
    <script src="assets/bootstrap 3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div> 
    	<nav class="navbar navbar-default">
          	<div class="container-fluid">
                <div class="navbar-header">
                  	<p><a class="navbar-brand" href="index.php"><i class="fa fa-yelp"></i> E-MEETING</a></p>
                </div>
                		<form class="navbar-form navbar-left">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="ค้นหา">
                            </div>
                        	<button type="submit" class="btn btn-default">ค้นหา</button>
                        </form>
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> ชื่อผู้ใช้</a></li>
                         <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                         <li><a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a></li>
                    	 <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i><span class="caret"></span></a>
                    	 	<ul class="dropdown-menu">
                                 <li><a href="#"><i class="fa fa-lock" aria-hidden="true"></i> เข้าสู่ระบบ</a></li>
                                 <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> ลงทะเบียน</a></li>
                                 <li role="separator" class="divider"></li>
                                 <li><a href="#"><i class="fa fa-unlock" aria-hidden="true"></i> ลืมรหัสผ่าน?</a></li>
                    	 	</ul>
                          </li>
                    </ul>
          	</div>
        </nav>
    </div>
    <div id="header">
        <div align="center"><font color="White"><h1> ระบบวาระการประชุมของกระทรวงมหาดไทย จังหวัดยะลา </h1></font></div>
    </div>
    <div id="content" class="container">
        <div class="row">
        	<div class="col-xs-3">
            	<div class="panel panel-default">
                	<div class="panel-heading">
                    	รายการ
                    </div>
                		<div class="list-group">
                  			<a href="?" class="list-group-item <?php echo ($content=="home")?"active":"";?>"><i class="fa fa-home"></i> จัดการหน้าแรก</a>
	                   		<a href="?content=page2" class="list-group-item <?php echo ($content=="page2")?"active":"";?>"><i class="fa fa-angle-right"></i> จัดการวาระการประชุม</a>
    	                	<a href="?content=page3" class="list-group-item <?php echo ($content=="page3")?"active":"";?>"><i class="fa fa-angle-right"></i> จัดการคำสั่งราชการ</a>
                            <a href="?content=page5" class="list-group-item <?php echo ($content=="page5")?"active":"";?>"><i class="fa fa-angle-right"></i> จัดการข้อมูลคณะกรรมการ</a>
                            <a href="?content=page7" class="list-group-item <?php echo ($content=="page7")?"active":"";?>"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i> แก้ไขข้อมูลคณะกรรมการ</td></a>
                           <!-- <a href="?content=page8" class="list-group-item <?php echo ($content=="page8")?"active":"";?>"><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i> แสดงข้อมูลคณะกรรมการ</td></a> -->
                            <a href="?content=page6" class="list-group-item <?php echo ($content=="page6")?"active":"";?>"><i class="fa fa-angle-right"></i> จัดการข้อมูลหน่วยงาน</a>
                            <a href="?content=page4" class="list-group-item <?php echo ($content=="page4")?"active":"";?>"><i class="fa fa-angle-right"></i> ติดต่อเรา</a>
        	        	</div>
                	</div>
            	</div>
                
            <div class="col-xs-9">
				<?php
                	switch($content)
					{
						case "home" 	: include("home.php");		break;
						case "page2" 	: include("page2.php");		break;
						case "page3" 	: include("page3.php");		break;
						case "page4" 	: include("page4.php");		break;
						case "page5" 	: include("page5.php");		break;
						case "page6" 	: include("page6.php");		break;
						case "page7" 	: include("page7.php");		break;
						case "page8" 	: include("page8.php");		break;
						default			: include("page8.php");
					}
				?>
                
       
            </div>
        </div>
    </div>
     </div>
                </div>
    <div id="footer"><font color="White"><p style="text-align:right;padding-right:30px;">ศาลากลาง ตำบลสะเตง อำเภอเมืองยะลา จังหวัดยะลา รหัสไปรษณีย์ 95000 เบอร์โทร 073-211-586</p></font></div>
</body>
</html>
