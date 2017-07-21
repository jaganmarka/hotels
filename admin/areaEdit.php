<?php include 'Template/templateTop.php';  
if(isset($_REQUEST['edit'])){
    $edit_id=$_REQUEST['edit'];
    $ed_qury=mysql_query("select * from areas where id='".$edit_id."'");
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
            <form action="areaActions.php" method="POST" enctype="multipart/form-data" name="createForm" id="createForm" onsubmit="validat()">
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
                        <select name="cityId" id="cityId" class="form-control" required>
                            <option disabled  value="">Select City</option>
                            <?php 
                            $ctyqury=mysql_query("select * from cities where stateId='".$resp['stateId']."'");
                            echo $ctyqury."</br>";
                            echo $resp['id'];
                            while($cityData=mysql_fetch_array($ctyqury)){?>
                            <option value="<?php echo $cityData['id'];?>" <?php if($cityData['id']==$resp['cityId']) echo "selected";?>><?php echo $cityData['cityName'];?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="col-md-4">
                    <input type="text" class="form-control" name="areaName" id="areaName" value="<?php echo $resp['areaName'];?>" style="margin-top:20px;">
                    <input type="text" class="form-control" name="areaId" id="areaId" value="<?php echo $_REQUEST['edit'];?>">
                </div>
                <div class="clear-fix"></div>
                </div>
            </div>
            <div class="row cstmrow">
                <div class="col-md-6 text-center">
                    <a href="areaList.php"><img src="images/back-button1.png" style="max-height: 60px;"></a>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-lg btn-success btn-block" name="Edit" id="Edit">Edit Area</button>
                </div>
                 <div class="clear-fix"></div>
            </div>
            </form>
    </section>
      </div>
      <script type="text/javascript">
        $(document).ready(function(){
    $('#countryId').on('change',function(){
     
        var countryId = $(this).val();
           
         var stateSelected = $('#stateSelected').val();
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
    
    $('#stateId').on('change',function(){
        var countryId = $('#countryId').val();
        var stateId = $('#stateId').val();
        $.ajax({
            url: "cityAjax.php",
            method: "POST",
            data: {countryId:countryId,stateId:stateId},
            dataType: "text",
            success: function(data){
                $('#cityId').html(data);
            }
        });
    });
    
});
      </script>