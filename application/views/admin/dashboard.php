<div id="dashboard" class="dashboard">
	<div class="row">
	   <?php echo $this->session->flashdata('info'); ?>
	   <div class="col-sm-6 col-lg-3">
            <div class="tile text-gray-lighter bg-cyan">
                <div class="tile-body">
                    <h2 class="margin-top-5 margin-bottom-5"><?php echo $j_katagori;?></h2>
                    <h5><b>Jumlah Katagori</b></h5>
                    <i class="fa fa-list tile-icon fa-4x"></i>
                </div>
            </div>
         </div>

         <div class="col-sm-6 col-lg-3">
            <div class="tile text-gray-lighter bg-orange">
                <div class="tile-body">
                    <h2 class="margin-top-5 margin-bottom-5"><?php echo $j_sub_katagori;?></h2>
                    <h5><b>Jumlah Sub Katagori</b></h5>
                    <i class="fa fa-list tile-icon fa-4x"></i>
                </div>
            </div>
         </div>

         <div class="col-sm-6 col-lg-3">
            <div class="tile text-gray-lighter bg-red">
                <div class="tile-body">
                    <h2 class="margin-top-5 margin-bottom-5"><?php echo $j_product;?></h2>
                    <h5><b>Jumlah Product</b></h5>
                    <i class="fa fa-briefcase tile-icon fa-4x"></i>
                </div>
            </div>
         </div>

	           
	</div>
</div>









