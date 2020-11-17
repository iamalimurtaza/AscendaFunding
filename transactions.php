<?php
/*
Template Name: Transactions
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
  <section class="transaction-entries">
      <div class="container">
          <div class="d-flex">
              <?php
                if(have_rows('transactions')){
                  while(have_rows('transactions')){
                    the_row('transactions');
                    $transaction_image = get_sub_field('transaction_image');
                    $transaction_amount = get_sub_field('transaction_amount');
                    $transaction_description = get_sub_field('transaction_description');
                    $transaction_address = get_sub_field('transaction_address');
              ?>
                <div class="col-1-2 d-flex">
                <div class="col-50 d-flex just-center item-center text-center">
                    <div class="transaction-detail">
                      <h2 class="price"><?php echo $transaction_amount;?></h2>
                      <p class="desp"><?php echo $transaction_description;?></p>
                      <p class="address"><?php echo $transaction_address;?></p>
                    </div>
                </div>
                <div class="col-50 border-style">
                  <div class="right-border"></div>
                    <img class="trans-img" src="<?php echo $transaction_image['sizes']['transaction-img'];?>" alt="">
                </div>
                </div>
              <?php
                  }
                }
              ?>
          </div>
      </div>
  </section>
  <?php get_footer();?>