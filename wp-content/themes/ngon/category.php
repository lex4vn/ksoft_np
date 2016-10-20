<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 */


$popularpost = new WP_Query( array( 'posts_per_page' => 8, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
$i = 0;
$categories = get_the_category();
$is_open_row = false;
$is_close_row = false;
while ( $popularpost->have_posts() ) : $popularpost->the_post();
    if ($i == 0) { ?>
        <div class="row">
            <div class="col-lg-12 landing-section">
                <div class="hp-stack-item--large__title-container landing-section__title-container section-travel ?&gt;">
                    <div class="vertical-circle-icon icon-section_popular"></div>

        <span class="hp-module-title stack-title stack-title__font">
            Xu hướng <?php if(!empty($categories)) {echo esc_html($categories[0]->name);} ?>        </span>
                </div>
                <?php
                do_action('cherry_entry_before');

                do_action('cherry_entry');

                do_action('cherry_entry_after');
                ?>
            </div>
        </div>
    <?php } else {
        if ($i > 0 && !$is_open_row) { ?>
            <div class="row">
            <?php $is_open_row = true;
        } ?>
        <div class="col-lg-3 hp-stack-item">
            <?php
            do_action('cherry_entry_before');

            do_action('cherry_entry');

            do_action('cherry_entry_after');
            ?>
        </div>
        <?php  if ($i % 4 == 0 && $is_open_row) { ?>
            </div>
            <?php $is_open_row = false;
        }
    }
    $i++;

endwhile;



if (have_posts()) :
    $i = 0;
    $categories = get_the_category();
    $is_open_row = false;
    $is_close_row = false;
    while (have_posts()) : the_post();
        if ($i == 0) { ?>
            <div class="row">
                <div class="col-lg-12 landing-section">
                    <div class="hp-stack-item--large__title-container landing-section__title-container section-travel ?&gt;">
                        <div class="vertical-circle-icon icon-lightning-bolt"></div>

        <span class="hp-module-title stack-title stack-title__font">
            Mới nhât <?php if(!empty($categories)) {echo esc_html($categories[0]->name);} ?>        </span>
                    </div>
                    <?php
                    do_action('cherry_entry_before');

                    do_action('cherry_entry');

                    do_action('cherry_entry_after');
                    ?>
                </div>
            </div>
        <?php } else {
            if ($i > 0 && !$is_open_row) { ?>
                <div class="row">
                <?php $is_open_row = true;
            } ?>
            <div class="col-lg-3 hp-stack-item">
                <?php
                    do_action('cherry_entry_before');

                    do_action('cherry_entry');

                    do_action('cherry_entry_after');
                ?>
            </div>
            <?php  if ($i % 4 == 0 && $is_open_row) { ?>
                </div>
            <?php $is_open_row = false;
                }
        }
        $i++;
    endwhile;

endif; ?>

