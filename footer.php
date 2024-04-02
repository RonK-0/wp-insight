<?php wp_footer() ?>
<section class="footer">
      <div class="container">
        <div class="footer__wrapper">
          <div class="footer__social">
            <ul>
              <li>
                <a href="<?php echo get_field('footer_social_1_link')?>"><i class="<?php echo get_field('footer_social_1')?>"></i></a>
              </li>
              <li>
                <a href="<?php echo get_field('footer_social_2_link')?>"><i class="<?php echo get_field('footer_social_2')?>"></i></a>
              </li>
              <li>
                <a href="<?php echo get_field('footer_social_3_link')?>"><i class="<?php echo get_field('footer_social_3')?>"></i></a>
              </li>
              <li>
                <a href="<?php echo get_field('footer_social_4_link')?>"><i class="<?php echo get_field('footer_social_4')?>"></i></a>
              </li>
            </ul>
          </div>
          <img src="<?php echo get_field('branding_logo') ?>" alt="" />
          <p>All rights reserved.</p>
        </div>
      </div>
    </section>
    <!-- <script src="./script.js"></script> -->
  </body>
</html>
