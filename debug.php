<!--debag code-->
<div class="debug__js p-4 fixed top-0 left-0 z-50 w-full h-screen text-white hidden" style="background:rgba(0, 0, 0, 0.7);">
      <div class="flex overflow-auto h-screen">
        <div class="w-1/12">
        <section class="rulers__outer fixed">
    <div class="inner">
      <div class="outer">
        <div class="inner">
          <div class="wh__outer flex items-center h-screen">
            <div class="flex flex-col pb-12">
            <span class="wnum d-ib">vw:{{ w }}</span>
            <span class="hnum d-ib">vh:{{ h }}</span>
            <span class="snum d-ib">sc:{{ s }}</span>
            </div>
            
          </div>
          <div class="line"></div>
        </div>
      </div>
    </div>
  </section>
        </div>
        <div class="w-11/12">

        <h2 class="text-2xl border-b-2 border-solid my-3">サーバー情報</h2>
      <div style="" class="mb-12">
      <?php
      var_dump($_SERVER);
      ?>
      </div>

      <h2 class="text-2xl border-b-2 border-solid my-3">wp関数</h2>
      <div style="" class="mb-12">
      <ul>
          <li><span>the_content(): => </span><?php the_content();?></li>
          <li><span>get_post_type( $post ); => </span><?php echo get_post_type( $post );?></li>
          <li><span>the_excerpt(); => </span><?php the_title();?></li>
          <li><span>the_permalink(); => </span><?php the_permalink();?></li>
          <li><span>get_the_permalink(); => </span><?php echo get_the_permalink();?></li>
          <li><span>get_the_category(); => </span><?php echo var_dump(get_the_category());?></li>
          <li>
            <?php 
            $posttags = get_the_tags();
            if ( $posttags ) {
              foreach ( $posttags as $tag ) {
                echo $tag->name . ' '; 
              }
            }
            the_tags();
             ?>
          </li>
          <li><span>get_the_tags(); => </span><?php echo var_dump(get_the_tags());?></li>
          <li><span>get_search_query(); => </span><?php echo get_search_query();?></li>
          <li><span>the_category(', '); => </span><?php the_category(', ');?></li>
          <li><span>the_ID(); => </span><?php the_ID();?></li>
          <li><span>edit_post_link(); => </span><?php edit_post_link();?></li>
          <li><span>next_post_link(' %link '); => </span><?php next_post_link(' %link ');?></li>
          <li><span>previous_post_link('%link'); => </span><?php previous_post_link('%link');?></li>
          <li><span>wp_list_bookmarks(); => </span><?php wp_list_bookmarks();?></li>
          <li><span>wp_list_pages(); => </span><?php wp_list_pages();?></li>
        </ul>
        <ul>
          <li><span>wp_get_archives(); => </span><?php wp_get_archives();?></li>
          <li><span>wp_list_categories(); => </span><?php wp_list_categories();?></li>
        </ul>
        <ul>
          <li><span>get_calendar(); => </span><?php get_calendar();?></li>
          <li><span>wp_register(); => </span><?php wp_register();?></li>
          <li><span>wp_loginout(); => </span><?php wp_loginout();?></li>
        </ul>
        <ul>
          <li><span>site_url(); => </span><?php site_url();?></li>
          <li><span>wp_title(); => </span><?php wp_title();?></li>
          <li><span>bloginfo('name'); => </span><?php bloginfo('name');?></li>
          <li><span>bloginfo('description'); => </span><?php bloginfo('description');?></li>
          <li><span>get_stylesheet_directory_uri(); => </span><?php get_stylesheet_directory_uri();?></li>
          <li><span>bloginfo('template_url'); => </span><?php bloginfo('template_url');?></li>
          <li><span>bloginfo('atom_url'); => </span><?php bloginfo('atom_url');?></li>
          <li><span>bloginfo('rss2_url'); => </span><?php bloginfo('rss2_url');?></li>
          <li><span>get_post_type(); => </span><?php echo get_post_type();?></li>
          
        </ul>
      </div>

      <h2 class="text-2xl border-b-2 border-solid my-3">条件分岐</h2>
      <div style="" class="mb-12">
      <h3 class="text-xl my-3">主要</h3>
      <ul>
          <li><span>is_home(): => </span><?php echo is_home();?></li>
          <li><span>is_front_page(): => </span><?php echo is_front_page();?></li>
          <li><span>is_singular('post'): => </span><?php echo is_singular('post');?></li>
          <li><span>is_singular('カスタム投稿タイプ名'): => </span><?php ?></li>
          <li><span>is_single(): => </span><?php echo is_single(); ?></li>
          <li><span>is_page(): => </span><?php echo is_page(); ?></li>
          <li><span>is_page_template(): => </span><?php echo is_page_template(); ?></li>
        </ul>
        <h3 class="text-xl my-3">アーカイブ</h3>
      <ul>
          <li><span>is_archive(): => </span><?php echo is_archive();?></li>
          <li><span>is_category(): => </span><?php echo is_category();?></li>
          <li><span>is_tag(): => </span><?php echo is_tag();?></li>
          <li><span>is_tax(): => </span><?php echo is_tax();?></li>
          <li><span>is_single(): => </span><?php echo is_single(); ?></li>
          <li><span>is_author(): => </span><?php echo is_author(); ?></li>
          <li><span>is_date(): => </span><?php echo is_date(); ?></li>
        </ul>
        <h3 class="text-xl my-3">その他</h3>
      <ul>
          <li><span>is_404(): => </span><?php echo is_404();?></li>
          <li><span>is_paged(): => </span><?php echo is_paged();?></li>
          <li><span>is_admin(): => </span><?php echo is_admin();?></li>
          <li><span>is_user_logged_in(): => </span><?php echo is_user_logged_in();?></li>
        </ul>
      </div>

      <h2 class="text-2xl border-b-2 border-solid my-3">カスタムフィールド</h2>
      <div style="" class="mb-12">
      <?php
      the_field('image_ url');
      $meta = get_post_meta( get_the_ID() );
      var_dump($meta)
      ?>
      </div>
        </div>

    
      
    </div>

  </div>

<!--//debag code-->