<?php get_header('category'); ?>

<div class="section-subnav clearfix" id="section-subnav">
        <h3>
            <a href="<?php get_category_link($category_id);?>" class="ga-trigger"
            data-ga-category="Subnav"
            data-ga-action="food-and-drink"
            data-ga-label="landing" data-ga-value="0">
                    <?php single_cat_title(); ?></a>
        </h3>
</div>

</div><!--head-main-wrap-->
<?php if ( is_page_template('page-home.php') ) { ?>
	<div class="col-tabs-wrap left relative">
		<ul class="col-tabs">
			<li class="feat-col-tab">
				<a href="#tab-col1"><?php _e( 'Featured', 'mvp-text' ); ?></a>
			</li>
			<li class="latest-col-tab non-feat-tab">
				<a href="#tab-col2"><?php _e( 'Latest', 'mvp-text' ); ?></a>
			</li>
			<li class="pop-col-tab non-feat-tab">
				<a href="#tab-col3"><?php _e( 'Popular', 'mvp-text' ); ?></a>
			</li>
		</ul>
	</div><!--col-tabs-wrap-->
<?php } ?>
<?php if (is_single()) { ?>
	<div id="body-main-wrap" class="left relative" itemscope itemtype="http://schema.org/NewsArticle">
	<meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="<?php the_permalink(); ?>"/>
<?php } else { ?>
	<div id="body-main-wrap" class="left relative">
<?php } ?>
<?php get_template_part('featured'); ?>
<?php if (is_single()) { ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php global $post; $mvp_post_temp = get_post_meta($post->ID, "mvp_post_template", true); if ( $mvp_post_temp == "temp5" || $mvp_post_temp == "temp6" ) { ?>
			<?php $mvp_featured_img = get_option('mvp_featured_img'); if ($mvp_featured_img == "true") { ?>
				<?php global $post; $mvp_show_hide = get_post_meta($post->ID, "mvp_featured_image", true); if ($mvp_show_hide !== "hide") { ?>
					<div id="post-wide-wrap" class="left relative">
						<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
							<div class="post-wide-img1 left relative" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
								<?php the_post_thumbnail(''); ?>
								<?php $thumb_id = get_post_thumbnail_id(); $mvp_thumb_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); $mvp_thumb_url = $mvp_thumb_array[0]; $mvp_thumb_width = $mvp_thumb_array[1]; $mvp_thumb_height = $mvp_thumb_array[2]; ?>
								<meta itemprop="url" content="<?php echo $mvp_thumb_url ?>">
								<meta itemprop="width" content="<?php echo $mvp_thumb_width ?>">
								<meta itemprop="height" content="<?php echo $mvp_thumb_height ?>">
								<div class="post-wide-text1">
									<a class="post-cat-link" href="<?php $category = get_the_category(); $category_id = get_cat_ID( $category[0]->cat_name ); $category_link = get_category_link( $category_id ); echo esc_url( $category_link ); ?>"><span class="feat-cat"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span></a>
									<h1 class="post-title-wide entry-title " itemprop="headline"><?php the_title(); ?></h1>
									<?php if ( has_excerpt() ) { ?>
										<span class="post-excerpt left"><?php the_excerpt(); ?></span>
									<?php } ?>
									<?php global $post; if(get_post_meta($post->ID, "mvp_photo_credit", true)): ?>
										<span class="feat-caption"><?php echo wp_kses_post(get_post_meta($post->ID, "mvp_photo_credit", true)); ?></span>
									<?php endif; ?>
								</div><!--post-wide-text1-->
							</div><!--post-wide-img1-->
						<?php } ?>
					</div><!--post-wide-wrap-->
				<?php } ?>
			<?php } ?>
		<?php } else if ( $mvp_post_temp == "temp7" || $mvp_post_temp == "temp8" ) { ?>
			<?php $mvp_featured_img = get_option('mvp_featured_img'); if ($mvp_featured_img == "true") { ?>
				<?php global $post; $mvp_show_hide = get_post_meta($post->ID, "mvp_featured_image", true); if ($mvp_show_hide !== "hide") { ?>
					<?php if(get_post_meta($post->ID, "mvp_video_embed", true)) { ?>
						<div id="post-wide-wrap" class="left relative">
							<div id="post-wide-video" class="relative">
								<div id="video-embed" class="left relative sec-feat" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
									<?php echo html_entity_decode(get_post_meta($post->ID, "mvp_video_embed", true)); ?>
									<?php $thumb_id = get_post_thumbnail_id(); $mvp_thumb_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true); $mvp_thumb_url = $mvp_thumb_array[0]; $mvp_thumb_width = $mvp_thumb_array[1]; $mvp_thumb_height = $mvp_thumb_array[2]; ?>
									<meta itemprop="url" content="<?php echo $mvp_thumb_url ?>">
									<meta itemprop="width" content="<?php echo $mvp_thumb_width ?>">
									<meta itemprop="height" content="<?php echo $mvp_thumb_height ?>">
								</div><!--video-embed-->
							</div><!--post-wide-video-->
						</div><!--post-wide-wrap-->
					<?php } ?>
				<?php } ?>
			<?php } ?>
		<?php } ?>
	<?php endwhile; endif; ?>
