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
<!-- 検索 -->
<div class="search">
  <h5 class="c-tail">検索</h5>
    <form method="get" action="<?php echo home_url('/'); ?>" class="pt-3">
      <fieldset class="submenu-search-fieldset px-3 pb-8">
        <label for="search" class="hidden">search</label>

        <div class="relative">

          <input
              type="text"
              name="s"
              class="appearance-none rounded-full w-full py-2 pl-4 pr-10 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              placeholder="search word"

            />
            <button type="submit" class="inline-block w-4 absolute">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
<path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
</svg>
          </button>
        </div>
      </fieldset>
      </form>
</div>

<!-- メニュー -->
<div class="menu">
  <h5 class="c-tail">メニュー</h5>
  <ul>
    <li><a href="/">トップページ</a></li>
  </ul>
  <?php 
    wp_nav_menu( array(
      'theme_location'	=> 'mainmenu', // function.phpで設定したメニュー名を表示
      'container'			=> false,
    ) );
  ?>
</div>
</aside>