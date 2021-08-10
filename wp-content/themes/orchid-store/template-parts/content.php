<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Orchid_Store
 */
$orchid_store_show_featured_image   = '';
$orchid_store_show_categories       = '';
$orchid_store_show_excerpt          = '';
$orchid_store_show_author           = '';
$orchid_store_show_date             = '';

if( is_archive() ) {

    $orchid_store_show_featured_image   = orchid_store_get_option( 'archive_featured_image' );
    $orchid_store_show_categories       = orchid_store_get_option( 'archive_display_cats' );
    $orchid_store_show_excerpt          = orchid_store_get_option( 'archive_display_excerpt' );
    $orchid_store_show_author           = orchid_store_get_option( 'archive_display_author' );
    $orchid_store_show_date             = orchid_store_get_option( 'archive_display_date' );
} else {

    $orchid_store_show_featured_image   = orchid_store_get_option( 'blog_featured_image' );
    $orchid_store_show_categories       = orchid_store_get_option( 'blog_display_cats' );
    $orchid_store_show_excerpt          = orchid_store_get_option( 'blog_display_excerpt' );
    $orchid_store_show_author           = orchid_store_get_option( 'blog_display_author' );
    $orchid_store_show_date             = orchid_store_get_option( 'blog_display_date' );
}
?>

<article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="">

            <div class="article_img">
                <div class="thumb">
                    <a href="<?php the_permalink(); ?>">
                    	<?php
                    	the_post_thumbnail( 'orchid-store-thumbnail-extra-large', array(
    						'alt' => the_title_attribute( array(
    							'echo' => false,
    						) ),
    					) );
    					?>
                    </a>
                        <div class="post_info_div">
                            <div class="post_date">
                                <p><?php if( $orchid_store_show_date == true ) {
                                        /**
                                         * Hook - orchid_store_post_date.
                                         *
                                         * @hooked orchid_store_post_date_action - 10
                                         */
                                        do_action( 'orchid_store_post_date' );
                                    }?></p>
                            </div>
                            <div class="post_comment_number">
                                <img src="http://games-blog.loc/wp-content/uploads/2021/07/chat.png">
                                <p><?php
                                    $comment_count  = wp_count_comments( get_the_ID());
                                    echo $comment_count->approved ?> </p>
                            </div>
                        </div>


                </div><!-- .thumb.imghover -->
            </div><!-- .os-col.thumb-col -->

        <div class="blog_post__title">
            <div class="box">
                <div class="title">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div><!-- .title -->
                <?php
                if( $orchid_store_show_excerpt == true ) {
                    /**
                    * Hook - orchid_store_excerpt.
                    *
                    * @hooked orchid_store_excerpt_action - 10
                    */
                    do_action( 'orchid_store_excerpt' );
                }

                if( $orchid_store_show_author == true || $orchid_store_show_date == true ) {
                    ?>
                    <div class="entry-metas">
                        <ul>

                        </ul>
                    </div><!-- .entry-metas -->
                    <?php
                }
                ?>
            </div><!-- .box -->
        </div><!-- .os-col -->
    </div><!-- .os-row -->
</article><!-- #post-<?php the_ID(); ?> -->
