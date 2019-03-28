<!-- Start of footer section
		============================================= -->
<footer>
	<section id="contact-area" class="contact-area-section backgroud-style">
	<div class="container">
		<div class="contact-area-content">
			<div class="row">
				<div class="col-md-6">
					<div class="contact-left-content">
						<div class="section-title  mb45 headline text-left">
							<span class="subtitle ml42  text-uppercase">CONTACT US</span>
							<h2><span>Hubungi Kami</span></h2>
						</div>								
					</div>
				</div>

				<div class="col-md-6">
					<div class="contact-address">
							<div class="contact-address-details">
								<div class="address-icon relative-position text-center float-left">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="address-details ul-li-block">
									<ul>
										<li><span>Alamat: </span><?php echo $contact->alamat;?></li>
									</ul>
								</div>
							</div>

							<div class="contact-address-details">
								<div class="address-icon relative-position text-center float-left">
									<i class="fa fa-phone"></i>
								</div>
								<div class="address-details ul-li-block">
									<ul>
										<li><span>Tlp : </span><?php echo $contact->phone;?></li>
									</ul>
								</div>
							</div>

							<div class="contact-address-details">
								<div class="address-icon relative-position text-center float-left">
									<i class="fa fa-envelope"></i>
								</div>
								<div class="address-details ul-li-block">
									<ul>
										<li><span>Email: </span><?php echo $contact->email;?></li>
									</ul>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>
</footer>
<!-- End of footer section
	============================================= -->



	<!-- For Js Library -->
	<script src="<?php echo base_url();?>assets/genius/js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url();?>assets/genius/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/genius/js/popper.min.js"></script>
	<script src="<?php echo base_url();?>assets/genius/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url();?>assets/genius/js/jarallax.js"></script>
	<script src="<?php echo base_url();?>assets/genius/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url();?>assets/genius/js/lightbox.js"></script>
	<script src="<?php echo base_url();?>assets/genius/js/jquery.meanmenu.js"></script>
	<script src="<?php echo base_url();?>assets/genius/js/scrollreveal.min.js"></script>
	<script src="<?php echo base_url();?>assets/genius/js/jquery.counterup.min.js"></script>
	<script src="<?php echo base_url();?>assets/genius/js/waypoints.min.js"></script>
	<script src="<?php echo base_url();?>assets/genius/js/jquery-ui.js"></script>
	<script src="<?php echo base_url();?>assets/genius/js/gmap3.min.js"></script>
	<script src="<?php echo base_url();?>assets/genius/js/switch.js"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>

	<script src="<?php echo base_url();?>assets/genius/js/script.js"></script>
	<script type="text/javascript">
	    $('.tree-toggle').click(function () {
	        $(this).parent().children('ul.tree').toggle(200);
	    });
	    $(function(){
	        $('.tree-toggle').parent().children('ul.tree').toggle(200);
	    });
	</script>
</body>
</html>