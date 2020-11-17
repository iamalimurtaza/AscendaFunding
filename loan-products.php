<?php
/*
Template Name: Loan Products
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
  <section class="products">
      <div class="container">
          <div class="product-container">
            <?php
              if(have_rows('huds')){
                while(have_rows('huds')){
                the_row('huds');
                $hud_image = get_sub_field('hud_image')['url'];
                $loan_product_title = get_sub_field('loan_product_title');
                $hud_content = get_sub_field('hud_content');
                $term_sheet_link = get_sub_field('term_sheet_download_button')['url'];
                $term_sheet_title = get_sub_field('term_sheet_download_button')['title'];
                $term_sheet_target = get_sub_field('term_sheet_download_button')['target'];
                ?>
                <div class="single-product">
                  <h2 class="loan-product-title"><?php echo $loan_product_title;?></h2>
                  <div class="single-product-content d-flex">
                    <div class="col-1-3">
                       <img class="loan-product-image" src="<?php echo $hud_image;?>" alt="">
                    </div>
                    <div class="col-2-3">
                      <?php echo $hud_content;?>
                      <a href="<?php echo $term_sheet_link?>" target="<?php echo $term_sheet_target; ?>" class="download-btn"><i class="fa fa-cloud-download" aria-hidden="true"></i> <?php echo $term_sheet_title;?></a>
                    </div>
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
  get_footer();
  ?>