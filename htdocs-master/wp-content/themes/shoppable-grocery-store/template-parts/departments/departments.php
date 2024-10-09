<?php
$departmentoneID = get_theme_mod( 'departments_image_one', '' );
$departmentone = get_theme_mod( 'departments_category_one', '' );

$departmenttwoID = get_theme_mod( 'departments_image_two', '' );
$departmenttwo = get_theme_mod( 'departments_category_two', '' );

$departmentthreeID = get_theme_mod( 'departments_image_three', '' );
$departmentthree = get_theme_mod( 'departments_category_three', '' );

$departmentfourID = get_theme_mod( 'departments_image_four', '' );
$departmentfour = get_theme_mod( 'departments_category_four', '' );

$departmentfiveID = get_theme_mod( 'departments_image_five', '' );
$departmentfive = get_theme_mod( 'departments_category_five', '' );

$departmentsixID = get_theme_mod( 'departments_image_six', '' );
$departmentsix = get_theme_mod( 'departments_category_six', '' );

$departmentsevenID = get_theme_mod( 'departments_image_seven', '' );
$departmentseven = get_theme_mod( 'departments_category_seven', '' );

$departmenteightID = get_theme_mod( 'departments_image_eight', '' );
$departmenteight = get_theme_mod( 'departments_category_eight', '' );


$department_one_array = array();
$department_two_array = array();
$has_card_one = false;
$has_card_two = false;
if( !empty( $departmentoneID ) || !empty( $departmentone ) ){
	$dep_image_one = wp_get_attachment_image_src( $departmentoneID ,'hello-shoppable-420-300');
 	if ( is_array( $dep_image_one ) ){
 		$has_card_one = true;
   	 	$depart_one = $dep_image_one[0];
   	 	$department_one_array['image_one'] ['ID'] = $depart_one;	 	
  	}
  	if ( !empty( $departmentone ) ){
 		$has_card_one = true;
   	 	$department_one_array['image_one']['category'] = $departmentone;	
  	}
}
if( !empty( $departmenttwoID ) || !empty( $departmenttwo ) ){
	$dep_image_two = wp_get_attachment_image_src( $departmenttwoID ,'hello-shoppable-420-300');
 	if ( is_array( $dep_image_two ) ){
 		$has_card_one = true;
   	 	$depart_two = $dep_image_two[0];
   	 	$department_one_array['image_two'] ['ID'] = $depart_two;	 	
  	}
  	if ( !empty( $departmenttwo ) ){
 		$has_card_one = true;
   	 	$department_one_array['image_two']['category'] = $departmenttwo;	
  	}
}
if( !empty( $departmentthreeID ) || !empty( $departmentthree ) ){
	$dep_image_three = wp_get_attachment_image_src( $departmentthreeID ,'hello-shoppable-420-300');
 	if ( is_array( $dep_image_three ) ){
 		$has_card_one = true;
   	 	$depart_three = $dep_image_three[0];
   	 	$department_one_array['image_three'] ['ID'] = $depart_three;	 	
  	}
  	if ( !empty( $departmentthree ) ){
 		$has_card_one = true;
   	 	$department_one_array['image_three']['category'] = $departmentthree;	
  	}
}
if( !empty( $departmentfourID ) || !empty( $departmentfour ) ){
	$dep_image_four = wp_get_attachment_image_src( $departmentfourID ,'hello-shoppable-420-300');
 	if ( is_array( $dep_image_four ) ){
 		$has_card_one = true;
   	 	$depart_four = $dep_image_four[0];
   	 	$department_one_array['image_four'] ['ID'] = $depart_four;	 	
  	}
  	if ( !empty($departmentfour) ){
 		$has_card_one = true;
   	 	$department_one_array['image_four']['category'] = $departmentfour;	
  	}
}
if( !empty( $departmentfiveID ) || !empty( $departmentfive ) ){
	$dep_image_five = wp_get_attachment_image_src( $departmentfiveID ,'hello-shoppable-420-300');
 	if ( is_array( $dep_image_five ) ){
 		$has_card_two = true;
   	 	$depart_five = $dep_image_five[0];
   	 	$department_two_array['image_five'] ['ID'] = $depart_five;	 	
  	}
  	if ( !empty( $departmentfive ) ){
 		$has_card_two = true;
   	 	$department_two_array['image_five']['category'] = $departmentfive;	
  	}
}
if( !empty( $departmentsixID ) || !empty( $departmentsix ) ){
	$dep_image_six = wp_get_attachment_image_src( $departmentsixID ,'hello-shoppable-420-300');
 	if ( is_array( $dep_image_six ) ){
 		$has_card_two = true;
   	 	$depart_six = $dep_image_six[0];
   	 	$department_two_array['image_six'] ['ID'] = $depart_six;	 	
  	}
  	if ( !empty( $departmentsix ) ){
 		$has_card_two = true;
   	 	$department_two_array['image_six']['category'] = $departmentsix;	
  	}
}
if( !empty( $departmentsevenID ) || !empty( $departmentseven ) ){
	$dep_image_seven = wp_get_attachment_image_src( $departmentsevenID ,'hello-shoppable-420-300');
 	if ( is_array( $dep_image_seven ) ){
 		$has_card_two = true;
   	 	$depart_seven = $dep_image_seven[0];
   	 	$department_two_array['image_seven'] ['ID'] = $depart_seven;	 	
  	}
  	if ( !empty( $departmentseven ) ){
 		$has_card_two = true;
   	 	$department_two_array['image_seven']['category'] = $departmentseven;	
  	}
}
if( !empty( $departmenteightID ) || !empty( $departmenteight ) ){
	$dep_image_eight = wp_get_attachment_image_src( $departmenteightID ,'hello-shoppable-420-300');
 	if ( is_array( $dep_image_eight ) ){
 		$has_card_two = true;
   	 	$depart_eight = $dep_image_eight[0];
   	 	$department_two_array['image_eight'] ['ID'] = $depart_eight;	 	
  	}
  	if ( !empty( $departmenteight ) ){
 		$has_card_two = true;
   	 	$department_two_array['image_eight']['category'] = $departmenteight;	
  	}
}

