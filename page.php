<?php
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
    <div class="page-content"><?php the_content();?></div>
    <?php
      $ascenda_funding_logo = get_field('ascenda_funding_logo');
      $ascenda_capital_logo = get_field('ascenda_capital_logo');
      if($ascenda_funding_logo || $ascenda_capital_logo){
      ?>
          <div class="partners">
            <div class="container d-flex">
                <div class="col-50 d-flex just-end">
                    <img src="<?php echo $ascenda_funding_logo['url'];?>" alt="">
                </div>
                <div class="col-50">
                    <img src="<?php echo $ascenda_capital_logo['url']; ?>" alt="">
                </div>
            </div>
          </div>
      <?php
      }
    ?>
    </div>
</section>
<?php get_footer();?>