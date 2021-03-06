<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/img/fav.png?v=3" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/icon.png?v=2" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="format-detection" content="telephone=no">
		<meta name="keywords" content="Babienko, Architects, Babienko Architects, Building, Contracting, Seattle, Washington, Architecture, Creativity, Sustainable, Multi-disciplinary, Pacific Northwest, PNW, Inventive">

		<meta property="og:title" content="<?php bloginfo('name'); ?>">
		<meta property="og:description" content="<?php bloginfo('description'); ?>">
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/share.jpg">
		<meta property="og:url" content="<?php echo home_url( $wp->request ); ?>">
		<meta name="twitter:card" content="summary_large_image">

		<?php wp_head(); ?>

		<script>
				document.createElement( "picture" );
		</script>

	</head>
	<body <?php body_class(); ?>>

		<section class="title-fade show">
			<div class="spinner show">
				<p><span></span></p>
			</div>
			<div class="text">
				<?php if(is_front_page()): ?>
					babienko
				<?php elseif(is_post_type_archive('roster')): ?>
					roster
				<?php else: ?>
					<?php echo strtolower(get_the_title()); ?>
				<?php endif; ?>
			</div>
		</section>

		<section class="fade-wrap">

			<header>

				<section class="header">

					<div class="logo">
						<a href="<?php echo site_url( '/', 'http' ); ?>">
							<svg version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
								 x="0px" y="0px" width="131.4px" height="21.4px" viewBox="0 0 131.4 21.4" style="enable-background:new 0 0 131.4 21.4;"
								 xml:space="preserve">
								<path class="st0" d="M0,21V0.4h1.9v8.3c0.8-1,1.7-1.7,2.7-2.2c1-0.5,2.1-0.7,3.3-0.7c2.1,0,3.9,0.8,5.4,2.3
									c1.5,1.5,2.2,3.4,2.2,5.6c0,2.2-0.8,4-2.3,5.5c-1.5,1.5-3.3,2.3-5.4,2.3c-1.2,0-2.3-0.3-3.3-0.8s-1.9-1.3-2.6-2.3V21H0z M7.7,19.5
									c1.1,0,2-0.3,2.9-0.8c0.9-0.5,1.6-1.3,2.1-2.2c0.5-0.9,0.8-2,0.8-3c0-1.1-0.3-2.1-0.8-3c-0.5-1-1.3-1.7-2.2-2.2
									C9.7,7.7,8.7,7.5,7.7,7.5c-1,0-2,0.3-3,0.8C3.8,8.8,3,9.5,2.5,10.4s-0.8,1.9-0.8,3c0,1.7,0.6,3.2,1.7,4.3C4.6,19,6,19.5,7.7,19.5z"
									/>
								<path class="st0" d="M34.4,6.1V21h-1.9v-2.6c-0.8,1-1.7,1.7-2.7,2.2s-2.1,0.7-3.3,0.7c-2.1,0-3.9-0.8-5.4-2.3
									c-1.5-1.5-2.2-3.4-2.2-5.6c0-2.1,0.8-4,2.3-5.5c1.5-1.5,3.3-2.3,5.4-2.3c1.2,0,2.3,0.3,3.3,0.8c1,0.5,1.9,1.3,2.6,2.3V6.1H34.4z
									 M26.7,7.6c-1.1,0-2,0.3-2.9,0.8c-0.9,0.5-1.6,1.3-2.2,2.2c-0.5,0.9-0.8,1.9-0.8,3c0,1,0.3,2,0.8,3c0.5,1,1.3,1.7,2.2,2.2
									s1.9,0.8,2.9,0.8c1,0,2-0.3,3-0.8c0.9-0.5,1.7-1.2,2.2-2.1s0.8-1.9,0.8-3c0-1.7-0.6-3.2-1.7-4.3C29.8,8.2,28.4,7.6,26.7,7.6z"/>
								<path class="st0" d="M39.3,21V0.4h1.9v8.3C42.1,7.7,43,7,44,6.5c1-0.5,2.1-0.7,3.3-0.7c2.1,0,3.9,0.8,5.4,2.3
									c1.5,1.5,2.2,3.4,2.2,5.6c0,2.2-0.8,4-2.3,5.5c-1.5,1.5-3.3,2.3-5.4,2.3c-1.2,0-2.3-0.3-3.3-0.8s-1.9-1.3-2.6-2.3V21H39.3z
									 M47,19.5c1.1,0,2-0.3,2.9-0.8c0.9-0.5,1.6-1.3,2.1-2.2c0.5-0.9,0.8-2,0.8-3c0-1.1-0.3-2.1-0.8-3s-1.3-1.7-2.2-2.2S48.1,7.5,47,7.5
									c-1,0-2,0.3-3,0.8c-0.9,0.5-1.7,1.3-2.2,2.2c-0.5,0.9-0.8,1.9-0.8,3c0,1.7,0.6,3.2,1.7,4.3C44,19,45.3,19.5,47,19.5z"/>
								<path class="st0" d="M59.5,0c0.4,0,0.8,0.2,1.1,0.5c0.3,0.3,0.5,0.7,0.5,1.1c0,0.4-0.2,0.8-0.5,1.1C60.4,3,60,3.2,59.5,3.2
									c-0.4,0-0.8-0.2-1.1-0.5C58.1,2.4,58,2,58,1.6c0-0.4,0.2-0.8,0.5-1.1C58.8,0.2,59.1,0,59.5,0z M58.6,6.1h1.9V21h-1.9V6.1z"/>
								<path class="st0" d="M78.1,16.1l1.6,0.8c-0.5,1-1.1,1.9-1.8,2.5c-0.7,0.6-1.5,1.1-2.3,1.5s-1.8,0.5-2.9,0.5c-2.4,0-4.3-0.8-5.7-2.4
									c-1.4-1.6-2.1-3.4-2.1-5.4c0-1.9,0.6-3.6,1.7-5c1.5-1.9,3.4-2.8,5.9-2.8c2.5,0,4.6,1,6.1,2.9c1.1,1.4,1.6,3.1,1.6,5.1H66.9
									c0,1.7,0.6,3.1,1.7,4.2c1.1,1.1,2.4,1.7,4,1.7c0.8,0,1.5-0.1,2.2-0.4c0.7-0.3,1.3-0.6,1.8-1S77.5,17,78.1,16.1z M78.1,12.1
									c-0.3-1-0.6-1.8-1.1-2.4c-0.5-0.6-1.1-1.1-1.9-1.5c-0.8-0.4-1.6-0.6-2.5-0.6c-1.5,0-2.7,0.5-3.8,1.4c-0.8,0.7-1.3,1.7-1.7,3.1H78.1
									z"/>
								<path class="st0" d="M84.4,6.1h1.9v2.7c0.8-1,1.6-1.8,2.5-2.3s1.9-0.8,3-0.8c1.1,0,2.1,0.3,3,0.8c0.9,0.6,1.5,1.3,1.9,2.3
									s0.6,2.4,0.6,4.5V21h-1.9v-7.1c0-1.7-0.1-2.9-0.2-3.4c-0.2-1-0.6-1.7-1.3-2.2c-0.6-0.5-1.4-0.7-2.5-0.7c-1.2,0-2.2,0.4-3.1,1.1
									s-1.5,1.7-1.8,2.8c-0.2,0.7-0.3,2.1-0.3,4V21h-1.9V6.1z"/>
								<path class="st0" d="M102.5,0.4h1.9v11.7l6.9-6h2.8l-8.2,7.1l8.7,7.8H112l-7.5-6.7V21h-1.9V0.4z"/>
								<path class="st0" d="M123.7,5.7c2.3,0,4.2,0.8,5.7,2.5c1.4,1.5,2.1,3.3,2.1,5.4c0,2.1-0.7,3.9-2.2,5.4c-1.4,1.6-3.3,2.3-5.6,2.3
									c-2.3,0-4.1-0.8-5.6-2.3c-1.4-1.6-2.2-3.4-2.2-5.4c0-2.1,0.7-3.8,2.1-5.4C119.5,6.6,121.4,5.7,123.7,5.7z M123.7,7.6
									c-1.6,0-3,0.6-4.1,1.8c-1.1,1.2-1.7,2.6-1.7,4.3c0,1.1,0.3,2.1,0.8,3s1.2,1.6,2.1,2.2c0.9,0.5,1.9,0.8,2.9,0.8c1.1,0,2-0.3,2.9-0.8
									c0.9-0.5,1.6-1.2,2.1-2.2c0.5-0.9,0.8-1.9,0.8-3c0-1.7-0.6-3.1-1.7-4.3S125.2,7.6,123.7,7.6z"/>
							</svg>
						</a>
					</div>

					<div class="menu-toggle">
						<button>
							<svg version="1.1"
								 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
								 x="0px" y="0px" width="35px" height="19.3px" viewBox="0 0 35 19.3" style="enable-background:new 0 0 35 19.3;"
								 xml:space="preserve">

							<line class="st3" x1="0" y1="1" x2="35" y2="1"/>
							<line class="st3" x1="0" y1="9.7" x2="35" y2="9.7"/>
							<line class="st3" x1="0" y1="18.3" x2="35" y2="18.3"/>
							</svg>
						</button>
					</div>

				</section>

			</header>

			<section class="menu">

				<div class="logo">
					<a href="<?php echo site_url( '/', 'http' ); ?>">
						<svg version="1.1"
							 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
							 x="0px" y="0px" width="131.4px" height="21.4px" viewBox="0 0 131.4 21.4" style="enable-background:new 0 0 131.4 21.4;"
							 xml:space="preserve">
							<path class="st0" d="M0,21V0.4h1.9v8.3c0.8-1,1.7-1.7,2.7-2.2c1-0.5,2.1-0.7,3.3-0.7c2.1,0,3.9,0.8,5.4,2.3
								c1.5,1.5,2.2,3.4,2.2,5.6c0,2.2-0.8,4-2.3,5.5c-1.5,1.5-3.3,2.3-5.4,2.3c-1.2,0-2.3-0.3-3.3-0.8s-1.9-1.3-2.6-2.3V21H0z M7.7,19.5
								c1.1,0,2-0.3,2.9-0.8c0.9-0.5,1.6-1.3,2.1-2.2c0.5-0.9,0.8-2,0.8-3c0-1.1-0.3-2.1-0.8-3c-0.5-1-1.3-1.7-2.2-2.2
								C9.7,7.7,8.7,7.5,7.7,7.5c-1,0-2,0.3-3,0.8C3.8,8.8,3,9.5,2.5,10.4s-0.8,1.9-0.8,3c0,1.7,0.6,3.2,1.7,4.3C4.6,19,6,19.5,7.7,19.5z"
								/>
							<path class="st0" d="M34.4,6.1V21h-1.9v-2.6c-0.8,1-1.7,1.7-2.7,2.2s-2.1,0.7-3.3,0.7c-2.1,0-3.9-0.8-5.4-2.3
								c-1.5-1.5-2.2-3.4-2.2-5.6c0-2.1,0.8-4,2.3-5.5c1.5-1.5,3.3-2.3,5.4-2.3c1.2,0,2.3,0.3,3.3,0.8c1,0.5,1.9,1.3,2.6,2.3V6.1H34.4z
								 M26.7,7.6c-1.1,0-2,0.3-2.9,0.8c-0.9,0.5-1.6,1.3-2.2,2.2c-0.5,0.9-0.8,1.9-0.8,3c0,1,0.3,2,0.8,3c0.5,1,1.3,1.7,2.2,2.2
								s1.9,0.8,2.9,0.8c1,0,2-0.3,3-0.8c0.9-0.5,1.7-1.2,2.2-2.1s0.8-1.9,0.8-3c0-1.7-0.6-3.2-1.7-4.3C29.8,8.2,28.4,7.6,26.7,7.6z"/>
							<path class="st0" d="M39.3,21V0.4h1.9v8.3C42.1,7.7,43,7,44,6.5c1-0.5,2.1-0.7,3.3-0.7c2.1,0,3.9,0.8,5.4,2.3
								c1.5,1.5,2.2,3.4,2.2,5.6c0,2.2-0.8,4-2.3,5.5c-1.5,1.5-3.3,2.3-5.4,2.3c-1.2,0-2.3-0.3-3.3-0.8s-1.9-1.3-2.6-2.3V21H39.3z
								 M47,19.5c1.1,0,2-0.3,2.9-0.8c0.9-0.5,1.6-1.3,2.1-2.2c0.5-0.9,0.8-2,0.8-3c0-1.1-0.3-2.1-0.8-3s-1.3-1.7-2.2-2.2S48.1,7.5,47,7.5
								c-1,0-2,0.3-3,0.8c-0.9,0.5-1.7,1.3-2.2,2.2c-0.5,0.9-0.8,1.9-0.8,3c0,1.7,0.6,3.2,1.7,4.3C44,19,45.3,19.5,47,19.5z"/>
							<path class="st0" d="M59.5,0c0.4,0,0.8,0.2,1.1,0.5c0.3,0.3,0.5,0.7,0.5,1.1c0,0.4-0.2,0.8-0.5,1.1C60.4,3,60,3.2,59.5,3.2
								c-0.4,0-0.8-0.2-1.1-0.5C58.1,2.4,58,2,58,1.6c0-0.4,0.2-0.8,0.5-1.1C58.8,0.2,59.1,0,59.5,0z M58.6,6.1h1.9V21h-1.9V6.1z"/>
							<path class="st0" d="M78.1,16.1l1.6,0.8c-0.5,1-1.1,1.9-1.8,2.5c-0.7,0.6-1.5,1.1-2.3,1.5s-1.8,0.5-2.9,0.5c-2.4,0-4.3-0.8-5.7-2.4
								c-1.4-1.6-2.1-3.4-2.1-5.4c0-1.9,0.6-3.6,1.7-5c1.5-1.9,3.4-2.8,5.9-2.8c2.5,0,4.6,1,6.1,2.9c1.1,1.4,1.6,3.1,1.6,5.1H66.9
								c0,1.7,0.6,3.1,1.7,4.2c1.1,1.1,2.4,1.7,4,1.7c0.8,0,1.5-0.1,2.2-0.4c0.7-0.3,1.3-0.6,1.8-1S77.5,17,78.1,16.1z M78.1,12.1
								c-0.3-1-0.6-1.8-1.1-2.4c-0.5-0.6-1.1-1.1-1.9-1.5c-0.8-0.4-1.6-0.6-2.5-0.6c-1.5,0-2.7,0.5-3.8,1.4c-0.8,0.7-1.3,1.7-1.7,3.1H78.1
								z"/>
							<path class="st0" d="M84.4,6.1h1.9v2.7c0.8-1,1.6-1.8,2.5-2.3s1.9-0.8,3-0.8c1.1,0,2.1,0.3,3,0.8c0.9,0.6,1.5,1.3,1.9,2.3
								s0.6,2.4,0.6,4.5V21h-1.9v-7.1c0-1.7-0.1-2.9-0.2-3.4c-0.2-1-0.6-1.7-1.3-2.2c-0.6-0.5-1.4-0.7-2.5-0.7c-1.2,0-2.2,0.4-3.1,1.1
								s-1.5,1.7-1.8,2.8c-0.2,0.7-0.3,2.1-0.3,4V21h-1.9V6.1z"/>
							<path class="st0" d="M102.5,0.4h1.9v11.7l6.9-6h2.8l-8.2,7.1l8.7,7.8H112l-7.5-6.7V21h-1.9V0.4z"/>
							<path class="st0" d="M123.7,5.7c2.3,0,4.2,0.8,5.7,2.5c1.4,1.5,2.1,3.3,2.1,5.4c0,2.1-0.7,3.9-2.2,5.4c-1.4,1.6-3.3,2.3-5.6,2.3
								c-2.3,0-4.1-0.8-5.6-2.3c-1.4-1.6-2.2-3.4-2.2-5.4c0-2.1,0.7-3.8,2.1-5.4C119.5,6.6,121.4,5.7,123.7,5.7z M123.7,7.6
								c-1.6,0-3,0.6-4.1,1.8c-1.1,1.2-1.7,2.6-1.7,4.3c0,1.1,0.3,2.1,0.8,3s1.2,1.6,2.1,2.2c0.9,0.5,1.9,0.8,2.9,0.8c1.1,0,2-0.3,2.9-0.8
								c0.9-0.5,1.6-1.2,2.1-2.2c0.5-0.9,0.8-1.9,0.8-3c0-1.7-0.6-3.1-1.7-4.3S125.2,7.6,123.7,7.6z"/>
						</svg>
					</a>
				</div>

				<nav class="nav">
					<ul>
						<li><a href="<?php echo site_url( '/', 'http' ); ?>" <?php if(is_front_page()){ echo 'class="current"'; } ?>>build</a></li>
						<li><a href="<?php echo site_url( '/about', 'http' ); ?>" <?php if(is_page("about")){ echo 'class="current"'; } ?>>about</a></li>
						<li><a href="<?php echo site_url( '/roster', 'http' ); ?>" <?php if(is_post_type_archive("roster")){ echo 'class="current"'; } ?>>roster</a></li>
						<li><a href="<?php echo site_url( '/connect', 'http' ); ?>" <?php if(is_page("connect")){ echo 'class="current"'; } ?>>connect</a></li>
					</ul>
				</nav>

				<div class="menu-toggle">
					<span class="spin">
						<button class="spinner">
							<span class="one"></span>
							<span class="two"></span>
						</button>
					</span>
				</div>

				<footer class="footer set-back">
					<p><small>&copy; <?php echo date('Y'); ?> babienko architects pllc. Design &amp; development by <a href="http://www.ericandren.com" target="_blank">Oz — Eric Andren</a>.</small></p>
				</footer>

			</section>
