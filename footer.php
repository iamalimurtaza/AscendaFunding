<?php
wp_footer();
 $site_logo             = get_field('site_logo', 'option');
 $contact_number        = get_field('contact_number','option');
 $email_address         = get_field('email_address','option');
 $first_address         = get_field('first_address','option');
 $second_address        = get_field('second_address','option');
 $footer_copyright      = get_field('footer_copyright', 'option');
 $footer_facebook_link  = get_field('footer_facebook_link', 'option');
 $footer_instagram_link = get_field('footer_instagram_link', 'option');
 $footer_linkedin_link  = get_field('footer_linkedin_link', 'option');
?>
<footer class="site-footer">
  <!-- <div class="footer-top">
    <div class="container d-flex">
      <div class="contact-details col-50 d-flex">
        <div class="col-50 d-flex">
          <img class="footer-logo" src="<?php echo $site_logo['url'];?>" alt="<?php echo $site_logo['title']; ?>">
          <p class="location"><i class="fa fa-map-marker"></i><?php echo $first_address;?></p>
        </div>
        <div class="col-50">
          <p class="phone"><i class="fa fa-phone"></i><?php echo $contact_number;?></p>
          <p class="email-address"><i class="fa fa-envelope"></i><?php echo $email_address;?></p>
        </div>
    </div>
      <div class="footer-nav col-50 d-flex item-center">
          <div class="col-50-container d-flex">
          <div class="col-50">
          <?php wp_nav_menu(array(
            'theme_location'    => 'footer-column-one',
            'fallback_cb'       =>  false
          ));?>
             </div>
          <div class="col-50">
            <?php wp_nav_menu(array(
              'theme_location'    => 'footer-column-two',
              'fallback_cb'       =>  false
            ));?>   
          </div>
          </div>
      </div>
    </div>
  </div> -->
  <div class="footer-bottom">
    <div class="container d-flex item-center">
    <div class="col-50">
      <p class='copyright'><?php echo $footer_copyright;?></p>
    </div>
    <div class="col-50 d-flex just-end">
      <?php if($footer_facebook_link){?><a target="_blank" href="<?php echo $footer_facebook_link; ?>" class="socials"><i class="fa fa-facebook"></i></a><?php } ?>
      <?php if($footer_instagram_link){?><a target="_blank" href="<?php echo $footer_instagram_link; ?>" class="socials"><i class="fa fa-instagram"></i></a><?php } ?>
      <?php if($footer_linkedin_link){?><a target="_blank" href="<?php echo $footer_linkedin_link; ?>" class="socials"><i class="fa fa-linkedin"></i></a><?php } ?>
    </div>
    </div>
  </div>
  <a href="<?php echo site_url('/request-a-quote'); ?>" class="ftr-quote-btn">Request a Quote</a>
</footer>
</body>
</html>