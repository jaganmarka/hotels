<?php include 'Template/templateTop.php';  
?>

<div style="min-height: 870px;" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Create Area
          </h1>
            
        </section>

        <!-- Main content -->
        <section class="content">
            <?php if(isset($_REQUEST['msg'])){?>
            <div class="well text-center">
               <?php echo $_REQUEST['msg'];?>
            </div><?php } ?>
            <form action="areaCreateProcess.php" method="POST" enctype="multipart/form-data" name="createForm" id="createForm" onsubmit="validat()">
            <div class="row cstmrow">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <select name="countryId" id="countryId" class="form-control" required>
                            <option disabled selected value="">Select Country</option>
                            <?php 
                            $cqury=mysql_query("select * from countries");
                            while($cdata=mysql_fetch_array($cqury)){?>
                            <option value="<?php echo $cdata['id'];?>"><?php echo $cdata['countryName'];?></option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select name="stateId" id="stateId" class="form-control" required>
                            <option disabled selected value="">Select State</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select name="cityId" id="cityId" class="form-control" required>
                            <option disabled selected value="">Select City</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Area Name *" name="areaName" id="areaName" required style="margin-top:20px;">
                </div>
                <div class="clear-fix"></div>
                </div>
            </div>
            <div class="row cstmrow">
                <div class="col-md-6 text-center">
                    <a href="areaList.php"><img src="images/back-button1.png" style="max-height: 60px;"></a>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-lg btn-success btn-block" name="submit" id="submit">Create Area</button>
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