<?php
$category = get_the_category();

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
<h2 class="c-tail mb-8"><?php the_title() ?></h2>
<div class="inner">
<div class="text-center pb-12"><img class="inline-block" style="width: 500px;" src="<?php echo $thumb; ?>" alt=""></div>
  <?php the_content(); ?>
</div>