<?php
/*
Template Name: Contact Us
 */
get_header();
$banner_bg = get_field('banner_background_image')['sizes']['hero-small'];
?>
<section class="hero-small d-flex just-center item-center" style="background-image:url(<?php echo $banner_bg;?>)">
      <div class="container">
        <div class="hero-content">
            <h1 class="hero-title"><?php the_title();?></h1>
        </div>
      </div>
</section>
<section class="contact-container">
      <div class="d-flex">
        <div class="col-50">
        <?php 
            $location = get_field('google_map');
            if( $location ): 
            ?>
            <div class="acf-map" data-zoom="16">  
                <div class="marker" data-lat="<?php echo $location['lat'];?>" 
                data-lng="<?php echo $location['lng'];?>">
                    <h3><?php echo $location['address'];?></h3>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <div class="col-50">
            <?php echo do_shortcode('[contact-form-7 id="131" title="Contact form"]');?>
        </div>
      </div>
</section>
<section class="contact-cards">
    <div class="container d-flex text-center">
        <div class="col-1-3">
            <div class="single-card">
                <i class="fa fa-phone"></i>
                <a href="tel:<?php the_field('contact_number')?>" class="p_number"><?php the_field('contact_number');?></a>
            </div>
        </div>
        <div class="col-1-3">
            <div class="single-card">
                <i class="fa fa-envelope"></i>
                <a href="mailto:<?php the_field('email_address');?>" class="send_mail"><?php the_field('email_address');?></a>
            </div>
        </div>
        <div class="col-1-3">
            <div class="single-card">
                <i class="fa fa-map-marker"></i>
                <p><?php the_field('first_address');?></p>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>