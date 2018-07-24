  <!-- blok 1 **************************************************************************!-->
<!-- kategori kısım !-->
<div class="sag-blok">

  <!-- Kategori baslik !-->
  <div class="baslik">
    Kategoriler
  </div>
  <!-- Kategori baslik !-->

  <!-- Kategori içerik !-->
  <div class="icerik">
    <ul>
      <?php //wp_list_cats(); ?>
      <div class="" style="clear:both"></div>
    </ul>
  </div>
  <!-- Kategori içerik !-->
  </div>
  <!-- kategori kısım !-->
  <!-- blok 1 **************************************************************************!-->
  <!-- blok 2 **************************************************************************!-->
  <!-- kategori kısım !-->
  <div class="sag-blok">

    <!-- Kategori baslik !-->
    <div class="baslik">
      Son Yazılar
    </div>
    <!-- Kategori baslik !-->

    <!-- Kategori içerik !-->
    <div class="icerik">
      <?php if (have_posts()) : ?>
      <?php $ihasim = new WP_Query("cat&showposts"); while($ihasim->have_posts()) : $ihasim->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <!-- Kategori içerik !-->

   </div>
  <!-- kategori kısım !-->
  <!-- blok 2 **************************************************************************!-->
