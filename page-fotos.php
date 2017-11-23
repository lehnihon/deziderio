<?php get_header(); ?>
		
		<div class="page-top blackish overlape">
			<div class="parallax" data-velocity="-.1" style="background: url('images/parallax32.jpg') repeat scroll 0 0"></div>
			<div class="container">
				<div class="page-title">
					<span>Separamos alguns momentos</span>
					<h3>Veja nossas Fotos</h3>
				</div><!-- Page Title -->
			</div>
		</div><!-- Page Top -->


		<section class="block">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="gallery5">
							<div class="gallery5-carousel" id="gallery5-carousel">
								<div class="gallery5-img" data-hash="one">
									<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/foto1.jpg" alt="" itemprop="image" />
									<div class="gallery-detail gallery-detail1">
										<h3>Encontro com motoristas</h3>
									</div>
								</div>
								<div class="gallery5-img" data-hash="two">
									<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/foto2.jpg" alt="" itemprop="image" />
									<div class="gallery-detail gallery-detail1">
										<h3>Almoço com motoristas em Alphaville</h3>
									</div>
								</div>
								<div class="gallery5-img" data-hash="three">
									<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/foto3.jpg" alt="" itemprop="image" />
									<div class="gallery-detail gallery-detail1">
										<h3>Viagem a Minas Gerais</h3>
									</div>
								</div>
								<div class="gallery5-img" data-hash="four">
									<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/foto1.jpg" alt="" itemprop="image" />
									<div class="gallery-detail gallery-detail1">
										<h3>Encontro com motoristas</h3>
									</div>
								</div>
								<div class="gallery5-img" data-hash="five">
									<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/foto2.jpg" alt="" itemprop="image" />
									<div class="gallery-detail gallery-detail1">
										<h3>Almoço com motoristas em Alphaville</h3>
									</div>
								</div>
								<div class="gallery5-img" data-hash="six">
									<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/foto3.jpg" alt="" itemprop="image" />
									<div class="gallery-detail gallery-detail1">
										<h3>Viagem a Minas Gerais</h3>
									</div>
								</div>
							</div><!-- Gallery5 Carousel -->
							<div class="gallery5-carousel-controls">
								<div class="row">
									<div class="col-md-2">
										<div class="gallery5-thumb clicked">
											<a class="secondary url" href="fotos.html#one" title="" itemprop="url">
												<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/foto1a.jpg" alt="" itemprop="image" />
												<i class="fa fa-plus"></i>
											</a>
										</div>
									</div>

									<div class="col-md-2">
										<div class="gallery5-thumb">
											<a class="secondary url" href="fotos.html#two" title="" itemprop="url">
												<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/foto2a.jpg" alt="" itemprop="image" />
												<i class="fa fa-plus"></i>
											</a>
										</div>
									</div>

									<div class="col-md-2">
										<div class="gallery5-thumb">
											<a class="secondary url" href="fotos.html#three" title="" itemprop="url">
												<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/foto3a.jpg" alt="" itemprop="image" />
												<i class="fa fa-plus"></i>
											</a>
										</div>
									</div>

									<div class="col-md-2">
										<div class="gallery5-thumb">
											<a class="secondary url" href="fotos.html#four" title="" itemprop="url">
												<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/foto1a.jpg" alt="" itemprop="image" />
												<i class="fa fa-plus"></i>
											</a>
										</div>
									</div>

									<div class="col-md-2">
										<div class="gallery5-thumb">
											<a class="secondary url" href="fotos.html#five" title="" itemprop="url">
												<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/foto2a.jpg" alt="" itemprop="image" />
												<i class="fa fa-plus"></i>
											</a>
										</div>
									</div>

									<div class="col-md-2">
										<div class="gallery5-thumb">
											<a class="secondary url" href="fotos.html#six" title="" itemprop="url">
												<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/foto3a.jpg" alt="" itemprop="image" />
												<i class="fa fa-plus"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
		

		 <?php get_footer(); ?>

	<div class="modal fade" id="submission-message" tabindex="-1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="submission-data">
						<span><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))?>/images/resource/submission.png" alt="" /></span>
						<h1>SUBMISSION SUCCESSFUL</h1>
						<p>Thank You For Your Booking With Unload. We Have Sent you a Message Shortly.</p>
						<a href="gallery5.html#" title="" class="theme-btn" data-dismiss="modal" aria-label="Close"><i class="fa fa-paper-plane"></i>BACK TO MAIN</a>
					</div><!-- Submission-data -->
				</div>
			</div>
		</div>
	</div>

<script>
$(document).ready(function() {
"use strict";

//** Gallery5 Carousel **//
var owl = $('.gallery5-carousel');
owl.owlCarousel({
    autoplay:false,
    autoplayTimeout:3000,
    smartSpeed:3000,
    animateIn:"fadeIn",
    animateOut:"fadeOut",
    loop:false,
    dots:false,
    nav:true,
    margin:10,
    items:1,
    URLhashListener:true,
    singleItem:true,
    autoHeight:true,
    startPosition: 'URLHash',
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false,
        },
        900:{
            nav:true,
        }
    }
});

owl.on("changed.owl.carousel",function(event){
    setTimeout(function(){
        $(".gallery5-thumb").removeClass("clicked");
        var item = $(".gallery5-carousel").find(".owl-item.active > div").attr("data-hash");
        var check = $(".gallery5-carousel-controls").find($('.gallery5-thumb a[href="#'+item+'"]'));
        $(check).parent().addClass("clicked");
    },500);
});


//** Gallery5 Thumb **//
$(".gallery5-thumb").on("click", function(){
    $(".gallery5-thumb").removeClass("clicked");
    $(this).addClass("clicked");
});


});
</script>
</body>
</html>