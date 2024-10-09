<?php
$blogAdvertoneID = get_theme_mod( 'blog_advert_one','');
$blogAdverttwoID = get_theme_mod( 'blog_advert_two','');       
$blogAdvertthreeID = get_theme_mod( 'blog_advert_three','');

$Advert_array = array();
$has_Advert = false;
if( !empty( $blogAdvertoneID ) ){
	$blog_advert_one  = wp_get_attachment_image_src( $blogAdvertoneID,'hello-shoppable-420-300');
 	if ( is_array(  $blog_advert_one ) ){
 		$has_Advert = true;
   	 	$blog_adverts_one = $blog_advert_one[0];
   	 	$Advert_array['image_one'] = array(
			'ID' => $blog_adverts_one,
		);	
  	}
}
if( !empty( $blogAdverttwoID ) ){
	$blog_advert_two = wp_get_attachment_image_src( $blogAdverttwoID,'hello-shoppable-420-300');
	if ( is_array(  $blog_advert_two ) ){
		$has_Advert = true;	
        $blog_adverts_two = $blog_advert_two[0];
        $Advert_array['image_two'] = array(
			'ID' => $blog_adverts_two,
		);	
  	}
}
if( !empty( $blogAdvertthreeID ) ){	
	$blog_advert_three = wp_get_attachment_image_src( $blogAdvertthreeID,'hello-shoppable-420-300');
	if ( is_array(  $blog_advert_three ) ){
		$has_Advert = true;
      	$blog_adverts_three = $blog_advert_three[0];
      	$Advert_array['image_three'] = array(
			'ID' => $blog_adverts_three,
		);	
  	}
}

if( get_theme_mod( 'advert_section', true ) && $has_Advert ){ ?>
	<section class="section-advert-area">
		<div class="row">
			<?php foreach( $Advert_array as $each_Advert ){ ?>
				<div class="col-sm-4">
					<figure class= "featured-image">
						<img src="<?php echo esc_url( $each_Advert['ID'] ); ?>">
					</figure>
				</div>
			<?php } ?>
		</div>	
	</section>
<?php } ?>
