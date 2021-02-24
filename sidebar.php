<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package basicwp_kote2
 */
?>

<aside class="aside px-4" style="width: 300px;">
<h5 class="c-tail">メニュー</h5>
<ul>
  <li><a href="/">トップページ</a></li>
</ul>
<?php 
  wp_nav_menu( array(
    'theme_location'	=> 'mainmenu', // function.phpで設定したメニュー名を表示
    'container'			=> false,
    'container_class' => 'hover:bg-gray-300 transition'
  ) );
?>

</aside>