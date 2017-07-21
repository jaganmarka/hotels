 <?php 
 include 'Template/templateTop.php'; 
 ?>
</div>
<section class="content-header">
        <div class="row">
            <div class="col-md-6 text-center" style="color:#337ab7;">
              <h3>Areas List</h3>
          </div>
          <div class="col-md-6 text-center">
            <a href="areaCreate.php" class="btn btn-default btn-md  bdr5">   
               <span class="glyphicon glyphicon-plus">ADD AREA</span>
            </a> 
          </div>
        </div>  
</section>
<hr>
 <section class="content">
             <div class="row text-center">
                <?php if(isset($_REQUEST['msg'])){?>
                <div class="col-md-10 col-md-offset-1 col-sm-12 well"> 
                    <?php echo $_REQUEST['msg'];?><div>
                </div>
                    <div class="clear-fix"></div>
                    <?php }?>
            </div>
            <div class="row">

                <div class="col-md-3"></div>
                <div class="col-md-9 col-sm-12">
                <div class="table-responsive">
                    <table width="100%" id="datatable" class="table table-hover table-bordered">
                       <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Id</th>
                            <th>Country Name</th>
                            <th>State Name</th>
                            <th>City Name</th>
                            <th>Area Name</th>
                            <th>Created By</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                              <tbody class="text-center"> 
                        <?php
                            $state_list=mysql_query("select * from areas");
                            $i=1;
                        while($row = mysql_fetch_array($state_list)){

                        ?>
                        <tr> 
                            <td>
                                <?php echo $i;?>
                            </td>
                            <td>
                                <?php echo $row['id'];?>
                            </td>
                            
                            <td>
                                <?php 
                                $cqury=mysql_query("select * from countries where id='".$row['countryId']."'");
                                $cdata=mysql_fetch_array($cqury);
                                //echo $cqury;
                                echo $cdata['countryName'];?>
                            </td>
                            <td>
                                <?php 
                                $squry=mysql_query("select * from states where id='".$row['stateId']."'");
                                $sdata=mysql_fetch_array($squry);
                                //echo $cqury;
                                echo $sdata['stateName'];?>
                            </td>
                            <td>
                                <?php 
                                $ctyqury=mysql_query("select * from cities where id='".$row['cityId']."'");
                                $cityData=mysql_fetch_array($ctyqury);
                                //echo $cqury;
                                echo $cityData['cityName'];?>
                            </td>
                            <td>
                                <?php echo $row['areaName'];?>      
                            </td>
                            <td>
                                <?php echo $row['createdBy'];?>      
                            </td>
                            <td>
                                <div class="col-md-6 col-sm-12" >
                                    <a href="areaActions.php?did=<?php echo $row['id']?>">
                                        
                                        <span class="glyphicon glyphicon-trash " style="color:red">Delete</span>
                                    </a> 
                                </div>
                                <div class="col-md-6 col-sm-12" >
                                    <a href="areaEdit.php?edit=<?php echo $row['id']?>">
                                        <span class="glyphicon glyphicon glyphicon-edit " style="color:green">Edit</span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php
                             $i++;}
                        ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
    </section>
    <style type="text/css">
th{
    text-align: center;
}

    </style>