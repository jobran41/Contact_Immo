<!doctype html>

<html <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link rel="shortcut icon" href="<?php  bloginfo('template_url');  ?>/img/fav/favicon.ico" type="image/x-icon">

		<link rel="apple-touch-icon-precomposed" href="<?php  bloginfo('template_url');  ?>/img/fav/apple-touch-icon.png">

		<?php wp_head(); ?>

	</head>

	

	<?php 

		

		if( is_front_page() ):

			$awesome_classes = array( 'awesome-class', 'my-class' );

		else:

			$awesome_classes = array( 'no-awesome-class' );

		endif;

		

	?>

	

	<body <?php body_class( $awesome_classes ); ?>>

		

			





			

			