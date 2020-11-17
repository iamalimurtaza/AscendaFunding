<?php
/*
Template Name: About Our Founder
*/

get_header();
?>
<section class="hero-small d-flex just-center item-center" style="background-image:url(<?php the_post_thumbnail_url('hero-small');?>)">
      <div class="container">
        <div class="hero-content">
            <h1 class="hero-title"><?php the_title();?></h1>
        </div>
      </div>
</section>
<section class="page-content-container">
    <div class="container">
        <div class="founder-info d-flex">
            <div class="col-1-3">
              <?php
                $founder_image = get_field('founder_image');
              ?>
                 <img class="founder-image" src="<?php echo $founder_image['url']; ?>" alt="">
            </div>
            <div class="col-2-3">
                 <div class="page-content"><?php the_content();?></div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>