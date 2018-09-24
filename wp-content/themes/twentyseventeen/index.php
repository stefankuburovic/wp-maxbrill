<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>
	<header class="page-header">
		<h2 class="page-title"><?php _e( 'Posts', 'twentyseventeen' ); ?></h2>
        <p>Description about diamonds, maximum brilliance and other, you can see our collection of diamonds here</p>
	</header>
	<?php endif; ?>

    <div id="primary" class="content-area">
        <h2>Welcome to Maximumbrilliance by studio1098</h2>
        <main id="main" class="site-main" role="main">
            <ul class="studio-diamonds text-center fade-items clearfix">
                <li data-shape="round"><a href="/wp-maximumbrilliance/product-category/round/"> <span class="icon-round">&nbsp;</span><span>Round</span></a></li>
                <li data-shape="emerald"><a href="/wp-maximumbrilliance/product-category/emerald/"> <span class="icon-emerald">&nbsp;</span><span>Emerald</span> </a></li>
                <li data-shape="oval"><a href="/wp-maximumbrilliance/product-category/oval/"> <span class="icon-oval">&nbsp;</span><span>Oval</span> </a></li>
                <li data-shape="rose"><a href="/wp-maximumbrilliance/product-category/rose-cut/"> <span class="icon-rose">&nbsp;</span><span>Rose Cut</span> </a></li>
                <li data-shape="cushion"><a href="/wp-maximumbrilliance/product-category/cushion/"> <span class="icon-cushion">&nbsp;</span><span>Cushion</span> </a></li>
                <li data-shape="marquise"><a href="/wp-maximumbrilliance/product-category/marquise/"> <span class="icon-marquise">&nbsp;</span><span>Marquise</span></a></li>
                <li data-shape="princess"><a href="/wp-maximumbrilliance/product-category/princess/"> <span class="icon-princess">&nbsp;</span><span>Princess</span></a></li>
                <li data-shape="radiant"><a href="/wp-maximumbrilliance/product-category/radiant/"> <span class="icon-radiant">&nbsp;</span><span>Radiant</span></a></li>
                <li data-shape="heart"><a href="/wp-maximumbrilliance/product-category/heart/"> <span class="icon-heart">&nbsp;</span><span>Heart</span></a></li>
            </ul>
        </main><!-- #main -->
        <?php layerslider(1) ?>
        <h2>About us</h2>
        <p>This is text that will represent studio1098 as owner of maximum brilliance, we need to think of text, I will add task to spreadsheet</p>
        <p>This is text that will represent studio1098 as owner of maximum brilliance, we need to think of text, I will add task to spreadsheet, This is text that will represent studio1098 as owner of maximum brilliance, we need to think of text, I will add task to spreadsheet This is text that will represent studio1098 as owner of maximum brilliance, we need to think of text, I will add task to spreadsheet</p>
        <ul class="studio-diamonds text-center fade-items clearfix"></ul>
        <iframe width="100%" height="800" src="https://www.youtube.com/embed/Lwm3vXyiw8c" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        <div class="blog-posts-wrapper">
            <div class="blog-post">
                <span>
                    Blog Post 1
                </span>
            </div>
            <div class="blog-post">
                <span>
                    Blog Post 2
                </span>
            </div>
            <div class="blog-post">
                <span>
                    Blog Post 3
                </span>
            </div>
        </div>
    </div><!-- #primary -->
<!--    --><?php //echo do_shortcode('[metaslider id="85"]'); ?>
<!--    --><?php //get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
