<?php include 'Template/templateTop.php';  
?>
        
      <div style="min-height: 870px;" class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Create Country
          </h1>
            
        </section>

        <!-- Main content -->
        <section class="content">
            <?php if(isset($_REQUEST['msg'])){?>
            <div class="well text-center">
               <?php echo $_REQUEST['msg'];?>
            </div><?php } ?>
            <form action="countryCreateProcess.php" method="POST" enctype="multipart/form-data" name="createForm" id="createForm" onsubmit="validat()">
            <div class="row cstmrow">
                <div class="col-md-12">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Country Name *" name="countryName" id="countryName" required>
                    </div>

                <div class="col-md-4">
                    <button type="submit" class="btn btn-lg btn-success btn-block" name="submit" id="submit">Create Country</button>
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

