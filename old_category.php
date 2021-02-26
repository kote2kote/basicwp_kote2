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
 * @package basicwp_kote2
 */
// if(in_array($catgory[0]->term_id, $category_not_in)) {
//   // header('Location: ', $home_url);
//   // exit; 
//   echo 'aa';
// }
// var_dump(get_the_category());
get_header();
?>
<main class="main w-full">
　　<div class="inner px-8">
			<h2 class="c-tail mb-8">すべての記事</h2>
			<div class="">
				<ul class="list-none">
					<?php

					// ==================================================
          // サブループ(WP_Query)
          // ==================================================
          $args = array(

            // -- 記事のタイプ --------------------
            'post_type' => 'post', 
            // 'post_type' => 'page', 
            // 'post_type' => 'nav_menu_item', 
            // 'post_type' => 'hero_slider', // 
  
            // -- オプション --------------------
            'category__not_in' => [1], // acfのカテゴリと未定義は除く
            // 'cat' => $catgory[0]->term_id,
            'posts_per_page' => -1, // -1は全て
            'no_found_rows' => false, //全部取ってくる。つまり、true => ページングを使用しない false => 使用する
          );

          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
              $the_query->the_post();
              get_template_part( 'template-parts/list-content', get_post_format());
              // get_template_part( 'template-parts/index/wpq_content', get_post_format());
            }
          }
          wp_reset_postdata();

					?>
				</ul>
			</div>
		</div>
</main>
<?php
get_footer();
