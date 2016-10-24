<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" >
<meta name="viewport" id="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />

<?php if ( ! function_exists( '_wp_render_title_tag' ) ) { function theme_slug_render_title() { ?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php } add_action( 'wp_head', 'theme_slug_render_title' ); } ?>

<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { if(get_option('mvp_favicon')) { ?><link rel="shortcut icon" href="<?php echo esc_url(get_option('mvp_favicon')); ?>" /><?php } } ?>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'mvp-post-thumb' ); ?>
<meta property="og:image" content="<?php echo esc_url( $thumb['0'] ); ?>" />
<meta name="twitter:image" content="<?php echo esc_url( $thumb['0'] ); ?>" />
<?php } ?>

<?php if ( is_single() ) { ?>
<meta property="og:type" content="article" />
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
<meta name="twitter:card" content="summary">
<meta name="twitter:url" content="<?php the_permalink() ?>">
<meta name="twitter:title" content="<?php the_title(); ?>">
<meta name="twitter:description" content="<?php echo strip_tags(get_the_excerpt()); ?>">
<?php endwhile; endif; ?>
<?php } else { ?>
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<?php } ?>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>

</head>

<body <?php body_class(''); ?>>
	<div id="site" class="left relative">
		<div id="site-wrap" class="left relative">
			<?php if(get_option('mvp_wall_ad')) { ?>
				<div id="wallpaper">
					<?php if(get_option('mvp_wall_url')) { ?>
						<a href="<?php echo esc_url(get_option('mvp_wall_url')); ?>" class="wallpaper-link" target="_blank"></a>
					<?php } ?>
				</div><!--wallpaper-->
			<?php } ?>
			<?php get_template_part('fly-menu'); ?>
			<div id="head-main-wrap" class="left relative">
				<div id="head-main-top" class="left relative">
					<?php if ( post_type_exists( 'scoreboard' ) ) { ?>
						<?php $mvp_show_scoreboard = get_option('mvp_show_scoreboard'); if ($mvp_show_scoreboard == "true" && ! is_404()) { ?>
							<?php get_template_part('scoreboard'); ?>
						<?php } ?>
					<?php } ?>
					<?php $mvp_logo_loc = get_option('mvp_logo_loc'); if($mvp_logo_loc == 'Left of leaderboard') { ?>
						<div class="leader-wrap-out">
							<div class="leader-wrap-in">
								<div id="logo-leader-wrap" class="left relative">
									<div class="logo-leader-out">
										<div class="logo-left-wrap left relative">
											<?php if(get_option('mvp_logo')) { ?>
												<a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img itemprop="logo" src="<?php echo esc_url(get_option('mvp_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
											<?php } else { ?>
												<a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-leader.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
											<?php } ?>
											<?php if ( is_home() || is_front_page() ) { ?>
												<h1 class="mvp-logo-title"><?php bloginfo( 'name' ); ?></h1>
											<?php } else { ?>
												<h2 class="mvp-logo-title"><?php bloginfo( 'name' ); ?></h2>
											<?php } ?>
										</div><!--logo-left-wrap-->
										<div class="logo-leader-in">
											<div class="leader-right-wrap left relative">
												<?php $ad970 = get_option('mvp_header_leader'); if ($ad970) { echo html_entity_decode($ad970); } ?>
											</div><!--leader-right-wrap-->
										</div><!--logo-leader-in-->
									</div><!--logo-leader-out-->
								</div><!--logo-leader-wrap-->
							</div><!--leader-wrap-in-->
						</div><!--lead-wrap-out-->
					<?php } else { ?>
						<?php $mvp_leader_loc = get_option('mvp_leader_loc'); if($mvp_leader_loc == 'Above Navigation') { ?>
						<?php if(get_option('mvp_header_leader')) { ?>
							<div class="leader-wrap-out">
								<div class="leader-wrap-in">
									<div id="leader-wrap" class="left relative">
										<?php $ad970 = get_option('mvp_header_leader'); if ($ad970) { echo html_entity_decode($ad970); } ?>
									</div><!--leader-wrap-->
								</div><!--leader-wrap-in-->
							</div><!--lead-wrap-out-->
						<?php } ?>
						<?php } ?>
					<?php } ?>
					<?php $mvp_logo_loc = get_option('mvp_logo_loc'); if($mvp_logo_loc == 'Wide below leaderboard') { ?>
						<div class="logo-wide-wrap left relative">
							<?php if(get_option('mvp_logo')) { ?>
								<a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img itemprop="logo" src="<?php echo esc_url(get_option('mvp_logo')); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
							<?php } else { ?>
								<a itemprop="url" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo-large.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
							<?php } ?>
							<?php if ( is_home() || is_front_page() ) { ?>
								<h1 class="mvp-logo-title"><?php bloginfo( 'name' ); ?></h1>
							<?php } else { ?>
								<h2 class="mvp-logo-title"><?php bloginfo( 'name' ); ?></h2>
							<?php } ?>
						</div><!--logo-wide-wrap-->
					<?php } ?>
				</div><!--head-main-top-->
				<div id="main-nav-wrap">
					<div class="nav-out">
						<div class="nav-in">
							<div id="main-nav-cont" class="left" itemscope itemtype="http://schema.org/Organization">
								<div class="nav-logo-out">
									<div class="desktop thrillist-logo-wrap">
										<a href="/" class="ga-trigger" data-ga-category="Nav" data-ga-action="TL Logo" data-ga-label="/" title="Best Restaurants &amp; Bars - Places to Eat &amp; Drink - Thrillist">
										<span class="thrillist-logo desktop-logo">
											<span class="logo-text">Thrillist</span>
										</span>
										</a>
									</div>
									<div class="mobile thrillist-logo-mobile">
										<a href="/" class="ga-trigger" data-ga-category="Logo" data-ga-action="Click">
											<span class="visually-hidden">Thrillist</span>
										</a>
									</div>

									<div class="nav-logo-in">
										<div class="nav-menu-out">
											<div class="nav-menu-in">
												<nav class="main-menu-wrap left">
													<?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
												</nav>
											</div><!--nav-menu-in-->
											<?php get_search_form(); ?>
										</div><!--nav-menu-out-->
									</div><!--nav-logo-in-->
								</div><!--nav-logo-out-->
							</div><!--main-nav-cont-->
						</div><!--nav-in-->
					</div><!--nav-out-->
				</div><!--main-nav-wrap-->



