<div class="col-md-9">
	<div class="teacher-details-content mb45">
		<div class="row">
			<div class="col-md-6">
				<div class="teacher-details-img">
					<img src="<?php echo base_url('assets/img/'.$foto);?>" alt="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="teacher-details-text">
					<div class="section-title-2  headline text-left">
						<h2><span><?php echo $nama_product;?></span></h2>
						<div class="teacher-deg">
							<?php echo $katagori2;?> <span><?php echo $sub_katagori;?></span> 
						</div>
					</div>
					<div class="teacher-address">
						<div class="address-details ul-li-block">
							<ul>
								<li>
									<div class="addrs-icon">
										<i class="fa fa-desktop"></i>
									</div>
									<div class="add-info">
										<span><b>Brand: </b><?php echo $grouping;?></span>
									</div>
								</li>
								<li>
									<div class="addrs-icon">
										<i class="fa fa-tachometer"></i>
									</div>
									<div class="add-info">
										<span><b>Spesifikasi: </b><?php echo $spesifikasi;?></span>
									</div>
								</li>
								<li>
									<div class="addrs-icon">
										<i class="fa fa-money"></i>
									</div>
									<div class="add-info">
										<span><b>Harga: </b><?php echo 'Rp. '. number_format($harga,2);?></span>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="about-teacher mb45">
		<div class="section-title-2  headline text-left">
			<h2><span>Deskripsi</span></h2>
		</div>
		<p>
			<?php echo $desc;?>
		</p>
	</div>

</div>