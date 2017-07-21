<?php include 'Template/templateTop.php';  
if(isset($_REQUEST['edit'])){
    $edit_id=$_REQUEST['edit'];
    $ed_qury=mysql_query("select * from cities where id='".$edit_id."'");
    $resp=mysql_fetch_array($ed_qury);
}
?>

<div style="min-height: 870px;" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit City
          </h1>
            
        </section>

        <!-- Main content -->
        <section class="content">
            <?php if(isset($_REQUEST['msg'])){?>
            <div class="well text-center">
               <?php echo $_REQUEST['msg'];?>
            </div><?php } ?>
            <form action="cityActions.php" method="POST" enctype="multipart/form-data" name="createForm" id="createForm" onsubmit="validat()">
            <div class="row cstmrow">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <select name="countryId" id="countryId" class="form-control" required>
                            <option disabled selected value="">Select Country</option>
                            <?php 
                            $cqury=mysql_query("select * from countries");
                            while($cdata=mysql_fetch_array($cqury)){?>
                            <option value="<?php echo $cdata['id'];?>" <?php if($cdata['id']==$resp['countryId']) echo "selected";?>><?php echo $cdata['countryName'];?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select name="stateId" id="stateId" class="form-control" required>
                            <option disabled  value="">Select State</option>
                            <?php 
                            $squry=mysql_query("select * from states where countryId='".$resp['countryId']."'");
                            while($sdata=mysql_fetch_array($squry)){?>
                            <option value="<?php echo $sdata['id'];?>" <?php if($sdata['id']==$resp['stateId']) echo "selected";?>><?php echo $sdata['stateName'];?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="col-md-4">
                    <input type="text" class="form-control" name="cityName" id="cityName" value="<?php echo $resp['cityName'];?>">
                    <input type="hidden" class="form-control" name="cityId" id="cityId" value="<?php echo $resp['id'];?>">
                </div>
                <div class="clear-fix"></div>
                </div>
            </div>
            <div class="row cstmrow">
                <div class="col-md-6 text-center">
                    <a href="cityList.php"><img src="images/back-button1.png" style="max-height: 60px;"></a>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-lg btn-success btn-block" name="Edit" id="Edit">Edit City</button>
                </div>
                 <div class="clear-fix"></div>
            </div>
            </form>
    </section>
      </div>
      <script type="text/javascript">
        $(function(){
            $('#countryId').change(function(){
                var countryId = $('#countryId').val();
                $.ajax({
                    url: "stateAjax.php",
                    method: "POST",
                    data: {countryId:countryId},
                    dataType: "text",
                    success: function(data){
                        $('#stateId').html(data);
                    }
                });
            });
        });
      </script>