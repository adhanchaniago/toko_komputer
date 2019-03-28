<div class="col-md-9">
	<div class="shop-product-item">
		
		<div class="product-showcase">
			<div class="genius-shop-item">
				<div class="tab-container">
					<div id="tab1" class="tab-content-1 course-page-section">
						<div class="course-list-view">
							<table>
								<tr class="list-head">
									<th style="width: 200px;">Product</th>
									<th style="width: 300px;">Spesifikasi</th>
									<th style="width: 300px;">Harga</th>
								</tr>
								<!-- loop -->
								<?php foreach ($data->result() as $row) {?>								
								<tr>
									<td class="course-list-img-text">
										<?php if(!$row->foto==''){?>
										<a href="<?php echo base_url('product/'.$row->id);?>">
											<div class="course-list-img">
												<img src="<?php echo base_url('assets/img/'.$row->foto);?>" alt="">
											</div>
										</a>
										<?php }?>									
										<div class="course-list-text">
											<h3>
												<?php echo $row->nama_product;?>
											</h3>															
										</div>																		
									</td>
									<td>
										<div class="course-type-list">
											<?php echo $row->spesifikasi;?>
										</div>														
									</td>
									<td>
										<div class="course-type-list">
											<span><?php echo 'Rp. '. number_format($row->harga,2);?></span>
										</div>
									</td>
								</tr>								
								<!-- loop -->
								<?php }?>
							</table>
							<div class="row">
						    	<div class="col">
						    		<!--Tampilkan pagination-->
						    		<?php echo $pagination; ?>
						    	</div>
						    </div>
						</div>
					</div><!-- /tab-2 -->
				</div>
			</div>
		</div>
	</div>
</div>