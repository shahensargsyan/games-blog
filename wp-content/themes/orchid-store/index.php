<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Orchid_Store
 */

get_header();
?>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext"
          rel="stylesheet" type="text/css">

    <div class="inner-page-wrap archive-page-wrap blog__page">
        <?php
        /**
         * Hook - orchid_store_title_breadcrumb.
         *
         * @hooked orchid_store_title_breadcrumb_action - 10
         */
        do_action('orchid_store_title_breadcrumb');
        ?>
        <div class="inner-entry">
            <div class="__os-container__">
                <div class="os-row">
                    <div class="<?php orchid_store_content_container_class(); ?>">
                        <div id="primary" class="content-area">
                            <div class="blog_top_div">
                                <div class="one_post">
                                    <?php
                                    $latest = get_posts(array('numberposts' => 1));
                                    ?>
                                    <a href="<?php echo get_the_permalink($latest[0]->ID) ?>">
                                        <img class="blog_post_big_img" src="<?php echo get_the_post_thumbnail_url($latest[0]->ID) ?>" alt="">
                                    </a>

                                    <div class="post_info_div">
                                        <div class="post_date">
                                            <p><?php echo get_the_date('j M, Y');?></p>
                                        </div>
                                        <div class="post_comment_number">
                                            <img src="http://games-blog.loc/wp-content/uploads/2021/07/chat.png">
                                            <p><?php echo get_comments_number($latest[0]->ID) ?></p>
                                        </div>
                                    </div>
                                    <a href="<?php echo get_the_permalink($latest[0]->ID) ?>">
                                        <h1 class="blog_title"><?php echo get_the_title($latest[0]->ID) ?></h1>
                                    </a>
                                    <p class="blog_description"><?php echo get_the_content($latest[0]->ID) ?></p>
                                </div>
                                <div class="blog_sidebar">
                                    <?php get_sidebar(); ?>
                                </div>

                            </div>

                            <div id="main" class="site-main">
                                <div class="archive-entry blog_posts_div">
                                    <?php
                                    if (have_posts()) :

                                        if (orchid_store_get_option('display_page_header') == false) {

                                            ?>

                                            <h1 class="entry-title page-title"><?php single_post_title(); ?></h1>
                                            <?php
                                        }

                                        /* Start the Loop */
                                        while (have_posts()) :


                                            the_post();/*
										 * Include the Post-Type-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
										 */;
                                            if (get_the_ID() != $latest[0]->ID) {
                                                get_template_part('template-parts/content', get_post_type());
                                            }


                                        endwhile;

                                        /**
                                         * Hook - orchid_store_pagination.
                                         *
                                         * @hooked orchid_store_pagination_action - 10
                                         */
                                        do_action('orchid_store_pagination');

                                    else :
                                        get_template_part('template-parts/content', 'none');

                                    endif;
                                    ?>
                                </div><!-- .archive-entry -->
                            </div><!-- .main -->
                        </div><!-- .primary -->
                    </div><!-- .col -->

                </div><!-- .row -->
            </div><!-- .__os-container__ -->
        </div><!-- .inner-entry -->
    </div><!-- .inner-page-wrap -->
<?php
get_footer();
