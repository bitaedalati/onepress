<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OnePress
 */

$hide_footer = false;
$page_id = get_the_ID();

if (is_page()) {
   $hide_footer = get_post_meta($page_id, '_hide_footer', true);
}

if (onepress_is_wc_active()) {
   if (is_shop()) {
      $page_id =  wc_get_page_id('shop');
      $hide_footer = get_post_meta($page_id, '_hide_footer', true);
   }
}

if (!$hide_footer) {
   ?>
   <footer role="contentinfo" class="fdb-block footer-large">
      <div class="line-break d-none d-md-block"></div>
      <div class="container pt-5 pt-md-0">
         <div class="row align-items-top text-center text-lg-left">
            <div class="col-12 col-md-12 col-lg-8 order-2 order-lg-1 pt-5 pt-lg-0">
               <div class="row">
                  <div class="col-12 col-md-6 col-lg-6">
                     <h2 class="h2 text-center text-md-left mb-2">
                        About us
                     </h2>
                     <p class="about-us pt-2 pr-0 pr-xl-5 mr-0 mr-xl-5 text-center text-md-left">
                        uBeac offers an end-to-end IoT cloud platform that transforms the way businesses create value from connected devices and user interactions.
                     </p>
                  </div>
                  <div class="col-12 col-md-6 col-lg-6">
                     <h2 class="h2 text-center text-md-left pt-4 pt-md-0 mb-2">
                        Contact us
                     </h2>
                     <p class="about-us pt-2 pr-0 pr-xl-4 mb-0 mr-0 mr-xl-5 text-center text-md-left">
                        180 West Beaver Creek Road, Richmond Hill, ON, L4B1B4, CANADA
                     </p>
                     <p class="about-us pr-0 pr-xl-4 mb-0 mr-0 mr-xl-5 text-center text-md-left">
                        Phone: (647) 696 4343
                     </p>
                     <p class="about-us pr-0 pr-xl-4 mb-0 mr-0 mr-xl-5 text-center text-md-left">
                        Email:
                        <a href="#" data-name="info" data-domain="ubeca" data-tld="io" onclick="window.location.href = 'mailto:' + this.dataset.name + '@' + this.dataset.domain + '.' + this.dataset.tld; return false;">

                           <?php
                           echo '<img src="' . get_template_directory_uri() . '/assets/images/mail-white.png">';
                           ?>

                        </a>
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 order-1 order-lg-2">
               <div class="footer-logo mx-auto text-center"><a accesskey="p" tabindex="" href="/" class="mx-auto">
                     <?php
                     echo '<img alt="uBeac" src="' . get_template_directory_uri() . '/assets/images/logo-white.svg">';
                     ?>
                  </a></div>
               <div id="mc_embed_signup" class="w-100">
                  <form id="mc-embedded-subscribe-form" action="https://momentaj.us7.list-manage.com/subscribe/post?u=c8754bba497c618bd7a876992&amp;id=25c0f0f9c0" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate="novalidate" class="validate form-inline w-100">
                     <div class="row mx-auto">
                        <div class="col-12">
                           <h3 class="mb-2 text-center">
                              Subscribe now and get our newsletter
                           </h3>
                           <p class="lead mb-4">
                              Sign up to receive our newsletters with the latest updates from the uBeac team.
                           </p>
                        </div>
                     </div>
                     <div id="mc_embed_signup_scroll" class="w-100">
                        <div class="mc-field-group input-group">
                           <div class="mt-2 w-100">
                              <div class="col-12 p-0">
                                 <div class="input-group"><input aria-label="EMAIL" id="mce-EMAIL" type="email" name="EMAIL" placeholder="Email:" class="required email form-control input-subcribe mr-2" aria-required="true"><button id="mc-embedded-subscribe" value="Subscribe" name="subscribe" type="submit" class="btn btn-fab btn-subscribe form-control">

                                       <?php
                                       echo '<img alt="plus" src="' . get_template_directory_uri() . '/assets/images/plus.svg">';
                                       ?>
                                    </button></div>
                              </div>
                           </div>
                        </div>
                        <div id="mce-responses" class="clear">
                           <div id="mce-error-response" class="response mt-3 subscribe-error" style="display: none;"></div>
                           <div id="mce-success-response" class="response mt-3" style="display: none;"></div>
                        </div>
                        <div aria-hidden="true" style="position: absolute; left: -5000px;"><input id="emailmc" type="text" name="b_c8754bba497c618bd7a876992_25c0f0f9c0" tabindex="-1" value=""></div>
                     </div>
                  </form>
               </div>
            </div>
            <div class="w-100 order-3 order-lg-3 pt-5 pt-md-0">
               <div class="col-12 col-md-6 col-lg-8 float-left">
                  <p class="pr-0 pr-xl-5 mr-0 mr-xl-5 footer-link">
                     <nav class="nav flex-row justify-content-around  justify-content-md-start"><a accesskey="y" class="nav-link active pl-0 pr-3 pr-sm-5 pr-md-4 pr-lg-5">Guide</a><a accesskey="v" target="_blank" href="https://hook.ubeac.io" class="nav-link  pl-0 pr-3 pr-sm-5 pr-md-4 pr-lg-5">Hook</a><a accesskey="z" class="nav-link  pl-0 pr-3 pr-sm-5 pr-md-4 pr-lg-5">Features</a><a accesskey="w" class="nav-link pl-0 pr-0">Devices</a></nav>
                  </p>
               </div>
               <div class="col-12 col-md-6 col-lg-4 float-right">
                  <div class="row h1 social-icon text-center justify-content-around pt-4 mb-4">
                     <div class="p-0 col">
                        <button type="button" class="btn btn-fab">
                           <a accesskey="s" target="_blank" rel="noopener" href="https://twitter.com/ubeacio">
                              <?php
                              echo '<img alt="twitter" src="' . get_template_directory_uri() . '/assets/images/social/twitter.svg">';
                              ?>
                           </a>
                        </button>
                     </div>
                     <div class="p-0 col"><button type="button" class="btn btn-fab"><a target="_blank" rel="noopener" accesskey="q" href="https://www.facebook.com/ubeac.io">
                              <?php
                              echo '<img alt="facebook" src="' . get_template_directory_uri() . '/assets/images/social/facebook.svg">';
                              ?>
                           </a></button></div>
                     <div class="p-0 col"><button type="button" class="btn btn-fab"><a target="_blank" rel="noopener" accesskey="x" href="https://www.linkedin.com/company/ubeac/">

                              <?php
                              echo '<img alt="linkedin" src="' . get_template_directory_uri() . '/assets/images/social/linkedin.svg">';
                              ?>
                           </a></button></div>
                     <div class="p-0 col"><button type="button" class="btn btn-fab"><a target="_blank" rel="noopener" accesskey="t" href="https://www.youtube.com/channel/UCxHu4X1zLUkS8amK5EwdBXg/featured">
                              <?php
                              echo '<img alt="youtube" src="' . get_template_directory_uri() . '/assets/images/social/youtube.svg">';
                              ?>
                           </a></button></div>
                     <div class="p-0 col"><button type="button" class="btn btn-fab"><a target="_blank" rel="noopener" accesskey="oq" href="https://ubeac.github.io/docs/">
                              <?php
                              echo '<img alt="github" src="' . get_template_directory_uri() . '/assets/images/social/github-logo.svg">';
                              ?>
                           </a></button></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <div class="text-center px-3 py-4 copy-right">
      <span>
         COPYRIGHT © 2019 UBEAC, ALL RIGHTS RESERVED. PRIVACY POLICY / TERMS OF SERVICE.
      </span>
   </div>

   <script>
      var amazonScript = document.createElement('script')
      amazonScript.setAttribute('src', 'https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js')
      document.head.appendChild(amazonScript)
   </script>


   <footer id="colophon" class="site-footer d-none" role="contentinfo">
      <?php
      /**
       * @since 2.0.0
       * @see onepress_footer_widgets
       * @see onepress_footer_connect
       */
      do_action('onepress_before_site_info');
      $onepress_btt_disable = sanitize_text_field(get_theme_mod('onepress_btt_disable'));

      ?>

      <div class="site-info d-none">
         <div class="container">
            <?php if ($onepress_btt_disable != '1') : ?>
               <div class="btt">
                  <a class="back-to-top" href="#page" title="<?php echo esc_html__('Back To Top', 'onepress') ?>"><i class="fa fa-angle-double-up wow flash" data-wow-duration="2s"></i></a>
               </div>
            <?php endif; ?>
            <?php
            /**
             * hooked onepress_footer_site_info
             * @see onepress_footer_site_info
             */
            do_action('onepress_footer_site_info');
            ?>
         </div>
      </div>
      <!-- .site-info -->

   </footer>
   <!-- #colophon -->
<?php
}
/**
 * Hooked: onepress_site_footer
 *
 * @see onepress_site_footer
 */
do_action('onepress_site_end');
?>
</div><!-- #page -->

<?php do_action('onepress_after_site_end'); ?>

<?php wp_footer(); ?>

</body>

</html>