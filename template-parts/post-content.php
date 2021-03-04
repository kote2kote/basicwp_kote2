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
<h2 class="c-tail"><?php the_title() ?><?php echo ' / ' . get_field('cf-test') ?></h2>
<div class="inner">
<div class="w-full flex pb-8">



<?php 
// ===========> カテゴリ
$categories = get_the_category();
if(isset($categories[0])) {
?>
<div class="inline-block pr-2"><span class="font-bold">カテゴリ: </span>
<span><a class="relative underline" href="/category/<?php echo $categories[0]->slug?>"><?php echo $categories[0]->cat_name?></a></span>
</div>
<?php } ?>



<?php 
// ===========> タグ
$tags = get_the_tags();
if(isset($tags[0])) {
  ?>
  <div class="inline-block"><span class="font-bold">タグ: </span>
  <?php
  foreach ( $tags as $tag ) {
?>
<span><a class="relative underline" href="/tag/<?php echo $tag -> slug; ?>"><?php echo $tag -> name; ?></a></span>
<?php
    }
    ?>
    </div>
    <?php
  } ?>


</div>
<div class="text-center pb-12"><img class="inline-block" style="width: 500px;" src="<?php echo $thumb; ?>" alt=""></div>
<div>
<?php the_content(); ?>
</div>
  
</div>