$product_cat = shoppable_grocery_store_get_product_categories();

if( get_theme_mod( 'departments_section', true ) && ( $has_card_one || $has_card_two || get_theme_mod( 'departments_title_one' ) || get_theme_mod( 'departments_title_two' ) ) ){ ?>
	<section class="section-department-area">
		<div class="row">
			<?php if( $has_card_one || get_theme_mod( 'departments_title_one' ) ){ ?>
				<div class="col-lg-6">
					<div class="departments-wrapper">
						<?php if( get_theme_mod( 'departments_title_one' ) ){ ?>
							<div class="section-title-wrap">
								<h3 class="section-title">	
									<?php echo esc_html( get_theme_mod( 'departments_title_one' ) ); ?>
								</h3>
							</div>
						<?php } ?>
						<div class="content-wrap">
							<div class="row justify-content-center">
								<?php foreach( $department_one_array as $each_departmentone ){ ?>
									<div class="col-sm-6 col-md-4 col-lg-6">
										<article class="department-content-wrap">
											<?php 
											if ( isset( $each_departmentone['ID'] ) && !empty( $each_departmentone['ID'] ) ){
												$cat_url = '';
												if( isset( $each_departmentone['category'] ) && !empty( $each_departmentone['category'] ) ) {
													$cat_url = $each_departmentone['category'];
												}
											?>
												<figure class= "featured-image">
													<a href="<?php echo esc_url( get_category_link( $cat_url ) ); ?>">
														<img src="<?php echo esc_url( $each_departmentone['ID'] ); ?>">
													</a>	
												</figure>
											<?php } ?>
											<?php if ( isset( $each_departmentone['category'] ) && !empty( $each_departmentone['category'] ) ){ ?>
												<h5 class="entry-title">
													<a href="<?php echo esc_url( get_category_link( $each_departmentone ['category'] ) ); ?>" >
														<?php echo esc_html($product_cat[$each_departmentone['category'] ] ); ?>
													</a>	
												</h5>
											<?php } ?>
										</article>	
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			<?php if( $has_card_two || get_theme_mod( 'departments_title_two' ) ){ ?>
				<div class="col-lg-6">
				<div class="departments-wrapper">
					<?php if( get_theme_mod( 'departments_title_two' ) ){ ?>
						<div class="section-title-wrap">
							<h3 class="section-title">	
								<?php echo esc_html( get_theme_mod( 'departments_title_two' ) ); ?>
							</h3>
						</div>
					<?php } ?>
					<div class="content-wrap">
						<div class="row justify-content-center">
							<?php foreach( $department_two_array as $each_departmenttwo ){ ?>
								<div class="col-sm-6 col-md-4 col-lg-6">
									<article class="department-content-wrap">
										<?php 
										if ( isset( $each_departmenttwo['ID'] ) && !empty( $each_departmenttwo['ID'] ) ){
											$cat_url = '';
											if( isset( $each_departmenttwo['category'] ) && !empty( $each_departmenttwo['category'] ) ) {
												$cat_url = $each_departmenttwo['category'];
											}
										?>
											<figure class= "featured-image">
												<a href="<?php echo esc_url( get_category_link( $cat_url ) ); ?>">
													<img src="<?php echo esc_url( $each_departmenttwo['ID'] ); ?>">
												</a>	
											</figure>
										<?php } ?>
										<?php if ( isset( $each_departmenttwo['category'] ) && !empty( $each_departmenttwo['category'] ) ){ ?>
											<h5 class="entry-title">
												<a href="<?php echo esc_url( get_category_link( $each_departmenttwo ['category'] ) ); ?>">
													<?php echo esc_html($product_cat[$each_departmenttwo['category'] ] ); ?>
												</a>	
											</h5>
										<?php } ?>
									</article>	
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
				</div>
			<?php } ?>
		</div>
	</section>
<?php } ?>

