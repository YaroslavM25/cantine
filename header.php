<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php /*if(ale_get_option('sitelogo')){
    echo "<img src='".ale_get_option('sitelogo')."' />";
}*/ ?>
	<?php ale_option('sitelogo'); /*?>

	<section class="slider-example">
		<div class="newhomeslider wrapper">
			<ul class="slides">
				<?php $slider = ale_sliders_get_slider('test-slider');  ?>
				<?php if($slider):?>
				<?php foreach ($slider['slides'] as $slide) : ?>
				<li>
					<figure>
						<img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>" />
						<figcaption>
							<div class="sliderdata">
								<?php if($slide['title']){ ?>
								<div class="titleslide headerfont">
									<?php if($slide['url']){
												echo "<a href='".$slide['url']."'>";
											} ?>

									<?php echo $slide['title']; ?>

									<?php if($slide['url']){
												echo "</a>";
											} ?>
								</div>
								<?php } ?>
								<?php if($slide['description']){ ?>
								<div class="descriptionslide">
									<?php echo $slide['description']; ?>
								</div>
								<?php } ?>
								<?php if($slide['html']){ ?>
								<div class="descriptionslide">
									<?php echo $slide['html']; ?>
								</div>
								<?php } ?>
							</div>
						</figcaption>
					</figure>
				</li>
				<?php endforeach; ?>
				<?php endif;?>
			</ul>
		</div>
	</section>

	<?php */ ?>


	<!-- Custom Header -->
	<header class="header">
		<div class="header-image">
			<nav class="navbar grid-x" id="navbar">
				<?php
				wp_nav_menu( array( 
					'theme_location' => 'header_top_left', 
					'container_class' => 'navbar-list float-left navbar-1 cell large-5 medium-5 small-5' ) ); 
				?>

				<div class="logo-wrap cell large-2 medium-2 small-2">
					<div class="header-logo"></div>
				</div>

				<?php
				wp_nav_menu( array(
					'theme_location' => 'header_top_right',
					'container_class' => 'navbar-list float-left navbar-1 cell large-5 medium-5 small-5' ) );
				?>
			</nav>
		</div>
	</header>