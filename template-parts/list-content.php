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

<li class="pb-4">
  <a class="block hover:bg-gray-300 transition p-4" href="<?php the_permalink(); ?>">
<h4 class="c-tail mb-4"><?php the_title(); ?></h4>
  <div class="flex">
    <img class="inline-block" style="width: 200px;" src="<?php echo $thumb; ?>" alt="">
    <div class="w-full px-12">
    <span><?php echo mb_substr( get_the_excerpt(), 0, 50 ) . '...'; ?></span>
    </div>
  </div>
  </a>
</li>