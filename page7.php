<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-angle-right"></i> จัดการข้อมูลคณะกรรมการ
    </div>
    <div class="panel-body">
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
</div>