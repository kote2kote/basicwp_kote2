<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package basicwp_kote2
 */

get_header();
?>
<main class="main w-full">
　　<div class="inner px-8">
			
			<div class="">
      <?php 
        while (have_posts()) {
          the_post();
          get_template_part( 'template-parts/post-content', get_post_type() );
        }
      ?>
			</div>
		</div>
</main>
<?php
get_footer();