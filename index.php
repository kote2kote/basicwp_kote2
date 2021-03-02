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


get_header();
?>
<main class="main flex w-full">
　　<div class="inner px-8 w-full h-full cm">
      <h2 class="c-tail mb-8">メイン</h2>
        <div class="">
          text
        </div>
        <h3 class="c-tail with-margin">オプション</h3>
        <div class="">
          test
        </div>
        <h4 class="c-tail with-margin">h4.c-tail</h4>
        <div class="">
          test
        </div>
        <h5 class="c-tail with-margin">h5.c-tail</h5>
        <div class="">
          test
        </div>
        <h6 class="c-tail with-margin">h6.c-tail</h6>
        <div class="">
          test
        </div>
      </div>
		</div>
</main>
<?php
get_footer();