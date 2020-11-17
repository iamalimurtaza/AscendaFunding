<?php get_header(); ?>
  <section class="home-slider">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php 
        if(have_rows('home_slider')){
          while(have_rows('home_slider')){
            the_row();
            $slide_image  = get_sub_field('slide_image');
            $slide_title  = get_sub_field('slide_title');
            ?>
            <div class="swiper-slide" style="background-image:url('<?php echo $slide_image['sizes']['hero']; ?>')">
              <div class="container">
                <div class="hero-content text-center">
                  <h1 class="hero-title"><?php echo $slide_title; ?></h1>
                </div>
              </div>
            </div>
          <?php
          }
        }
        ?>
      </div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </section>
<section class="home-content-container">
    <div class="container">
        <div class="home-content text-center">
            <p class="home-content-text"><?php the_field('home_content');?></p>
        </div>
    </div>
</section>

<section class="home-gallery">
    <div class="container">
    <div class="lightgallery d-flex light-gallery">
        <?php 
        if(have_rows('gallery_image')){
          while(have_rows('gallery_image')){
            the_row('gallery_image');
            $gallery_img = get_sub_field('image');
            ?>
              <a class="gallery-img" href="<?php echo $gallery_img['url'];?>">
                <img src="<?php echo $gallery_img['sizes']['gallery_image'];?>" alt="">
              </a>
            <?php
             }
           }
            ?>
      </div>
    </div>
</section>
<?php
$loan_program_background_image = get_field('loan_program_background_image')['sizes']['hero'];
?>
<section class="loan-program" style="background-image:url(<?php echo $loan_program_background_image; ?>)">
      <div class="container">
           <div class="loan-program-content">
                <h2 class="section-title"><?php the_field('loan_program_section_title');?></h2>
                <p class="loan-program-text"><?php the_field('loan_program_section_text');?></p>
                <?php
                $program_link = get_field('loan_program_section_button')['url'];
                $program_title = get_field('loan_program_section_button')['title'];
                $program_target = get_field('loan_program_section_button')['target'];
                ?>
                <a href="<?php echo $program_link;?>" target="<?php echo $program_target;?>" class="program-btn"><?php echo $program_title;?></a>
           </div>
      </div>
</section>
<section class="features">
  <div class="container">
    <h1 class="section-title features-title text-center"><?php the_field('features_section_title');?></h1>
    <div class="d-flex just-center">
        <?php
          if(have_rows('features')){
            while(have_rows('features')){
              the_row('features');
              $feature_image = get_sub_field('feature_image')['url'];
              $feature_title = get_sub_field('feature_title');
            ?>
            <div class="col-1-4">
               <div class="feature-card text-center">
               <div class="feature-img">
               <img src="<?php echo $feature_image;?>" alt="">
               </div>
               <p class="feature-title text-center"><?php echo $feature_title; ?></p>
               </div>
            </div>
            <?php
            }
          }
        ?>
    </div>
  </div>
</section>
<?php
 $transaction_bg = get_field('transaction_background_image')['sizes']['hero'];
?>
<section class="transaction d-flex just-center item-center" style="background-image: url(<?php echo $transaction_bg;?>)">
  <?php
    $transation_link = get_field('transaction_link')['url'];
    $transation_title = get_field('transaction_link')['title'];
    $transation_target = get_field('transaction_link')['target'];
  ?>
      <div class="transaction-content container text-center">
           <h1 class="trans-title"><?php the_field('transaction_title');?></h1>
           <p class="trasaction-subtitle"><?php the_field('transaction_subtitle');?></p>
           <a href="<?php echo $transation_link;?>" target="<?php echo $transation_target;?>" class="trasaction-btn"><?php echo $transation_title;?>
          </a>
      </div>
</section>
<?php
get_footer();
?>