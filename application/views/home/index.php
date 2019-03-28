<?php $this->load->view($header); ?>


<!-- Start of shop product section
============================================= -->
<section id="shop-product" class="shop-product-section">
	<div class="container">
		<div class="product-item">
			<div class="row">
				<div class="col-md-3">
					<div class="side-bar-widget first-widget">
						<h2 class="widget-title text-capitalize"><span>Categories</span></h2>
						<div class="post-categori ul-li-block">
							 <ul class="nav nav-list nav-menu-list-style">
							 	<!-- loop -->
							 	<?php foreach ($katagori as $row) {?>
			                    <li>
			                        <label class="tree-toggle nav-header glyphicon-icon-rpad">
			                        <span class="glyphicon glyphicon-folder-close m5"></span><?php echo $row->nama_katagori;?>
			                        <span class="menu-collapsible-icon glyphicon glyphicon-chevron-down"></span></label>
			                            <ul class="nav nav-list tree bullets">
			                            	<!-- loop -->			                            	
			                            	<?php foreach ($row->id_katagori as $row2) {?>
			                                	<li><a href="<?php echo base_url('product-list/'.$row2->id);?>"><?php echo $row2->nama_sub?></a></li>
			                                <?php }?>
			                                <!-- end loop -->
			                            </ul>
			                    </li>
			                	<?php }?>
			                    <!-- end loop -->

			                </ul>  
						</div>
					</div>
				</div>
				<?php $this->load->view($content); ?>
				
				
			</div>
		</div>
	</div>
</section>
<!-- End of shop product section
============================================= -->





	
<?php $this->load->view($footer); ?>