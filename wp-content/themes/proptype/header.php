<?php $path = wp_get_upload_dir() ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<meta content="" name="descriptison">
	<meta content="" name="keywords">

	<!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
	<meta property="og:title" content="">
	<meta property="og:image" content="">
	<meta property="og:url" content="">
	<meta property="og:site_name" content="">
	<meta property="og:description" content="">

	<!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="">
	<meta name="twitter:title" content="">
	<meta name="twitter:description" content="">
	<meta name="twitter:image" content="">

	<!-- Favicons -->
	<link href="<?php echo $path['baseurl'] ?>/favicon-32x32-1.png" rel="icon">
	<link href="<?php echo $path['baseurl'] ?>/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<?php wp_head() ?>

</head>

<body>

<?php if ( is_front_page() ) { ?>
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div class="wow fadeIn">
                <div class="hero-logo">
                    <img class="" src="<?php echo $path['baseurl'] ?>/logo.png" alt="Prop-type">
                </div>

                <h1>We believe in digital growth</h1>
                <h2>We help our clients to look into the future and achieve growth by designing and creating visually attarctive
                    , user-friendly and seamlessly working digital solutions.</h2>
                <div class="actions">
                    <a href="#about" class="btn-get-started">Get Started</a>
                    <a href="#services" class="btn-services">Our Services</a>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->
<?php } ?>


<!-- ======= Header ======= -->
<header id="header">
	<div class="container d-flex align-items-center">

		<a href="<?php echo get_home_url(); ?>" class="logo mr-auto">
			<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
			echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="Prop-type">';
			?>
		</a>

		<nav class="nav-menu d-none d-lg-block">
                <?php
	                wp_nav_menu(
		                array(
			                'menu' => is_front_page() ? 'primary_menu' : 'secondary_menu',
			                'container' => '<ul></ul>',
			                'theme_location' => 'primary_menu',
			                'items_wrap' => '<ul id="" class="">%3$s</ul>'
		                )
	                );
                ?>
		</nav><!-- .nav-menu -->

	</div>
</header>
<!-- End Header -->
