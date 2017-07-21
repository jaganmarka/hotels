<?php include 'Template/templateTop.php';  
if(isset($_REQUEST['edit'])){
    $edit_id=$_REQUEST['edit'];
    $ed_qury=mysql_query("select * from states where id='".$edit_id."'");
    $resp=mysql_fetch_array($ed_qury);
}
?>

<div style="min-height: 870px;" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Create State
          </h1>
            
        </section>

        <!-- Main content -->
        <section class="content">
            <?php if(isset($_REQUEST['msg'])){?>
            <div class="well text-center">
               <?php echo $_REQUEST['msg'];?>
            </div><?php } ?>
            <form action="stateActions.php" method="POST" enctype="multipart/form-data" name="createForm" id="createForm" onsubmit="validat()">
            <div class="row cstmrow">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <select name="countryId" id="countryId" class="form-control" required>
                            <option disabled  value="">Select Country</option>
                            <?php 
                            $cqury=mysql_query("select * from countries");
                            while($cdata=mysql_fetch_array($cqury)){?>
                            <option value="<?php echo $cdata['id'];?>" <?php if($cdata['id']==$resp['countryId']) echo "selected";?>><?php echo $cdata['countryName'];?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="hidden" class="form-control" value="<?php echo $resp['id'];?>" name="stateId" id="stateId" >
                        <input type="text" class="form-control" value="<?php echo $resp['stateName'];?>" name="stateName" id="stateName" >
                    </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-lg btn-success btn-block" name="Edit" id="Edit">Update State</button>
                </div>
                </div>
            </div>
            <div class="row cstmrow">
                <div class="col-md-12 text-center">
                    <a href="stateList.php"><img src="images/back-button1.png" style="max-height: 60px;"></a>
                </div>
            </div>
            </form>
	</section>
      </div>