<?php include 'Template/templateTop.php';  
if(isset($_REQUEST['edit'])){
    $edit_id=$_REQUEST['edit'];
    $ed_qury=mysql_query("select * from countries where id='".$edit_id."'");
    $resp=mysql_fetch_array($ed_qury);
}
?>
        
      <div style="min-height: 870px;" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Country
          </h1>
            
        </section>

        <!-- Main content -->
        <section class="content">
            <?php if(isset($_REQUEST['msg'])){?>
            <div class="well text-center">
               <?php echo $_REQUEST['msg'];?>
            </div><?php } ?>
            <form action="countryActions.php" method="POST" enctype="multipart/form-data" name="createForm" id="createForm" onsubmit="validat()">
            <div class="row cstmrow">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <input type="hidden" class="form-control" name="countryId" id="countryId" value="<?php echo $resp['id'];?>">
                        <input type="text" class="form-control" name="countryName" id="countryName" value="<?php echo $resp['countryName'];?>">
                    </div>

                <div class="col-md-4">
                    <button type="submit" class="btn btn-lg btn-success btn-block" name="Edit" id="Edit">Edit Country</button>
                </div>
                </div>
            </div>
            <div class="clear-fix"></div>
            </form>
            <div class="row cstmrow">
                <div class="col-md-8 col-sm-12 text-center">
                    <a href="countryList.php" ><img src="images/back-button1.png" style="max-height: 60px;"></a>
                </div>
                <div class="clear-fix"></div>
            </div>
	</section>
      </div>

