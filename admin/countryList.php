 <?php 
 include 'Template/templateTop.php'; 
 ?>
</div>
 <section class="content-header">
        <div class="row">
            <div class="col-md-6 text-center" style="color:#337ab7;">
              <h3>Countries List</h3>
          </div>
          <div class="col-md-6 text-center">
            <a href="countryCreate.php" class="btn btn-default btn-md  bdr5">   
               <span class="glyphicon glyphicon-plus">ADD COUNTRY</span>
            </a> 
          </div>
        </div>  
</section>
<hr>
 <section class="content">
             <div class="row text-center">
                <?php if(isset($_REQUEST['msg'])){?>
                <div class="col-md-9 col-md-offset-3 col-sm-12 well"> 
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
                            <th>Created By</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                              <tbody class="text-center"> 
                        <?php
                            $cntry_list=mysql_query("select * from countries");
                            $i=1;
                        while($row = mysql_fetch_array($cntry_list)){

                        ?>
                        <tr> 
                            <td>
                                <?php echo $i;?>
                            </td>
                            <td>
                                <?php echo $row['id'];?>
                            </td>
                            <td>
                                <?php echo $row['countryName'];?>
                            </td>
                            <td>
                                <?php echo $row['createdBy'];?>      
                            </td>
                            <td>
                                <div class="col-md-6 col-sm-12" >
                                    <a href="countryActions.php?did=<?php echo $row['id']?>">
                                        
                                        <span class="glyphicon glyphicon-trash " style="color:red">Delete</span>
                                    </a> 
                                </div>
                                <div class="col-md-6 col-sm-12" >
                                    <a href="countryEdit.php?edit=<?php echo $row['id']?>">
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