<?php
/*öne çıkan görsel bas*/
add_theme_support('post-thumbnails');
set_post_thumbnail_size(150,150,true);
add_image_size('single-post-thumbnail',150,150);
/*öne çıkan görsel son*/

/*özet ayarları bas*/
function wpn_content_limit($content, $ilimit = false)
{
  $limit = ($ilimit) ? $ilimit : 650;
  $pad ="...";
  $content = strip_tags($content);

  if (strlen($content) > $limit) {
    $content = substr($content,0,$limit);
  }
  echo $content.$pad;
}
/*özet ayarları son*/

/*widget uyumu bas*/
  register_sidebar(array(
    'name' => ('Main Sidebar'),
    'id' =>'sidebar-widget',
    'description' => ('Haşim -> Sağ tarafta görünecek bileşen alanı'),
    'before_widget' => '<div class="sag-blok">',
    'after_widget' => '</div>',
    'before_title' => '<div class="baslik">',
    'after_title' =>'</div>'
  ));
/*widget uyumu son*/

/*öne çıkan resim*/
add_theme_support('post-thumbnails');
/*öne çıkan resim*/

?>