<?php } ?>
<div class="body-main-out relative">
<div class="body-main-in">
<div id="body-main-cont" class="left relative">
<?php $mvp_leader_loc = get_option('mvp_leader_loc'); if($mvp_leader_loc == 'Above Navigation') { } else { ?>
<?php if(get_option('mvp_header_leader')) { ?>
	<div id="leader-wrap" class="left relative">
		<?php $ad970 = get_option('mvp_header_leader'); if ($ad970) { echo html_entity_decode($ad970); } ?>
	</div><!--leader-wrap-->
<?php } ?>
<?php } ?>
<br/><br/><br/>

<?php $mvp_featured_cat = get_option('mvp_featured_cat'); if ($mvp_featured_cat == "true") { if ( $paged < 2 ) { ?>
	<?php $mvp_feat_cat_layout = get_option('mvp_feat_cat_layout'); if( $mvp_feat_cat_layout == "Featured 2" ) { ?>
		<div id="feat-top-wrap" class="left relative">
			<div id="home-feat-wrap" class="left relative">

                <div class="hp-stack-item--large__title-container landing-section__title-container section-travel">
                    <div class="vertical-circle-icon icon-lightning-bolt"></div>

                    <span class="hp-module-title stack-title stack-title__font">
                        Latest  in Travel            </span>
                </div>

				<?php global $do_not_duplicate; global $post; $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'cat' => $category_id, 'posts_per_page' => '1'  )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
					<div class="home-feat-main left relative">
						<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div id="home-feat-img" class="left relative">
							<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
								<?php the_post_thumbnail('', array( 'class' => 'reg-img' )); ?>
								<?php the_post_thumbnail('mvp-medium-thumb', array( 'class' => 'mob-img' )); ?>
							<?php } ?>
						</div><!--home-feat-img-->
						<div id="home-feat-text">
							<span class="feat-cat"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span>
							<?php if(get_post_meta($post->ID, "mvp_featured_headline", true)): ?>
								<h2><?php echo esc_html(get_post_meta($post->ID, "mvp_featured_headline", true)); ?></h2>
								<p><?php the_title(); ?></p>
							<?php else: ?>
								<h2 class="stand-title"><?php the_title(); ?></h2>
							<?php endif; ?>
						</div><!--home-feat-text-->
						<?php $post_views = get_post_meta($post->ID, "post_views_count", true); if ( $post_views >= 1) { ?>
							<div class="feat-info-wrap">
								<div class="feat-info-views">
									<i class="fa fa-eye fa-2"></i> <span class="feat-info-text"><?php mvp_post_views(); ?></span>
								</div><!--feat-info-views-->
								<?php $disqus_id = get_option('mvp_disqus_id'); if ( ! $disqus_id ) { if (get_comments_number()==0) { } else { ?>
									<div class="feat-info-comm">
										<i class="fa fa-comment"></i> <span class="feat-info-text"><?php comments_number( '0', '1', '%' ); ?></span>
									</div><!--feat-info-comm-->
								<?php } } ?>
							</div><!--feat-info-wrap-->
						<?php } ?>
						<?php if ( has_post_format( 'video' )) { ?>
							<div class="feat-vid-but">
								<i class="fa fa-play fa-3"></i>
							</div><!--feat-vid-but-->
						<?php } ?>
						</a>
					</div><!--home-feat-main-->
				<?php } endwhile; wp_reset_postdata(); ?>
			</div><!--home-feat-wrap-->
		</div><!--feat-top-wrap-->
	<?php } else if( $mvp_feat_cat_layout == "Featured 4" ) { ?>
		<div id="feat-top-wrap" class="left relative">
			<div class="feat-top2-left-wrap left relative">
				<?php global $do_not_duplicate; global $post; $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'cat' => $category_id, 'posts_per_page' => '1'  )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
					<div class="feat-top2-left left relative">
						<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div class="feat-top2-left-img left relative">
							<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
								<?php the_post_thumbnail('mvp-post-thumb', array( 'class' => 'reg-img' )); ?>
								<?php the_post_thumbnail('mvp-medium-thumb', array( 'class' => 'mob-img' )); ?>
							<?php } ?>
						</div><!--feat-top-left-img-->
						<div class="feat-top2-left-text">
							<span class="feat-cat"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span>
							<?php if(get_post_meta($post->ID, "mvp_featured_headline", true)): ?>
								<h2><?php echo esc_html(get_post_meta($post->ID, "mvp_featured_headline", true)); ?></h2>
								<p><?php the_title(); ?></p>
							<?php else: ?>
								<h2 class="stand-title"><?php the_title(); ?></h2>
							<?php endif; ?>
						</div><!--feat-top2-left-text-->
						<?php $post_views = get_post_meta($post->ID, "post_views_count", true); if ( $post_views >= 1) { ?>
							<div class="feat-info-wrap">
								<div class="feat-info-views">
									<i class="fa fa-eye fa-2"></i> <span class="feat-info-text"><?php mvp_post_views(); ?></span>
								</div><!--feat-info-views-->
								<?php $disqus_id = get_option('mvp_disqus_id'); if ( ! $disqus_id ) { if (get_comments_number()==0) { } else { ?>
									<div class="feat-info-comm">
										<i class="fa fa-comment"></i> <span class="feat-info-text"><?php comments_number( '0', '1', '%' ); ?></span>
									</div><!--feat-info-comm-->
								<?php } } ?>
							</div><!--feat-info-wrap-->
						<?php } ?>
						</a>
					</div><!--feat-top2-left-->
				<?php } endwhile; wp_reset_postdata(); ?>
			</div><!--feat-top2-left-wrap-->
			<div class="feat-top2-right-wrap left relative">
				<?php if (isset($do_not_duplicate)) { $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'post__not_in' => $do_not_duplicate, 'cat' => $category_id, 'posts_per_page' => '3'  )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
					<div class="feat-top2-right left relative">
						<a href="<?php the_permalink(); ?>" rel="bookmark">
						<div class="feat-top2-right-img left relative">
							<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
								<?php the_post_thumbnail('mvp-medium-thumb', array( 'class' => 'feat-top2-small' )); ?>
								<?php the_post_thumbnail('mvp-post-thumb', array( 'class' => 'feat-top2-big' )); ?>
							<?php } ?>
						</div><!--feat-top2-right-img-->
						<div class="feat-top2-right-text">
							<span class="feat-cat"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span>
							<h2><?php the_title(); ?></h2>
						</div><!--feat-top2-right-text-->
						<?php $post_views = get_post_meta($post->ID, "post_views_count", true); if ( $post_views >= 1) { ?>
							<div class="feat-info-wrap">
								<div class="feat-info-views">
									<i class="fa fa-eye fa-2"></i> <span class="feat-info-text"><?php mvp_post_views(); ?></span>
								</div><!--feat-info-views-->
								<?php $disqus_id = get_option('mvp_disqus_id'); if ( ! $disqus_id ) { if (get_comments_number()==0) { } else { ?>
									<div class="feat-info-comm">
										<i class="fa fa-comment"></i> <span class="feat-info-text"><?php comments_number( '0', '1', '%' ); ?></span>
									</div><!--feat-info-comm-->
								<?php } } ?>
							</div><!--feat-info-wrap-->
						<?php } ?>
						</a>
					</div><!--feat-top2-right-->
				<?php } endwhile; wp_reset_postdata(); } ?>
			</div><!--feat-top2-right-wrap-->
		</div><!--feat-top-wrap-->
	<?php } else if( $mvp_feat_cat_layout == "Featured 6" ) { ?>
		<div id="feat-top-wrap" class="left relative">
			<?php global $do_not_duplicate; global $post; $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'cat' => $category_id, 'posts_per_page' => '1'  )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
				<div id="feat-wide-main" class="left relative">
					<a href="<?php the_permalink(); ?>" rel="bookmark">
					<div class="feat-wide1-img left relative">
						<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
							<?php the_post_thumbnail('', array( 'class' => 'reg-img' )); ?>
							<?php the_post_thumbnail('mvp-medium-thumb', array( 'class' => 'mob-img' )); ?>
						<?php } ?>
					</div><!--feat-wide1-img-->
					<div class="feat-wide4-text">
						<span class="feat-cat"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span>
						<?php if(get_post_meta($post->ID, "mvp_featured_headline", true)): ?>
							<h2><?php echo esc_html(get_post_meta($post->ID, "mvp_featured_headline", true)); ?></h2>
							<p><?php the_title(); ?></p>
						<?php else: ?>
							<h2 class="stand-title"><?php the_title(); ?></h2>
						<?php endif; wp_reset_postdata(); ?>
					</div><!--feat-wide4-text-->
					</a>
				</div><!--feat-wide-main-->
			<?php } endwhile; ?>
			<div id="feat-wide-sub">
				<ul class="feat-wide-sub-list left relative">
					<?php if (isset($do_not_duplicate)) { $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'post__not_in' => $do_not_duplicate, 'cat' => $category_id, 'posts_per_page' => '4'  )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
						<li>
							<a href="<?php the_permalink(); ?>" rel="bookmark">
							<div class="feat-wide-sub-text left relative">
								<span class="feat-cat"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span>
								<h2><?php the_title(); ?></h2>
							</div><!--feat-wide-sub-text-->
							</a>
						</li>
					<?php } endwhile; wp_reset_postdata(); } ?>
				</ul>
			</div><!--feat-wide-sub-->
		</div><!--feat-top-wrap-->
	<?php } else if( $mvp_feat_cat_layout == "Featured 8" ) { ?>
		<div id="feat-top-wrap" class="left relative">
			<?php global $do_not_duplicate; global $post; $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'cat' => $category_id, 'posts_per_page' => '4'  )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
				<div class="feat-wide5-main left relative">
					<a href="<?php the_permalink(); ?>" rel="bookmark">
					<div class="feat-wide5-img left relative">
						<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
							<?php the_post_thumbnail('', array( 'class' => 'reg-img' )); ?>
							<?php the_post_thumbnail('mvp-medium-thumb', array( 'class' => 'mob-img' )); ?>
						<?php } ?>
					</div><!--feat-wide5-img-->
					<div class="feat-wide5-text">
						<span class="feat-cat"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></span>
						<h2><?php the_title(); ?></h2>
					</div><!--feat-wide5-text-->
					<?php $post_views = get_post_meta($post->ID, "post_views_count", true); if ( $post_views >= 1) { ?>
						<div class="feat-info-wrap">
							<div class="feat-info-views">
								<i class="fa fa-eye fa-2"></i> <span class="feat-info-text"><?php mvp_post_views(); ?></span>
							</div><!--feat-info-views-->
							<?php $disqus_id = get_option('mvp_disqus_id'); if ( ! $disqus_id ) { if (get_comments_number()==0) { } else { ?>
								<div class="feat-info-comm">
									<i class="fa fa-comment"></i> <span class="feat-info-text"><?php comments_number( '0', '1', '%' ); ?></span>
								</div><!--feat-info-comm-->
							<?php } } ?>
						</div><!--feat-info-wrap-->
					<?php } ?>
					</a>
				</div><!--feat-wide5-main-->
			<?php } endwhile; wp_reset_postdata(); ?>
		</div><!--feat-top-wrap-->
	<?php } ?>
