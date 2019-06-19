<?php
	/*
	Template Name: Homepage
	*/

	get_header();
?>
<?php
	$shop_page_url = get_permalink( wc_get_page_id( 'shop' ) );
?>
	<section id="banner-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="banner-content-wrap">
						<h1><span>Free</span> and Premium Themes & Templates for Websites
							<br> That Perfectly Fit Your Business</h1>
						<a href="<?php echo esc_url( $shop_page_url ); ?>" class="btn btn-brand"><?php esc_html_e( 'Buy a theme', 'downloadclub' ); ?></a>

						<!-- Feature Product Area Start -->
						<div class="featured-products-area">
							<div class="feature-slider-warp owl-carousel">
								<div class="single-feature-product">
									<a href="#" class="d-block">
										<img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/img/feature-product/feature-product-1.jpg"
											 alt="Feature Product" class="img-fluid" /> </a>
								</div>
								<div class="single-feature-product">
									<a href="#" class="d-block">
										<img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/img/feature-product/feature-product-2.jpg"
											 alt="Feature Product" class="img-fluid" /> </a>
								</div>
								<div class="single-feature-product">
									<a href="#" class="d-block">
										<img src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/img/feature-product/feature-product-3.jpg"
											 alt="Feature Product" class="img-fluid" /> </a>
								</div>
							</div>
						</div>
						<!-- Feature Product Area End -->
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--== Products Area Start ==-->
	<section id="products-area">
		<!-- Products Filter Menu Start -->
		<div class="products-filter-menu">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<nav class="filter-navbar">
							<ul class="d-flex">
								<li class="fil-cat current" data-rel="all">New Released</li>
								<li class="fil-cat" data-rel="wordpress">WordPress</li>
								<li class="fil-cat" data-rel="html">Html</li>
								<li class="fil-cat" data-rel="feature">Featured</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- Products Filter Menu End -->

		<!-- Products Content Start -->
		<div class="products-content-wrap section-padding">
			<div class="container">
				<div id="productsContent" class="row">
					<!-- Single Product Start -->
					<div class="product-item scale-amn col-lg-4 col-md-6 all pop trend">
						<div class="single-product-wrap ">
							<figure class="product-thumb">
								<a href="#"><img
										src="<?php echo get_template_directory_uri(); ?>/assets/img/products/products-1.jpg"
										alt="Home" class="img-fluid" /></a>
							</figure>

							<div class="product-meta">
								<h2 class="h6"><a href="#">Landingz – One Page App and Product</a></h2>

								<div class="product-sub-meta d-flex justify-content-between">
									<a href="#"><i class="fa fa-tags"></i> HTML</a>
									<span class="product-price">$19.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Product End -->

					<!-- Single Product Start -->
					<div class="product-item scale-amn col-lg-4 col-md-6 all wp new feature">
						<div class="single-product-wrap">
							<figure class="product-thumb">
								<a href="#"><img
										src="<?php echo get_template_directory_uri(); ?>/assets/img/products/products-2.jpg"
										alt="Home" class="img-fluid" /></a>
							</figure>

							<div class="product-meta">
								<h2 class="h6"><a href="#">Landingz – One Page App and Product</a></h2>

								<div class="product-sub-meta d-flex justify-content-between">
									<a href="#"><i class="fa fa-tags"></i> HTML</a>
									<span class="product-price">$19.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Product End -->

					<!-- Single Product Start -->
					<div class="product-item scale-amn col-lg-4 col-md-6 all pop">
						<div class="single-product-wrap">
							<figure class="product-thumb">
								<a href="#"><img
										src="<?php echo get_template_directory_uri(); ?>/assets/img/products/products-3.jpg"
										alt="Home" class="img-fluid" /></a>
							</figure>

							<div class="product-meta">
								<h2 class="h6"><a href="#">Landingz – One Page App and Product</a></h2>

								<div class="product-sub-meta d-flex justify-content-between">
									<a href="#"><i class="fa fa-tags"></i> HTML</a>
									<span class="product-price">$19.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Product End -->

					<!-- Single Product Start -->
					<div class="product-item scale-amn col-lg-4 col-md-6 all trend wp">
						<div class="single-product-wrap">
							<figure class="product-thumb">
								<a href="#"><img
										src="<?php echo get_template_directory_uri(); ?>/assets/img/products/products-2.jpg"
										alt="Home" class="img-fluid" /></a>
							</figure>

							<div class="product-meta">
								<h2 class="h6"><a href="#">Landingz – One Page App and Product</a></h2>

								<div class="product-sub-meta d-flex justify-content-between">
									<a href="#"><i class="fa fa-tags"></i> HTML</a>
									<span class="product-price">$19.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Product End -->

					<!-- Single Product Start -->
					<div class="product-item scale-amn col-lg-4 col-md-6 all pop new">
						<div class="single-product-wrap">
							<figure class="product-thumb">
								<a href="#"><img
										src="<?php echo get_template_directory_uri(); ?>/assets/img/products/products-3.jpg"
										alt="Home" class="img-fluid" /></a>
							</figure>

							<div class="product-meta">
								<h2 class="h6"><a href="#">Landingz – One Page App and Product</a></h2>

								<div class="product-sub-meta d-flex justify-content-between">
									<a href="#"><i class="fa fa-tags"></i> HTML</a>
									<span class="product-price">$19.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Product End -->

					<!-- Single Product Start -->
					<div class="product-item scale-amn col-lg-4 col-md-6 all pop wp">
						<div class="single-product-wrap">
							<figure class="product-thumb">
								<a href="#"><img
										src="<?php echo get_template_directory_uri(); ?>/assets/img/products/products-1.jpg"
										alt="Home" class="img-fluid" /></a>
							</figure>

							<div class="product-meta">
								<h2 class="h6"><a href="#">Landingz – One Page App and Product</a></h2>

								<div class="product-sub-meta d-flex justify-content-between">
									<a href="#"><i class="fa fa-tags"></i> HTML</a>
									<span class="product-price">$19.00</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Product End -->
				</div>

				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="product-loadmore-btn">
							<a href="<?php echo esc_url( $shop_page_url ); ?>" class="btn btn-brand btn-load"><?php esc_html_e( 'All Themes', 'downloadclub' ); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Products Content End -->
	</section>
	<!--== Products Area End ==-->

<?php
	//include the template section "we are featured"
	//get_template_part( 'template-parts/sections/wearefeatured', '' );
?>
<?php
	while ( have_posts() ) :
		the_post();
		//get_template_part( 'template-parts/content', 'page' );
	endwhile; // End of the loop.
?>


<?php
	get_footer();