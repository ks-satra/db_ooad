<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-angle-right"></i> ติดต่อเรา
    </div>
    <div class="panel-body">
        หน้า 4
        <h3>News Promote</h3>
						<?php 
						$select = "select * from commit";
						$result = mysql_db_query("test", $select);
						while($row = mysql_fetch_array($result)){

						
						echo "</br>";
						?>
							<table class="table table-hover">
    
    <tbody>
      <tr>
        <td><img src="<?php echo $row['pic']; ?>" width="100" hight="100"></td>
        <td><?php echo $row['id']; ?></td>
        <?php
						}

						?>	
      </tr>
    </tbody>
  </table>
    </div>
</div>