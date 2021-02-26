<?php
  // ===========> サムネイル
  if(has_post_thumbnail()) {
    // $thumb = the_post_thumbnail('full');
    $image_id = get_post_thumbnail_id ();
    $image_url = wp_get_attachment_image_src ($image_id, true);
    $thumb = $image_url[0]; // アイキャッチurlだけ取得 https://on-ze.com/archives/5621
  } else {
    $thumb = 'https://basic.kote2.co/wp-content/uploads/2021/02/screenshot.png'; //アイキャッチを設定してなかった場合
  }
?>

<li class="p-4 relative z-10 hover:bg-gray-300 cursor-pointer">

  <a class="card-link" href="<?php the_permalink(); ?>">
  <h4 class="c-tail mb-4"><?php the_title(); ?></h4>
  <div class="flex">
    <figure class="inline-block" style="width: 300px">
    <img class="w-full" src="<?php echo $thumb; ?>" alt="">
    </figure>
    <div class="w-full px-6">
      <div><?php echo mb_substr( get_the_excerpt(), 0, 80 ) . '...'; ?></div>
      <div class="pt-4"><span class="font-bold">カテゴリ: </span>

      <?php 
      // ===========> カテゴリ
      $categories = get_the_category();
      if(isset($categories[0])) {
      ?>
      <span><a class="relative underline" href="/category/<?php echo $categories[0]->slug?>"><?php echo $categories[0]->cat_name?></a></span>
      <?php } ?>
    </div>

      <div class="pt-2"><span class="font-bold">タグ: </span>

      <?php 
      // ===========> タグ
      $tags = get_the_tags();
      if(isset($tags[0])) {
        foreach ( $tags as $tag ) {
      ?>
      <span><a class="relative underline" href="/tag/<?php echo $tag -> slug; ?>"><?php echo $tag -> name; ?></a></span>
      <?php
          }
        } ?>

      </div>
    </div>
    
  </div>
  </a>

</li>