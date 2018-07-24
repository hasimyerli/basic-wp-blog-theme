<?php
/*
header çağırır.
*/
get_header();
?>
      <!-- sol kısım makale !-->
      <div class="col-md-9 default">
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post();?>
          <div class="sol-blok">
            <div class="source-url" style="border-bottom:1px solid #efefef;padding:10px 0px 10px 10px;" href=""><a href="<?php bloginfo("url") ?>">Anasayfa </a> / <?php the_title(); ?></div>
            <div class="sol-blok-icerik">
                <?php
                  the_content();
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

    <!--  !-->
    <!--  !-->
    <!--  !-->
    <!--  !-->
    <!--  !-->
    <!--  !-->
    <!--  !-->
  </body>
</html>