<?php } } ?>
<div id="home-main-wrap" class="left relative">
	<div class="home-wrap-out1">
		<div class="home-wrap-in1">
			<div id="home-left-wrap" class="left relative">
				<div id="home-left-col" class="relative">
					<?php $mvp_featured_cat = get_option('mvp_featured_cat'); if ($mvp_featured_cat == "true") { if ( $paged < 2 ) { ?>
						<?php $mvp_feat_cat_layout = get_option('mvp_feat_cat_layout'); if( $mvp_feat_cat_layout == "Featured 1" ) { ?>
						<div id="home-feat-wrap" class="left relative">
							<?php global $do_not_duplicate; global $post; $current_category = single_cat_title("", false); $category_id = get_cat_ID($current_category); $cat_posts = new WP_Query(array( 'cat' => $category_id, 'posts_per_page' => '1'  )); while($cat_posts->have_posts()) : $cat_posts->the_post(); $do_not_duplicate[] = $post->ID; if (isset($do_not_duplicate)) { ?>
								<div class="home-feat-main left relative">
									<a href="<?php the_permalink(); ?>" rel="bookmark">
									<div id="home-feat-img" class="left relative">
										<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
											<?php the_post_thumbnail('mvp-post-thumb', array( 'class' => 'reg-img' )); ?>
											<?php the_post_thumbnail('mvp-medium-thumb', array( 'class' => 'mob-img' )); ?>
										<?php } ?>
									</div><!--home-feat-img-->
									<div id="home-feat-text">
										<?php if(get_post_meta($post->ID, "mvp_featured_headline", true)): ?>
											<h2><?php echo esc_html(get_post_meta($post->ID, "mvp_featured_headline", true)); ?></h2>
											<p><?php the_title(); ?></p>
										<?php else: ?>
											<h2 class="stand-title"><?php the_title(); ?></h2>
										<?php endif; ?>
									</div><!--home-feat-text-->
									<?php $post_views = get_post_meta($post->ID, "post_views_count", true); if ( $post_views >= 1) { ?>
									<div class="feat-info-wrap">
										<div class="feat-info-views">
											<i class="fa fa-eye fa-2"></i> <span class="feat-info-text"><?php mvp_post_views(); ?></span>
										</div><!--feat-info-views-->
										<?php $disqus_id = get_option('mvp_disqus_id'); if ( ! $disqus_id ) { if (get_comments_number()==0) { } else { ?>
											<div class="feat-info-comm">
												<i class="fa fa-comment"></i> <span class="feat-info-text"><?php comments_number( '0', '1', '%' ); ?></span>
											</div><!--feat-info-comm-->
										<?php } } ?>
									</div><!--feat-info-wrap-->
									<?php } ?>
									<?php if ( has_post_format( 'video' )) { ?>
										<div class="feat-vid-but">
											<i class="fa fa-play fa-3"></i>
										</div><!--feat-vid-but-->
									<?php } ?>
									</a>
								</div><!--home-feat-main-->
							<?php } endwhile; wp_reset_postdata(); ?>
						</div><!--home-feat-wrap-->
						<?php } ?>
					<?php } } ?>
					<div id="home-mid-wrap" class="left relative">
						<div id="archive-list-wrap" class="left relative">
							<?php if(get_option('mvp_arch_layout') == 'Column' ) { ?>
								<ul class="archive-col-list left relative infinite-content">
							<?php } else { ?>
								<ul class="archive-list left relative infinite-content">
							<?php } ?>
								<?php global $do_not_duplicate; if (isset($do_not_duplicate)) { ?>
									<?php if (have_posts()) : while (have_posts()) : the_post(); if (in_array($post->ID, $do_not_duplicate)) continue; ?>
											<li class="infinite-post">
												<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
													<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
													<div class="archive-list-out">
														<div class="archive-list-img left relative">
															<?php the_post_thumbnail('mvp-medium-thumb', array( 'class' => 'reg-img' )); ?>
															<?php the_post_thumbnail('mvp-small-thumb', array( 'class' => 'mob-img' )); ?>
															<?php $post_views = get_post_meta($post->ID, "post_views_count", true); if ( $post_views >= 1) { ?>
																<div class="feat-info-wrap">
																	<div class="feat-info-views">
																		<i class="fa fa-eye fa-2"></i> <span class="feat-info-text"><?php mvp_post_views(); ?></span>
																	</div><!--feat-info-views-->
										<?php $disqus_id = get_option('mvp_disqus_id'); if ( ! $disqus_id ) { if (get_comments_number()==0) { } else { ?>
											<div class="feat-info-comm">
												<i class="fa fa-comment"></i> <span class="feat-info-text"><?php comments_number( '0', '1', '%' ); ?></span>
											</div><!--feat-info-comm-->
										<?php } } ?>
																</div><!--feat-info-wrap-->
															<?php } ?>
															<?php if ( has_post_format( 'video' )) { ?>
																<div class="feat-vid-but">
																	<i class="fa fa-play fa-3"></i>
																</div><!--feat-vid-but-->
															<?php } ?>
														</div><!--archive-list-img-->
														<div class="archive-list-in">
															<div class="archive-list-text left relative">
																<h2><?php the_title(); ?></h2>
																<p><?php echo wp_trim_words( get_the_excerpt(), 22, '...' ); ?></p>
															</div><!--archive-list-text-->
														</div><!--archive-list-in-->
													</div><!--archive-list-out-->
													</a>
												<?php } else { ?>
													<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
													<div class="archive-list-text left relative">
														<h2><?php the_title(); ?></h2>
														<p><?php echo wp_trim_words( get_the_excerpt(), 22, '...' ); ?></p>
													</div><!--archive-list-text-->
													</a>
												<?php } ?>
											</li>
									<?php endwhile; endif; ?>
								<?php } else { ?>
									<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
										<li class="infinite-post">
											<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
											<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
											<div class="archive-list-out">
												<div class="archive-list-img left relative">
													<?php the_post_thumbnail('mvp-medium-thumb', array( 'class' => 'reg-img' )); ?>
													<?php the_post_thumbnail('mvp-small-thumb', array( 'class' => 'mob-img' )); ?>
													<?php $post_views = get_post_meta($post->ID, "post_views_count", true); if ( $post_views >= 1) { ?>
														<div class="feat-info-wrap">
															<div class="feat-info-views">
																<i class="fa fa-eye fa-2"></i> <span class="feat-info-text"><?php mvp_post_views(); ?></span>
															</div><!--feat-info-views-->
										<?php $disqus_id = get_option('mvp_disqus_id'); if ( ! $disqus_id ) { if (get_comments_number()==0) { } else { ?>
											<div class="feat-info-comm">
												<i class="fa fa-comment"></i> <span class="feat-info-text"><?php comments_number( '0', '1', '%' ); ?></span>
											</div><!--feat-info-comm-->
										<?php } } ?>
														</div><!--feat-info-wrap-->
													<?php } ?>
													<?php if ( has_post_format( 'video' )) { ?>
														<div class="feat-vid-but">
															<i class="fa fa-play fa-3"></i>
														</div><!--feat-vid-but-->
													<?php } ?>
												</div><!--archive-list-img-->
												<div class="archive-list-in">
													<div class="archive-list-text left relative">
														<h2><?php the_title(); ?></h2>
														<p><?php echo wp_trim_words( get_the_excerpt(), 22, '...' ); ?></p>
													</div><!--archive-list-text-->
												</div><!--archive-list-in-->
											</div><!--archive-list-out-->
											</a>
											<?php } else { ?>
												<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
												<div class="archive-list-text left relative">
													<h2><?php the_title(); ?></h2>
													<p><?php echo wp_trim_words( get_the_excerpt(), 22, '...' ); ?></p>
												</div><!--archive-list-text-->
												</a>
											<?php } ?>
										</li>
									<?php endwhile; endif; ?>
								<?php } ?>
							</ul>
							<?php $mvp_infinite_scroll = get_option('mvp_infinite_scroll'); if ($mvp_infinite_scroll == "true") { if (isset($mvp_infinite_scroll)) { ?>
								<a href="#" class="inf-more-but"><?php _e( 'More Posts', 'mvp-text' ); ?></a>
							<?php } } ?>
							<div class="nav-links">
								<?php if (function_exists("pagination")) { pagination($wp_query->max_num_pages); } ?>
							</div><!--nav-links-->
						</div><!--archive-list-wrap-->
					</div><!--home-mid-wrap-->
				</div><!--home-left-col-->
			</div><!--home-left-wrap-->
		</div><!--home-wrap-in1-->

	</div><!--home-wrap-out1-->
</div><!--home-main-wrap-->
<?php get_footer(); ?>