<?php/* * Template Name: Full-width page * @package ProperWeb * @subpackage ProperFramework * @since ProperFramework 1.0 */?><?php get_header(); ?><?php if ( function_exists('rwmb_meta') && rwmb_meta('pweb_flash') ) : ?><div class="row">    <?php echo do_shortcode('[promo_flash id='.rwmb_meta( 'pweb_flash' ).']'); ?></div><?php else : echo '<br>'; endif; ?><div class="row">        <?php if(have_posts()): while(have_posts()): the_post(); ?>	<div class="box full-width article">            <h2 class="title"><?php the_title(); ?></h2>            <?php the_content(); ?>	</div>    <?php endwhile; endif; ?></div>    <?php get_footer(); ?>