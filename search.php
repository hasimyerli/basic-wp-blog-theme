<?php
get_header();
?>
      <!-- sol kısım makale !-->
      <div class="col-md-9 default">
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post();?>
          <div class="sol-blok">
             <!-- Başlık !-->
             <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
             <?php
             if (has_post_thumbnail()) {
               echo '<div class="article-front-image" style="background-image:url('.$url.');">';
             } else {
               echo '<div class="article-front-image">';
             }
             ?>
               <div class="article-title">
                 <div class="col-md-7">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                 </div>
                 <div class="col-md-5" style="text-align:right;">
                     <?php the_author(); ?> /
                     <?php the_time('m-d-y') ?> /
                     <?php the_category(', ') ?> /
                     <?php if(function_exists('the_views')) {the_views();} ?>
                     <?php comments_number('0 yorum','1 yorum','% yorum')?>
                 </div>
               </div>
             </div>
             <div class="sol-blok-icerik">
                <?php
                  wpn_content_limit(get_the_content(),1000);
                ?>
              </p>
            </div>
          </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <!-- sol kısım makale !-->

      <!-- sag kısım !-->
      <?php get_sidebar();?>
      <!-- sag kısım !-->

    </div>
    <!-- orta kısım !-->
    <?php get_footer(); ?>
